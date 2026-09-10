<?php
declare(strict_types=1);

class SolicitudPublicacion
{
    public ?int $id;
    public int $usuario_id;
    public string $nombre_organizacion_proyecto;
    public string $descripcion_actividades;
    public ?string $documento_respaldo_url;
    public string $estado;
    public ?string $comentario_admin;
    public ?int $revisado_por;
    public ?string $fecha_solicitud;
    public ?string $fecha_revision;

    public function __construct(
        int $usuario_id,
        string $nombre_organizacion_proyecto,
        string $descripcion_actividades,
        ?string $documento_respaldo_url = null,
        string $estado = 'pendiente',
        ?string $comentario_admin = null,
        ?int $revisado_por = null,
        ?string $fecha_solicitud = null,
        ?string $fecha_revision = null,
        ?int $id = null
    ) {
        $this->id = $id;
        $this->usuario_id = $usuario_id;
        $this->nombre_organizacion_proyecto = $nombre_organizacion_proyecto;
        $this->descripcion_actividades = $descripcion_actividades;
        $this->documento_respaldo_url = $documento_respaldo_url;
        $this->estado = $estado;
        $this->comentario_admin = $comentario_admin;
        $this->revisado_por = $revisado_por;
        $this->fecha_solicitud = $fecha_solicitud ?? date('Y-m-d H:i:s');
        $this->fecha_revision = $fecha_revision;
    }
}
