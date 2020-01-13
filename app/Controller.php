<?php
namespace App;

use eftec\bladeone\BladeOne;

class Controller
{
    public static function view($name, $data = [], $oldData = [])
    {
        $blade = new BladeOne(null, null,BladeOne::MODE_AUTO);
        $blade->setBaseUrl(Config::$URL);
        if(count($oldData) > 0)
            $data = array_merge($data, (array)$oldData);

        extract($data);
        echo $blade->run($name, $data);
    }
}