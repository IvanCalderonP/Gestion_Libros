<?php
class Categoria {
    private string $nombre;
    private ?string $descripcion;

    public function __construct(string $nombre, ?string $descripcion = null) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    public function obtenerNombreCategoria(): string {
        return $this->nombre;
    }

    public function obtenerDescripcion(): ?string {
        return $this->descripcion;
    }
}
