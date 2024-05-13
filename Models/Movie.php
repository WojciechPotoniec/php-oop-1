<?php
class Movie {
    public int $id;
    public string $title;
    public string $cover;
    public string $overview;
    public float $price;
    public float $rating;
    public function __construct($id, $title, $cover, $overview, $rating, $price){
        $this->id = $id;
        $this->title = $title;
        $this->cover = $cover;
        $this->overview = $overview;
        $this->price = $price;
        $this->rating = $rating;
    }
    public static function printMovies() {
       $movieData = file_get_contents(__DIR__ . '/movies_db.json');
       $datatoArray = json_decode($movieData, true);
       $movies = [];
       foreach($datatoArray as $movie){
           $movies[] = new Movie($movie['id'], $movie['title'], $movie['cover'], $movie['overview'], $movie['rating'], $movie['price']);
       }
       return $movies;
    }
}
