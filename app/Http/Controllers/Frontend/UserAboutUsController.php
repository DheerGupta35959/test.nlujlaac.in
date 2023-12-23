<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAboutUsController extends Controller
{
    public function AboutUs(){
        return view('user.AboutUs.aboutus');
    }
}
