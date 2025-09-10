<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class WomenController extends Controller
{
    public function index()
    {
        try {
            // Try to fetch women products from database
            $products = Product::where('category', 'women')->get();
        } catch (\Exception $e) {
            // If there's an error (table doesn't exist, etc.), use empty array
            Log::error('Error fetching women products: ' . $e->getMessage());
            $products = collect([]); // Empty collection
        }
        
        return view('pages.women', compact('products'));
    }
}
