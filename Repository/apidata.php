<?php namespace repositories;
echo "holaaa";
include "../model/movie.php";

use model\Movie as Movie;

$movielist = array();

 function retrieveData(){
     $jsoncontent= file_get_contents('https://api.themoviedb.org/3/movie/now_playing?api_key=1e5c581fb6ceaf853ff088a424f4cfcb&language=en-US&page=1', true);
     $arrayTodecode = ($jsonContent) ? json_decode($jsonContent, true) : array();
     $filmArray = $arrayTodecode["results"];

     foreach ($filmArray as $indice) {
         $movie= new Movie(); //habra que pasarle datos al constructor ?
         $movie->set_popularity($indice['popularity']);
         $movie->setVote_count($indice['vote_count']);
         array_push($movielist, $movie);
     }
     return $movielist;
 }


?>
