<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Get cart items from session using Laravel's session helper
        $cart = session()->get('cart', []);
        
        // Calculate totals
        $subtotal = 0;
        $itemCount = 0;
        
        foreach ($cart as $item) {
            // Extract numeric price
            $raw_price = $item['price'] ?? '0';
            if (!is_numeric($raw_price)) {
                $price = floatval(preg_replace('/[^0-9.]/', '', explode('-', $raw_price)[0]));
            } else {
                $price = floatval($raw_price);
            }
            
            $quantity = $item['quantity'] ?? 1;
            $item_total = $price * $quantity;
            $subtotal += $item_total;
            $itemCount += $quantity;
        }
        
        $shipping = 150;
        $tax = $subtotal * 0.16;
        $total = $subtotal + $shipping + $tax;
        
        return view('cart', compact('cart', 'subtotal', 'itemCount', 'shipping', 'tax', 'total'));
    }
    
    public function add(Request $request)
    {
        // Validate the request
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_image' => 'required'
        ]);
        
        // Get the current cart
        $cart = session()->get('cart', []);
        
        // Use product name as the identifier
        $productName = $request->input('product_name');
        
        if (isset($cart[$productName])) {
            // Product exists, increase quantity
            $cart[$productName]['quantity']++;
        } else {
            // Add new product to cart
            $cart[$productName] = [
                'name' => $productName,
                'price' => $request->input('product_price'),
                'image_url' => $request->input('product_image'),
                'quantity' => 1
            ];
        }
        
        // Save cart to session
        session()->put('cart', $cart);
        
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    
    public function remove($productName)
    {
        $cart = session()->get('cart', []);
        
        if (isset($cart[$productName])) {
            unset($cart[$productName]);
            session()->put('cart', $cart);
            
            return redirect()->route('cart.index')->with('success', 'Product removed from cart successfully!');
        }
        
        return redirect()->route('cart.index')->with('error', 'Product not found in cart!');
    }
    
    public function update(Request $request, $productName)
    {
        $quantity = $request->input('quantity');
        $cart = session()->get('cart', []);
        
        if (isset($cart[$productName]) && $quantity > 0) {
            $cart[$productName]['quantity'] = $quantity;
            session()->put('cart', $cart);
            
            return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');
        }
        
        return redirect()->route('cart.index')->with('error', 'Failed to update cart!');
    }
}
