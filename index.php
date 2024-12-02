<?php
require_once 'Autor.php';
require_once 'Categoria.php';
require_once 'Libro.php';
require_once 'Usuario.php';
require_once 'Administrador.php';
require_once 'Biblioteca.php';
require_once 'Multa.php';
require_once 'Transaccion.php';

// Crear autores
$autor1 = new Autor("Gabriel García Márquez", new DateTime("1927-03-06"), "Colombiano", "Escritor de Cien años de soledad");
$categoria1 = new Categoria("Realismo Mágico", "Novelas de este género");

// Crear libros
$libro1 = new Libro("Cien años de soledad", $autor1, "978-1234567890", 1967, $categoria1);

// Crear usuarios y administrador
$usuario1 = new Usuario("Juan Pérez", 1, "juan123", "clave123");
$admin = new Administrador("Admin1", 1, "admin", "admin123");

// Crear biblioteca
$biblioteca = new Biblioteca();

// El administrador agrega un libro a la biblioteca
$admin->agregarLibro($libro1, $biblioteca);

// Registrar un usuario en la biblioteca
$biblioteca->registrarUsuario($usuario1);

// Realizar un préstamo
$transaccion1 = new Transaccion($usuario1, $libro1, "prestamo");
if ($transaccion1->realizarTransaccion()) {
    echo "El libro ha sido prestado exitosamente.\n";
} else {
    echo "No se pudo realizar el préstamo.\n";
}

// Verificar si el usuario tiene libros prestados
print_r($usuario1->verLibrosPrestados());

// Devolver el libro
$transaccion2 = new Transaccion($usuario1, $libro1, "devolucion");
if ($transaccion2->realizarTransaccion()) {
    echo "El libro ha sido devuelto exitosamente.\n";
} else {
    echo "No se pudo devolver el libro.\n";
}
