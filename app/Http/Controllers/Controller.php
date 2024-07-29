<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function display()
    {
        // return view('welcome');
        return view('helloWorld');
    }
}
