<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function show($authorid)
    {
        $author = Author::findOrFail($authorid);
        return view('author', ['author' => $author]);    	
    }
}
