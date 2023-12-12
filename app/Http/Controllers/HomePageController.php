<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Topics;

class HomePageController extends Controller
{
   
    public function index()
    {
        //Dynamic data home page
        $topics = Topics::all();
        return view('UsersPanel.HomePage', compact('topics'));
    }

   
    public function show(string $id)
    {
        //
    }

        
}
