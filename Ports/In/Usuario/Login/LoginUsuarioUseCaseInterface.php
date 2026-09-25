<?php
declare(strict_types=1);

namespace App\Ports\In\Usuario\Login;

interface LoginUsuarioUseCaseInterface
{
    public function execute(LoginCommandRequest $request): LoginCommandResponse;
}
