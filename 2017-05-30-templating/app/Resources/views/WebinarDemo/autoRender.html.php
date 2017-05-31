<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */
?>

<?php $view->extend(':WebinarDemo:layout.html.php') ?>

<p>We're currently looking at the output of</p>
<pre style="color: <?= $this->color ?>"><?= $this->method ?></pre>
<p>rendered through the <code>PHP</code> engine.</p>

<p><?= $this->translate('This is a translated message.') ?></p>

<div class="alert alert-success">
    The current document has the ID <code><?= $this->document->getId() ?></code>
    and the path <code><?= $this->document->getRealFullPath() ?></code>.
</div>

<h3 style="margin-top: 50px">Editable Demo</h3>

<?php while($this->block('cards')->loop()): ?>

    <div class="card" style="margin-top: 25px">
        <div class="card-header">
            <?= $this->input('card-header') ?>
        </div>
        <div class="card-block">
            <div class="row">

                <div class="col-md-4">
                    <?= $this->image('card-image', [
                        'thumbnail' => 'galleryThumbnail'
                    ]) ?>
                </div>

                <div class="col-md-8">
                    <?= $this->wysiwyg('card-text') ?>
                </div>

            </div>
        </div>
    </div>

<?php endwhile; ?>
