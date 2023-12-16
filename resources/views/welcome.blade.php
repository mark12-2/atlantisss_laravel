@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Atlantis</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
</head>
@section('content')
<body style="background-image: url('{{ asset('images/water.jpg') }}')">
<br>

<main class="px-3 m-5">

 <!-- card with image -->
 <div class="card" style="width: 18rem; float: right; margin-right: 190px;">
  <img src="{{ url('https://media.salon.com/2020/12/killer-whale-1207201.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Come and Explore</h5>
    <p class="card-text">Browse beaches and resorts. Get to know famous surfers and dive in to the exciting deep sea!</p>
    <a href="{{ route('login') }}" class="btn btn-primary" >Get started!</a>
  </div>
</div>

<div class="text-white">
    <h1>Welcome to Atlantis</h1>
    <p class="lead">Come and join other users about ocean life!<br><br>
                    See exciting places you can visit and view for your next vacation. <br>
                    Talented surfers and divers are here waiting for your interest! <br>
                    Get to know them. <br><br>
                    <i>This site is a sample for the project entitled "Life Below Water".</i>
    </p>
    </div>
  <!-- <img src="{{ asset('images/sandcastle.png') }}" alt="" width="400px" height="330px" style="margin-left: 100px;"> -->

</main>


  <!-- footer -->

  

</body>

        </html>
@endsection
