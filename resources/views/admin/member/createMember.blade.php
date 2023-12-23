@extends('admin.admin_master')
@section('admin')
<div class="col-10" style="padding:20px">
                  <h4 class="card-title">Create Member</h4>
                 <form class="forms-sample" action="{{route('save.member')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="memberName" name="memberName" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Position</label>
                      <input type="text" class="form-control" id="memberPosition" name="memberPosition" placeholder="Position">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">ShortNote</label>
                      <textarea type="text" class="form-control" id="memberShortNote" name="memberShortNote" placeholder="ShortNote"></textarea>
                    </div>
                    <div class="form-group">
                      <label>File upload</label>                      
                        <input type="file" class="form-control" id="memberImage" name="memberImage" placeholder="Upload Image">                        
                    </div>                 
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                   <a href="{{route('home.member')}}" class="btn btn-danger me-2">Cancel</a>
                  </form>
                </div>
            @endsection