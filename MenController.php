<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Men;

class MenController extends Controller
{
    public function index()
    {
        $products = Men::where('category' , 'men')->get();
        return view('pages.men', compact('products'));
    }
}
