<?php
declare(strict_types= 1);
namespace App\Port\Service;
use App\Domain\Model\Usuario;


final readonly class ObtenerUsuarioPorNombreUseCaseImpl implements ObtenerUsuarioPorNombreUseCaseInterface{

    public function __construct(
        private UsuarioRepositoryInterface $usuarioRepository
    ) {}
  public function execute(String $username): ?Usuario{

    if(strlen($username) <= 2){
      throw new DomainException("El nombre de usuario a buscar es muy corto");
    }
    $usuario = $this->usuarioRepository->findByUsername($username);
    if(is_null($usuario)){
      throw new DomainException("El usuario que buscas no existe.");
  }
  return $usuario;

}
}
