<?php
declare(strict_types=1);

namespace App\Domain\Models;

use DateTimeImmutable;
use InvalidArgumentException;

class SesionUsuario
{
    public ?int $id;
    public int $usuario_id;
    public string $refresh_token_hash;
    public ?string $user_agent;
    public ?string $ip_address;
    public DateTimeImmutable $expira_en;
    public bool $revocado;
    public DateTimeImmutable $creado_en;

    public function __construct(
        int $usuario_id,
        string $refresh_token_hash,
        DateTimeImmutable $expira_en,
        ?string $user_agent = null,
        ?string $ip_address = null,
        bool $revocado = false,
        ?DateTimeImmutable $creado_en = null,
        ?int $id = null
    ) {
        if ($usuario_id <= 0) {
            throw new InvalidArgumentException('El ID del usuario debe ser un número positivo.');
        }

        if (trim($refresh_token_hash) === '') {
            throw new InvalidArgumentException('El hash del refresh token no puede estar vacío.');
        }

        $this->id = $id;
        $this->usuario_id = $usuario_id;
        $this->refresh_token_hash = $refresh_token_hash;
        $this->user_agent = $user_agent;
        $this->ip_address = $ip_address;
        $this->expira_en = $expira_en;
        $this->revocado = $revocado;
        $this->creado_en = $creado_en ?? new DateTimeImmutable();
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function usuario_id(): int
    {
        return $this->usuario_id;
    }

    public function refresh_token_hash(): string
    {
        return $this->refresh_token_hash;
    }

    public function user_agent(): ?string
    {
        return $this->user_agent;
    }

    public function ip_address(): ?string
    {
        return $this->ip_address;
    }

    public function expira_en(): DateTimeImmutable
    {
        return $this->expira_en;
    }

    public function revocado(): bool
    {
        return $this->revocado;
    }

    public function creado_en(): DateTimeImmutable
    {
        return $this->creado_en;
    }
}
