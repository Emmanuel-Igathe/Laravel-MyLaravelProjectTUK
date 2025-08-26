<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        // Simple session-based cart implementation
        $cart = session()->get('cart', []);
        
        $productId = $request->input('product_id');
        
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'name' => $request->input('product_name'),
                'price' => $request->input('product_price'),
                'image' => $request->input('product_image'),
                'quantity' => 1
            ];
        }
        
        session()->put('cart', $cart);
        
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}