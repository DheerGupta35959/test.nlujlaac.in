@extends('admin.admin_master')
@section('admin')
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Carousel Here</h4>
      <form class="forms-sample" action="{{route('update.member')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$member->Id}}">
        <input type="hidden" name="oldImageValue" value="{{$member->Photo}}">
        <div class="form-group">
          <label for="exampleInputUsername1">Name</label>
          <input type="text" class="form-control" id="UpdateCarouselName" name="UpdateMemberName" placeholder="Name" value="{{$member->Name}}">
        </div>
        <div class="form-group">
          <label for="exampleInputUsername1">Position</label>
          <input type="text" class="form-control" id="UpdateMemberPosition" name="UpdateMemberPosition" placeholder="Name" value="{{$member->Position}}">
        </div>
        <div class="form-group">
            <label for="exampleInputName1">ShortNote</label>
            <textarea type="text" class="form-control" id="UpdateMemberShortNote" name="UpdateMemberShortNote" placeholder="ShortNote">
                {{$member->ShortNote}}
            </textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Photo</label>
          <input type="file" class="form-control" id="newImageValue" name="newImageValue" placeholder="Photo URL" value="{{$member->Photo}}">
        </div>
        <div class="form-group">
          <img src="{{$member->Photo}}">
        </div>
        <button type="submit" class="btn btn-primary me-2">Update</button>
         <a href="{{route('home.member')}}" class="btn btn-danger me-2">Cancel</a>
      </form>
    </div>
  </div>
</div>
@endsection