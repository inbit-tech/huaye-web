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
		return view('bec.bec');
	}

	// Products - Ultra-High-Temperature Wire
	public function uht() 
	{
		return view('uht.uht');
	}

	// Products - LITZ Wire / Silk Served LITZ Wire
	public function litz() 
	{
		return view('litz.litz');
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
