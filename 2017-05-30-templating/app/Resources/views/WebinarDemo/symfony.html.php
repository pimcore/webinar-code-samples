<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */
?>

<?php $view->extend(':WebinarDemo:layout.html.php') ?>

<p>We're currently looking at the output of</p>
<pre style="color: <?= $color ?>"><?= $method ?></pre>
<p>rendered through the <code>PHP</code> engine.</p>

<p><?= $view['translator']->trans('This is a translated message.') ?></p>
