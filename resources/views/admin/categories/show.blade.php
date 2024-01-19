@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{$category->name}}</h1>
        <p>{{$category->body}}></p>
        <img src="{{asset('storage/' . $category->image)}}" alt="{{$category->name}}">
        <div class="d-flex">
            <form action="{{ route('admin.categories.destroy', $category->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" data-item-title="{{$category->name}}" class="cancel-button btn btn-danger">
            Delete</button>
            </form>
            <a class="btn btn-primary ms-2" href="{{route('admin.categories.edit', $category->id)}}">Edit</a>
            <a class="btn btn-warning ms-2" href="{{route('admin.categories.index')}}">Back</a>
        </div>
    </section>

@endsection
