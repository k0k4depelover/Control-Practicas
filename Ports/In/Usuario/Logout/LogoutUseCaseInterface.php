<?php
declare(strict_types=1);

namespace App\Ports\In\Usuario\Logout;

interface LogoutUseCaseInterface
{
    public function execute(string $rawRefreshToken): void;
}