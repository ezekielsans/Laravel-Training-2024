<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Show Post id
     * 
     * @return post $id
     */
    public function show($id){
        return "Post Id: $id";
    }
}
