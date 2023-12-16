@include('layouts.admin_nav')

<div>
<thead>
        <h1 class="text-center mt-5">Index (Admin)</h1>
    <hr>
<br>

    <table class="table">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">About</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">Edit Post</th>
            <th scope="col">Terminate Post</th>
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
                    <td>
                        <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                
            </tr>

            
            @endforeach
