<?php

/* @var $this yii\web\View */

$this->title = Yii::t('dashboard/main', 'title');

$data = empty($data) ? EMP : $data;

?>

<div class="welcome-index">

	<div class="jumbotron">
		<h1><?= Yii::t('dashboard/main', 'hello') ?></h1>

        <?= $data ?>

		<p class="lead"><?= Yii::t('dashboard/main', 'text') ?></p>
	</div>

</div>
