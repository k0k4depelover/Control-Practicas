<?php
class Carrera{
  public int $id;
  public int $institucion_id;
  public string $nombre;
  public string $codigo;
  public ?\DateTimeImmutable $creado_en;

  public function __construct(int $id, int $institucion_id,
            string $nombre, string $codigo ){
    $this->id = $id;
    $this->institucion_id = $institucion_id;
    $this->nombre = $nombre;
    $this->codigo = $codigo;

  }

  }
