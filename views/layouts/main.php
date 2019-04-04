<?php

use yii\bootstrap4\NavBar;
use yii\bootstrap4\Nav;
?>
<html>
    <head>
        <title>Yii</title>
    </head>
    <body>
		<?= yii\bootstrap4\Progress::widget(['percent' => 60, 'label' => 'test']) ?>
	<?php 
 
  NavBar::begin(['brandLabel' => 'NavBar Test']);
  echo Nav::widget([
      'items' => [
          ['label' => 'Home', 'url' => ['/site/index']],
          ['label' => 'About', 'url' => ['/site/about']],
      ],
      'options' => ['class' => 'navbar-nav'],
  ]);
  NavBar::end();
	?>
        <?=$content?>
    </body>
</html>