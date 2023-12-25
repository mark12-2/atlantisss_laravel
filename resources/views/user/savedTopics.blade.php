@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">
    <h1>Saved Topics</h1>
    <h5 class="jumbotron-heading text-dark">Your saved posts, {{ Auth::user()->name }}</h5><br><br>

    <div class="row">
        @foreach ($savedTopics as $topic)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{ $topic->img }}" alt="Card image cap" style="width: 100%; height: 260px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $topic->title }}</h5>
                        <p class="card-text">Description: {{ $topic->description }}</p>
                        <p class="card-text">{{ $topic->describe }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">{{ $topic->category->name }}</small>
                        </div><hr><br>
            <form method="POST" action="{{ route('user.unsaveTopic', ['user' => auth()->user()->id]) }}">
                @csrf
                <input type="hidden" name="topics_id" value="{{ $topic->id }}">
                <button type="submit" class="btn btn-danger">Unsave</button>
            </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
