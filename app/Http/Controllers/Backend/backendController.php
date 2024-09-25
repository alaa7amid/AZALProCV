<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class backendController extends Controller
{
    // public function index()
    // {
    //     return view('backend.master');   
    // }

    public function info(){
        return view('backend.cv-content.user-info');
    }


}
