<?php
declare(strict_types= 1);

namespace App\Application\Port\In;

// DTO de Salida .
final readonly class RegistrarUsuarioCommand{
  public function __construct(
        string $username,
        string $nombre,
        string $email,
        string $password_hash,
        ?int $institucion_id = null,
        ?int $carrera_id = null,
        string $carnet,
        ?string $telefono = null,
        ?string $biografia = null,
  ){}
}
