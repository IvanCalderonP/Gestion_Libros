<?php
class Biblioteca {
    private array $libros = [];
    private array $usuarios = [];

    // Agregar libro a la biblioteca
    public function agregarLibro(Libro $libro): bool {
        $this->libros[] = $libro;
        return true;
    }

    // Eliminar libro de la biblioteca
    public function eliminarLibro(Libro $libro): bool {
        foreach ($this->libros as $key => $libroExistente) {
            if ($libroExistente === $libro) {
                unset($this->libros[$key]);
                return true;
            }
        }
        return false; // Libro no encontrado
    }

    // Registrar usuario en la biblioteca
    public function registrarUsuario(Usuario $usuario): bool {
        $this->usuarios[] = $usuario;
        return true;
    }

    // Eliminar usuario de la biblioteca
    public function eliminarUsuario(Usuario $usuario): bool {
        foreach ($this->usuarios as $key => $usuarioExistente) {
            if ($usuarioExistente === $usuario) {
                unset($this->usuarios[$key]);
                return true;
            }
        }
        return false; // Usuario no encontrado
    }
}
