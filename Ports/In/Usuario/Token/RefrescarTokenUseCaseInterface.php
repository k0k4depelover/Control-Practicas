<?php
declare(strict_types=1);

namespace App\Ports\In\Usuario\Token;

interface RefrescarTokenUseCaseInterface
{
    public function execute(string $RefreshToken): RefreshTokenResponse;
}
