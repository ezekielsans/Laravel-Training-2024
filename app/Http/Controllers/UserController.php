<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display the user's work experience.
     *
     * @return string
     */
    public function profile()
    {
        return "
            <strong>Name: </strong> Danniel Libor
            <br>
            <strong>Address: </strong> Philippines
            <br>
            <strong>Email: </strong> dan@mail.test
        ";
    }
}
