<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BasicInfo;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Image;
use App\Models\Language;
use App\Models\ProfileInfo;
use App\Models\Project;
use App\Models\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CvController extends Controller
{
    public function createCv(){
        $imageProfile = Image::where('user_id',Auth::user()->id)->first();
        $basicInfo = BasicInfo::where('user_id',Auth::user()->id)->first();
        $educations = Education::where('user_id',Auth::user()->id)->get();

        
        $languagesList = Language::where('user_id',Auth::user()->id)->first();
        $languages = explode(',',$languagesList->language);

        $profile = ProfileInfo::where('user_id',Auth::user()->id)->first();

        $skiilsList = Skills::where('user_id',Auth::user()->id)->first();
        $skills = explode(',',$skiilsList->skills);

        $experiences = Experience::where('user_id',Auth::user()->id)->get();
        
        $projects = Project::where('user_id',Auth::user()->id)->get();

        return view('front-end.CV.cv-templet',compact('imageProfile','basicInfo','educations',
        'languages','profile','skills','experiences','projects'));
    }
}
