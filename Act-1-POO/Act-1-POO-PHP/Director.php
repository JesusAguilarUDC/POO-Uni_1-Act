<?php

class Director {
	private $IdDirector;
	private $NombreDirector;
	private $EdadDirector;
	private $PremiosDirector;
	private $PeliculaDirigida;

	// Constructor
	public function __construct($id, $nombre, $edad, $premios, $pelicula) {
		$this->IdDirector = $id;
		$this->NombreDirector = $nombre;
		$this->EdadDirector = $edad;
		$this->PremiosDirector = $premios;
		$this->PeliculaDirigida = $pelicula;
	}

	// Getters
	public function getIdDirector() {
		return $this->IdDirector;
	}

	public function getNombreDirector() {
		return $this->NombreDirector;
	}

	public function getEdadDirector() {
		return $this->EdadDirector;
	}

	public function getPremiosDirector() {
		return $this->PremiosDirector;
	}

	public function getPeliculaDirigida() {
		return $this->PeliculaDirigida;
	}

	// Setters
	public function setIdDirector($id) {
		$this->IdDirector = $id;
	}

	public function setNombreDirector($nombre) {
		$this->NombreDirector = $nombre;
	}

	public function setEdadDirector($edad) {
		$this->EdadDirector = $edad;
	}

	public function setPremiosDirector($premios) {
		$this->PremiosDirector = $premios;
	}

	public function setPeliculaDirigida($pelicula) {
		$this->PeliculaDirigida = $pelicula;
	}
}

?>
