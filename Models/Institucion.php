<?php
declare(strict_types=1);

class Institucion
{
    public ?int $id;
    public string $nombre;
    public ?string $siglas;
    public string $tipo;
    public ?string $contacto_email;
    public ?string $sitio_web;
    public ?string $creado_en;

    public function __construct(
        string $nombre,
        string $tipo = 'empresa',
        ?string $siglas = null,
        ?string $contacto_email = null,
        ?string $sitio_web = null,
        ?string $creado_en = null,
        ?int $id = null
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->siglas = $siglas;
        $this->contacto_email = $contacto_email;
        $this->sitio_web = $sitio_web;
        $this->creado_en = $creado_en ?? date('Y-m-d H:i:s');
    }
}
