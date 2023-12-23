@extends('admin.admin_master')
@section('admin')
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Carousel Here</h4>
      <form class="forms-sample" action="{{route('update.carousel')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$carousel->Id}}">
        <input type="hidden" name="oldImageValue" value="{{$carousel->Photo}}">
        <div class="form-group">
          <label for="exampleInputUsername1">Name</label>
          <input type="text" class="form-control" id="UpdateCarouselName" name="UpdateCarouselName" placeholder="Name" value="{{$carousel->Name}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Photo</label>
          <input type="file" class="form-control" id="newImageValue" name="newImageValue" placeholder="Photo URL" value="{{$carousel->Photo}}">
        </div>
        <div class="form-group">
          <img src="{{$carousel->Photo}}">
        </div>
        <button type="submit" class="btn btn-primary me-2">Update</button>
      </form>
    </div>
  </div>
</div>
@endsection