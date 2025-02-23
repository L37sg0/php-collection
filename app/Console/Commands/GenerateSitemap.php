<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\News;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Генерира sitemap.xml файл';

    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/news'))
            ->add(Url::create('/search'));

        $news = News::all();
        foreach ($news as $n) {
            $sitemap->add(Url::create("/news/{$n->slug}")->setLastModificationDate($n->updated_at));
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated!');
    }
}
