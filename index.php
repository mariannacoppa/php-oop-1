<?php
    include './bonus/server.php';
    //inizializzo la classe Movie nella quale dichiaro 3 variabili
    class Movie {
        public $title;
        public $genres;
        public $year;

        //definisco un costruttore
        function __construct($_title, Array $_genres, $_year) {
            $this->title = $_title;
            $this->genres = $_genres;
            $this->year = $_year;
        }

        // definisco due metodi
        public function getMovieTitle() {
            return $this->title;
        }
        function getMovieDetails() {
            return $this->genres." ".$this->year;
        }

    }
    
    //definisco 3 oggetti e invoco il costruttre
    $avatar = new Movie('Avatar', ['Fantascienza', 'Drammatico'], '2009');
    $big = new Movie('Big', ['Commedia', 'Drammatico'], '1988');
    $CastAway = new Movie('Cast Away', ['Drammatico', 'Avventura'], '2000');

    //stampo i valori delle proprietà dei 3 oggetti
    echo $avatar->getMovieTitle();
    echo '<br>';
    echo $avatar->getMovieDetails();
    echo '<hr>';
    echo $big->getMovieTitle();
    echo '<br>';
    echo $big->getMovieDetails();
    echo '<hr>';
    echo $CastAway->getMovieTitle();
    echo '<br>';
    echo $CastAway->getMovieDetails();
?>