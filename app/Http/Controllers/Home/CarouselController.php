<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carousel;
use Illuminate\Support\Carbon;

class CarouselController extends Controller
{
    public $timestamps = false;
    public function Carousel(){
        $carousels = Carousel::where('IsDeleted','=','0')-> get();

        return view('admin.carousel.carousel_all',compact('carousels'));
    }

    public function AddCarousel(){
        return view('admin.carousel.create');
    }

    public function SaveCarousel(Request $request){

            $imageName = time().'.'.$request->file('carouselImage')->getClientOriginalName();  
            $request->carouselImage->move('upload/CarouselImages', $imageName);

            $image_location = '/upload/CarouselImages/'.$imageName;

            Carousel::insert([
                'Name' => $request->carouselName,
                'Photo' => $image_location,
                'CreatedBy' => 1,
                'CreatedOn' => Carbon::now()
            ]);

            return Redirect()->route('home.carousel')->with('success','Carousel Inserted Successfully');                 

    }

    public function EditCarousel($id)
    {
        $carousel = Carousel::findOrFail($id);
        return view('admin.carousel.editCarousel', compact('carousel'));
    }

    public function DeleteCarousel($id){

        Carousel::findOrFail($id)->update([
            'IsDeleted' => 1
        ]);

        return Redirect()->route('home.carousel')->with('Danger','Carousel Deleted Successfully');
    }

    
    public function UpdateCarousel(Request $request)
    {
        $id = $request->id;
        $oldImageValue  = $request->oldImageValue;
        if($request->file('newImageValue')){
            //unlink($oldImageValue);
            $imageName = time().'.'.$request->file('newImageValue')->getClientOriginalName();  
            $request->newImageValue->move(public_path('upload/CarouselImages'), $imageName);
            $image_location = '/upload/CarouselImages/'.$imageName;

            Carousel::findorFail($id)->update([
                'Name' => $request->UpdateCarouselName,
                'Photo' => $image_location,
                'UpdatedBy' => 1,
                'UpdatedOn' => Carbon::now
            ]);

            $notification = array(
                'message' => 'Carousel Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('home.carousel')->with($notification);                 
        }else{
            Carousel::findorFail($request->id)->update([
                'Name' => $request->UpdateCarouselName,
                'UpdatedBy' => 1
            ]);

            $notification = array(
                'message' => 'Carousel Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('home.carousel')->with($notification);      
        }                         
    }   
}
