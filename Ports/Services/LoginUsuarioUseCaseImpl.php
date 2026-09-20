<?php
declare(strict_types=1);

namespace App\Port\Services;
use App\Domain\Models\Usuario;
use App\Ports\In\Usuario\Login\LoginCommandRequest;
use App\Ports\In\Usuario\Login\LoginCommandResponse;
use App\Ports\In\Usuario\Login\LoginUseCaseInterface;


use App\Ports\Out\PasswordHasherInterface;
use App\Ports\Out\UsuarioRepositoryInterface;
use DomainException;


final readonly class LoginUseCaseImpl implements LoginUseCaseInterface
{

  public function __construct(
    private UsuarioRepositoryInterface $usuarioRepository,
    private PasswordHasherInterface $passwordHasher
  ){}

  public function execute(LoginCommandRequest $command): LoginCommandResponse{

       // Pendiente a implementar


  }
}
