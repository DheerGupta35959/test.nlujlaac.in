<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Carbon;


class BlogUserController extends Controller
{
    public function BlogAll(){
        $blogs = Blog::where('IsDeleted','=','0')->get();

        return view('user.blog.blog_all', compact('blogs'));
    }

    public function BlogView($id){
        $blog = Blog::findOrFail($id);
        $comments = Comment::where('blogId','=',$id)->where('IsDeleted','=','0')->where('IsActive','=','1')->get();

        return view('user.blog.blogview',compact('blog','comments'));
    }

    public function InsertComment(Request $request){

        Comment::insert([
            'Comment' =>$request->comment,
            'CommenterName' => $request->AuthorName,
            'BlogId' => $request->BlogId,
            'CreatedOn' => Carbon::now()
        ]);

        return redirect()->back();
    }
}
