<?php
declare(strict_types=1);

namespace App\Ports\In\Usuario\Obtener;

use App\Domain\Models\Usuario;

interface ObtenerUsuarioPorIdUseCaseInterface
{
    public function execute(int $id): Usuario;
}
