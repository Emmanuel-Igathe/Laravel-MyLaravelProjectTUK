<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product; // Ensure you import the Product model

use App\Models\Women;

class WomenController extends Controller
{
    public function index()
    {
        $products = Product::where('category' , 'women')->get();//Fetch women products from database
        return view('pages.women', compact('products'));
    }
}