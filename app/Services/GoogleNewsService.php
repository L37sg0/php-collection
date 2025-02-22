<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class GoogleNewsService
{
    public function pingGoogle()
    {
        $sitemapUrl = url('/rss');
        $pingUrl = "https://www.google.com/ping?sitemap=" . urlencode($sitemapUrl);

        try {
            file_get_contents($pingUrl);
            Log::info('Google News Ping Successful: ' . $sitemapUrl);
        } catch (\Exception $e) {
            Log::error('Google News Ping Failed: ' . $e->getMessage());
        }
    }
}
