<?php
declare(strict_types=1);

class Usuario
{
    public ?int $id;
    public string $nombre;
    public string $email;
    public string $password_hash;
    public int $rol_id;
    public ?int $institucion_id;
    public ?int $carrera_id;
    public ?string $carnet;
    public ?string $telefono;
    public ?string $biografia;
    public bool $autorizado_publicar;
    public string $estado;
    public ?string $fecha_registro;

    public function __construct(
        string $nombre,
        string $email,
        string $password_hash,
        int $rol_id,
        ?int $institucion_id = null,
        ?int $carrera_id = null,
        ?string $carnet = null,
        ?string $telefono = null,
        ?string $biografia = null,
        bool $autorizado_publicar = false,
        string $estado = 'activo',
        ?string $fecha_registro = null,
        ?int $id = null
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password_hash = $password_hash;
        $this->rol_id = $rol_id;
        $this->institucion_id = $institucion_id;
        $this->carrera_id = $carrera_id;
        $this->carnet = $carnet;
        $this->telefono = $telefono;
        $this->biografia = $biografia;
        $this->autorizado_publicar = $autorizado_publicar;
        $this->estado = $estado;
        $this->fecha_registro = $fecha_registro ?? date('Y-m-d H:i:s');
    }
}
