<?php
	require_once 'tag.php';

	class Option extends Tag
    {
		public function __construct()
        {		
			parent::__construct('option');
		}

		public function setSelected()
        {
			$this->setAttr('selected');
			return $this;
		}


		public function open()
        {	
			$optionName = $this->getAttr('name');

			if ($optionName) {
				if (isset($_REQUEST[$optionName])) {					
					$this->setAttr('selected');
				}
			}

			return parent::open();
		}

		public function __toString()
        {	
			return $this->open();
		}

	}
?>