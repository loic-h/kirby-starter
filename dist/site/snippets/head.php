<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $site->language()->code ?>" class="no-js">
<head>
	<meta charset="utf-8">
	<title><?php echo $site->title() . ' — ' . $page->title() ?></title>

	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<link rel="stylesheet" href="<?php echo $site->url(); ?>/assets/css/app.css" />
</head>

<body class="layout layout--<?php echo $page->template() ?>">
	<div id="container">
		<div class="content">
