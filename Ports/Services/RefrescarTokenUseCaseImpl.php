<?php
declare(strict_types= 1);
namespace App\Port\Services;

use App\Ports\In\Usuario\Refresh\RefrescarTokenUseCaseInterface;


final readonly class RefrescarTokenUseCaseImpl implements RefrescarTokenUseCaseInterface
{

  public function execute(string $RefreshToken): RefreshTokenResponse {

  }
}
