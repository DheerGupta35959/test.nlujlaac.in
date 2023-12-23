@php 

$members = DB::table('member')->where('IsDeleted','=','0')->get();

@endphp

@extends('user.user_master')
@section('user')
<!-- About Start -->
 <div class="container-fluid">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="{{asset('/../frontend/img/about.png')}}" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">                    
                    <h6 class="text-uppercase">LAAC Strives For</h6>
                    <h1 class="mb-4">JUSTICE For ALL</h1>
                    <p><i>"The statute book is a closed book for the common man, and to add insult to injury, there is the fictitious doctrine that ignorance of law is no excuse"</i></p> 
                    <p>– Justice V. R. Krishna Iyer</p>
                    <a href="{{route('user.aboutus')}}" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Our Members</h6>
                <h1 class="mb-4">Meet Our Members</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel team-carousel position-relative" style="margin-top: -97px; padding: 0 30px;">
                    @foreach($members as $member)
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">{{$member->Name}}</h5>
                            <p class="mb-3 px-4">{{$member->Position}}</p>
                            <div class="team-img position-relative">
                                <img src="{{$member->Photo}}" alt="">                                
                            </div>
                        </div>                        
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->  

	
	@endsection