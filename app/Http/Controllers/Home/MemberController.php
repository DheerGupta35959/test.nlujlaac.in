<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Image;

class MemberController extends Controller
{
    public function Member(){
        $members = Member::where('IsDeleted','=','0')-> get();

        return view('admin.member.member_all',compact('members'));
    }

    public function AddMember(){
        return view('admin.member.createMember');
    }

    public function SaveMember(Request $request)
    {
            $imageName = time().'.'.$request->file('memberImage')->getClientOriginalName();  
            $image = Image::make($request->file('memberImage')->path());
            $image->resize(240, 289)->encode('jpg',100)->save('upload/MemberImages/'.$imageName);

            $image_location = '/upload/MemberImages/'.$imageName;

            Member::insert([
                'Name' => $request->memberName,
                'Position' => $request->memberPosition,
                'ShortNote' => $request->memberShortNote,
                'Photo' => $image_location,
                'CreatedBy' => 1,
                'CreatedOn' => Carbon::now()
            ]);

            return Redirect()->route('home.member')->with('success','Carousel Inserted Successfully');                 

    }

    public function EditMember($id)
    {
        $member = Member::findOrFail($id);
        return view('admin.member.editMember', compact('member'));
    }

    public function DeleteMember($id){

        Member::findOrFail($id)->update([
            'IsDeleted' => 1
        ]);

        return Redirect()->route('home.member')->with('Danger','Carousel Deleted Successfully');
    }

    
    public function UpdateMember(Request $request)
    {
        $id = $request->id;
        $oldImageValue  = $request->oldImageValue;
        if($request->file('newImageValue')){

            $imageName = time().'.'.$request->file('newImageValue')->getClientOriginalName();  
            $image = Image::make($request->file('newImageValue')->path());
             $image->resize(240, 289)->encode('jpg',100);
        $image->save('upload/MemberImages/'.$imageName);
        unlink($oldImageValue);
            $image_location = '/upload/MemberImages/'.$imageName;

            Member::findorFail($id)->update([
                'Name' => $request->UpdateCarouselName,
                'Photo' => $image_location,
                'Name' => $request->UpdateMemberName,
                'Position' => $request->UpdateMemberPosition,
                'ShortNote' => $request->UpdateMemberShortNote,
                'UpdatedBy' => 1
            ]);

            $notification = array(
                'message' => 'Member Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('home.member')->with($notification);                 
        }else{
            Member::findorFail($request->id)->update([
                'Name' => $request->UpdateMemberName,
                'Position' => $request->UpdateMemberPosition,
                'ShortNote' => $request->UpdateMemberShortNote,
                'UpdatedBy' => 1, 
                'UpdatedOn' => Carbon::now() 
            ]);

            $notification = array(
                'message' => 'Member Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('home.member')->with($notification);      
        }                         
    }
}
