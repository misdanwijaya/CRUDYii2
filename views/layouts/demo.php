<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?= Html::csrfMetaTags() ?>

        <title><?= Html::encode($this->title) ?></title>

        <?php $this->head() ?>
    </head>
    <body>

        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'Perusahaanku',
                'brandUrl' => Url::toRoute(['hello-view/index']),
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Salam', 'url' => ['/hello-view/greeting']],
                    ['label' => 'Widget', 'url' => ['/hello-view/widget']],
                    ['label' => 'Demo Folder', 'url' => ['/hello-view/demo']],
                ],
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?php if (isset($this->blocks['block1'])): ?>
                    <?= $this->blocks['block1'] ?>
                <?php endif; ?>

                <?= $content ?>

                <?php if (isset($this->blocks['block2'])): ?>
                    <?= $this->blocks['block2'] ?>
                <?php endif; ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; Perusahaanku <?= date('Y') ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>

    </body>
</html>
<?php $this->endPage() ?>