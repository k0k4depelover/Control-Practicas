<?php
declare(strict_types=1);
class Notificacion
{
    public ?int $id;
    public int $usuario_id;
    public string $titulo;
    public string $mensaje;
    public ?string $link_accion;
    public bool $leido;
    public ?string $fecha_creacion;
    public function __construct(
        int $usuario_id,
        string $titulo,
        string $mensaje,
        ?string $link_accion = null,
        bool $leido = false,
        ?string $fecha_creacion = null,
        ?int $id = null
    ) {
        $this->id = $id;
        $this->usuario_id = $usuario_id;
        $this->titulo = $titulo;
        $this->mensaje = $mensaje;
        $this->link_accion = $link_accion;
        $this->leido = $leido;
        $this->fecha_creacion = $fecha_creacion ?? date('Y-m-d H:i:s');
    }
}
