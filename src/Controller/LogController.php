<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LogController extends AbstractController
{
    #[Route('/log', name: 'app_log')]
    public function index(LoggerInterface $logger): Response
    {
            $logger->debug('Message de debug');
            $logger->info('Message de info');
            $logger->notice('Message de notice');
            $logger->warning('Message de warning');
            $logger->error('Message de error');
            $logger->critical('Message de critical');
            $logger->alert('Message de alert');
            $logger->emergency('Message de emergency');

        return $this->render('log/index.html.twig', [
            'controller_name' => 'LogController',
        ]);
    }
}
