@include('layouts.admin_nav')

    
<h1 class="text-center mt-5">Create Post (Admin)</h1>
    <hr>

    <div class="container justify-content-center mt-2 mb-5">

        <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group m-2 p-2">
                <label for="Image">Upload Image</label>
                <input class="form-control"  type="text" name="img">
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

