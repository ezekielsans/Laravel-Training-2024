<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopController extends Controller
{
    /**
     * Display * pyramid
     */
    public function loop(Request $request){
        $number = $request->query('number', 0);
        $loop = '';
        for ($x = 0; $x < $number; $x++) {
            for ($i = 0; $i <= $x; $i++) {
                $loop = $loop."*";
              }
              $loop = $loop.'<br>';
          }

        return $loop;
    }
}
