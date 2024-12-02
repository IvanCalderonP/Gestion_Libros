<?php
class Usuario {
    private string $nombre;
    private int $idUsuario;
    private string $usuario;
    private string $clave;
    private ?string $foto;
    private array $librosPrestados;

    public function __construct(string $nombre, int $idUsuario, string $usuario, string $clave, ?string $foto = null) {
        $this->nombre = $nombre;
        $this->idUsuario = $idUsuario;
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->foto = $foto;
        $this->librosPrestados = [];
    }

    public function prestarLibro(Libro $libro): bool {
        if ($libro->esDisponible()) {
            $libro->prestarLibro($this);
            $this->librosPrestados[] = $libro;
            return true;
        }
        return false;
    }

    public function devolverLibro(Libro $libro): bool {
        foreach ($this->librosPrestados as $key => $prestado) {
            if ($prestado === $libro) {
                unset($this->librosPrestados[$key]);
                $libro->devolverLibro();
                return true;
            }
        }
        return false;
    }

    public function verLibrosPrestados(): array {
        return $this->librosPrestados;
    }
}
