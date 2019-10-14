<?php
namespace Dao;

use Model\Movie as Movie;

class MovieFileDao
{


	public function getNowApi()
	{
		return $this->retrieveData();
	}


	private function retrieveData()
	{
		$movielist= array();

		$jsonContent= file_get_contents('https://api.themoviedb.org/3/movie/now_playing?api_key=1e5c581fb6ceaf853ff088a424f4cfcb&language=en-US&page=1', true);

		$arrayTodecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

		$filmArray = $arrayTodecode['results'];



		foreach ($filmArray as $indice)
		{

			$movie= new Movie();
			$movie->setId($indice['id']);
			//$movie->set_popularity($indice['popularity']); //tira error, no sabemos porque
			$movie->setVote_count($indice['vote_count']);
			$movie->setVideo($indice['video']);
			$movie->setPoster_path($indice['poster_path']);
			$movie->setAdult($indice['adult']);
			$movie->setBackdrop_path($indice['backdrop_path']);
			$movie->setOriginal_language($indice['original_language']);
			$movie->setOriginal_title($indice['original_title']);
			$movie->setGenre_ids($indice['genre_ids']);
			$movie->setTitle($indice['title']);
			$movie->setVote_average($indice['vote_average']);
			$movie->setOverview($indice['overview']);
			$movie->setRelease_date($indice['release_date']);

			array_push($movielist, $movie);

		}

		return $movielist;
	}
}

?>
