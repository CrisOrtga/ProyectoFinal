<?php
// autor: Ortega Jaramillo Cristhina
class Servicios{

private $id;
private $nombre;
private $descripcion;
private $duracion;
private $modalidad;
private $precio;

public function __construct() {
}

public function getId() {
    return $this->id;
}

public function setId($id) {
    $this->id = $id;
}

public function getNombre() {
    return $this->nombre;
}

public function setNombre($nombre) {
    $this->nombre = $nombre;
}

public function getDescripcion() {
    return $this->descripcion;
}

public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
}

public function getDuracion() {
    return $this->duracion;
}

public function setDuracion($duracion) {
    $this->duracion = $duracion;
}

public function getModalidad() {
    return $this->modalidad;
}

public function setModalidad($modalidad) {
    $this->modalidad = $modalidad;
}

public function getPrecio() {
    return $this->precio;
}

public function setPrecio($precio) {
    $this->precio = $precio;
}

// Métodos get y set parametrizados
public function __set($nombre, $valor) {
    // Verifica que la propiedad exista
    if (property_exists('Servicio', $nombre)) {
        $this->$nombre = $valor;
    } else {
        echo $nombre . " No existe.";
    }
}

public function __get($nombre) {
    // Verifica que exista la propiedad
    if (property_exists('Servicio', $nombre)) {
        return $this->$nombre;
    }
    // Retorna null si no existe
    return NULL;
}
}
?>