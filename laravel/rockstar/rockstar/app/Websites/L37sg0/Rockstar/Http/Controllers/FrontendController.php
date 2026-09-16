<?php

namespace L37sg0\Rockstar\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use L37sg0\Rockstar\Models\BandMember;
use L37sg0\Rockstar\Models\SocialLink;
use L37sg0\Rockstar\Models\TourDate;
use L37sg0\Rockstar\Models\Website;

class FrontendController extends Controller
{
    public function index() {
        $websiteData = Website::first();
        $bandMembers = BandMember::all();
        $socialLinks = SocialLink::all();

        $tourDates = TourDate::orderBy(TourDate::FIELD_DATE, 'ASC')->get();
        $tourDatesByMonth = [];
        foreach ($tourDates as $tourDate) {
            $monthYear = Carbon::create($tourDate->getAttribute(TourDate::FIELD_DATE))->format('F Y');
            $dayOfMonth = Carbon::create($tourDate->getAttribute(TourDate::FIELD_DATE))->format('jS');
            $tourDatesByMonth[$monthYear][] = [
                'date' => $dayOfMonth,
                'place' => strtoupper($tourDate->getAttribute(TourDate::FIELD_PLACE))
            ];
        }

        return view('rockstar::frontend.index', compact(
            'websiteData',
            'bandMembers',
            'tourDatesByMonth',
            'socialLinks'
        ));
    }
}
