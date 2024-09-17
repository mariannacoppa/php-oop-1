<?php
    //inizializzo la classe Movie nella quale dichiaro 3 variabili
    class Movie {
        public $title;
        public $genre;
        public $year;

        //definisco un costruttore
        function __construct($title, $genre, $year) {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->year = $_year;
        }

        // definisco due metodi
        public function getMovieTitle() {
            return $this->title;
        }
        function getMovieDetails() {
            return $this->title." ".$this->genre." ".$this->year;
        }

        //definisco 3 oggetti e invoco il costruttre
        $avatar = new Movie('Avatar', 'Fantascienza', '2009');
        $big = new Movie('Big', 'Commedia', '1988');
        $CastAway = new Movie('Cast Away', 'Drammatico', '2000');
    }
?>