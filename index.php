<?php
    //inizializzo la classe Movie nella quale dichiaro 3 variabili
    class Movie {
        public $title;
        public $genre;
        public $year;

        //definisco un costruttore
        function __construct($_title, $_genre, $_year) {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->year = $_year;
        }

        // definisco due metodi
        public function getMovieTitle() {
            return $this->title;
        }
        function getMovieDetails() {
            return $this->genre." ".$this->year;
        }

    }
    
    //definisco 3 oggetti e invoco il costruttre
    $avatar = new Movie('Avatar', 'Fantascienza', '2009');
    $big = new Movie('Big', 'Commedia', '1988');
    $CastAway = new Movie('Cast Away', 'Drammatico', '2000');

    //stampo i valori delle proprietà dei 3 oggetti
    echo $avatar -> getMovieTitle();
    echo '<br>';
    echo $avatar -> getMovieDetails();
    echo '<hr>';
    echo $big -> getMovieTitle();
    echo '<br>';
    echo $big -> getMovieDetails();
    echo '<hr>';
    echo $CastAway -> getMovieTitle();
    echo '<br>';
    echo $CastAway -> getMovieDetails();
?>