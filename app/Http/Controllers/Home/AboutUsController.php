<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use Illuminate\Support\Carbon;
use Image;

class AboutUsController extends Controller
{
    public function AboutUs(){
        $aboutus = AboutUs::get();
       // dd($aboutus);       
        
       return view('admin.aboutus.aboutUs',compact('aboutus'));
    }
}
