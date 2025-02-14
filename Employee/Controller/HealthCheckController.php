<?php

declare(strict_types=1);

namespace Employee\Controller;

use Doctrine\DBAL\Connection;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HealthCheckController extends AbstractController
{
    public function __invoke(ManagerRegistry $doctrine): Response
    {
        /** @var Connection $connection */
        $connection = $doctrine->getConnection('employee');
        $connection->connect();
        return $this->json([
            'api_module_status' => 'Module Employee up and running!',
            'database_connected' => $connection->isConnected(),
        ]);
    }
}