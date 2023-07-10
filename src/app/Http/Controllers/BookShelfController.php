<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BookShelf;

class BookShelfController extends Controller
{
    public function index()
    {
        // $bookShelves = BookShelf::where('user_id', Auth::id())->get();
        return view('book_shelves.index');
    }
}
