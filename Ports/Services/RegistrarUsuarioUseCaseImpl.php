<?php
declare(strict_types=1);

namespace App\Application\Service;

use App\Application\Port\In\RegistrarUsuarioCommandRequest;
use App\Application\Port\In\RegistrarUsuarioCommandResponse;
use App\Application\Port\In\RegistrarUsuarioUseCaseInterface;
use App\Application\Port\Out\UsuarioRepositoryInterface;
use App\Domain\Model\Usuario;
use DomainException;

final readonly class RegistrarUsuarioServicioImp implements RegistrarUsuarioUseCaseInterface
{
    public function __construct(
        private UsuarioRepositoryInterface $usuarioRepository
    ) {}

    public function execute(RegistrarUsuarioCommandRequest $request): RegistrarUsuarioCommandResponse
    {
        if ($this->usuarioRepository->findByEmail($request->email) !== null) {
            throw new DomainException("El email {$request->email} ya está en uso.");
        }

        if ($this->usuarioRepository->findByUsername($request->username) !== null) {
            throw new DomainException("El nombre de usuario {$request->username} ya existe.");
        }

        $password_hash = password_hash($request->password_hash, PASSWORD_DEFAULT);

        $usuario = new Usuario(
            username: $request->username,
            nombre: $request->nombre,
            email: $request->email,
            password_hash: $password_hash,
            rol_id: 1,
            institucion_id: $request->institucionId,
            carrera_id: $request->carreraId,
            carnet: $request->carnet,
            telefono: $request->telefono,
            biografia: $request->biografia,
            autorizado_publicar: false,
        );

        $this->usuarioRepository->save($usuario);

        return new RegistrarUsuarioCommandResponse($usuario->id, 'Usuario registrado con éxito');
    }
}
