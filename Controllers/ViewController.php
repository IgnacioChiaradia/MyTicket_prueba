<?php
namespace Controllers;

use \Controllers\MovieController as MoviesC;

class ViewController
{

	public function __construct()
	{
		$this->ControlMovies = new MoviesC;
	}

	public function index()
	{
		include URL_VISTA . 'header.php';
		require(URL_VISTA . "principal.php");
		include URL_VISTA . 'footer.php';
	} 


	public function movie()
	{
		$arrayMovies = $this->ControlMovies->getList();
		include URL_VISTA . 'header.php';
		require(URL_VISTA . "movie-list.php");
		include URL_VISTA . 'footer.php';
	} 
}

?>
