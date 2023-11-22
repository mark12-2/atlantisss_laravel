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
 <div class="card" style="width: 18rem; float: right; margin-right: 150px;">
  <img src="{{ asset('images/whale.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Save the Seaas</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{ route('login') }}" class="btn btn-primary" >Get started!</a>
  </div>
</div>

<div class="text-white">
    <h1>Welcome to Atlantis</h1>
    <p class="lead">Come and join other users in spreading awareness about ocean life!<br><br>
                    Donec id elit non mi porta gravida at eget metus. <br>
                    Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh <br>
                    fermentum massa justo sit amet risus. <br><br>
                    <i>Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</i>
    </p>
    </div>
  <!-- <img src="{{ asset('images/sandcastle.png') }}" alt="" width="400px" height="330px" style="margin-left: 100px;"> -->

</main>


  <!-- footer -->

  

</body>

        </html>
@endsection
