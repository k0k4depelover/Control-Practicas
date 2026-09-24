<?php
declare(strict_types=1);

namespace App\Ports\In\Usuario\Token;

final readonly class RefreshTokenResponse
{
    public function __construct(
        public string $accessToken,
        public int $expiresInSeconds
    ) {}
}