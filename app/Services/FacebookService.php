<?php

namespace App\Services;

use Facebook\Facebook;
use Illuminate\Support\Facades\Log;

class FacebookService
{
    protected $fb;

    public function __construct()
    {
        $this->fb = new Facebook([
            'app_id' => env('FACEBOOK_APP_ID'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => 'v22.0',
        ]);
    }

    public function postToPage($message, $link)
    {
        try {
            $response = $this->fb->post(
                '/' . env('FACEBOOK_PAGE_ID') . '/feed',
                ['message' => $message, 'link' => $link],
                env('FACEBOOK_ACCESS_TOKEN')
            );

            return $response->getGraphNode();
        } catch (\Exception $e) {
            Log::error('Facebook API Error: ' . $e->getMessage());
            return false;
        }
    }
}

