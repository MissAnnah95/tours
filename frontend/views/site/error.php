<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Url;

$this->title = $name;
?>
<body  class="error-page" style="background-image: url('images/dp.jpg');">
<div class="card container mt-5"  id="main" >
  <div class="card-body">
  <div class="fof">
	            <h2>OPPS!</h2>
				<h1>Error 404</h1>
				<p><span><a href="<?= Url::to(['/site/index'])?>" >African Tours</a></span>  Says This page does not exist !</p>
    	</div>
  </div>
  <a href="<?= Url::to(['/site/index'])?>" style="background: #0A7BBD;" class="m-4 btn btn-success">Home</a>
</div>
</body>

