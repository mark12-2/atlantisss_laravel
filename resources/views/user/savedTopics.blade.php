@extends('layouts.app')

@section('content')
    <h1>Saved Topics</h1>

    @foreach ($savedTopics as $topic)
        <div>
            <h2>{{ $topic->title }}</h2>

        </div>
    @endforeach
@endsection