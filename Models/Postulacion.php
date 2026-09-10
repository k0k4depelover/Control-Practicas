<?php
declare(strict_types=1);

final readonly class Postulacion
{
    public ?int $id;
    public int $oportunidad_id;
    public int $estudiante_id;
    public string $cv_url;
    public string $estado;
    public ?string $constancia_estudios_url;
    public ?string $mensaje_presentacion;
    public ?string $fecha_postulacion;

    public function __construct(
        int $oportunidad_id,
        int $estudiante_id,
        string $cv_url,
        string $estado = 'pendiente',
        ?string $constancia_estudios_url = null,
        ?string $mensaje_presentacion = null,
        ?string $fecha_postulacion = null,
        ?int $id = null
    ) {
        $this->id = $id;
        $this->oportunidad_id = $oportunidad_id;
        $this->estudiante_id = $estudiante_id;
        $this->cv_url = $cv_url;
        $this->estado = $estado;
        $this->constancia_estudios_url = $constancia_estudios_url;
        $this->mensaje_presentacion = $mensaje_presentacion;
        $this->fecha_postulacion = $fecha_postulacion ?? date('Y-m-d H:i:s');
    }
}
