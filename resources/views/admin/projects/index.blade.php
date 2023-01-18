@extends('layouts.app')

@section('content')
    <h1>Elenco Progetti</h1>
    @foreach ($projects as $project)
        <h3>{{$project->name}}</h3>
    @endforeach
    @endsection
