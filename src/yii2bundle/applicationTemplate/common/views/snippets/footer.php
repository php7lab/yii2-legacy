<?php

use yii2rails\extension\menu\helpers\MenuHelper;
use yii2rails\extension\widget\RequestRunTime;
use yii2rails\extension\common\helpers\ModuleHelper;
use yii2rails\extension\web\enums\HtmlEnum;
use yii2bundle\article\widgets\PostList;
use yii2bundle\lang\widgets\LangSelector;

$items = MenuHelper::load('menu/footer', 'leftMenu', true);

$lineCount = 1;
$height = 40 * $lineCount;

$css = '
.wrap {
	min-height: 100%;
	height: auto;
	margin: 0 auto -'.$height.'px;
	padding: 0 0 '.$height.'px;
}

.page-footer {
	height: '.$height.'px;
	background-color: #f5f5f5;
	border-top: 1px solid #ddd;
}

.page-footer .container {
	padding-top: 8px;
}
';

$this->registerCss($css);

?>

<div class="pull-left">

    &copy; <?= Yii::$app->name . SPC . date('Y') ?>

    &nbsp;
    
	<?php if(YII_ENV_DEV) { ?>
		
		<span class="text-muted"><?= RequestRunTime::widget() ?></span>
	
	<?php } ?>
    
    <?php if(APP == FRONTEND && ModuleHelper::has('article')) { ?>

        <?= PostList::widget([
            'names' => param('article.links'),
        ]) ?>

    <?php } ?>

</div>

<div class="pull-right">

	<?php if(ModuleHelper::has('lang')) { ?>
        <span class="dropup">
            <?= LangSelector::widget() ?>
            <?= HtmlEnum::PIPE ?>
            <?= MenuHelper::renderMenu($items) ?>
        </span>
	<?php } ?>

</div>
