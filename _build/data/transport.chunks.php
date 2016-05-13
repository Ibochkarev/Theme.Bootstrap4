<?php

$chunks = array();

$tmp = array(
	'ch.bt4.head' => array(
		'file' => 'head',
		'description' => '',
	),
	'ch.bt4.breadcrumb' => array(
		'file' => 'breadcrumb',
		'description' => 'Indicate the current page’s location within a navigational hierarchy',
	),
	'ch.bt4.navbar' => array(
		'file' => 'navbar',
		'description' => 'The navbar is a simple wrapper for positioning branding, navigation, and other elements into a concise navigation header.',
	),
	'ch.bt4.jumbotron' => array(
		'file' => 'jumbotron',
		'description' => 'A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.',
	),
	'ch.bt4.card' => array(
		'file' => 'card',
		'description' => 'A card is a flexible and extensible content container. It includes options for headers and footers, a wide variety of content, contextual background colors, and powerful display options.',
	),
	'ch.bt4.carousel' => array(
		'file' => 'carousel',
		'description' => 'A slideshow component for cycling through elements—images or slides of text—like a carousel.',
	),
	'ch.bt4.footer' => array(
		'file' => 'footer',
		'description' => '',
	),
);

// Save chunks for setup options
$BUILD_CHUNKS = array();

foreach ($tmp as $k => $v) {
	/* @avr modChunk $chunk */
	$chunk = $modx->newObject('modChunk');
	$chunk->fromArray(array(
		'id' => 0,
		'name' => $k,
		'description' => @$v['description'],
		'snippet' => file_get_contents($sources['source_core'] . '/elements/chunks/ch.bt4.' . $v['file'] . '.tpl'),
		'static' => BUILD_CHUNK_STATIC,
		'source' => 1,
		'static_file' => 'core/components/' . PKG_NAME_LOWER . '/elements/chunks/ch.bt4.' . $v['file'] . '.tpl',
	), '', true, true);

	$chunks[] = $chunk;

	$BUILD_CHUNKS[$k] = file_get_contents($sources['source_core'] . '/elements/chunks/ch.bt4.' . $v['file'] . '.tpl');
}

unset($tmp);
return $chunks;