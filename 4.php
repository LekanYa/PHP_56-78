<?php
	require_once 'tag.php';
	echo (new Tag('header'))->setText('Four')->show();
	include 'menu.php';
?>