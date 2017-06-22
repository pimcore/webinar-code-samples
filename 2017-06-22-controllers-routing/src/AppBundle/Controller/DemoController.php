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
        return $this->render('Demo/info.html.twig', [
            'title' => __METHOD__,
            'data'  => [
                'route'      => $request->attributes->get('_route'),
                'scheme'     => $request->getScheme(),
                'host'       => $request->getHttpHost(),
                'path'       => $request->getPathInfo(),
                'query'      => $request->query->all(),
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
