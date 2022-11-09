<?php

namespace Milanbauwens\Like;

use Illuminate\Support\Facades\App;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $fieldtypes = [
        Fieldtypes\LikeCounter::class,
    ];

    protected $routes = [
        'actions' => __DIR__ . '/../routes/actions.php',
    ];

    protected $scripts = [
        __DIR__ . '/../dist/js/like.js',
        __DIR__ . '/../resources/assets/js/app.js',
    ];

    protected $stylesheets = [
        __DIR__ . '/../resources/assets/css/style.css',
    ];

    protected $publishables = [
        __DIR__ . '/../resources/assets/icons' => 'icons',
    ];

    protected $tags = [
        Tags\Like::class,
    ];

    public function bootAddon()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'like');
    }
}
