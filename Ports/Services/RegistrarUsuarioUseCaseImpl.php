<?php

use App\Application\Port\In\RegistrarUsuarioCommandRequest;
use App\Application\Port\In\RegistrarUserCommandResponse;
use App\Application\Port\Out\UsuarioRepositoryInterface;
use App\Application\Port\In\RegistrarUsuarioUseCaseInterface;

final readonly class RegistrarUsuarioServicioImp implements RegistrarUsuarioUseCaseInterface
{
    public function __construct(
        private UsuarioRepositoryInterface $usuarioRepository
    ) {}

    public function execute(RegistrarUsuarioCommandRequest $request): RegistrarUserCommandResponse
    {
        // 1. Validaciones de negocio contra infraestructura
        if ($this->usuarioRepository->findByEmail($request->email) !== null) {
            throw new DomainException("El email {$request->email} ya está en uso.");
        }

        if ($this->usuarioRepository->findByUsername($request->username) !== null) {
            throw new DomainException("El nombre de usuario {$request->username} ya existe.");
        }

        // 2. Hasheo previo a crear la entidad
        $passwordHash = password_hash($request->passwordPlana, PASSWORD_DEFAULT);

        // 3. Creación de entidad (aquí se disparan las validaciones del modelo)
        $usuario = new Usuario(
            username: $request->username,
            nombre: $request->nombre,
            email: $request->email,
            password_hash: $passwordHash,
            rol_id: $request->rolId,
            carnet: $request->carnet,
            institucion_id: $request->institucionId,
            carrera_id: $request->carreraId,
            telefono: $request->telefono
        );

        $this->usuarioRepository->save($usuario);

        return new RegistrarUserCommandResponse($usuario->id, 'Usuario registrado con éxito');
    }
}
