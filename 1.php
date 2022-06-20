<?php
	require_once 'tag.php';
	echo (new Tag('header'))->setText('EINS')->show();
	include 'menu.php';
?>