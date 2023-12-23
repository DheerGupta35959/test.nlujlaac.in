<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDonationController extends Controller
{
    public function Donation(){
        return view('user.Donation.donation');
    }
}
