<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */
?>
<!doctype html>
<html lang="<?= $app->getRequest()->getLocale() ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pimcore 5 Templating PHP Demo</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="/pimcore/static6/img/favicon/favicon-32x32.png" />
</head>
<body>

<div class="container" style="margin-top: 50px; margin-bottom: 50px">
    <div class="row">
        <div class="col-md-3">
            <h3>Demos</h3>

            <?php
            // as this is just for demo purposes, we use hardcoded ID here as start document
            $navDocument = \Pimcore\Model\Document::getById(86);
            $mainNav = $this->navigation()->buildNavigation($navDocument, $navDocument);
            echo $this->navigation()->render($mainNav, 'menu', 'renderMenu');
            ?>
        </div>
        <div class="col-md-9">
            <?php
            // symfony standard way
            // $view['slots']->output('_content');

            // pimcore view
            $view->slots()->output('_content');

            // is equal to
            // $this->slots()->output('_content');
            ?>
        </div>
    </div>
</div>

</body>
</html>
