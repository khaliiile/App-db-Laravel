<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function profile(){
        $profiles = profile::paginate(10);
       
        return view('profile',compact('profiles')) ;
    }
}
