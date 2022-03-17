<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getxinchao($ten, $namsinh)
    {
        return 'xinchaocau:'. $ten . '<br> co nam sinh la' . $namsinh ;

    }
    public function  gettambiet($ten, $namsinh)
    {
        return 'xinchaoemiu:'. $ten . '<br> co nam sinh la' . $namsinh ;
    }
}
