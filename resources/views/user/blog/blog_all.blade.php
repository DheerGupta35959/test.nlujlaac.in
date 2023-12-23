@extends('user.user_master')
@section('user')
<div class="text-center pb-2">
                <h1 class="mb-4 text-uppercase">Blogs</h1>
            </div>
            @foreach ($blogs as  $blog)
            <div class="col-md-12 grid-margin p-3">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">{!!$blog->Title!!}</h4>
                              <p class="card-description">
                                {!! $blog->ShortDescription!!}                                
                              </p>
                              <a href="{{route('blog.view',$blog->Id)}}" class="btn btn-primary mt-2">Read More</a>
                              </div>
                          </div>
                        </div>
                
            @endforeach
            @endsection