<?php

use yii2rails\app\domain\helpers\EnvService;
use yii2rails\domain\helpers\ServiceHelper;
use yii2rails\extension\common\helpers\ModuleHelper;
use yii2rails\extension\yii\helpers\Html;

/* @var $this yii\web\View */

$identity = Yii::$app->user->identity;

?>

<!-- Menu Toggle Button -->
<a href="#" class="dropdown-toggle" data-toggle="dropdown">

    <?php if(ServiceHelper::has('profile.avatar')) { ?>
        <!-- The user image in the navbar-->
	    <?= !class_exists(Avatar::class) ? Html::fa('user') : Avatar::widget([
		    'options' => [
			    'class' => 'img-circle',
                'height' => 18,
		    ],
	    ]) ?>
	<?php } else { ?>
	    <?= Html::fa('user') ?>
    <?php } ?>
    
	<!-- hidden-xs hides the username on small devices so only the image appears. -->
    <!-- <small class="hidden-xs"><?= $identity->username ?></small> -->
</a>

<ul class="dropdown-menu">

	<!-- The user image in the menu -->
	<li class="user-header">
        <?php if(ServiceHelper::has('profile.avatar')) { ?>
	        <?= Avatar::widget([
		        'options' => [
			        'class' => 'img-circle',
			        'style' => 'height: 115px !important; width: 115px !important; ',
		        ],
	        ]) ?>
        <?php } ?>
		<p>
			<?= \yii2bundle\account\module\helpers\Menu::getUseName() ?>
		</p>
	</li>
	
	<!-- Menu Footer-->
	<li class="user-footer">

		<div class="pull-left">
			<?php if(ModuleHelper::has('profile', FRONTEND) && ServiceHelper::has('profile.avatar')) {
				echo Html::a(Yii::t('profile/profile', 'title'), EnvService::getUrl('frontend', 'profile'),['class'=>"btn btn-default btn-flat"]);
			} ?>
		</div>
		<div class="pull-right">
			<?= Html::a(Yii::t('account/auth', 'logout_action'),['/user/auth/logout'],['class'=>"btn btn-default btn-flat", 'data-method'=>'post']); ?>
		</div>
	</li>
</ul>
