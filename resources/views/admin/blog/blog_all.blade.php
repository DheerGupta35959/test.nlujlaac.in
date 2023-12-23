@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12 grid-margin">
  <div class="inline">
    <h4 class="card-title">Blog Table</h4>
    <a href="{{route('add.blog')}}" class="btn btn-info">Add Blog</a>
</div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>ShortDescription</th>
                          <th>AuthorName</th>
                          <th>HasAttachment</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                          <td>{!! $blog->Title !!}</td>
                          <td>{!! $blog->ShortDescription !!}</td>
                          <td>{!! $blog->AuthorName !!}</td>
                          <td>{{ $blog->HasAttachment ? true: false }}</td>
                          <td>{{!$blog->IsArchive ? "active" : "notactive"}}</td>
                          <td><a href="{{route('view.blog',$blog->Id)}}" class="btn btn-info m-2">View</a><a href="{{route('edit.blog',$blog->Id)}}" class="btn btn-warning m-2">Edit</a><a href="{{route('delete.blog',$blog->Id)}}" class="btn btn-danger m-2">Delete</a></td>
                        </tr>
                        @endforeach                   
                      </tbody>
                    </table>
                  </div>
                </div>
            @endsection
            