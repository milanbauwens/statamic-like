<?php

namespace Milanbauwens\Like\Fieldtypes;

use Statamic\Fields\Fieldtype;

class LikeCounter extends Fieldtype
{
    protected $icon = '<svg id="Laag_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.9 20.23"><defs><style>.cls-1{fill:none;stroke:#e33177;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style></defs><path class="cls-1" d="M20.29,2.61c-2.15-2.15-5.63-2.15-7.78,0,0,0,0,0,0,0l-1.06,1.06-1.06-1.06C8.24,.46,4.76,.46,2.61,2.61,.46,4.76,.46,8.24,2.61,10.39l1.06,1.06,7.78,7.78,7.78-7.78,1.06-1.06c2.15-2.15,2.15-5.63,0-7.78,0,0,0,0,0,0Z"/></svg>';

    protected $categories = ['number'];

    public function __construct()
    {
        $this->configFields = [
            'destination' => [
                'display' => 'Likes',
                'default' => 0,
                'visibility' => 'read only',
            ],
        ];
    }

    public function preload()
    {
        return [
            'destination' => $this->config(),
        ];
    }

    /**
     * The blank/default value.
     *
     * @return array
     */
    public function defaultValue()
    {
        return null;
    }

    /**
     * Pre-process the data before it gets sent to the publish page.
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function preProcess($data)
    {
        return $data;
    }

    /**
     * Process the data before it gets saved.
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function process($data)
    {
        return $data;
    }
}
