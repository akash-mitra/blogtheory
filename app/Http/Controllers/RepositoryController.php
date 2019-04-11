<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    public function templates() 
    {
    	return [
	    		[
	    			"id" => '31415926',
	    			"name" => "Kayna - Home", 
	    			"type" => "home",
	    			"description" => "Kayna is the default template for BlogTheory. This is a simple and elegant home template optimized for general blogging sites.", 
	    			"url" => "https://gist.githubusercontent.com/akash-mitra/a8ad834eb955486ee594067a5d18c977/raw/dedbdcf2adbfde1ed4801ff21fb71ac079bfbd28/kayna-home.blade.php",
	    			"released_at" => now(),
	    			"version" => 1.0
	    		],
	    		[
	    			"id" => '31415927',
	    			"name" => "Kayna - Page", 
	    			"type" => "page",
	    			"description" => "Kayna is the default template for BlogTheory. This is a clean looking page template optimized for simplicity, speed and ease of use.", 
	    			"url" => "https://gist.githubusercontent.com/akash-mitra/a8ad834eb955486ee594067a5d18c977/raw/dedbdcf2adbfde1ed4801ff21fb71ac079bfbd28/kayna-page.blade.php",
	    			"released_at" => now(),
	    			"version" => 1.0
	    		],
	    		[
	    			"id" => '31415928',
	    			"name" => "Kayna - Category", 
	    			"type" => "category",
	    			"description" => "Kayna is the default template for BlogTheory. This is a clean looking Category template optimized for simplicity, speed and ease of use.", 
	    			"url" => "https://gist.githubusercontent.com/akash-mitra/a8ad834eb955486ee594067a5d18c977/raw/dedbdcf2adbfde1ed4801ff21fb71ac079bfbd28/kayna-category.blade.php",
	    			"released_at" => now(),
	    			"version" => 1.0
	    		],
	    		[
	    			"id" => '31415929',
	    			"name" => "Kayna - Profile", 
	    			"type" => "profile",
	    			"description" => "Kayna is the default template for BlogTheory. This is a clean looking Profile template.", 
	    			"url" => "https://gist.githubusercontent.com/akash-mitra/a8ad834eb955486ee594067a5d18c977/raw/dedbdcf2adbfde1ed4801ff21fb71ac079bfbd28/kayna-profile.blade.php",
	    			"released_at" => now(),
	    			"version" => 1.0
	    		]
    	];
    }
}
