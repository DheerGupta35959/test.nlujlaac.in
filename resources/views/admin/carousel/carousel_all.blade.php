@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12 grid-margin">
  <div class="inline">
    <h4 class="card-title">Carousel Table</h4>
    <a href="{{route('add.carousel')}}" class="btn btn-info">Add Carousel</a>
</div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Photo</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($carousels as $carousel)
                        <tr>
                          <td>{{$carousel['Name']}}</td>
                          <td><img id="carouselImage" src= "{{$carousel->Photo}}"></td>
                          <td>{{$carousel['IsActive'] ? "active" : "notactive"}}</td>
                          <td><a href="{{route('edit.carousel',$carousel['Id'])}}" class="btn btn-warning">Edit</a><a href="{{route('delete.carousel',$carousel['Id'])}}" class="btn btn-danger">Delete</a></td>
                        </tr>     
                        @endforeach                   
                      </tbody>
                    </table>
                  </div>
                </div>
            @endsection
            