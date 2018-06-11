<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        ($sort_param = $request->get('cat_id')) ?
            $products = Category::find($sort_param)->category()->latest()->paginate(12) :
            $products = Product::latest()->paginate(12);
        return view('Template.index', ['products'=>$products]);
    }
}
