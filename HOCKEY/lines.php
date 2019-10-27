<?php


	include "data.php";

    class lineClass {
        private $spreadObj;
        private $totalObj;
        private $moneyObj;
		private $lineType;
		private $templateLines = <<<EOD
<line away_rot="##ROTAWAY##" home_rot="##ROTHOME##" time="##DATETIME##" period_id="##PERIODNUMBERID##" period="##PERIOD##" type="##LINETYPE##" sportsbook="##BOOKNUMBERID##" no_line="false">
##MONEYDATA##
##SPREADDATA##
##TOTALDATA##
<display away="0" home="0"/>
</line>
EOD;

         public function __construct($pSpreadObj,$pTotalObj,$pMoneyObj,$pLineType){
            $this->spreadObj = $pSpreadObj;
            $this->totalObj = $pTotalObj;
            $this->moneyObj = $pMoneyObj;
			$this->lineType = $pLineType;
        }//__construct


		public  function getData(
										$pSecondNum,
										$pNumErrorsSpread,
										$pNumErrorsTotal,
										$pNumErrorsMoney,
										$pRotAway,
										$pRotHome,
										$pDateTime,
										$pPeriodId,
										$pPeriod,
										$pBookNumberId
										) {

            //echo "rotAway :$pRotAway  rotHome: $pRotHome periodId:$pPeriodId period:$pPeriod bookId:$pBookNumberId\n";
            $template = $this->templateLines;
			$template = str_replace("##ROTAWAY##", $pRotAway, $template);
			$template = str_replace("##ROTHOME##", $pRotHome, $template);
			$template = str_replace("##DATETIME##", $pDateTime, $template);
			$template = str_replace("##PERIODNUMBERID##", $pPeriodId, $template);
			$template = str_replace("##PERIOD##", $pPeriod, $template);
			$template = str_replace("##LINETYPE##", $this->lineType, $template);
			$template = str_replace("##BOOKNUMBERID##", $pBookNumberId, $template);
			$template = str_replace("##MONEYDATA##", $this->moneyObj->getData($pBookNumberId,$pSecondNum,$pNumErrorsMoney), $template);
			$template = str_replace("##SPREADDATA##", $this->spreadObj->getData($pBookNumberId,$pSecondNum,$pNumErrorsSpread), $template);
			$template = str_replace("##TOTALDATA##", $this->totalObj->getData($pBookNumberId,$pSecondNum,$pNumErrorsTotal), $template);
			return $template;
		}//function getData

    }//class lineClass



	$openLine = new lineClass($spreadDataOpen,$totalDataOpen,$moneyDataOpen,"open");
	$currentLine = new lineClass($spreadDataCurrent,$totalDataCurrent,$moneyDataCurrent,"current");

?>
