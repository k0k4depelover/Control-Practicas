<?php
declare(strict_types=1);

namespace App\Ports\In\Usuario\Refresh;

interface RefrescarTokenUseCaseInterface
{
    public function execute(string $RefreshToken): RefreshTokenResponse;
}
