@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">
    <h1>Saved Topics</h1>

    <h5 class="jumbotron-heading text-dark">your saved posts, {{ Auth::user()->name }}</h5><br><br>

    @foreach ($savedTopics as $topic)
        <div>
            <img class="card-img-top" src="{{$topic->img}}" alt="Card image cap" style="width: 354px; height: 230px;">
                <h3 class="card-text">{{$topic->title}}</h3>
                <p class="card-text">Description: {{$topic->description}}</p>
                <p class="card-text">{{$topic->describe}}</p> 
                <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">{{$topic->category->name}}</small>

        
    @endforeach
    </div>
@endsection