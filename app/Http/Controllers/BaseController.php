<?php namespace MGBlog\Http\Controllers;

use Illuminate\Routing\Controller;

/**
 * @middleware("UnderMaintenance")
 * @middleware("VerifyCsrfToken", on={"post", "put", "delete"})
 */
class BaseController extends Controller {

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

}
