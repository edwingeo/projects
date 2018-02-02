<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('home');
	}
	/**
	 * Show the stocks.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getStock() {

		return view('stock.get_stock_form');
	}

}
