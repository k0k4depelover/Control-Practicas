<?php
declare(strict_types=1);
namespace App\Domain\Models;

use InvalidArgumentException;

final readonly class SolicitudPublicacion
{
    public ?int $id;
    public int $usuario_id;
    public string $nombre_organizacion_proyecto;
    public string $descripcion_actividades;
    public string $documento_respaldo_url;
    public string $estado;
    public ?string $comentario_admin;
    public ?int $revisado_por;
    public ?string $fecha_solicitud;
    public ?string $fecha_revision;

    public function __construct(
        int $usuario_id,
        string $nombre_organizacion_proyecto,
        string $descripcion_actividades,
        string $documento_respaldo_url,
        string $estado = 'pendiente',
        ?string $comentario_admin = null,
        ?int $revisado_por = null,
        ?string $fecha_solicitud = null,
        ?string $fecha_revision = null,
        ?int $id = null
    ) {
        $this->id = $id;
        if($usuario_id <=0){
            throw new InvalidArgumentException('El id no puede ser negativo o 0.');
        }
        if (strlen($nombre_organizacion_proyecto) <= 2){
            throw new InvalidArgumentException('El nombre de la organizacion es invalido.');
        }
        if (strlen($descripcion_actividades) <= 12){
            throw new InvalidArgumentException("Debes dar una mejor descripcion de tus actividades");
        }
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
