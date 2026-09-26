<?php

namespace App\Infraestructure\Adapter\Out\Persistence;
use App\Domain\Models\Usuario;
use PDO;
use \App\Domain\Models\Usuario;
use App\Ports\Out\UserRepositoryInterface;

final readonly class PdoRepository implements
UserRepositoryInterface{
  public __construct(private PDO $pdo){}

  public function save(Usuario $user): void
  {
    $stmt = $this->pdo->prepare(
      "INSERT INTO users (id, username, nombre, apellido, email, password_hash, rol_id, institucion_id, carrera_id, carnet, telefono, biografia, autorizado_publicar, estado, fecha_registro)
      VALUES(:id, :username, :nombre, :apellido, : email, :password_hash, : rol_id, :institucion_id, :carrera_id, :carnet, :telefono, :biografia, :autorizado_publicar, :estado, :fecha_registro)
      "

    );

    $stmt->execute([
      'id' => $user->id(),
      'username' => $user->username(),
      'nombre' => $user->nombre(),
      'apellido'=> $user->apellido()
      $


    ])
  }
}
