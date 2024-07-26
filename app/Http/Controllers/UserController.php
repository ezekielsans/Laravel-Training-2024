<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display user Profile
     * 
     * @return string
     */
    public function profile(){
        $name = Profile::name;
        $address = Profile::address;
        $email = Profile::email;
        return "<h3>Name:</h3><h2>$name</h2><br>
                <h3>address:</h3><h2>$address</h2><br>
                <h3>email:</h3><h2>$email</h2><br>";
    }

    /**
     * Display user's work-experience
     * 
     * @return string
     */
    public function workExperience(){
        $company = WorkExperience::company;
        $position = WorkExperience::position;
        return "<h3>Company:</h3><h2>$company</h2>
                <h3>position:</h3><h2>$position</h2>"; 
    }

    public function request(Request $request){
        dd($request->query('name'));
    }
}
