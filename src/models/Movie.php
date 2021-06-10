<?php

interface MediaFactory{
    public function create($title, $description, $season, $episode, $fileLink, $coverLink, $year, $category): MediaObject;
}
interface MediaObject
{
    public function getType(): string;
}
class Movie implements MediaObject{

    /**
     * Movie constructor.
     * @param $title
     * @param $description
     * @param $fileLink
     * @param $coverLink
     * @param $year
     * @param $category
     */
    private $title;
    private $description;
    private $fileLink;
    private $coverLink;
    private $releaseDate;
    private $category;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getFileLink()
    {
        return $this->fileLink;
    }

    /**
     * @param mixed $fileLink
     */
    public function setFileLink($fileLink): void
    {
        $this->fileLink = $fileLink;
    }

    /**
     * @return mixed
     */
    public function getCoverLink()
    {
        return $this->coverLink;
    }

    /**
     * @param mixed $coverLink
     */
    public function setCoverLink($coverLink): void
    {
        $this->coverLink = $coverLink;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param mixed $releaseDate
     */
    public function setReleaseDate($releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    public function __construct($title, $description, $fileLink, $coverLink, $year, $category)
    {
        $this->title = $title;
        $this->description = $description;
        $this->fileLink = $fileLink;
        $this->coverLink = $coverLink;
        $this->year = $year;
        $this->category = $category;
    }
    public function getType():string{
        return "Movie";
    }
}
class Series implements MediaObject
{
    /**
     * Series constructor.
     * @param $title
     * @param $description
     * @param $season
     * @param $episode
     * @param $fileLink
     * @param $coverLink
     * @param $year
     * @param $category
     */
    public function __construct($title, $description, $season, $episode, $fileLink, $coverLink, $year, $category)
    {
        $this->title = $title;
        $this->description = $description;
        $this->season = $season;
        $this->episode = $episode;
        $this->fileLink = $fileLink;
        $this->coverLink = $coverLink;
        $this->year = $year;
        $this->category = $category;
    }


    public function getType(): string
    {
        return "Series";
    }
};
class MovieFactory implements MediaFactory{

    public function create($title, $description, $season, $episode, $fileLink, $coverLink, $year, $category): MediaObject{
        return new Movie($title, $description, $fileLink, $coverLink, $year, $category);

    }
}
class SeriesFactory implements MediaFactory{

    private $title;
    private $description;
    private $season;
    private $episode;
    private $fileLink;
    private $coverLink;
    private $year;
    private $category;
    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param mixed $season
     */
    public function setSeason($season): void
    {
        $this->season = $season;
    }

    /**
     * @return mixed
     */
    public function getEpisode()
    {
        return $this->episode;
    }

    /**
     * @param mixed $episode
     */
    public function setEpisode($episode): void
    {
        $this->episode = $episode;
    }

    /**
     * @return mixed
     */
    public function getFileLink()
    {
        return $this->fileLink;
    }

    /**
     * @param mixed $fileLink
     */
    public function setFileLink($fileLink): void
    {
        $this->fileLink = $fileLink;
    }

    /**
     * @return mixed
     */
    public function getCoverLink()
    {
        return $this->coverLink;
    }

    /**
     * @param mixed $coverLink
     */
    public function setCoverLink($coverLink): void
    {
        $this->coverLink = $coverLink;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }


    public function create($title, $description, $season, $episode, $fileLink, $coverLink, $year, $category): MediaObject{
        return new Series($title, $description, $season, $episode, $fileLink, $coverLink, $year, $category);

    }
}


