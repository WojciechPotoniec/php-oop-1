<?php
include_once __DIR__ . '/Category.php';
class Product
{
    public $id;
    public $title;
    public $img;
    public $overview;
    public $rating;
    public $price;
    public function __construct($id, $title, $img, $overview, $rating, $price){
        $this->id = $id;
        $this->name = $title;
        $this->img = $img;
        $this->description = $overview;
        $this->rating = $rating;
        $this->price = $price;
    }

}