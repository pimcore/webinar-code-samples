<?php

declare(strict_types=1);

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\Document;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DemoController extends FrontendController
{
    /**
     * @Route("/annotation/info", name="annotation_info")
     */
    public function infoAction(Request $request, Document $document)
    {
        return $this->render('Demo/info.html.twig', [
            'data' => [
                'path'       => $request->getPathInfo(),
                'route'      => $request->attributes->get('_route'),
                'document'   => $document->getRealFullPath(),
                'comparison' => $document === $this->document
            ]
        ]);
    }

    /**
     * @Route("/annotation/hello/{name}", name="annotation_hello")
     */
    public function helloAction(Request $request)
    {
        return $this->render('Demo/hello.html.twig', [
            'name' => $request->get('name')
        ]);
    }
}
