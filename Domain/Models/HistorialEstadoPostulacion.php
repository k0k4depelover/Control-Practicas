<?php
declare(strict_types=1);
namespace App\Domain\Models;

use InvalidArgumentException;
final readonly class HistorialEstadoPostulacion
{
    public ?int $id;
    public int $postulacion_id;
    public string $estado_anterior;
    public string $estado_nuevo;
    public int $actualizado_por;
    public ?string $comentario;
    public ?string $fecha;
    public function __construct(
        int $postulacion_id,
        string $estado_anterior,
        string $estado_nuevo,
        int $actualizado_por,
        ?string $comentario = null,
        ?string $fecha = null,
        ?int $id = null
    ) {
        if ($postulacion_id <= 0){
            throw new InvalidArgumentException("El id de la publicacion no puede ser negativo ni 0.");
        }
        $this->id = $id;
        $this->postulacion_id = $postulacion_id;
        $this->estado_anterior = $estado_anterior;
        $this->estado_nuevo = $estado_nuevo;
        $this->actualizado_por = $actualizado_por;
        $this->comentario = $comentario;
        $this->fecha = $fecha ?? date('Y-m-d H:i:s');
    }
}
