<?php

namespace L37sg0\Rockstar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use L37sg0\Rockstar\Http\Requests\UpdateBandMemberRequest;
use L37sg0\Rockstar\Http\Requests\UpdateContactImageRequest;
use L37sg0\Rockstar\Http\Requests\UpdateHomeImageRequest;
use L37sg0\Rockstar\Http\Requests\UpdateIconRequest;
use L37sg0\Rockstar\Http\Requests\UpdateSocialLinkRequest;
use L37sg0\Rockstar\Http\Requests\UpdateTourDateRequest;
use L37sg0\Rockstar\Models\BandMember;
use L37sg0\Rockstar\Models\SocialLink;
use L37sg0\Rockstar\Models\TourDate;
use L37sg0\Rockstar\Models\Website;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Section for editing website icon
     */
    public function iconSection()
    {
        $website = Website::first();
        $icon = $website->getAttribute(Website::FIELD_ICON_URL);
        return view('rockstar::admin.icon', compact('icon'));
    }

    /**
     * @param UpdateIconRequest $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application|RedirectResponse
     */
    public function iconSectionUpdate(UpdateIconRequest $request)
    {
        $website = Website::first();

        $file = $request->file('icon');
        $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/icons', $filename);

        $website->setAttribute(Website::FIELD_ICON_URL, str_replace('public', 'storage', $path));
        $website->save();

        return redirect()->back()->with('success', 'Icon updated successfully.');
    }

    /**
     * Section for editing home images
     */
    public function homeSection()
    {
        $website = Website::first();

        $homeImages = [
            Website::FIELD_FIRST_HOME_IMAGE_URL => $website->getAttribute(Website::FIELD_FIRST_HOME_IMAGE_URL),
            Website::FIELD_SECOND_HOME_IMAGE_URL => $website->getAttribute(Website::FIELD_SECOND_HOME_IMAGE_URL),
            Website::FIELD_THIRD_HOME_IMAGE_URL => $website->getAttribute(Website::FIELD_THIRD_HOME_IMAGE_URL)
        ];
        return view('rockstar::admin.home', compact('homeImages'));
    }

    /**
     * @param UpdateHomeImageRequest $request
     * @param $imageName
     * @return RedirectResponse
     */
    public function homeSectionUpdate(UpdateHomeImageRequest $request, $imageName)
    {
        $website = Website::first();

        $file = $request->file('image');
        $filename = Str::random(20). '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/home-images', $filename);

        $website->setAttribute($imageName, str_replace('public', 'storage', $path));
        $website->save();

        return redirect()->back()->with('success', 'Image updated successfully.');
    }

    /**
     * Section for editing band images and text
     */
    public function bandSection()
    {
        $bandText = Website::first()->getAttribute(Website::FIELD_BAND_TEXT);
        $bandMembers = BandMember::all();
        return view('rockstar::admin.band', compact(
            'bandMembers',
            'bandText'
        ));
    }

    /**
     * @param UpdateBandMemberRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function bandMemberUpdate(UpdateBandMemberRequest $request, $bandMember)
    {
        $bandMember = BandMember::find($bandMember);

        $file = $request->file('image');
        $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/band-images', $filename);
        $path = str_replace('public', 'storage', $path);

        $bandMember->fill([
            BandMember::FIELD_IMAGE_URL => $path,
            BandMember::FIELD_NAME => $request->get('name'),
            BandMember::FIELD_DESCRIPTION => $request->get('description')
        ])->save();

        return redirect()->back()->with('success', 'Band member updated successfully.');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function bandTextUpdate(Request $request)
    {
        $website = Website::first();
        $website->setAttribute(Website::FIELD_BAND_TEXT, $request->get('text'));
        $website->save();

        return redirect()->back()->with('success', 'Band text updated successfully.');
    }

    /**
     * Section for editing tour upcoming dates
     */
    public function tourSection()
    {
        $tourDates = TourDate::orderBy(TourDate::FIELD_DATE, 'ASC')->get();
        return view('rockstar::admin.tour', compact('tourDates'));
    }

    /**
     * @param Request $request
     * @param $tour
     * @return RedirectResponse
     */
    public function tourSectionUpdate(UpdateTourDateRequest $request, $tour=null)
    {
        $tourDate = new TourDate();
        if (!empty($tour)) {
            $tourDate = TourDate::find($tour);
        }

        $tourDate->fill([
            TourDate::FIELD_DATE => $request->get('date'),
            TourDate::FIELD_PLACE => $request->get('place')
        ])->save();

        return redirect()->back()->with('success', 'Tour date updated successfully.');
    }

    /**
     * @param $tour
* @return RedirectResponse
     */
    public function tourSectionDelete($tour)
    {
        $tourDate = TourDate::find($tour);
        $tourDate->delete();

        return redirect()->back()->with('success', 'Tour date deleted successfully.');
    }

    /**
     * Section for editing contact form image
     */
    public function contactSection()
    {
        $contactImage = Website::first()->getAttribute(Website::FIELD_CONTACT_IMAGE_URL);
        return view('rockstar::admin.contact', compact('contactImage'));
    }

    /**
     * @param UpdateContactImageRequest $request
     * @return RedirectResponse
     */
    public function contactSectionUpdate(UpdateContactImageRequest $request)
    {
        $website = Website::first();

        $file = $request->file('image');
        $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/contact-images', $filename);
        $path = str_replace('public', 'storage', $path);

        $website->setAttribute(Website::FIELD_CONTACT_IMAGE_URL, $path);
        $website->save();

        return redirect()->back()->with('success', 'Contact image updated successfully.');
    }

    /**
     * Section for editing social links on footer
     */
    public function socialSection()
    {
        $socialLinks = SocialLink::all();
        return view('rockstar::admin.social', compact('socialLinks'));
    }

    public function socialSectionUpdate(UpdateSocialLinkRequest $request, $link)
    {
        $socialLink = SocialLink::find($link);
        $socialLink->setAttribute(SocialLink::FIELD_URL, $request->get('link'));
        $socialLink->save();

        return redirect()->back()->with('success', 'Social link updated successfully.');
    }
}
