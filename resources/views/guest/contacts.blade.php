@extends('layouts.app')

@section('content')
<h1 class="text-center">
  Contattaci
</h1>
<div class="container mt-5 w-50">
  <form class="row g-3" action="{{route("    ")}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="col-12">
          <label for="title">Titolo</label>
          <input class="w-100" type="text" name="title" id="title">
      </div>
      <div class="col-12">
          <label for="url">Inserisci l'url </label>
          <input class=" mb-3" type="text" name="url" id="url">    
          <label for="img">oppure carica una foto:</label>
          <input type="file" name="img" id="img">    
      </div>
      <div class="col-12">
          <label for="description">Descrizione</label>
          <textarea class="w-100" name="description" id="description"></textarea>
      </div>
      <div class="col-12">
          <button class="btn btn-outline-primary" type="submit">send</button>
      </div>
  </form>
</div>
@endsection