<?php
declare(strict_types= 1);

namespace App\Port\In\Registrar;

use App\Application\Port\In\RegistrarUsuarioCommandResponse;
use App\Application\Port\In\RegistrarUsuarioCommandRequest;
interface RegistrarUsuarioUseCaseInterface
{
  public function execute(RegistrarUsuarioCommandRequest $request): RegistrarUsuarioCommandResponse;
}
