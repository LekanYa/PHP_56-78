<?php
	require_once 'htmllist.php';
	require_once 'tag.php';
	require_once 'ulist.php';
	require_once 'olist.php';

	$list1 = new UL;
	$list2 = new OL;

	echo $list1
		->addItem((new ListItem())->setText('item1'))
		->addItem((new ListItem())->setText('item2'))
		->addItem((new ListItem())->setText('item3'))
		;

	echo $list2
		->addItem((new ListItem())->setText('item1'))
		->addItem((new ListItem())->setText('item2'))
		->addItem((new ListItem())->setText('item3'))
		;
?>