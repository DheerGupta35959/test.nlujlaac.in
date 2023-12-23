<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Carbon;

class TeamController extends Controller
{
    public function Team(){
        $members = Member::where('IsDeleted','=','0')-> get();

        return view('user.ourteam.team',compact('members'));
    }
}
