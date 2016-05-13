<?php

$templates = array();

$tmp = array(
	'tpl.Theme.Bootstrap4.home' => array(
		'file' => 'home',
		'description' => '',
	),
	'tpl.Theme.OnePageBootstrap' => array(
		'file' => 'onepage',
		'description' => 'Theme What\'s New in Bootstrap 4?',
	)
);

foreach ($tmp as $k => $v) {
	/* @avr modTemplate $template */
	$template = $modx->newObject('modTemplate');
	$template->fromArray(array(
		'id' => 0,
		'templatename' => $k,
		'description' => @$v['description'],
		'content' => file_get_contents($sources['source_core'].'/elements/templates/tp.bt4.'.$v['file'].'.tpl'),
		'static' => BUILD_TEMPLATE_STATIC,
		'source' => 1,
		'static_file' => 'core/components/'.PKG_NAME_LOWER.'/elements/templates/tp.bt4.'.$v['file'].'.tpl',
	),'',true,true);
	$templates[] = $template;
}
unset($tmp);
return $templates;