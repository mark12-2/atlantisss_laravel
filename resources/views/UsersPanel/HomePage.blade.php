@extends('layouts.app')

@section('content')
<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">
<!-- Bootstrap core CSS -->
<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="album.css" rel="stylesheet">
</head><br>

<body style="background-image: url('https://wallpapercave.com/wp/wp7866138.jpg')">
    <main role="main">
        <br>

        <div class="container">
            <h2 class="text-center mt-5 text-white">Recent Posts</h2>
            <hr style="color:white;">
            <div class="row">
                @if($topics)
                    @foreach ($topics as $post)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="{{$post->img}}" alt="Card image cap" style="width: 354px; height: 230px;">
                                <div class="card-body">
                                    <h3 class="card-text">{{$post->title}}</h3>
                                    <p class="card-text">Description: {{$post->description}}</p>
                                    <p class="card-text">{{$post->describe}}</p> 
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <!-- <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#postDetailModal{{$post->id}}" data-description="{{$post->description}}">Detail</button> -->
                                            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                        </div>
                                        <small class="text-muted">{{$post->category->name}}</small>
                                    </div>
                                    @if (auth()->check())
                                    <form method="POST" action="{{ route('user.saveTopic', ['user' => auth()->user()->id]) }}">
                                        @csrf
                                        <input type="hidden" name="topics_id" value="{{ $post->id }}">
                                        <button type="submit">Save Topic</button>
                                    </form>
                                    @if (auth()->user()->savedTopics->contains($post->id))
                                        <p>The user has saved this topic.</p>
                                    @endif
                                @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </main>
</body>
@endsection

</html>