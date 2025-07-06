<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //商品一覧ページ
        public function index()
    {
        return view('index');
    }

}


