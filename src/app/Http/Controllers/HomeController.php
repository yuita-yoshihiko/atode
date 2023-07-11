<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookShelf;

class HomeController extends Controller
{
    public function dashboard()
    {
        $book_shelves = BookShelf::all();

        return view('dashboard', compact('book_shelves'));
    }
}
