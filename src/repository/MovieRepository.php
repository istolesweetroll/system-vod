<?php
require_once 'Repository.php';
require_once __DIR__.'/../models/Movie.php';

class MovieRepository extends Repository
{
    public function addMovie(Movie $movie)
    {

        $stmt = $this->database->connect()->prepare('
            INSERT INTO movies (title, description,  filelink, coverlink, releasedate, category)
            VALUES (?, ?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $movie->getTitle(),
            $movie->getDescription(),
            $movie->getFileLink(),
            $movie->getCoverLink(),
            $movie->getReleaseDate(),
            $movie->getCategory(),

        ]);
    }
    public function getMaxMovieIndex(): int
    {

        $stmt = $this->database->connect()->prepare('SELECT movie_id
FROM movies 
WHERE movie_id=(
    SELECT max(movie_id) FROM movies
    )');
        $stmt->execute();
        $maxID= $stmt->fetch(PDO::FETCH_ASSOC);
        $maxID = (int)$maxID['movie_id'];
        return $maxID;
    }
    public function getCoverLink(int $index): string
    {

        $stmt = $this->database->connect()->prepare('
            SELECT coverlink FROM public.movies WHERE movie_id = :movie_id
        ');
        $stmt->bindParam(':movie_id', $index, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->execute();
        $coverLink= $stmt->fetch(PDO::FETCH_ASSOC);
        $coverLink = (string)$coverLink['coverlink'];
        return $coverLink;
    }
    public function getFileLink(int $index): string
    {

        $stmt = $this->database->connect()->prepare('
            SELECT filelink FROM public.movies WHERE movie_id = :movie_id
        ');
        $stmt->bindParam(':movie_id', $index, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->execute();
        $fileLink= $stmt->fetch(PDO::FETCH_ASSOC);
        $fileLink = (string)$fileLink['filelink'];
        return $fileLink;
    }
}