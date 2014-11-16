<?php

$router->get("/", ['as' => "home", 'uses' => 'HomeController@index']);

$router->get("about", ['as' => "about", 'uses' => 'HomeController@about']);

$router->get("resume", ['as' => "resume", 'uses' => 'ResumeController@index']);

/*
|--------------------------------------------------------------------------
| Authentication & Password Reset Controllers
|--------------------------------------------------------------------------
|
| These two controllers handle the authentication of the users of your
| application, as well as the functions necessary for resetting the
| passwords for your users. You may modify or remove these files.
|
*/
$router->controller('auth', 'AuthController');
$router->controller('password', 'PasswordController');