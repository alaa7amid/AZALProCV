@extends('backend.master')

@section('css')
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }

    .container {
        height: auto;
        display: block;
        max-width: 1200px;
        margin: auto;
        background: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 30px;
    }

    .section {
        margin-bottom: 40px;
    }

    .title2 {
        font-size: 1.3em;
        margin-bottom: 10px;
        color: #003147;
        text-transform: uppercase;
        border-bottom: 2px solid #003147;
        padding-bottom: 5px;
    }

    .section ul {
        list-style: none;
        padding: 0;
    }

    .section ul li {
        margin-bottom: 10px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="section">
        <h2 class="title2">Additional Projects</h2>
        <ul>
            {{-- @foreach ($additionalProjects as $project)
                <li><strong>{{$project->title}}</strong> - {{$project->description}} ({{$project->year}})</li>
            @endforeach --}}
        </ul>
    </div>

    <div class="section">
        <h2 class="title2">Certificates</h2>
        <ul>
            {{-- @foreach ($certificates as $certificate)
                <li><strong>{{$certificate->name}}</strong> - Issued by {{$certificate->institution}} in {{$certificate->year}}</li>
            @endforeach --}}
        </ul>
    </div>

    <div class="section">
        <h2 class="title2">Volunteer Work</h2>
        <ul>
            {{-- @foreach ($volunteerWork as $volunteer)
                <li><strong>{{$volunteer->position}}</strong> at {{$volunteer->organization}} ({{$volunteer->year}})</li>
            @endforeach --}}
        </ul>
    </div>
</div>
@endsection
