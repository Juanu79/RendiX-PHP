<?php
class Producto {
    private $id;
    private $nombre;
    private $imagenUrl;
    private $precio;
    private $unidadTiempoPrecio;
    private $descripcionGeneral;
    private $urlDetalle;

    public function __construct($id, $nombre, $imagenUrl, $precio, $unidadTiempoPrecio, $descripcionGeneral, $urlDetalle) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->imagenUrl = $imagenUrl;
        $this->precio = $precio;
        $this->unidadTiempoPrecio = $unidadTiempoPrecio;
        $this->descripcionGeneral = $descripcionGeneral;
        $this->urlDetalle = $urlDetalle;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getImagenUrl() {
        return $this->imagenUrl;
    }

    public function getPrecioFormateado() {
        return '$' . number_format($this->precio, 0, ',', '.');
    }

    public function getUnidadTiempoPrecio() {
        return $this->unidadTiempoPrecio;
    }

    public function getDescripcionGeneral() {
        return $this->descripcionGeneral;
    }

    public function getUrlDetalle() {
        return $this->urlDetalle;
    }
}
?>
