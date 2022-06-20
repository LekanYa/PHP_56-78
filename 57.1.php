<?php
require_once '56.php'
	class Interval
	{
		public function __construct(Date $date1, Date $date2)
		{   public function __construct(Date $date1, Date $date2) {
            $this->date1 = $date1;
            $this->date2 = $date2;
            }
        }
		
		public function toDays()
		{
		    $datef = date_create($this->date1);
            $datet = date_create($this->date2);
            return date_diff($datef, $datet)->format('%a дней');
		}
		
		public function toMonths()
		{
            $datef = date_create($this->date1);
            $datet = date_create($this->date2);
            return date_diff($datef, $datet)->format('%m месяцев');
		}
		
		public function toYears()
		{
            $datef = date_create($this->date1);
            $datet = date_create($this->date2);
            return date_diff($datef, $datet)->format('%y лет');
		}
		
		public function __toString()
		{
			$this->dateArray = ['years' => $this->toYears(),
            'months' => $this->toMonths(),
            'days' => $this->toDays()
        ];
        return var_dump($this->dateArray);
		}
	}
?>