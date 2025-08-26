<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller

{
    public function welcome() {
        $title = "Welcome to Simple Wear";
        return view('welcome')->with('title', $title);
    }

    public function index(){
        $title = "Welcome to Simple Wear Products";
        return view('pages.home')->with('title',$title);
    }

    public function registration() {
        return view('pages.registration');
    }


    public function admin() {

        return view('pages.admin');
    }

    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title', $title);
    }

    public function contact() {
        $title = "Contact Us";
        return view('pages.contact')->with('title', $title);
    }

    

    public function login() {
        return view('pages.login');
    }


    public function cart() {
        return view('pages.cart');
    }

    public function checkout() {
        return view('pages.checkout');
    }
}