<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    public function templates() 
    {
    	return [
	    		[
	    			"id" => '1234567890',
	    			"name" => "Kayna - Home", 
	    			"type" => "home",
	    			"description" => "Kayna is the default template for BlogTheory. This is a simple and elegant home template optimized for general blogging sites.", 
	    			"url" => "https://example.org/1",
	    			"released_at" => now(),
	    			"version" => 1.0
	    		],
	    		[
	    			"id" => '1234567891',
	    			"name" => "Kayna - Page", 
	    			"type" => "Kayna is the default template for BlogTheory. This is a clean looking page template optimized for simplicity, speed and ease of use.",
	    			"description" => "test2 description", 
	    			"url" => "https://gist.githubusercontent.com/akash-mitra/119fd129012d569b6e3ad1b2a6b38dea/raw/fd5b616b4e4138b4220556cd32bcde157ba2c31d/kayna-page.html",
	    			"released_at" => now(),
	    			"version" => 1.0
	    		]
    	];
    }
}
