@extends('admin.admin_master')
@section('admin')
<div class="col-10" style="padding:20px">
                  <h4 class="card-title">Create Carousel</h4>
                 <form class="forms-sample" action="{{route('save.carousel')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="carouselName" name="carouselName" placeholder="Name">
                    </div>                   
                    <div class="form-group">
                      <label>File upload</label>                      
                        <input type="file" class="form-control" id="carouselImage" name="carouselImage" placeholder="Upload Image">                        
                    </div>                 
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
            @endsection