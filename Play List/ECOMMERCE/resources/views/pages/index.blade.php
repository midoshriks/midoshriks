@extends('layouts.app')

@section('content')

    <body>
        <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is laravel application from "youtube" </p>
        <span>With Mido Shriks</span>
        <br><br>
        <a href="https://my-play-list.netlify.app/">
            <img src="https://my-play-list.netlify.app/assets/img/perfil2.png" alt="">
        </a>

        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
        </div>
    </body>

@endsection
