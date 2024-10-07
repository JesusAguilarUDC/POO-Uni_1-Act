<?php

class Pelicula {
	private $IdPelicula;
	private $NombreDePelicula;
	private $DirectorDePelicula;
	private $FechaDeEstreno;
	private $DuracionPelicula;
	private $NombreGenero;
	private $DescripcionGenero;

	// Constructor
	public function __construct($id, $nombre, $director, $fecha, $duracion, $genero, $descripcion) {
		$this->IdPelicula = $id;
		$this->NombreDePelicula = $nombre;
		$this->DirectorDePelicula = $director;
		$this->FechaDeEstreno = $fecha;
		$this->DuracionPelicula = $duracion;
		$this->NombreGenero = $genero;
		$this->DescripcionGenero = $descripcion;	
	}

	// Getters
	public function getIdPelicula() {
		return $this->IdPelicula;
	}

	public function getNombreDePelicula() {
		return $this->NombreDePelicula;
	}

	public function getDirectorDePelicula() {
		return $this->DirectorDePelicula;
	}

	public function getFechaDeEstreno() {
		return $this->FechaDeEstreno;
	}

	public function getDuracionPelicula() {
		return $this->DuracionPelicula;
	}

	public function getNombreGenero() {
		return $this->NombreGenero;
	}

	public function getDescripcionGenero() {
		return $this->DescripcionGenero;
	}

	// Setters
	public function setIdPelicula($id) {
		$this->IdPelicula = $id;
	}

	public function setNombreDePelicula($nombre) {
		$this->NombreDePelicula = $nombre;
	}

	public function setDirectorDePelicula($director) {
		$this->DirectorDePelicula = $director;
	}

	public function setFechaDeEstreno($fecha) {
		$this->FechaDeEstreno = $fecha;
	}

	public function setDuracionPelicula($duracion) {
		$this->DuracionPelicula = $duracion;
	}

	public function setNombreGenero($genero) {
		$this->NombreGenero = $genero;
	}

	public function setDescripcionGenero($descripcion) {
		$this->DescripcionGenero = $descripcion;
	}
}

?>
