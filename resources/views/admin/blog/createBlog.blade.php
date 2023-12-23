@extends('admin.admin_master')
@section('admin')
<div class="col-10" style="padding:20px">
                  <h4 class="card-title">Create Blog</h4>
                 <form class="forms-sample" action="{{route('save.blog')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Title</label>
                      <textarea type="text" class="form-control" id="blogtitlecontent" name="blogtitlecontent" placeholder="Name"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Author Name</label>
                      <input type="text" class="form-control" id="blogauthorname" name="blogauthorname" placeholder="Author Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Short Description</label>
                      <textarea type="text" class="form-control" id="blogshortnote" name="blogshortnote" placeholder="Position"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Blog Content</label>
                      <textarea type="text" class="form-control" id="blogcontent" name="blogcontent"></textarea>
                    </div>
                    <div class="form-group">
                      <label>File upload</label>                      
                        <input type="file" class="form-control" id="blogAttachment" name="blogAttachment" placeholder="Upload Attachment">                        
                    </div>                 
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
            @endsection