<?php
class Autor {
    private string $nombre;
    private DateTime $fechaNacimiento;
    private string $nacionalidad;
    private ?string $biografia;
    private ?string $foto;

    public function __construct(string $nombre, DateTime $fechaNacimiento, string $nacionalidad, ?string $biografia = null, ?string $foto = null) {
        $this->nombre = $nombre;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->nacionalidad = $nacionalidad;
        $this->biografia = $biografia;
        $this->foto = $foto;
    }

    public function obtenerNombreCompleto(): string {
        return $this->nombre;
    }

    public function obtenerBiografia(): ?string {
        return $this->biografia;
    }
}
