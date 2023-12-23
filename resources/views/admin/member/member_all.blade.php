@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12 grid-margin">
  <div class="inline">
    <h4 class="card-title">Member Table</h4>
    <a href="{{route('add.member')}}" class="btn btn-info">Add Member</a>
</div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Positon</th>
                          <th>ShortNote</th>
                          <th>Photo</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($members as $member)
                        <tr>
                          <td>{{$member['Name']}}</td>
                          <td>{{$member['Position']}}</td>
                          <td></td>
                          <td><img id="carouselImage" src= "{{$member->Photo}}"></td>
                          <td>{{!$member['IsArchive'] ? "active" : "notactive"}}</td>
                          <td><a href="{{route('edit.member',$member['Id'])}}" class="btn btn-warning">Edit</a><a href="{{route('delete.member',$member['Id'])}}" class="btn btn-danger">Delete</a></td>
                        </tr>     
                        @endforeach                   
                      </tbody>
                    </table>
                  </div>
                </div>
            @endsection
            