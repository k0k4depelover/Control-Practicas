<?php
declare(strict_types=1);

class Rol
{
    public ?int $id;
    public string $nombre;
    public ?string $descripcion;
    public ?string $creado_en;

    public function __construct(
        string $nombre,
        ?string $descripcion = null,
        ?string $creado_en = null,
        ?int $id = null
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->creado_en = $creado_en ?? date('Y-m-d H:i:s');
    }
}
