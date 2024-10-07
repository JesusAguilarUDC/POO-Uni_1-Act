<?php

class Actor {
	private $IdActor;
	private $NombreActor;
	private $EdadActor;
	private $PremiosActor;

	// Constructor
		public function __construct($id, $nombre, $edad, $premios) {
			$this->IdActor = $id;
			$this->NombreActor = $nombre;
			$this->EdadActor = $edad;
			$this->PremiosActor = $premios;
	}

	// Getters
	public function getIdActor() {
		return $this->IdActor;
	}

	public function getNombreActor() {
		return $this->NombreActor;
	}

	public function getEdadActor() {
		return $this->EdadActor;
	}

	public function getPremiosActor() {
		return $this->PremiosActor;
	}

	// Setters
	public function setIdActor($id) {
		$this->IdActor = $id;
	}

	public function setNombreActor($nombre) {
        	$this->NombreActor = $nombre;
	}

	public function setEdadActor($edad) {
		$this->EdadActor = $edad;
	}

	public function setPremiosActor($premios) {
		$this->PremiosActor = $premios;
	}
}

?>
