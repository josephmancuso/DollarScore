<?php

require_once 'init.php';
require_once '../models/models.php';


Route::get("home", function(){
	
	Render::view("template_name", 
	[
		"variable" => "value",
	]);
});
