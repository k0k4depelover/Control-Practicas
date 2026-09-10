<?php
declare(strict_types= 1);
namespace \App\Application\Port\Out;

use App\Domain\Model\Usuario;

interface UsuarioRepositoryInterface{
  public function save(Usuario $user): void;
  public function findByUsername(string $username): ?Usuario;
  public function findByEmail(string $email): ?Usuario;
  public function findById(int $id): ?Usuario;
}
