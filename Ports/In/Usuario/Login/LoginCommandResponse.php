<?php
declare(strict_types=1);

namespace App\Ports\In\Usuario\Login;

final readonly class LoginCommandResponse
{
    public function __construct(
        public int $userId,
        public string $username,
        public string $token // O token JWT, ID de sesión, etc.
    ) {}
}
