<?php
	require_once 'tag.php';
	echo (new Tag('header'))->setText('№2')->show();
	include 'menu.php';
?>