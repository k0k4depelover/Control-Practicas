<?php
declare(strict_types= 1);
namespace App\Domain\Enums;

enum EstadosUsuario: string{
  case ACTIVO ="activo";
  case SUSPENDIDO="suspendido";
  case ELIMINADO ="eliminado";
}
