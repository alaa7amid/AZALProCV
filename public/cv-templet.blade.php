@extends('backend.master')

@section('content')
@section('css')
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }

    p{
        color: #000000;
    }
    .container {
    display: grid;
    grid-template-columns: 1fr 2fr;
    max-width: 1200px;
    margin: auto;
    background: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    /* إزالة height: 100vh */
    min-height: 100vh; /* استخدم min-height بدلاً من height لضمان توسع الحاوية مع البيانات */
}


    .left_Side {
        background-color: #fafafa;
        padding: 30px;
    }

    .profileText {
        text-align: center;
    }

    .profileText img {
        border-radius:0;
        width: 200px;
        height: 200px;
        margin-bottom: 20px;
    }

    .profileText h2 {
        font-size: 1.5em;
        margin-top: 10px;
        text-transform: uppercase;
    }

    .profileText h2 span {
        font-size: 0.9em;
        font-weight: 300;
    }

    .contactInfo, .education, .languages {
        margin-top: 10px;
    }

    .contactInfo .title, .education .title, .languages .title {
        font-size: 1.2em;
        margin-bottom: 15px;
        border-bottom: 2px solid #000000;
        padding-bottom: 5px;
    }

    .contactInfo ul, .education ul, .languages ul {
        list-style: none;
        padding: 0;
    }
    .contactInfo ul li, .education ul li {
        margin-bottom: 3px;
    }

    .right_Side {
        padding: 30px;
    }

    .about, .experience, .skills, .interests {
        margin-bottom: 40px;
    }

    .about .title2, .experience .title2, .skills .title2, .interests .title2 {
        font-size: 1.3em;
        margin-bottom: 10px;
        color: #003147;
        text-transform: uppercase;
        border-bottom: 2px solid #003147;
        padding-bottom: 5px;
    }

    .skills .box {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .skills .percent {
        display: none;
        width: 100%;
        height: 6px;
        background-color: #e0e0e0;
        border-radius: 3px;
        overflow: hidden;
        margin-left: 10px;
    }

    .skills .percent div {
        height: 100%;
        background-color: #003147;
    }

    .interests ul {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
    }

    .interests ul li {
        text-align: center;
    }

    .interests ul li i {
        font-size: 24px;
        margin-bottom: 5px;
    }

    /* Responsive styles */
    @media (max-width: 1200px) {
        .container {
            max-width: 100%;
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .left_Side, .right_Side {
            padding: 15px;
        }

        .profileText img {
            width: 120px;
            height: 120px;
        }

        .skills .box {
            
            flex-direction: column;
            align-items: flex-start;
        }

        .skills .percent {
            display: none;
            margin-left: 0;
            margin-top: 10px;
            width: 100%;
        }

        .interests ul {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .profileText img {
            width: 100px;
            height: 100px;
        }

        .interests ul {
            grid-template-columns: 1fr;
        }

        .contactInfo ul li, .education ul li {
            font-size: 0.9em;
        }
    }
    @media print {
    .container {
        grid-template-columns: 1fr 1fr !important; /* تأكيد أن الأقسام تبقى جنبًا إلى جنب عند الطباعة */
    }
}

</style>

@endsection
<a href="{{route('downloadCV')}}" download>
    <i class="fas fa-download"></i> Download
</a>
<div class="container">
    <!-- زر التحميل مع الأيقونة -->

    
    <div class="left_Side">
        <div class="profileText">
            <img src="{{asset('storage/' . $imageProfile->image)}}" alt="Profile Image">
            <h2>{{$basicInfo->name}} <br><span>Computer Scientist</span></h2>
        </div>
        <div class="contactInfo">
            <h3 class="title">Contact Info</h3>
            <ul>
                <li><i class="fa fa-phone"></i>{{$basicInfo->phoneNumber}}</li>
                <li><i class="fa fa-envelope"></i>{{$basicInfo->email}}</li>
                <li><i class="fa fa-globe"></i>{{$basicInfo->address}}</li>
                <li><i class="fa fa-linkedin"></i>{{$basicInfo->city}}</li>
                <li><i class="fa fa-map-marker"></i> 56th Street, California</li>
            </ul>
        </div>
        <div class="education">
            <h3 class="title">Education</h3>
            <ul>
                @foreach ($educations as $education)
                    <li><strong>{{$education->education_level}}</strong><br> {{$education->department}} ({{$education->startDate}}-{{$education->endtDate}})</li>
                    {{-- <li><strong>Intermediate in Maths</strong> - College Name (2019-2021)</li>
                    <li><strong>Bachelor's in Computer Science</strong> - University Name (2021-Present)</li> --}}
                @endforeach
            </ul>
        </div>
        <div class="languages">
            <h3 class="title">Languages</h3>
            <ul>
                @foreach ($languages as $language)
                    <li>{{ trim($language) }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="right_Side">
        <!-- زر التحميل مع الأيقونة -->
        
        
        <div class="about">
            <h2 class="title2">Profile</h2>
            <p>{{$profile->profile}}</p>
        </div>
        <div class="experience">
            <h2 class="title2">Experience</h2>
            @foreach ($experiences as $experience)
                <div>
                <h5>{{$experience->position}}</h5>
                <p><strong>{{$experience->company_name}}</strong> - {{$experience->startDate}}-{{$experience->endDate}}</p>
                <p>{{$experience->description}}</p>
            </div>
            @endforeach
            
            {{-- <div>
                <h5>Data Analyst</h5>
                <p><strong>Company Name</strong> - 2021-Present</p>
                <p>Analyzed large datasets to help make data-driven decisions. Utilized Python and SQL for data cleaning and modeling.</p>
            </div> --}}
        </div>
        <div class="skills">
            <h2 class="title2">Professional Skills</h2>
            @foreach ($skills as $skill)
                <div class="box">
                <span>{{$skill}}</span>
                    {{-- <div class="percent"><div style="width: 95%;"></div></div> --}}
                </div>    
            @endforeach
               
            
            {{-- <div class="box">
                <span>CSS</span>
                <div class="percent"><div style="width: 80%;"></div></div>
            </div>
            <div class="box">
                <span>JavaScript</span>
                <div class="percent"><div style="width: 90%;"></div></div>
            </div>
            <div class="box">
                <span>Python</span>
                <div class="percent"><div style="width: 85%;"></div></div>
            </div> --}}
        </div>
        {{-- <div class="interests">
            <h2 class="title2">Interests</h2>
            <ul>
                <li><i class="fa fa-code"></i> Coding</li>
                <li><i class="fa fa-chart-line"></i> Data Analysis</li>
                <li><i class="fa fa-gamepad"></i> Gaming</li>
                <li><i class="fa fa-business-time"></i> Business</li>
            </ul>
        </div> --}}
        <div class="experience">
            <h2 class="title2">Projects</h2>
            <div class="box">
                @foreach ($projects as $project)
                    <div>
                        <h5>{{$project->project_name}}</h5>
                        <p>{{$project->Technologies}}</p>
                        <p>{{$project->description}}</p>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
</div>

@endsection

