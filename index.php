<?php
	require_once 'option.php';
	require_once 'select.php';
	require_once 'form.php';
	require_once 'submit.php';

	$Select = new Select;
	$form = (new Form)->setAttrs([
		'action' => '',
		'method' => 'GET'
	]);

	echo $form->open();
	echo $Select->setAttr('name', 'list')
		->add( (new Option())->setText('item1')->setAttrs(['name' => 'first1', 'value'=> 'first1']) )
		->add( (new Option())->setText('item2')->setAttrs(['name' => 'first2', 'value'=> 'first2']) )
		->add( (new Option())->setText('item3')->setAttrs(['name' => 'first3', 'value'=> 'first3']) )
		->show();
        
	echo new Submit;
	echo $form->close();
?>