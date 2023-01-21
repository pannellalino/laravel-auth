@extends('layouts.app')

@section('content')

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif

<div class="container d-flex justify-content-center pt-5">
    @dump($project_data)


    <div class="card text-center" style="width: 18rem;">
        <img src="{{asset('storage/' . $project->cover_image)}}" class="card-img-top" alt="{{$project->name}}">
        <div class="card-body">
          <h5 class="card-title">{{$project->name}}</h5>
          <p class="card-text">{{$project->summary}}</p>
          <a href="{{route('admin.projects.index')}}" class="btn btn-outline-info"><i class="fa-solid fa-list-ul"></i></a>
          <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-outline-warning"><i class="fa-regular fa-pen-to-square"></i></a>
          @include('admin.partials.form-delete')
        </div>
      </div>
</div>
@endsection
