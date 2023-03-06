<?php

class Movie{

    public $title;
    public $genre;
    public $overview;
    public $duration;
    public $year;
    public $director;
    public $poster;
    public  static $count = 0;

    public function __construct($_title, $_genre, $_duration, $_year, $_director, $_overview = null, $_poster = null){
        $this ->title = $_title;
        $this ->genre = $_genre;
        $this ->overview = $_overview;
        $this ->duration = $_duration;
        $this ->year = $_year;
        $this ->director = $_director;
        $this ->poster = $_poster;

        self::$count++;
    }

    public function printMovie()
    {
        echo '<h2>';
        echo $this->title;
        echo '</h2>';

        echo '<p>';
        echo $this->overview;
        echo '<p>';

        echo '<div>';
        echo 'Durata: ';
        echo $this->duration;
        echo '</div>';

        echo '<h3>';
        echo 'GENERI: ';
        echo '</h3>';
        echo '<ul>';
        echo '<li>';
        echo $this->genre;
        echo '</li>';
        echo '</ul>';


    }

    public static function getCount()
    {
        return self::$count;
    }

}

$pulpFiction = new Movie('Pulp Fiction', 'Wow', 'Overview di Pulp Fiction', 150, 1994, 'Quentin Tarantino', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9p10J9Xp7MuaVac56g8BwAuXEsA.jpg');

var_dump($pulpFiction);

$pulpFiction->printMovie();

echo '<h1>COUNT</h1>';
var_dump(movie::getCount());

$laCittaIncantata = new Movie('La città incantata', 'Animazione', 130, 2000, 'Hayao Miyazaki');

var_dump($laCittaIncantata);

echo '<h1>COUNT</h1>';
var_dump(movie::getCount());

$laCittaIncantata->printMovie();

?>
