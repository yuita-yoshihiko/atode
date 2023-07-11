<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BookShelf;

class BookShelfController extends Controller
{
    public function index()
    {
        $book_shelves = BookShelf::where('user_id', Auth::id())->get();
        return view('book_shelves.index', compact('book_shelves'));
    }

    public function create()
    {
        return view('book_shelves.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        BookShelf::create([
            'title' => $request->title,
            'user_id' => $request->user()->id,
        ]);

        return redirect()->route('book_shelves.index');
    }

    public function show($id)
    {
        $book_shelf = BookShelf::find($id);
    
        return view('book_shelves.show', compact('book_shelf'));
    }

    public function edit($id)
    {
        $book_shelf = BookShelf::find($id);

        return view('book_shelves.edit', compact('book_shelf'));
    }

    public function update(Request $request, $id)
    {
        $book_shelf = BookShelf::find($id);

        $book_shelf->title = $request->title;
        $book_shelf->save();

        return to_route('book_shelves.index');
    }

    public function destroy($id)
    {
        $book_shelf = BookShelf::find($id);
        $book_shelf->delete();

        return to_route('book_shelves.index');
    }

    public function showLikedBookShelf()
    {
        $likedBookShelves = Auth::user()->likedBookShelves;

        return view('book_shelves.liked', ['likedBookShelves' => $likedBookShelves]);
    }
}
