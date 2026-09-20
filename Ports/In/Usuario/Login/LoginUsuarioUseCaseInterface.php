<?php
declare(strict_types=1);

namespace App\Ports\In\Usuario\Login;

interface LoginUseCaseInterface
{
    public function execute(LoginCommandRequest $request): LoginCommandResponse;
}
