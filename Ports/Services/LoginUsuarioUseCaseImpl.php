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

       if (filter_var($command->identifier, FILTER_VALIDATE_EMAIL) ){
          $user_request = $this->usuarioRepositoryInterface->findByEmail($command->identifier);
        }
        else{
          $user_request = $this->usuarioRepository->findByEmail($command->identifier);
        }
      if($user_request === null){
        throw new DomainException("Credenciales invalidas");
      }

      $isValido= $this->passwordHasher->verify($command->password, $user_request->password_hash);
      if($isValido === false){
        throw new DomainException("Credenciales invalidas");
      }

      return new LoginCommandResponse($user_request->id, $user_request->username);
  }
}
