<?php

namespace App\Http\Controllers;

use App\Models\Book_Category;
use App\Models\books;
use App\Models\Books as ModelsBooks;
use App\Models\Categories;
use App\Models\Publishers;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

// use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function showAll() {
        $data = books::all();
        $category = Categories::all();

        return view('home', compact('data'), compact('category'));
    }

    public function showDetail(Request $request, $id) {
        $detail = books::find($id);
        $thing = books::where('id', $id)->pluck('publisher_id');
        $publisher = Publishers::find($thing);
        $category = Categories::all();

        return view('detail', ['detail'=>$detail, 'thing'=>$thing, 'publisher'=>$publisher], compact('category'));
    }

    public function showCategory(Request $request, $id) {
        $category = Categories::all();
        $categ = Categories::find($id);
        $categories = Book_Category::where('category_id', '=', $id)->get();
        $categories = $categories->pluck('book_id');
        $selected = Books::whereIn('id', $categories)->get();

        return view('category', ['categ'=>$categ], compact('category', 'selected', 'categories'));
    }

    public function showPublisher() {
        $category = Categories::all();
        $publisher = Publishers::all();

        return view('publisher', compact('category', 'publisher'));
    }

    public function showPublisherDetail($id) {
        $category = Categories::all();
        $publisher = Publishers::find($id);
        $books = Books::where('publisher_id', '=', $id)->get();

        return view('publisher_detail', ['publisher'=>$publisher], compact('category', 'books'));
    }

    public function showContact() {
        $category = Categories::all();

        return view('contact', compact('category'));
    }
}
