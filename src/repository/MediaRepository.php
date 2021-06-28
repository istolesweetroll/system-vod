<?php
require_once 'Repository.php';
require_once __DIR__ . '/../models/MediaObject.php';

class MediaRepository extends Repository
{
    public function addMovie(Movie $movie)
    {

        $stmt = $this->database->connect()->prepare('
            INSERT INTO movies (title, description,  filelink, coverlink, releasedate, category, admin_id)
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
    public function addSeries(Series $series)
    {

        $stmt = $this->database->connect()->prepare('
            INSERT INTO series (title, code,  filelink, coverlink, releasedate, category)
            VALUES (?, ?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $series->getTitle(),
            $series->getCode(),
            $series->getFileLink(),
            $series->getCoverLink(),
            $series->getReleaseDate(),
            $series->getCategory(),

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
    public function getMaxSeriesIndex(): int
    {

        $stmt = $this->database->connect()->prepare('SELECT series_id
FROM series
WHERE series_id=(
    SELECT max(series_id) FROM series
    )');
        $stmt->execute();
        $maxID= $stmt->fetch(PDO::FETCH_ASSOC);
        $maxID = (int)$maxID['series_id'];
        return $maxID;
    }
    public function getCoverLinkMovie(int $index): string
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
    public function getCoverLinkSeries(int $index): string
    {

        $stmt = $this->database->connect()->prepare('
            SELECT coverlink FROM public.series WHERE series_id = :series_id
        ');
        $stmt->bindParam(':series_id', $index, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->execute();
        $coverLink= $stmt->fetch(PDO::FETCH_ASSOC);
        $coverLink = (string)$coverLink['coverlink'];
        return $coverLink;
    }
    public function getFileLinkMovies(int $index): string
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
    public function getFileLinkSeries(int $index): string
    {

        $stmt = $this->database->connect()->prepare('
            SELECT filelink FROM public.series WHERE series_id = :series_id
        ');
        $stmt->bindParam(':series_id', $index, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->execute();
        $fileLink= $stmt->fetch(PDO::FETCH_ASSOC);
        $fileLink = (string)$fileLink['filelink'];
        return $fileLink;
    }
    public function searchMovies(string $title): array
    {
        $stmt = $this->database->connect()->prepare('
           Select movie_id from public.movies where title = :title

');
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->execute();
        $fileLink= $stmt->fetch(PDO::FETCH_ASSOC);
        if($fileLink == NULL) return array("NO RESULTS FOUND");
       else return $fileLink;
    }
    public function searchSeries(string $title): array
    {
        $stmt = $this->database->connect()->prepare('
           Select series_id from public.series where title = :title

');
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->execute();
        $fileLink= $stmt->fetch(PDO::FETCH_ASSOC);
        if($fileLink == NULL) return array("NO RESULTS FOUND");
        else return $fileLink;

    }

}