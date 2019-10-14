<?php
namespace Controllers;

class ViewController
{

	public function __construct()
	{
		
	}

	public function index()
	{
		$view = 'HOME';
		include URL_VISTA . 'header.php';
		require(URL_VISTA . "home.php");
		include URL_VISTA . 'footer.php';
	} 
}





?>
