<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }
    public function findAll(): array
    {
        $this->logger->info('Starships collection retrieved!');
        return [
            new Starship(
                1,
                'Rocinante',
                'Corvette-class',
                'Jim Holden',
                'maintenance',
            ),
            new Starship(
                2,
                'Behemoth',
                'Generation',
                'Camina Drummer',
                'under refurbishment',
            ),
            new Starship(
                3,
                'Donnager',
                'Donnager-class',
                'Captain Yao',
                'repaired',
            ),
        ];
    }

    public function find(int $id): ?Starship
    {
        foreach ($this->findAll() as $starship) {
            if ($starship->getId() === $id) {
                return $starship;
            }
        }
        return null;
    }

}
