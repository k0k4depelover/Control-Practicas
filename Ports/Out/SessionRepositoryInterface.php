<?php
declare(strict_types=1);

namespace App\Ports\Out;

use App\Domain\Models\SesionUsuario;
use DateTime;

interface SessionRepositoryInterface{
  public function findByRefreshTokenHash(string $refreshTokenHash): ?SesionUsuario;

  public function save(int $usuarioId,
        string $refreshTokenHash,
        DateTime $expiraEn,
        ?string $userAgent = null,
        ?string $ipAddress = null): void;

  public function revoke(string $refreshTokenHash):void;

  public function revoke_all(int $usuarioId): void;
}
