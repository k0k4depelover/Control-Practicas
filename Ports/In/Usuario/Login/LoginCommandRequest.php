<?php
declare(strict_types=1);

namespace App\Ports\In\Usuario\Login;

final readonly class LoginCommandRequest
{
    public function __construct(
        public string $identifier,  // Para que se pueda usar username o mail.
        public string $password
    ) {}
}
