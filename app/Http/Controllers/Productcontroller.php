<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Queryexception;
use Illuminate\Support\Facades\validator;
use Illuminate\Support\Facades\Log;
use App\Models\Product;
use App\Models\Catergory;

class ProductController extends Controller
{
     public function index(){
        $data = Product::get();
        return view('product-list',compact('data'));
     }
}