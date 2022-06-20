<?php
	require_once 'tag.php';
	echo (new Tag('header'))->setText('Tri')->show();
	include 'menu.php';
?>