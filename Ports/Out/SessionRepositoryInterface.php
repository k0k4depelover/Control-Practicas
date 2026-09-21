<?php
declare(strict_types=1);

namespace App\Ports\Out;

interface SessionRepositoryInterface{
  public function guardar(int $usuarioId,
        string $refreshTokenHash,
        DateTime $expiraEn,
        ?string $userAgent = null,
        ?string $ipAddress = null): void;

  public function revocar(string $refreshTokenHash):void;

  public function revocarTodasLasSesiones(int $usuarioId): void;
}
