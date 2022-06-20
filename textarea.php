<?php
	require_once 'tag.php';

	class Textarea extends Tag
    {
		public function __construct()
        {	
			parent::__construct('textarea');
		}		

		public function open()
        {	
			$textAreaName = $this->getAttr('name');

			if ($textAreaName) {
				if (isset($_REQUEST[$textAreaName])) {
					$value = $_REQUEST[$textAreaName];

					$this->setText($value);
				}
			}
            
			return parent::open();
		}
	}
?>