<?php

declare(strict_types=1);

namespace AppBundle\Controller;

use AppBundle\DateProvider;
use Pimcore\Controller\EventedControllerInterface;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class DemoServiceController implements EventedControllerInterface
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @Route("/annotation/request-info", name="annotation_request_info")
     */
    public function requestInfoAction(Request $request, DateProvider $dateProvider): JsonResponse
    {
        $this->logger->info('Creating response for request {pathInfo}', [
            'pathInfo' => $request->getPathInfo()
        ]);

        return new JsonResponse([
            'date'   => $dateProvider->getDate()->format('c'),
            'scheme' => $request->getScheme(),
            'host'   => $request->getHttpHost(),
            'path'   => $request->getPathInfo(),
            'query'  => $request->query->all(),
        ]);
    }

    public function onKernelController(FilterControllerEvent $event)
    {
        $this->logger->info('Handling event {event} for path {pathInfo}', [
            'event'    => 'onKernelController',
            'pathInfo' => $event->getRequest()->getPathInfo()
        ]);
    }

    public function onKernelResponse(FilterResponseEvent $event)
    {
        $this->logger->info('Handling event {event} for path {pathInfo}', [
            'event'    => 'onKernelResponse',
            'pathInfo' => $event->getRequest()->getPathInfo()
        ]);
    }
}
