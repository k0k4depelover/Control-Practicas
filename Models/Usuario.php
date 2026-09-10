<?php

declare(strict_types=1);

class Usuario
{
    private int $id ;
    private string $nombre ;
    private string $email ;
    private string $contrasenaHash ;
    private int $rolId ;
    private ?int $institucionId ;
    private ?int $carreraId ;
    private ?string $carnet;
    private ?string $telefono;
    private ?string $biografia;
    private bool $autorizadoPublicar;
    private EstadoUsuario $estado;
    private ?\DateTimeImmutable $fechaRegistro;

    function __construct(int $id, string $nombre, string $email, string $contrasenaHash, int $rolId, ?int $carnet, ?string $telefono, ?string $biografia, bool $autorizadoPublicar, EstadoUsuario $estado, ?\DateTimeImmutable $fechaRegistro){
      $this->id = $id;
      $this->nombre = $nombre;
      $this->email = $email;
      $this->contrasenaHash = $contrasenaHash;
      $this->rolId = $rolId ;
      $this->carnet = $carnet ;
      $this->telefono = $telefono ;
      $this->biografia =$biografia ;
      $this->autorizadoPublicar =$autorizadoPublicar ;
      $this->estado = $estado ;
      $this->fechaRegistro = $fechaRegistro ;
      $this->fechaRegistro = new \DateTimeImmutable("".$this->id."");
    }
}
