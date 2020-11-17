<?php
use backend\assets\AuthAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AuthAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->charset ?>"/>
<head>
	<meta charset="<?= Yii::$app->charset ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
	<style>
        .modal-header {
            background-color: #1FB5AD;
        }
    </style>
</head>
<body class="login-body">
	<?php $this->beginBody() ?>
	<div class="container">
	<?= $content ?>
	</div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>