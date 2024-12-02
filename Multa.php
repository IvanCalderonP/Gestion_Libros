<?php
class Multa {
    private DateTime $fechaRetiro;
    private DateTime $fechaDevolucion;

    public function __construct(DateTime $fechaRetiro, DateTime $fechaDevolucion) {
        $this->fechaRetiro = $fechaRetiro;
        $this->fechaDevolucion = $fechaDevolucion;
    }

    public function validar(): bool {
        $hoy = new DateTime();
        return $hoy > $this->fechaDevolucion;
    }

    public function multar(): int {
        if ($this->validar()) {
            $diasRetraso = $this->fechaDevolucion->diff(new DateTime())->days;
            return $diasRetraso * 2; // Por ejemplo, $2 por día de retraso.
        }
        return 0;
    }
}
