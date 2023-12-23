@extends('admin.admin_master')
@section('admin')
<div class="col-10" style="padding:20px">
                  <h4 class="card-title">AboutUs</h4>
                 <form class="forms-sample" action="{{route('save.blog')}}" method="POST" enctype="multipart/form-data">
                    @csrf                   
                    <div class="form-group">
                      <label for="exampleInputName1">Content</label>
                      <textarea type="text" class="form-control" id="aboutuscontent" name="aboutuscontent" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
@endsection