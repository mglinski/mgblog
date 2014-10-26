<?php

get("/", ['as' => "home", 'uses' => 'MGBlog\Http\Controllers\HomeController@index']);

get("about", ['as' => "about", 'uses' => 'MGBlog\Http\Controllers\HomeController@about']);

get("resume", ['as' => "resume", 'uses' => 'MGBlog\Http\Controllers\ResumeController@index']);