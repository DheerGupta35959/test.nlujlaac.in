@extends('user.user_master')
@section('user')
<section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="down-content">
                      <a href="post-details.html"><h4>{!! $blog->Title!!}</h4></a>
                      <div class="row">
                      <ul class="post-info">
                        <li><a href="#">{{$blog->AuthorName}}</a></li>
                        <li><a href="#">{{$blog->CreatedOn}}</a></li>
                        <li><a href="#">{{count($comments) > 0 ? count($comments) : 0 }} Comments</a></li>
                      </ul>
                      <div class="post-options">
                        <ul class="post-share">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="#">Facebook</a>,</li>
                          <li><a href="#"> Twitter</a></li>
                        </ul>
                      </div>
                    </div>
                      {!!$blog->Content!!}                      
                    </div>
                  </div>
                </div>
                @if (count($comments) > 0)                    
                <div class="col-lg-12">
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2>{{count($comments)}} comments</h2>
                    </div>
                    <div class="content">
                      <ul>
                        @foreach ($comments as $comment)                            
                        <li>
                          <div class="right-content">
                            <h4>{{$comment->CommenterName}}<span>{{$comment->CreatedOn}}</span></h4>
                            <p>{{$comment->Comment}}</p>
                          </div>
                        </li>                                     
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
                @endif
                <div class="col-lg-12">
                  <div class="sidebar-item submit-comment">
                    <div class="sidebar-heading">
                      <h2>Your comment</h2>
                    </div>
                    <div class="content">
                      <form id="comment" action="{{route('blog.comment.insert')}}" method="post">
                        @csrf
                        <input type="hidden" name="BlogId" value="{{$blog->Id}}">
                        <div class="row">
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="AuthorName" type="text" id="AuthorName" placeholder="Your name" required="">
                            </fieldset>
                          </div>                                   
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="comment" rows="3" id="comment" placeholder="Type your comment" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Submit</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>

@endsection