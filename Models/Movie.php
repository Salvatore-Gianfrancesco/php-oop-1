<?php

class Movie
{
    public $title;
    public $description;
    public $year;
    public $cast;
    public $genres;
    public $src;

    public function __construct(string $title, string $description, $year, array $cast, array $genres, string $src)
    {
        $this->title = $title;
        $this->description = $description;
        $this->year = $year;
        $this->cast = $cast;
        $this->genres = $genres;
        $this->src = $src;

        if (gettype($year) !== 'integer') {
            echo 'Data type error! Year must be an integer values';
            die;
        }

        foreach ($cast as $actor) {
            if (gettype($actor) !== 'string') {
                echo 'Data type error! Actors must be a string values';
                die;
            }
        }

        foreach ($genres as $genre) {
            if (gettype($genre) !== 'string') {
                echo 'Data type error! Genres must be a string values';
                die;
            }
        }
    }

    public function get_title()
    {
        return $this->title;
    }
}
