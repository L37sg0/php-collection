<?php

namespace App\Console\Commands\Setup;

use App\Helper\Config;
use Illuminate\Console\Command;

class StaticContentDeploy extends Command
{
    public function __construct(
        private readonly Config $configHelper,
    ) {
        parent::__construct();
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:static-content-deploy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $themeAssets = resource_path('/views/' . $this->configHelper->getActiveTheme() . '/assets');
        $publicDir = public_path();
        return exec("cp -r $themeAssets $publicDir");
    }
}
