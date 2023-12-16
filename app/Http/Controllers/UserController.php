<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Topics;
use Illuminate\Http\Request;

class UserController extends Controller
{
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

    public function showSavedTopics(User $user)
{
    $savedTopics = $user->savedTopics;

    return view('user.savedTopics', ['savedTopics' => $savedTopics]);
}
}