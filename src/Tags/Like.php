<?php

namespace Milanbauwens\Like\Tags;

use Statamic\Tags\Tags;

class Like extends Tags
{
    protected $scriptsLoaded = false;

    /**
     * Private function viewData()
     * @return data for the view
     */
    private function viewData()
    {
        $context = $this->context;
        $data = [
            'csrf_field' => csrf_field(),
            'id' => $context->get('id'),
            'likes' => $context->get('likes'),
            'route_like' => route('statamic.like.store'),
        ];

        return $data;
    }

    /**
     * The {{ like }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        return view('like::button', $this->viewData(),);
    }

    /**
     * The {{ like:scripts }} tag.
     *
     * @return string|array
     */
    public function scripts()
    {
        // Checks if scripts are already loaded
        if ($this->scriptsLoaded) {
            return;
        }

        // Set scriptsLoaded to true
        $this->scriptsLoaded = true;

        // Place to load icon libraries => ask user to place like::scripts in the layout file
        $scriptPath = url('vendor/like/js/app.js');
        return "<script src='" . $scriptPath . "'></script>";
    }
    /**
     * The {{ like:styles }} tag.
     *
     * @return string|array
     */
    public function styles()
    {
        $stylePath = url('vendor/like/css/style.css');
        return "<link rel='stylesheet' href='" . $stylePath . "'/>";
    }
}
