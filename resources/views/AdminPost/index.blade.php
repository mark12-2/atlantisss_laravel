<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">

    <title>Index</title>
</head>
<body>
    
<h1 class="text-center mt-5">Index (Admin)</h1>
    <hr>
<br>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">About</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($topics as $post)

            <tr>
                <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->category->name}}</td>
                    <td>{{$post->description}}</td>
                    <td><img style="height: 130px; width: 200px;" src="{{$post->img}}" /></td>
                    <td>{{$post->describe}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.posts.edit', $post->id)}}">Edit</a>
                    </td>
                
                
            </tr>
            @endforeach

</body>
</html>