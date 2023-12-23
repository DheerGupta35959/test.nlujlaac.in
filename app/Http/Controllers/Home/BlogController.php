<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Carbon;


class BlogController extends Controller
{
    public function Blog(){
        $blogs = Blog::where('IsDeleted','=','0')-> get();

        return view('admin.blog.blog_all',compact('blogs'));
    }

    public function AddBlog(){
        return view('admin.blog.createBlog');
    }

    public function SaveBlog(Request $request)
    {
        //dd($request);

            /*$imageName = time().'.'.$request->file('blogImage')->getClientOriginalName();  
            $request->blogImage->move(public_path('upload/BlogImages'), $imageName);

            $image_location = '/upload/BlogImages/'.$imageName;*/

            Blog::insert([
                'Title' => $request->blogtitlecontent,
                'ShortDescription' => $request->blogshortnote,
                'Content' => $request->blogcontent,
                'HasAttachment' => $request->file('blogAttachment')? true :false,
                'AuthorName' => $request->blogauthorname,
                'CreatedBy' => 1,
                'CreatedOn' => Carbon::now()
            ]);

            return Redirect()->route('home.blog')->with('success','Blog Inserted Successfully');                 

    }

    public function EditBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.editblog', compact('blog'));
    }

    public function DeleteBlog($id){

        Blog::findOrFail($id)->update([
            'IsDeleted' => 1
        ]);

        return Redirect()->route('home.blog')->with('Danger','Carousel Deleted Successfully');
    }

    
    public function UpdateBlog(Request $request)
    {
        $id = $request->id;
        $oldImageValue  = $request->oldImageValue;
        if($request->file('newImageValue')){
            //unlink($oldImageValue);
            $imageName = time().'.'.$request->file('newImageValue')->getClientOriginalName();  
            $request->newImageValue->move(public_path('upload/BlogImages'), $imageName);
            $image_location = '/upload/BlogImages/'.$imageName;

            Carousel::findorFail($id)->update([
                'Name' => $request->UpdateCarouselName,
                'Photo' => $image_location,
                'Name' => $request->UpdateblogName,
                'Position' => $request->UpdateblogPosition,
                'ShortNote' => $request->UpdateblogShortNote,
                'UpdatedBy' => 1
            ]);

            $notification = array(
                'message' => 'Blog Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('home.blog')->with($notification);                 
        }else{
            Blog::findorFail($request->id)->update([
                'Name' => $request->UpdateblogName,
                'Position' => $request->UpdateblogPosition,
                'ShortNote' => $request->UpdateblogShortNote,
                'UpdatedBy' => 1, 
                'UpdatedOn' => Carbon::now() 
            ]);

            $notification = array(
                'message' => 'Blog Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('home.blog')->with($notification);      
        }                         
    }
    public function ViewBlog($id){
        $blog = Blog::findOrFail($id);

        return view('admin.blog.view',compact('blog'));
    }
}
