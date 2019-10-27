<?php
    class spreadStaticDataClass {
        private $template = <<<EOD
<ps away_spread="0.00" away_price="120" home_spread="0.00" home_price="-140"/>
EOD;
        public function getData($pBookId,$pSecondNum,$pNumErrors) {
            return $this->template;
        }// public function getData()

    }//class spreadStaticDataClass

	class totalStaticDataClass {
        private $template = <<<EOD
<total total="1.00" over_price="-108" under_price="-112"/>
EOD;
        public function getData($pBookId,$pSecondNum,$pNumErrors) {
            return $this->template;
        }// public function getData()

    }//class totalStaticDataClass

	class moneyStaticDataClass {
        private $template = <<<EOD
<money away_money="225" home_money="200" draw_money="120"/>
EOD;
        public function getData($pBookId,$pSecondNum,$pNumErrors) {
            return $this->template;
        }// public function getData()

    }//class moneyStaticDataClass

?>
