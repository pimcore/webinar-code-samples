<?php

declare(strict_types=1);

namespace AppBundle\Controller;

use Pimcore\Controller\Configuration\TemplatePhp;
use Pimcore\Controller\FrontendController;
use Pimcore\Templating\Model\ViewModel;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\Routing\Annotation\Route;

/**
 * To switch from PHP to Twig, just replace .html.php with .html.twig and update the autorender call accordingly. To
 * use this example, create documents which point to the actions defined in this controller.
 */
class WebinarDemoController extends FrontendController
{
    /**
     * Symfony standard way
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function symfonyAction(Request $request)
    {
        // manually built responses always have precedence
        // return new Response('Hello, world!');
        // return new JsonResponse(['hello' => 'world']);

        // render and return a response manually
        // please note that this template does not have access to
        // document or editmode as it only gets the parameters passed
        // to the render method
        $response = $this->render(':WebinarDemo:symfony.html.php', [
            'method' => __METHOD__,
            'color'  => $request->get('color', 'navy')
        ]);

        return $response;
    }

    /**
     * SensioFrameworkExtraBundle Template annotation
     *
     * @see http://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
     *
     * @Template(":WebinarDemo:symfony.html.php")
     *
     * @param Request $request
     *
     * @return array
     */
    public function symfonyAnnotationAction(Request $request)
    {
        // the template will be rendered with the parameters returned here plus
        // the standard parameters which will be built for every view model (document
        // and editmode by default)
        return [
            'method' => __METHOD__,
            'color'  => $request->get('color', '#5cb85c')
        ];
    }

    /**
     * Implements the EventedControllerInterface and is called before
     * the action is called.
     *
     * @param FilterControllerEvent $event
     */
    public function onKernelController(FilterControllerEvent $event)
    {
        // enable view auto-rendering - similar to $this->enableLayout() in ZF1
        // this could also be done on an action level depending on your needs
        $this->setViewAutoRender($event->getRequest(), true, 'php');
    }

    /**
     * Auto rendered view via setViewAutoRender and $this->view
     *
     * @param Request $request
     */
    public function autoRenderAction(Request $request)
    {
        $this->view->method = __METHOD__;
        $this->view->color  = $request->get('color', '#a94442');
    }

    /**
     * Auto rendered view via setViewAutoRender and a custom ViewModel
     *
     * @param Request $request
     * @param ViewModel $view
     *
     * @return ViewModel
     */
    public function viewModelAction(Request $request, ViewModel $view)
    {
        $view->method = __METHOD__;
        $view->getParameters()->set('color', $request->get('color', 'orange'));

        return $view;
    }

    // further examples

    /**
     * Template annotation with auto resolved view name from action. The
     * engine specifies which engine to use (defaults to twig).
     *
     * @Route("/template", host="webinar.app")
     * @Template(engine="php")
     */
    public function templateAnnotationAction()
    {
        // this action has no template on purpose
    }

    /**
     * Same as before, but the TemplatePhp annotation defaults to the PHP engine.
     *
     * @Route("/template-php", host="webinar.app")
     * @TemplatePhp()
     */
    public function templatePhpAnnotationAction()
    {
        // this action has no template on purpose
    }
}
