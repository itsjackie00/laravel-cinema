@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center">
    da qui potrai gestire tutte le programmazioni dei film
    </div>
</div>
<div class="d-flex text-center">
    <ul class="d-flex text-center">
        <li class="button-admin">
            <a href="http://127.0.0.1:8000/rooms">
            <button type="button" class="btn btn-secondary">gestisci le sale</button>
            </a>
        </li>
        <li class="button-admin">
            <a href="http://127.0.0.1:8000/movies">
            <button type="button" class="btn btn-secondary">gestisci i film</button>
            </a>
        </li>
        </ul>
        <br>
        <ul class="d-flex">
        <li class="button-admin">
            <a href="http://127.0.0.1:8000/screenings">
            <button type="button" class="btn btn-secondary">gestici le proiezioni</button>
            </a>
        </li>
        <li class="button-admin">
            <a href="http://127.0.0.1:8000/reviews">
            <button type="button" class="btn btn-secondary">gestisci i commenti</button>
            </a>
        </li>
    </ul>
</div>
@endsection
