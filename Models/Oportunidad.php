<?php
declare(strict_types=1);

class Oportunidad
{
    public ?int $id;
    public string $titulo;
    public string $descripcion;
    public ?string $requisitos;
    public ?int $institucion_id;
    public ?int $carrera_id;
    public string $modalidad;
    public ?string $ubicacion;
    public string $fecha_publicacion;
    public string $fecha_cierre;
    public string $estado;
    public int $creado_por;
    public ?string $creado_en;
    public bool $visto;

    public function __construct(
        string $titulo,
        string $descripcion,
        string $fecha_publicacion,
        string $fecha_cierre,
        int $creado_por,
        ?string $requisitos = null,
        ?int $institucion_id = null,
        ?int $carrera_id = null,
        string $modalidad = 'presencial',
        ?string $ubicacion = null,
        string $estado = 'activa',
        ?string $creado_en = null,
        bool $visto = false,
        ?int $id = null
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->fecha_publicacion = $fecha_publicacion;
        $this->fecha_cierre = $fecha_cierre;
        $this->creado_por = $creado_por;
        $this->requisitos = $requisitos;
        $this->institucion_id = $institucion_id;
        $this->carrera_id = $carrera_id;
        $this->modalidad = $modalidad;
        $this->ubicacion = $ubicacion;
        $this->estado = $estado;
        $this->creado_en = $creado_en ?? date('Y-m-d H:i:s');
        $this->visto = $visto;
    }
}
