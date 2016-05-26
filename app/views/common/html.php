<?php
$lang = $this->config->item('lang', 'app');
$layoutversion = $this->config->item('layout-version', 'app');
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang ?>" lang="<?php echo $lang ?>">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-language" content="<?php echo $lang ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="initial-scale=1.0" />
<?php $this->load->view('common/metatags') ?>
<link rel="icon" href="<?= layout('favicon.png' . $layoutversion) ?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo layout('imgs/ico/favicon.png' . $layoutversion) ?>" type="image/x-icon" />
<meta name="theme-color" content="#e82a51">
<?php $this->load->view('common/css', array('layoutversion' => $layoutversion) ) ?>
<script src="<?= layout('js/jquery-1.11.1.min.js') ?>"></script>
<script src="<?= layout('js/bootstrap.min.js') ?>"></script>
<script src="<?= layout('js/swiper.jquery.js') ?>"></script>
<script src="<?= layout('js/main.js') ?>"></script>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php $this->load->view('common/analytics') ?>
</head>
<body id="app-body" class="app-body lang-<?php echo $lang ?>">
<?php $this->load->view('common/app-fb') ?>