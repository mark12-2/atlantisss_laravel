@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head><br><br><br><br>

  <body style="background-image: url('{{ asset('images/water.jpg') }}')">
    
  <section class="jumbotron">
            <div class="container">
                <h1 class="jumbotron-heading text-white">Hi! {{ Auth::user()->name }}</h1>
                <p class="lead text-white">Something short and leading about the collection below—its contents, the creator, etc.
                    <br> Make it short and sweet, but not too short so folks don't simply skip over it entirely.
                </p>
                <br><br>
                <a href="{{ route('posts.index') }}" class="btn btn-primary">View Posts >>></a>
            </div>
        </section>
       

    </main>
</body>
@endsection


</html>

