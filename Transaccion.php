<?php
class Transaccion {
    private Usuario $usuario;
    private Libro $libro;
    private string $tipoTransaccion; // "prestamo" o "devolucion"
    private DateTime $fecha;

    public function __construct(Usuario $usuario, Libro $libro, string $tipoTransaccion) {
        $this->usuario = $usuario;
        $this->libro = $libro;
        $this->tipoTransaccion = $tipoTransaccion;
        $this->fecha = new DateTime();
    }

    public function realizarTransaccion(): bool {
        if ($this->tipoTransaccion === "prestamo") {
            return $this->usuario->prestarLibro($this->libro);
        } elseif ($this->tipoTransaccion === "devolucion") {
            return $this->usuario->devolverLibro($this->libro);
        }
        return false;
    }
}
