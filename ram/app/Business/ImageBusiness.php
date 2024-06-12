<?php

namespace Ram\Business;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImageBusiness
{
    public function upload($file, $path) : string
    {
        $manager = new ImageManager(new Driver());

        $image = $manager->read($file);

        $image->scale(100, 100);

        $image->crop(100, 100);

        $image->save($path);

        $path = explode('public/', $path);

        return $path[1];
    }
}