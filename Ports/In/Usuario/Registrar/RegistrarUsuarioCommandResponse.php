<?php
declare(strict_types= 1);

namespace App\Application\Port\In;

// DTO de Salida .
final readonly class RegistrarUsuarioCommandResponse{
  public function __construct(
      public string $username,
      public string $email,
      public bool $autorizado_publicar,
      public string $nombre,
      public string $institucion,
  ){}
}
