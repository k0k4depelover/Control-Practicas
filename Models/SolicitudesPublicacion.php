<?php
declare(strict_types=1);

class SolicitudPublicacion{
  public int $id;
  public int $usuario_id;
  public string $nombre_organizacion_proyecyo;
  public string $descripcion_actividades;
  public string $documento_respaldo_url;
  public string $estado;
  public string $comentario_admin;
  public string $revisado_por;
  public \DateTimeImmutable $fecha_solicitud;
  public \DateTimeImmutable $fecha_revision;
  }
