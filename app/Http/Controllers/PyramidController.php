<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PyramidController extends Controller
{
    /**
     * Display half pyramid.
     *
     * @return string
     */
    public function show()
    {
        $result = "";

        for ($x = 0; $x < 5; $x++) {

            for ($y = 0; $y <= $x; $y++) {
                $result = $result . "*";
            }

            $result = $result . "<br>";
        }

        return $result;
    }
}
