<?php namespace App\Http\Controllers;

class ResumeController extends Controller {

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
	 * @get("resume", as="resume")
	 */
	public function index()
	{
		return view('resume.home');
	}
}
