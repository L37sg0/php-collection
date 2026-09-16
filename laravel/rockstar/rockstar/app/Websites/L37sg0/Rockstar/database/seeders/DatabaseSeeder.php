<?php

namespace L37sg0\Rockstar\Database\Seeders;

use Illuminate\Database\Seeder;
use L37sg0\Rockstar\Models\BandMember;
use L37sg0\Rockstar\Models\SocialLink;
use L37sg0\Rockstar\Models\TourDate;
use L37sg0\Rockstar\Models\Website;

class DatabaseSeeder extends Seeder
{
    public function run() {
        Website::factory()->create([
            Website::FIELD_ICON_URL => 'rockstar/image/favicon.png',
            Website::FIELD_FIRST_HOME_IMAGE_URL => 'rockstar/image/img_band_chicago.jpg',
            Website::FIELD_SECOND_HOME_IMAGE_URL => 'rockstar/image/img_band_la.jpg',
            Website::FIELD_THIRD_HOME_IMAGE_URL => 'rockstar/image/img_band_ny.jpg',
            Website::FIELD_BAND_TEXT => ' We have created a fictional band website. Hope you like our music. We are glad that you have visited our website. Keep scrolling or use the navigation. We have created a fictional band website. Hope you like our music. We are glad that you have visited our website. Keep scrolling or use the navigation. We have created a fictional band website. Hope you like our music. We are glad that you have visited our website. Keep scrolling or use the navigation. We have created a fictional band website. Hope you like our music. We are glad that you have visited our website. Keep scrolling or use the navigation.',
            Website::FIELD_CONTACT_IMAGE_URL => 'rockstar/image/rockstar.jpg',
        ]);

        $bandMembers = [
            'john' => [
                BandMember::FIELD_NAME => 'John',
                BandMember::FIELD_DESCRIPTION => 'John is the smartest',
                BandMember::FIELD_IMAGE_URL => 'rockstar/image/john.png'
            ],
            'paul' => [
                BandMember::FIELD_NAME => 'Paul',
                BandMember::FIELD_DESCRIPTION => 'Paul is the prettiest',
                BandMember::FIELD_IMAGE_URL => 'rockstar/image/paul.png'
            ],
            'ringo' => [
                BandMember::FIELD_NAME => 'Ringo',
                BandMember::FIELD_DESCRIPTION => 'John is the funniest',
                BandMember::FIELD_IMAGE_URL => 'rockstar/image/ringo.png'
            ]
        ];
        foreach ($bandMembers as $member) {
            BandMember::factory()->create($member);
        }

        $socialLinks = [
            'facebook' => [
                SocialLink::FIELD_NAME => 'Facebook',
                SocialLink::FIELD_URL => 'https://facebook.com',
                SocialLink::FIELD_ICON => 'fa fa-facebook-official'
            ],
            'twitter' => [
                SocialLink::FIELD_NAME => 'Twitter',
                SocialLink::FIELD_URL => 'https://twitter.com',
                SocialLink::FIELD_ICON => 'fa fa-twitter'
            ],
            'pinterest' => [
                SocialLink::FIELD_NAME => 'Pinterest',
                SocialLink::FIELD_URL => 'https://pinterest.com',
                SocialLink::FIELD_ICON => 'fa fa-pinterest-p'
            ],
            'flickr' => [
                SocialLink::FIELD_NAME => 'Flickr',
                SocialLink::FIELD_URL => 'https://flickr.com',
                SocialLink::FIELD_ICON => 'fa fa-flickr'
            ],
            'linkedin' => [
                SocialLink::FIELD_NAME => 'Linkedin',
                SocialLink::FIELD_URL => 'https://linkedin.com',
                SocialLink::FIELD_ICON => 'fa fa-linkedin'
            ],
        ];
        foreach ($socialLinks as $link) {
            SocialLink::factory()->create($link);
        }

        TourDate::factory(20)->create();


    }
}
