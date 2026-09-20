<?php
declare(strict_types= 1);
namespace App\Ports\In\Usuario\Obtener;
interface ObtenerUsuarioPorNombreUseCaseInterface{
  public function obtenerUsuarioPorNombre(String $nombre);
}
