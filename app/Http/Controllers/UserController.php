<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Topics;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{

        // function for user for crud
            public function createPost()
        {
            $categories = Category::all();
            return view('AdminPost.create_post', compact('categories'));
        }

        public function storePost(Request $request)
        {
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'img' => 'required',
                'describe' => 'required',
                'category_id' => 'required',
            ]);

            $post = new Topics;

            $post->title = $request->title;
            $post->img= $request->img;
            $post->description = $request->description;
            $post->describe = $request->describe;
            $post->category_id = $request->category_id;

            $post->user_id = auth()->user()->id;

            $post->save();

            return redirect()->route('posts.index')->with('success', 'Post Created Successfully');
        }

        public function editPost($id)
        {
            $topics = Topics::find($id);
            $categories = Category::all();
            return view('AdminPost.edit_post', compact('topics', 'categories'));
        }

        public function updatePost(Request $request, $id)
        {
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'describe' => 'required',
                'category_id' => 'required',
            ]);

            $post = Topics::find($id);

            $post->title = $request->title;
            $post->description = $request->description;
            $post->describe = $request->describe;
            $post->category_id = $request->category_id;

            $post->user_id = auth()->user()->id;

            $post->save();

            return redirect()->route('posts.index')->with('success', 'Post Updated Successfully');

        }
        public function destroyPost($id)
        {
            if (Auth::check()) {
                $user = Auth::user();
                $post = Topics::findOrFail($id);
                $post->delete();
                return redirect()->route('posts.index')->with('success', 'Post Deleted Successfully');
            }
        }
        


    // user can save a post
    public function saveTopic(Request $request, User $user)
    {
        $topic = Topics::find($request->topics_id);
        $user->savedTopics()->attach($topic->id);

        return back();
    }

    public function removeSavedTopic(Request $request, User $user)
    {
        $user->savedTopics()->detach($request->topics_id);

        return back();
    }

    public function show(User $user)
    {
        $savedTopics = $user->savedTopics;

        return view('user.show', ['savedTopics' => $savedTopics]);
    }

    // saving topics
    public function showSavedTopics(User $user)
    {
        $savedTopics = $user->savedTopics;

        return view('user.savedTopics', ['savedTopics' => $savedTopics]);
    }

    public function unsaveTopic(Request $request, User $user)
    {
        $user->savedTopics()->detach($request->topics_id);

        return back();
    }
}