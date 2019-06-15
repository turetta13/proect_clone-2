<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Database;
use App\Product;
use App\Article;
use App\Order;
use App\Orders_to_product;
use App\Category;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getArticles()
    {
        $articles = Article::all();
        return;
    }

    public function getProducts()
    {
        $Products = App\Product::where('publish', '=', '1')->get();
        foreach ($Products as $key) {
            return $key->name . ' ' . $key->description . '<br> ';
        }

    }

    public function index()
    {
        $user = \Auth::user();
        return view('home', [
            'user' => $user
        ]);

    }
}
