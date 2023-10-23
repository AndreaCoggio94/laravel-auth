@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <a href="{{route('admin.projects.index')}}" class="btn btn-outline-primary">Return to the list</a>
        <h1> {{ $project->name}}</h1>
        <div class="row">
            <div class="col">
                <p> 
                    <strong>Description: </strong> <br>
                     {{$project->description}}
                </p>
                
            </div>
            <div class="col">
                <p>
                    <strong>Repository link:</strong> <br>
                    {{$project->repository}}
                </p>


            </div>
        </div>
    </div>
@endsection