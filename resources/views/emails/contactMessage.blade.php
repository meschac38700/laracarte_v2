@extends('emails.layouts.master')

@section('content')
    <div class="container">
        <h2>Prise de contact sur l'application Laracarte</h2>
        <p>Réception d'une prise de contact avec les élément suivant: </p>
        <ul>
            <li><strong>{{$name}}</strong></li>
            <li><strong>{{$email}}</strong></li>
            <li><strong>{{$msg}}</strong></li>
        </ul>
    </div>
@stop