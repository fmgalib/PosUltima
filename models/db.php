<?php

class Connection{

	public function connect(){

		$link = new PDO("mysql:host=localhost;dbname=posultima",
						"root", 
						"");

		$link -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $link;

	}

	
}