<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Manager Resume - Chanchal Sharma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3 {
            color: #333;
        }

        .contact-info {
            margin-bottom: 20px;
        }

        .contact-info p {
            margin: 5px 0;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .section-content {
            margin-left: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>{{$basicInfo->name}}</h1>
            <h2>Office Manager</h2>
        </header>

        <div class="contact-info">
            <p>Email: {{$basicInfo->email}}</p>
            <p>Phone: {{$basicInfo->phoneNumber}}</p>
            <p><a href="#">LinkedIn Profile</a></p>
        </div>

        <div class="section">
            <h2>Experience</h2>
            @foreach ($experiences as $experience)
                <div class="section-content">
                    <h3>{{$experience->position}}, {{$experience->company_name}}</h3>
                    <p>{{$experience->startDate}} -  {{$experience->endDate}}</p>
                    <p>{{$experience->description}}</p>

                    {{-- <h3>Office Manager, Nod Publishing</h3>
                    <p>March 20xx – December 20xx</p>
                    <p>Summarize your key responsibilities and accomplishments. Here again, take any opportunity to use words you find in the job description. Be brief.</p>

                    <h3>Office Manager, Southridge Video</h3>
                    <p>August 20xx – March 20xx</p>
                    <p>Summarize your key responsibilities and accomplishments. Here again, take any opportunity to use words you find in the job description. Be concise targeting 3-5 key areas.</p> --}}
                </div>
            @endforeach
        </div>

        <div class="section">
            <h2>Education</h2>
            @foreach ($educations as $education)
                <div class="section-content">
                    <h3>{{$education->department}}</h3>
                    <p>{{$education->education_level}}</p>
                    <p>{{$education->startDate}} - {{$education->endtDate}}</p>
                </div>
            @endforeach
        </div>
        <div class="section">
            <h2>Prohects</h2>
            @foreach ($projects as $project)
                <div class="section-content">
                    <h3>{{ $project->project_name }}</h3>
                    <p>{{ $project->Technologies }}</p>
                    <p>{{ $project->description }}</p>
                </div>
            @endforeach
        </div>

        <div class="section">
            <h2>Skills</h2>
            <div class="section-content">
                <ul>
                    @foreach($skills as $skill)
                        <li>{{$skill}}</li>
                    @endforeach
                    {{-- <li>Project Management</li>
                    <li>Data Analysis</li>
                    <li>Communication</li>
                    <li>Organization</li>
                    <li>Problem-solving</li>
                    <li>Management</li> --}}
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
