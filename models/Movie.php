<?php

	class Movie {
		public $title;
		public $director;
		public $release_year;
		public $genre;

		use OnSale;

		public function __construct($title, $director, $release_year, array $genre) {
			$this->title = $title;
			$this->director = $director;
			$this->release_year = $release_year;
			$this->genre = $genre;
		}
	}
?>