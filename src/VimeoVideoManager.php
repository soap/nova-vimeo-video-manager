<?php

namespace Soap\VimeoVideoManager;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;
use Illuminate\Http\Request;
use Laravel\Nova\Menu\MenuSection;

class VimeoVideoManager extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('vimeo-video-manager', __DIR__.'/../dist/js/tool.js');
        Nova::style('vimeo-video-manager', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('vimeo-video-manager::navigation');
    }

    /**
    * Build the menu that renders the navigation links for the tool.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return mixed
    */
    public function menu(Request $request)
    {
       return MenuSection::make('Vimeo Video Manager')
           ->path('/vimeo-video-manager')
           ->icon('server');
    }
}
