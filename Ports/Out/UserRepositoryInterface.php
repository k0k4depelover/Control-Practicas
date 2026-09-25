<?php
declare(strict_types= 1);

namespace App\Ports\Out;

use App\Domain\Models\Usuario;

interface UserRepositoryInterface{
  public function save(Usuario $user): void;
  public function findByUsername(string $username): ?Usuario;
  public function findByEmail(string $email): ?Usuario;
  public function findById(int $id): ?Usuario;


  }
