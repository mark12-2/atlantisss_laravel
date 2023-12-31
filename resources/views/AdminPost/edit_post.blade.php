@include('layouts.admin_nav')

<h1 class="text-center mt-5">Edit Post (Admin)</h1>
    <hr>

    <div class="container justify-content-center mt-2 mb-5">

                    @if (auth()->user()->role == '1')
                    <form action="{{route('admin.posts.update', $topics->id)}}" method="POST" enctype="multipart/form-data">
                @else
                    <form action="{{route('user.updatePost', ['user' => auth()->user()->id, 'id' => $topics->id])}}" method="POST" enctype="multipart/form-data">
                @endif
            @csrf

            <center><div>
                <img style="height: 230px; width: 350px;" src="{{$topics->img}}" alt="">
            </div></center>
            <div class="form-group m-2 p-2">
                <!-- image url -->
                <label for="Image">Upload Image</label> 
                <input class="form-control"  type="text" name="img">
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

                    
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group m-2 p-2">
                        <label for="project_description">About</label>
                        <textarea class="form-control" name="describe" cols="30" rows="10">{{ $topics->describe }}</textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <button class="btn btn-success" type="submit" value="submit">Update Post</button> 
                    <a class="btn btn-danger" href="{{ route('admin.posts.index') }}">Cancel</a>
                </div>
            </div>

        </form>

    </div>

