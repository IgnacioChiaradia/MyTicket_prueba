<?php namespace repositories;

include_once ("C:\\xampp\\htdocs\\MyTicket\\model\\Movie.php");
use model\Movie as Movie;


$movielist= array();


 function retrieveData(){
     $jsonContent= file_get_contents('https://api.themoviedb.org/3/movie/now_playing?api_key=1e5c581fb6ceaf853ff088a424f4cfcb&language=en-US&page=1', true);     
     $arrayTodecode = ($jsonContent) ? json_decode($jsonContent, true) : array();
     $filmArray = $arrayTodecode['results'];    
     foreach ($filmArray as $indice) {
         $movie= new Movie();
         $movie->set_popularity($indice['popularity']);
         $movie->setVote_count($indice['vote_count']);
         $movie->setVideo($indice['video']);
         $movie->setPoster_path($indice['poster_path']);
         $movie->setId($indice['id']);
         $movie->setAdult($indice['adult']);
         $movie->setBackdrop_path($indice['backdrop_path']);
         $movie->setOriginal_language($indice['original_language']);
         $movie->setOriginal_title($indice['original_title']);
         $movie->setGenre_ids($indice['genre_ids']);
         $movie->setTitle($indice['title']);
         $movie->setVote_average($indice['vote_average']);
         $movie->setOverview($indice['overview']);
         $movie->setRelease_date($indice['release_date']);
         echo $movie;
         array_push($movielist, $movie);
     }
     return $movielist;
 }


?>