@php

    $carousels = DB::table('carousels')->get();

@endphp

<div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($carousels as $key => $carousel)                
                <div class="carousel-item position-relative {{ $key == 0 ?'active' : ''}}" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{$carousel->Photo}}" style="object-fit: cover;">                    
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-prev-icon"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-next-icon"></span>
                </div>
            </a>
        </div>
    </div>