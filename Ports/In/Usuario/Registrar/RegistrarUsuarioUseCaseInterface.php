<?php
declare(strict_types= 1);

namespace App\Ports\In\Usuario\Registrar;

interface RegistrarUsuarioUseCaseInterface
{
  public function execute(RegistrarUsuarioCommandRequest $request): RegistrarUsuarioCommandResponse;
}
