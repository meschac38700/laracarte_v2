@extends('emails.layouts.master')

@section('style')
    <style>
        body{
            margin: 0px;
            padding: 0px;
            width:100%;
        }
        .content
        {
            margin: 0px;
            padding:0px;
            width: 100%;
        }
       
        .container
        {
            width: 700px;
            padding: 5px;
            margin: 0px auto;
            background-color:#34495e;
            border-radius: 1em;
            word-wrap: break-word;
        }
    
            
        label
        {
            color: #fff;
            font-weight : bold;
        }
        p
        {
            width: 100%;
            color: #fff;
        }
        .center
        {
            text-align: center;
        }
        .warning
        {
            color: #fff;
        }
        .intro
        {
            font-size: 20px;
        }
        .night-blue
        {
            color: #60a3bc;
        }
        a
        {
            text-decoration: none !important;
            color: #60a3bc !important;
        }
    </style>
@stop

@section('content')
    <div class="container">
        <h2 class="center warning" >Prise de contact sur l'application Laracarte</h2>
        <p class="warning intro">Réception d'une prise de contact avec les éléments suivant: </p>
        <hr>
        <div class="content">
            <label>Nom</label>
            <p class="night-blue">{{$name}}</p>
        </div>
        <hr>
        <div class="content">
            <label>Email</label>
            <p class="night-blue">{{$email}}</p>
        </div>
        <hr>
        <div class="content">
            <label>Message</label>
            <p class="night-blue">{{$msg}}</p>
        </div>
    </div>
@stop

