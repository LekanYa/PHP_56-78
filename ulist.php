<?php
	require_once 'htmllist.php';
	class Ul extends HtmlList
    {
		public function __construct()
        {		
			parent::__construct('ul');
		}
	}	
?>