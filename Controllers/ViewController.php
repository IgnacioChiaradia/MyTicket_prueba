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
		include VISTA . 'header.php';
		require(VISTA . "principal.php");
		include VISTA . 'footer.php';
	}


	public function movie()
	{
		$arrayMovies = $this->ControlMovies->getList();
		include VISTA . 'header.php';
		require(VISTA . "movie-list.php");
		include VISTA . 'footer.php';
	}

	public function login()
	{
		include VISTA . 'header.php';
		require(VISTA . "login.php");
		include VISTA . 'footer.php';
	}
}

?>
