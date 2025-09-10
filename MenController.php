<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product; // Ensure you import the Product model

use App\Models\men;

class MenController extends Controller
{
    public function index()
    {
        $products = Men::all(); // Use the Men model directly//Fetch men products from database
        return view('pages.men', compact('products'));
    }
}
