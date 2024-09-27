<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BasicInfo;
use App\Models\ProfileInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class frontendController extends Controller
{
    public function index()
    {
        return view('front-end.master');
    }

    // Baisc Information first page
    public function info(){
        return view('front-end.cv-content.basic-info');
    }
    // store Baisc Information first page

    public function storeBaiscInfo(Request $request){

        $info = new BasicInfo();
        $info->user_id = Auth::user()->id;
        $info->name = $request->name;
        $info->email = $request->email;
        $info->phoneNumber = $request->phoneNumber;
        $info->address = $request->address;
        $info->city = $request->city;
        $info->save();

        return redirect()->route('profilePage')->with('message','Basic information has been successfully entered');
    }

    // progile Information Seconde page
    public function profilePage(){
            return view('front-end.cv-content.profile_info');
    }

    // Store Profile Information 
    public function storeProfileInfo(Request $request){
        $profile = new ProfileInfo();
        $profile->user_id = Auth::user()->id;
        $profile->profile = $request->profile;
        $profile->save();

        return redirect()->back()->with('message','Profile information has been successfully entered');
    }

    // Edit Basic Information 
    public function editBasicInfo(){
        $basicInfo = BasicInfo::where('user_id',Auth::user()->id)->first();
        if($basicInfo){
            return view('front-end.cv-content.edit_basic_info',compact('basicInfo'));
        }
        
        return view('front-end.cv-content.no-data');
    }
    
    //Update Basic Information
    public function updateBaiscInfo(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:15',
            'address' => 'required|string',
            'city' => 'required|string',
        ]);

        $basicInfo = BasicInfo::where('user_id',Auth::user()->id)->first();
        if($basicInfo){
            $basicInfo->name = $request->name;
            $basicInfo->email = $request->email;
            $basicInfo->phoneNumber = $request->phoneNumber;
            $basicInfo->address = $request->address;
            $basicInfo->city = $request->city;
            $basicInfo->save();

            return redirect()->back()->with('message','The information has been updated successfully.');
        }
        return redirect()->back()->with('message','The record to update could not be found.');
        
    }
}
  