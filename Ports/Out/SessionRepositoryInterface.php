<?php
declare(strict_types=1);

namespace App\Ports\Out;

interface SessionRepositoryInterface{
  public function save(int $usuarioId,
        string $refreshTokenHash,
        DateTime $expiraEn,
        ?string $userAgent = null,
        ?string $ipAddress = null): void;

  public function revoke(string $refreshTokenHash):void;

  public function revoke_all(int $usuarioId): void;
}
