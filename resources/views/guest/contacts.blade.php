@extends('layouts.app')

@section('content')
<h1 class="text-center">
  Contattaci
</h1>
<div class="container mt-5 w-50">
  <form class="row g-3" action="{{route("contacts.store")}}" method="post">
      @csrf
      @method("POST")
      <div class="col-12">
          <label for="fulleName">Nome e cognome:</label>
          <input class="w-100" type="text" name="fullName" id="fullName">
      </div>
      <div class="col-12">
          <label for="email">la tua Email: </label>
          <input class="w-100" type="email" name="email" id="email">

      </div>
      <div class="col-12">
          <label for="guestMessage">Messaggio:</label>
          <textarea class="w-100" name="guestMessage" id="guestMessage"></textarea>
      </div>
      <div class="col-12">
          <button class="btn btn-outline-primary" type="submit">send</button>
      </div>
  </form>
</div>
@endsection