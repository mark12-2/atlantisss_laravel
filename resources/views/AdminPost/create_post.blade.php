<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">

    <title>Create Post</title>
</head>
<body>
    
<h1 class="text-center mt-5">Create Post (Admin)</h1>
    <hr>

    <div class="container justify-content-center mt-2 mb-5">

        <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group m-2 p-2">
                <label for="Image">Upload Image</label>
                <input class="form-control"  type="file" name="img">
            </div>

            <div class="form-group m-2 p-2">
                <label for="project_title">Title</label>
                <input class="form-control" type="text" name="title" placeholder="">
            </div>

            <div class="form-group m-2 p-2">
                <label for="project_description">Description</label>
                <textarea class="form-control" name="description" cols="30" rows="10" placeholder=""></textarea>
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
                <textarea class="form-control" name="describe" cols="30" rows="10" placeholder="About yourself..."></textarea>
            </div>


            <button class="btn btn-success" type="submit" value="submit">Add Post</button>

        </form>

    </div>


</body>
</html>