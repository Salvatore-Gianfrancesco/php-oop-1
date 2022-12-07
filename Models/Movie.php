<?php

class Movie
{
    public $title;
    public $description;
    public $genres;
    public $cast;

    public function __construct(string $title, string $description, array $genres, array $cast)
    {
        $this->title = $title;
        $this->description = $description;
        $this->genres = $genres;
        $this->cast = $cast;

        foreach ($cast as $actor) {
            if (gettype($actor) !== 'string') {
                echo 'Data type error! Actors must be string values';
                die;
            }
        }

        foreach ($genres as $genre) {
            if (gettype($genre) !== 'string') {
                echo 'Data type error! Genres must be string values';
                die;
            }
        }
    }

    public function get_title()
    {
        return $this->title;
    }
}
