<?php

declare(strict_types=1);

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController
{
    public function defaultAction()
    {
        return new RedirectResponse('/document/info');
    }
}
