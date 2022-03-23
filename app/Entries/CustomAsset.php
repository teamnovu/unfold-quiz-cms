<?php

namespace App\Entries;

use Statamic\Assets\Asset;

class CustomAsset extends Asset
{
    public function shallowAugmentedArrayKeys()
    {
        return ['id', 'url', 'permalink', 'api_url', 'extension', 'is_image', 'alt', 'placeholder', 'focus', 'width', 'height', 'focus_css'];
    }
}
