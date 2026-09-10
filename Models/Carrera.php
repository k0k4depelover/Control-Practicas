<?php
declare(strict_types=1);

class Carrera
{
    public ?int $id;
    public int $institucion_id;
    public string $nombre;
    public ?string $codigo;
    public ?string $creado_en;

    public function __construct(
        int $institucion_id,
        string $nombre,
        ?string $codigo = null,
        ?string $creado_en = null,
        ?int $id = null
    ) {
        $this->id = $id;
        $this->institucion_id = $institucion_id;
        $this->nombre = $nombre;
        $this->codigo = $codigo;
        $this->creado_en = $creado_en ?? date('Y-m-d H:i:s');
    }
}
