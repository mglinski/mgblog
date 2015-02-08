<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| Controller methods are called when a request enters the application
	| with their assigned URI. The URI a method responds to may be set
	| via simple annotations. Here is an example to get you started!
	|
	*/

	/**
	 * @get("/", as="home")
	 */
	public function index()
	{
		return view('home');
	}

	/**
	 * @get("about", as="home")
	 */
	public function about()
	{
		return view('site.about', ['noJumbotron' => true]);
	}

}
