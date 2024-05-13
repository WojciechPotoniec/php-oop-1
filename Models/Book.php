<?php
class Book
{

    public int $id;
    public string $title;
    public string $cover;
    // public string $overview;
    public float $price;
    public float $rating;
    public function __construct($id, $title, $cover, $rating, $price)
    {
        $this->id = $id;
        $this->title = $title;
        $this->cover = $cover;
        // $this->overview = $overview;
        $this->price = $price;
        $this->rating = $rating;
    }
    public static function printBooks()
    {
        $bookData = file_get_contents(__DIR__ . '/books_db.json');
        $datatoArray = json_decode($bookData, true);
        $books = [];
        foreach ($datatoArray as $book) {
            $books[] = new Book($book['id'], $book['title'], $book['cover'], $book['rating'], $book['price']);
        }
        // var_dump($books);
        return $books;
    }
}