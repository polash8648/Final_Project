@extends('layout')
@section('title','Job List')
@section('content')

<table class="table table-bordered" style="width: 100%;">
    <thead>
        <tr>
            <th>Job Name</th>
            <th>Company Name</th>
            <th>Description</th>
            <th>Salary</th>
            <th>Education</th>
            <th>Experience</th>
            <th>Skill</th>
            <th>Company Benifit</th>

        </tr>
    </thead>
    <tbody>
        @if($jobs->count() > 0)
            @foreach($jobs as $job)
                <tr>
                    <td>{{ $job->job_name }}</td>
                    <td>{{ $job->company_name }}</td>
                    <td>{{ $job->job_description }}</td>
                    <td>{{ $job->salary }}</td>
                    <td>{{ $job->education }}</td>
                    <td>{{ $job->experience }}</td>
                    <td>{{ $job->skills }}</td>
                    <td>{{ $job->company_benifit }}</td>


                    <td>
                    <a href=""><button class="btn btn-primary" type="submit">Edit</button></a>
                      
                </td>
               
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
@endsection