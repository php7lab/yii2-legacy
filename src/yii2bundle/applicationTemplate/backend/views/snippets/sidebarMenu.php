<?php

use yii2rails\extension\widget\Menu;
use yii2rails\extension\menu\helpers\MenuHelper;

$menu = MenuHelper::load('menu/navbar_backend', 'mainMenu');

echo Menu::widget([
	'options'=>['class' => 'sidebar-menu'],
	'linkTemplate' => '<a href="{url}">{icon}<span>{label}</span>{right-icon}{badge}</a>',
	'submenuTemplate' => "\n<ul class=\"treeview-menu\">\n{items}\n</ul>\n",
	'activateParents' => true,
	'items' => MenuHelper::gen($menu),
]);
