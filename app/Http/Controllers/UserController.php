<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display the user's profile.
     *
     * @return string
     */
    public function profile()
    {
        $name = (new Profile)->getData()['name'];
        $address = Profile::address;
        $email = Profile::email;

        return "
            <strong>Name: </strong> $name
            <br>
            <strong>Address: </strong> $address
            <br>
            <strong>Email: </strong> $email
        ";
    }

    /**
     * Display the user's work experience.
     *
     * @return string
     */
    public function workExperience()
    {
        // env('DB_CONNECTION');
        config('database.default');

        return "
            <strong>Company: </strong> Inventive Media
            <br>
            <strong>Position: </strong> Trainer
        ";
    }

    /**
     * Display register page.
     *
     * @return view
     */
    public function register()
    {
        return view('register');
    }
}
