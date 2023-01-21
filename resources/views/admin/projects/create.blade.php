@extends('layouts.app')

@section('content')
    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="name..">
        </div>
        <div class="mb-3">
            <label for="client_name" class="form-label">client_name</label>
            <input type="text" class="form-control" id="client_name" name="client_name" placeholder="client_name..">
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">summary</label>
            <input type="text" class="form-control" id="summary" name="summary" placeholder="summary..">
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">cover_image</label>
            <input type="text" class="form-control" id="cover_image" name="cover_image" placeholder="cover_image..">
        </div>
        <button type="submit" class="btn btn-outline-success">Invia</button>
    </form>
@endsection
