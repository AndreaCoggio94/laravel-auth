@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
                
            <tr>
              <th scope="row">{{$project->id}}</th>
              <td>{{$project->name}}</td>
              <td>{{$project->slug}}</td>
              <td>{{$project->created_at}}</td>
              <td>{{$project->updated_at}}</td>
              <td></td>
            </tr>
            @empty
            <tr>
                <td colspan="6">
                <i>No projects present</i>    
                </td>    
            </tr>    
            @endforelse
        </tbody>
      </table>

    {{ $projects->links('pagination::bootstrap-5')}}
</div>
@endsection