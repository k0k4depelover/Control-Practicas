<?php
declare(strict_types= 1);
namespace App\Port\Services;

use App\Ports\In\Usuario\Refresh\RefrescarTokenUseCaseInterface;
use App\Ports\In\Usuario\Refresh\RefreshTokenResponse; //Pendiente de implementar
use App\Ports\Out\SesionRepositoryInterface;
use App\Ports\Out\TokenManagerInterface;
use App\Ports\Out\UserRepositoryInterface;
use DomainException;

final readonly class RefrescarTokenUseCaseImpl implements RefrescarTokenUseCaseInterface
{

  public function __construct(string $RefreshToken){
    private SessionRepositoryInterface $sessionRepository;
    private UserRepositoryInterface $userRepository;
    private TokenManagerInterface $tokenManager;
  }

  public function execute(string $rawRefreshToken) : RefreshTokenResponse  {
    $hash = hash('sha256', $refreshToken);
    $session = $this->sessionRepository->findByRefreshTokenHash($hash);
    if ($session == null || $session->estaActiva()){
      throw new DomainException('Sesión inválida o expirada. Inicie sesión nuevamente.'); 
    }

    $usuario = this->usuarioRepository->findById($session->usuario_id);
    if ($usuario === null) {
        throw new DomainException('El usuario asociado a la sesión ya no existe.');
    }
    
    $nuevoAccessToken = $this->tokenManager->generateAccessToken(
            userId: $usuario->id,
            rolId: $usuario->rol_id
        );

      return new RefreshTokenResponse(
            accessToken: $nuevoAccessToken,
            expiresInSeconds: 900
        );
    
  }


}
