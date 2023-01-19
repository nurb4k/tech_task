<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('books', ['books' => Book::all()]);
    }

    public function create()
    {
        return view('create', ['authors' => Author::all()]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'page_count' => 'required|numeric',
            'description' => 'required|max:255',
            'author_id' => 'required|exists:authors,id'
        ]);
        Book::create($validated);
        return redirect()->back();
    }

    public function add_author(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        Author::create($validated);

        return redirect()->back();
    }

}
