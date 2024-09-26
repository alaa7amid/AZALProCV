<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BasicInfo;
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

    public function storeBaiscInfo(Request $request){

        $info = new BasicInfo();
        $info->user_id = Auth::user()->id;
        $info->name = $request->name;
        $info->email = $request->email;
        $info->phoneNumber = $request->phoneNumber;
        $info->address = $request->address;
        $info->city = $request->city;
        $info->save();

        return redirect()->back()->with('message','insert information');
        }
}
  