<?php
    class Date {
        public function __construct($date = null) {
            $this->date = $date;
            if ($date == null) {
                $this->date = date('m-d-Y');
            }
        }

        public function getDay() {
            return date('d', strtotime($this->date));
        }

        public function getMonth($lang = null) {
            if ($lang == 'en') {
                $engMonthNam = [ 1 =>
                    'january', 'february','march','april','may','june','july','august','september','october','november','december'
                ];
                return $engMonthNam[date('n', strtotime($this->date))];
            }
            elseif ($lang == 'ru') {
                $ruMonthNam = [ 1 =>
                    'январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь'
                ];
                return $ruMonthNam[date('n', strtotime($this->date))];
            }
            else {
                return date('m', strtotime($this->date));
            }
        }

                public function getYear() {
                return date('Y', strtotime($this->date));
            }

        public function getWeekDay($lang = null) {
            if ($lang == 'en') {
                $engDayNam = [
                    'sunday', 'monday','tuesday','wednesday','thursday','friday','saturday'
                ];
                return $engDayNam[date('w', strtotime($this->date))];
            }
            elseif ($lang == 'ru') {
                $ruDayNam = [
                    'воскресенье','понедельник','вторник','среда','четверг','пятница','суббота',
                ];
                return $ruDayNam[date('w', strtotime($this->date))];
            }
            else {
            return date('w', strtotime($this->date));
            }
        }

        public function addDay($value) {
            $dateMod = date_create($this->date);
            date_modify($dateMod, "+ $value days");
            return date_format($dateMod, 'm-d-Y');
        }

        public function addMonth($value) {
            $dateMod = date_create($this->date);
            date_modify($dateMod, "+ $value month");
            return date_format($dateMod, 'm-d-Y');
        }

        public function addYear($value) {
            $dateMod = date_create($this->date);
            date_modify($dateMod, "+ $value year");
            return date_format($dateMod, 'm-d-Y');
        }

        public function subDay($value) {
            $dateMod = date_create($this->date);
            date_modify($dateMod, "- $value days");
            return date_format($dateMod, 'm-d-Y');
        }

        public function subMonth($value) {
            $dateMod = date_create($this->date);
            date_modify($dateMod, "- $value month");
            return date_format($dateMod, 'm-d-Y');
        }

        public function addYear($value) {
            $dateMod = date_create($this->date);
            date_modify($dateMod, "+ $value year");
            return date_format($dateMod, 'm-d-Y');
        }

        public function subYear($value) {
            $dateMod = date_create($this->date);
            date_modify($dateMod, "- $value year");
            return date_format($dateMod, 'm-d-Y');
        }

        public function format($format) {
            return date($format, strtotime($this->date));
        }

        public function __toString() {
            return $this->date;
        }
    }
?>