<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">

    <title>Edit Post</title>
</head>
<body>
    
<h1 class="text-center mt-5">Edit Post (Admin)</h1>
    <hr>

    <div class="container justify-content-center mt-2 mb-5">

        <form action="{{route('admin.posts.update', $topics->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

            <center><div>
                <img style="height: 230px; width: 350px;" src="{{$topics->img}}" alt="">
            </div></center>
            <div class="form-group m-2 p-2">
                <label for="Image">Upload Image</label>
                <input class="form-control"  type="file" name="img">
            </div>

            <div class="form-group m-2 p-2">
                <label for="project_title">Title</label>
                <input class="form-control" type="text" name="title" value="{{$topics->title}}">
            </div>

            <div class="form-group m-2 p-2">
                <label for="project_description">Description</label>
                <textarea class="form-control" name="description" cols="30" rows="10">{{$topics->description}}</textarea>
            </div>

            <div class="form-group m-2 p-2">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach ($categories as $category)
                     <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group m-2 p-2">
                <label for="project_description">About</label>
                <textarea class="form-control" name="describe" cols="30" rows="10">{{$topics->describe}}</textarea>
            </div>


            <button class="btn btn-success" type="submit" value="submit">Update Post</button>

        </form>

    </div>


</body>
</html>