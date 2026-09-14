<?php
declare(strict_types= 1);
namespace App\Domain\Enum;

enum EstadosUsuario: string{
  case ACTIVO ="activo";
  case SUSPENDIDO="suspendido";
  case ELIMINADO ="eliminado";
}
