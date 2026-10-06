<?php
declare(strict_types= 1);

namespace App\Infraestructure\Config;

use Env;
use PDO;

final class DatabaseConnection{
  public static function fromEnv(): PDO {
    $dsn = sprintf(
      'mysql:host=%s;dbname=%s;charset=%s',
      Env::get('DATABASE_URL', 'localhost'),
      Env::get('DATABASE_NAME'),
      Env::get('DATABASE_CHARSET', 'utf8mb4'),
    );

    return new PDO(
      $dsn,
      Env::get('DATABASE_USER'),
      Env::get('DATABASE_PASSW', ''),
      [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
      ]

    );
  }
}
