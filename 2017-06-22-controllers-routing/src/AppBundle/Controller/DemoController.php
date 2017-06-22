<?php

declare(strict_types=1);

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DemoController extends FrontendController
{
    /**
     * @Route("/annotation/info", name="annotation_info")
     */
    public function infoAction(Request $request)
    {
        // log what we're doing
        $logger = $this->get('logger');
        $logger->info('Creating response for request {pathInfo}', [
            'pathInfo' => $request->getPathInfo()
        ]);

        return $this->render('Demo/info.html.twig', [
            'title' => __METHOD__,
            'data'  => [
                'route'      => $request->attributes->get('_route'),
                'scheme'     => $request->getScheme(),
                'host'       => $request->getHttpHost(),
                'path'       => $request->getPathInfo(),
                'query'      => $request->query->all(),

                // the document is available as $this->document
                'document'   => $this->document->getRealFullPath(),
            ]
        ]);
    }

    /**
     * @Route("/annotation/hello/{name}", name="annotation_hello")
     */
    public function helloAction(Request $request)
    {
        return $this->render('Demo/hello.html.twig', [
            'title' => __METHOD__,
            'name'  => $request->get('name', 'stranger')
        ]);
    }
}
