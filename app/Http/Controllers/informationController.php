<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informationController extends Controller
{
    public function information(){
        return view('information') ;
    }
}
