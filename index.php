<?php

class Movie
{
    public $title;
    public $description;
    public $genre;
    public $cast;

    public function __construct(string $title, string $description, string $genre, array $cast)
    {
        $this->title = $title;
        $this->description = $description;
        $this->genre = $genre;
        $this->cast = $cast;
    }

    public function get_title()
    {
        return $this->title;
    }
}

$movie1 = new Movie('Back to the Future', 'lorem ipsum dolor', 'Science', ['Michael J. Fox', 'Christopher Lloyd']);
var_dump($movie1);
var_dump($movie1->get_title());

$movie2 = new Movie('Pirates of the Caribbean: The Curse of the Black Pearl', 'lorem ipsum dolor', 'Swashbuckler', ['Johnny Depp', 'Geoffrey Rush', 'Orlando Bloom', 'Keira Knightley']);
var_dump($movie2);
var_dump($movie2->get_title());
