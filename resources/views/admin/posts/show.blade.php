@extends('layouts.app')

@section('content')
{{-- @dd($post) --}}

<div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-md-8">   
        <div class="cardcontainer my-4">
          <p class="txt m-0">{{$post->user}}</p>
          <div class="photo w-75 mx-auto">
            @if (str_starts_with($post->url, "http" ))   
              <img class="w-100" src="{{ $post->url}}" alt="image {{$post->title}}">
            @else
            <img class="w-100" src="{{ asset('storage') . '/' . $post->url}}" alt="image {{$post->title}}">
            @endif
          </div>
          <div class="content border-bottom border-2 pb-4">
            <p>{{ ucfirst($post->title)}}</p>
            @foreach ($post->categories as $category)
              <p>{{$category->name }}</p>
            @endforeach
            <p>{{ $post->created_at}}</p>
            <p>{{$post->description}}</p>
            <a href="{{route("admin.posts.edit",$post)}}">
              <button class="btn btn-outline-primary mx-auto">Modifica</button>
            </a>
            <a href="{{route("admin.posts.index")}}">
              <button class="btn btn-outline-danger mx-auto">Back</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection