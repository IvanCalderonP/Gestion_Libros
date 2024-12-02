<?php
class Administrador extends Usuario {
    public function agregarLibro(Libro $libro, Biblioteca $biblioteca): bool {
        $biblioteca->agregarLibro($libro);
        return true;
    }

    public function eliminarLibro(Libro $libro, Biblioteca $biblioteca): bool {
        return $biblioteca->eliminarLibro($libro);
    }

    public function eliminarUsuario(Usuario $usuario, Biblioteca $biblioteca): bool {
        return $biblioteca->eliminarUsuario($usuario);
    }
}
