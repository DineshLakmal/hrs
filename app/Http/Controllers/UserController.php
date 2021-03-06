<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use Image;
use Auth;
 
class UserController extends Controller
{
    public function profile(){
        return view('profiles.profile', array('user' => Auth::user()) );
    }
 
    public function update_avatar(Request $request){
       
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        

        $user = Auth::user();
 
        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
        
        $destinationPath = public_path('uploads/avatars');

        $request->avatar->move($destinationPath, $avatarName);;
 
        $user->avatar = $avatarName;
        $user->save();
 
        return back()
            ->with('success','You have successfully upload image.');

 
    }
}



?>