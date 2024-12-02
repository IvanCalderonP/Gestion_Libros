<?php
class Libro {
    private string $titulo;
    private Autor $autor;
    private string $ISBN;
    private int $anioPublicacion;
    private bool $disponible;
    private ?Usuario $prestadoA;
    private Categoria $categoria;

    public function __construct(string $titulo, Autor $autor, string $ISBN, int $anioPublicacion, Categoria $categoria) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ISBN = $ISBN;
        $this->anioPublicacion = $anioPublicacion;
        $this->categoria = $categoria;
        $this->disponible = true;
        $this->prestadoA = null;
    }

    public function prestarLibro(Usuario $usuario): bool {
        if ($this->disponible) {
            $this->disponible = false;
            $this->prestadoA = $usuario;
            return true;
        }
        return false;
    }

    public function devolverLibro(): bool {
        if (!$this->disponible && $this->prestadoA !== null) {
            $this->disponible = true;
            $this->prestadoA = null;
            return true;
        }
        return false;
    }

    public function esDisponible(): bool {
        return $this->disponible;
    }
}
