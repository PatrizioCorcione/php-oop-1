<?php

class Movie
{
  public $title;
  public $year;
  public $plot;
  public $genres;
  public $fullInfo;

  public function __construct(string $_title, int $_year, string $_plot, array $_genres)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->plot = $_plot;
    $this->genres = $_genres;
    $this->fullInfo = $this->getFullInfo();
  }

  public function getFullInfo()
  {
    return $this->title . ' ' . $this->year . ' ' . implode(' ', $this->genres);
  }
}
