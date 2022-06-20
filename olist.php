<?php
	require_once 'htmllist.php';

	class Ol extends HtmlList
    {
		public function __construct()
        {		
			parent::__construct('ol');
		}
	}	
?>