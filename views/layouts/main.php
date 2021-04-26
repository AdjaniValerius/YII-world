<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<!-- ===================================================== -->

<?php
	// plaats deze code in de main.php en vervang daarmee de standaard menu

    NavBar::begin([
      
     // hier wordt het type en de stijl van de menu bepaald
       'brandLabel' => Yii::$app->name,  // de naam van het menu
       'brandUrl' => Yii::$app->homeUrl, // de home page waar je naar toe gaat als je op de naam klikt
       'options' => [
          'class' => 'navbar-inverse navbar-fixed-top', // de Bootstrap 4 style van het menu
        ],
      
    ]);
                  
                  
    echo Nav::widget([
      
      // hier worden de menu's en menu items bepaald
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            [ 'label' => 'City',
                'items' => [
                    ['label' => 'Overzicht', 'url' => ['/country/index', ''] ],
                    ['label' => 'Voeg toe', 'url' => ['/country/index', ''] ],
                ],
            ],
        ],
    ]);

     echo Nav::widget([
      
      // hier worden de menu's en menu items bepaald
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            [ 'label' => 'Country',
                'items' => [
                    ['label' => 'Overzicht', 'url' => ['/country/index', ''] ],
                    ['label' => 'Voeg toe', 'url' => ['/country/index', ''] ],
                    ['label' => 'Europa', 'url' => ['/country/index', ' countrySearch[Continent]'=>'Europe'] ],
                    ['label' => 'Asia', 'url' => ['/country/index', ' countrySearch[Continent]'=>'Asia'] ],
                    ['label' => 'North America', 'url' => ['/country/index', ' countrySearch[Continent]'=>'North America'] ],
                    ['label' => 'South America', 'url' => ['/country/index', ' countrySearch[Continent]'=>'South America'] ],
                    ['label' => 'Africa', 'url' => ['/country/index', ' countrySearch[Continent]'=>'Africa'] ],
                    ['label' => 'Antartica', 'url' => ['/country/index', ' countrySearch[Continent]'=>'Antartica'] ],
                    ['label' => 'Oceania', 'url' => ['/country/index', ' countrySearch[Continent]'=>'Oceania'] ],
                ],
            ],
        ],
    ]);
                  
   NavBar::end();
 ?>

<!-- ===================================================== -->



<!-- -------------------------------------------- -->

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<!-- --------------------------------------------- -->

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
