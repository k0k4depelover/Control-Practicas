<?php
declare(strict_types= 1);
namespace App\Ports\In\Usuario\Obtener;

use App\Domain\Models\Usuario;

interface ObtenerUsuarioPorNombreUseCaseInterface{
  public function execute(string $username): Usuario;
}
