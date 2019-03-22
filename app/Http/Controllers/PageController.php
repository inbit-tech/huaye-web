<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Homepage
	public function home() 
	{
		return view('home.index');
	}

    // Products - Home
	public function products() 
	{
		return view('products.home');
	}

	// Products - Bonding Enameled Cooper Wire
	public function bec() 
	{
		return view('products.bec');
	}

	// Products - Ultra-High-Temperature Wire
	public function uht() 
	{
		return view('products.uht');
	}

	// Products - LITZ Wire / Silk Served LITZ Wire
	public function litz() 
	{
		return view('products.litz');
	}

    // About Us
	public function about() 
	{
		return view('about.home');
	}

    // Contact Us
    public function contact() 
	{
		return view('contact.home');
	}
}
