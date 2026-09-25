<?php
declare(strict_types=1);

namespace App\Domain\Models;

use App\Domain\Enums\EstadosUsuario;
use DateTime;
use InvalidArgumentException;

class Usuario
{
    public ?int $id;
    public string $username;
    public string $nombre;
    public string $email;
    public string $password_hash;
    public int $rol_id;
    public ?int $institucion_id;
    public ?int $carrera_id;
    public ?string $carnet;
    public ?string $telefono;
    public ?string $biografia;
    public bool $autorizado_publicar;
    public EstadosUsuario $estado;
    public DateTime $fecha_registro;

    public function __construct(
        string $username,
        string $nombre,
        string $email,
        string $password_hash,
        int $rol_id,
        ?int $institucion_id = null,
        ?int $carrera_id = null,
        ?string $carnet = null,
        ?string $telefono = null,
        ?string $biografia = null,
        bool $autorizado_publicar = false,
        EstadosUsuario $estado = EstadosUsuario::ACTIVO,
        ?DateTime $fecha_registro = null,
        ?int $id = null
    ) {
        if (strlen($nombre) <= 2) {
            throw new InvalidArgumentException('La longitud del nombre es muy corta');
        }
        if (strlen($username) <= 3) {
            throw new InvalidArgumentException('La longitud del username no es valida');
        }
        if (strlen($password_hash) < 8) {
            throw new InvalidArgumentException('La longitud de la contraseña debe ser de al menos 8 caracteres');
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) <= 5) {
            throw new InvalidArgumentException("El email '{$email}' no es valido.");
        }

        $this->id = $id;
        $this->username = $username;
        $this->nombre = $nombre;
        $this->email = strtolower(trim($email));
        $this->password_hash = $password_hash;
        $this->rol_id = $rol_id;
        $this->institucion_id = $institucion_id;
        $this->carrera_id = $carrera_id;
        $this->carnet = $carnet;
        $this->telefono = $telefono;
        $this->biografia = $biografia;
        $this->autorizado_publicar = $autorizado_publicar;
        $this->estado = $estado;
        $this->fecha_registro = $fecha_registro ?? new DateTime();
    }
}
