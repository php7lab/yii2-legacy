<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii2bundle\navigation\domain\widgets\Breadcrumbs;
use yii2rails\extension\web\helpers\Page;
use yii\helpers\Html;
use yii2bundle\navigation\domain\widgets\Alert;
use yii2bundle\applicationTemplate\backend\assets\AppAsset;

$from = '@yii2bundle/applicationTemplate/backend';

AppAsset::register($this);
?>

<?php Page::beginDraw(['class' => "skin-blue sidebar-mini"]) ?>

<div class="wrapper">
	<header class="main-header">
		<?= Page::snippet( 'navbar', $from) ?>
	</header>
	
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<?/* = Page::snippet('userPanel', $from) */ ?>
			<!-- Sidebar Menu -->
			<?= Page::snippet('sidebarMenu', $from) ?>
			<!-- /.sidebar-menu -->
		</section>
		<!-- /.sidebar -->
	</aside>
	
	<div class="content-wrapper">
		<section class="content-header">
			<?php if(!empty($this->title)) { ?>
				<h1>
					<?= Html::encode($this->title) ?>
				</h1>
			<?php } ?>
			<?= Breadcrumbs::widget() ?>
			<?= Alert::widget() ?>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<?= $content ?>
				</div>
			</div>
		</section>
	</div>
	<footer class="main-footer" style="padding-bottom: 30px; padding-top: 10px;">
		<?= Page::snippet('footer', '@yii2bundle/applicationTemplate/common') ?>
	</footer>
</div>

<?php Page::endDraw() ?>
