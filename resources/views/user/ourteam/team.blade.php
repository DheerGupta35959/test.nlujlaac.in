@extends('user.user_master')
@section('user')
<div class="container text-center mt-5 mb-2">
    <h1 class="mb-0">Meet our Members</h1>
</div>
<div class="container mt-3">
    <div class="row">
        @foreach($members as $key => $member)
        @if($key % 2 == 0)
            <div class="col-lg-12 m-3 border border-3">
                <div class="row">
                    <div class="col-3">
                        <img class="img-responsive m-3" src="{{$member->Photo}}">
                    </div>
                    <div class="col-9">
                        <h4 class="mt-3 text-uppercase">{{$member->Name}}</h4>
                        <h6 class="work d-block">{{$member->Position}}</h6>
                        <span class = "d-block" style="word-break: break-word;"><i>"{{$member->ShortNote}}"</i></span>
                    </div>
                </div>
            </div>
        @else
            <div class="col-lg-12 m-3 border border-3">
                <div class="row">
                    <div class="col-9">
                        <h4 class="mt-3 text-uppercase">{{$member->Name}}</h4>
                        <h6 class="work d-block">{{$member->Position}}</h6>
                        <span class = "d-block" style="word-break: break-word;"><i>"{{$member->ShortNote}}"</i></span>
                    </div>
                    <div class="col-3">
                        <img class="img-responsive m-3" src="{{$member->Photo}}">
                    </div>
                </div>
            </div>
        @endif
        @endforeach
    </div>          
</div>
@endsection