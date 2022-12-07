<?php

$movies = file_get_contents('../movies.json');

header('Content-Type: application/json');
echo $movies;
