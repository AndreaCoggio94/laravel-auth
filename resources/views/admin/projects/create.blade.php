@extends('layouts.app')


@section('content')
    <div class="container mt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <h4>Fix the errors to continue:</h4>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('admin.projects.store')}}" method="POST">
            @csrf
            <div class="row">
                
                <div class="mb-3 col">
                    <label for="name" class="form-label @error('name') is-invalid @enderror">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3 col">
                    <label for="description" class="form-label @error('description') is-invalid @enderror">Description</label>
                    <input type="text" name="description" id="description" value="{{ old('description')  }}" class="form-control">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3 col">
                    <label for="repository" class="form-label @error('repository') is-invalid @enderror">Repository link</label>
                    <input type="url" name="repository" id="repository" value="{{ old('repository')  }}" class="form-control">
                    @error('repository')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-outline-primary ">Submit</button>
                
        </form>
    </div>
@endsection