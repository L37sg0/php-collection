<?php

namespace App\Http\Controllers;

use App\Helper\Config;

class FrontController extends Controller
{

    public function __construct(
        private readonly Config $config,
    ) {
    }

    private function getCompactData()
    {
        $websiteName = $this->config->getWebsiteName();
        $websiteTitle = $this->config->getWebsiteTitle();
        $websiteMenu = $this->config->getWebsiteMenu();
        $websiteTheme = $this->config->getActiveTheme();
        $data = compact('websiteName', 'websiteTitle', 'websiteMenu', 'websiteTheme');
        return $data;
    }

    public function welcome()
    {
        return view($this->config->getActiveTheme() . '.welcome', $this->getCompactData());
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view($this->config->getActiveTheme() . '.index', $this->getCompactData());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->config->getActiveTheme() . '.create', $this->getCompactData());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view($this->config->getActiveTheme() . '.edit', $this->getCompactData());
    }

    public function show(int $id)
    {
        $data = $this->getCompactData();
        $data['id'] = $id;
        return view($this->config->getActiveTheme() . '.show', $data);
    }


}
