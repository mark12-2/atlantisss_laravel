<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Topics;

class AdminPostsController extends Controller
{
  
    public function index()
    {
        $topics = Topics::all();
        return view('AdminPost.index', compact('topics'));
    }

    public function create()
    {
        $categories = Category::all();
        return view ('AdminPost.create_post', compact('categories'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'img' => 'required',
            'describe' => 'required',
            'category_id' => 'required',
        ]);

        $post = new Topics;

        //image upload - meh.... proceed with image addresses from the web
        
        //other  field

        $post->title = $request->title;
        $post->img= $request->img;
        $post->description = $request->description;
        $post->describe = $request->describe;
        $post->category_id = $request->category_id;

        $post->save();

        return redirect()->route('admin.posts.create')->with('success', 'Post Created Successfully');

    }

   
    public function show(string $id)
    {
        //
    }

  
    public function edit(string $id)
    {
        $topics = Topics::find($id);
        $categories = Category::all();
        return view('AdminPost.edit_post', compact('topics', 'categories'));
    }

   
    public function update(Request $request, $id)
{
    $this->validate($request, [
        'title' => 'required',
        'description' => 'required',
        //img update not required
        'describe' => 'required',
        'category_id' => 'required',
    ]);

    $post = Topics::find($id);

    $post->title = $request->title;
    $post->description = $request->description;
    $post->describe = $request->describe;
    $post->category_id = $request->category_id;
    
    $post->save();

    return redirect()->route('admin.posts.index')->with('success', 'Post Updated Successfully');
}

    
    public function destroy(string $id)
    {
        
        // $project = Project::find($id);
        // @unlink(public_path($project->thumbnail));
        // $project->delete();

        // return redirect()->route('admin.projects.index')->with('success', 'Project Updated Successfully!');

    
    }
}
