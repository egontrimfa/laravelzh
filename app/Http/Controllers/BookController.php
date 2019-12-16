<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
    	$books = Book::all();
   		return view('books', compact('books'));
    }

    public function create()
    {
        return view('create');
    } 

    public function store(Request $request)
    {
      $request->validate([
        'author_id'=>'required|Integer',
        'title'=>'required',
        'year'=> 'required|Integer',
      ]);

      $book = new Book([
        'author_id' => $request->input('author_id'),
        'title'=> $request->input('title'),
        'year'=> $request->input('year')
      ]);     
      $book->save();
      return redirect('/books')->with('status', 'Books created successfully');
    }

    public function destroy($id)
    {
      $book = Book::find($id);
      $book->delete();
      return redirect('/books')->with('status', 'Book has been deleted!!'); 
    } 
}
