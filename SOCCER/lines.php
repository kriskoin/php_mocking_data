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

        //  getData: Generate a xml  output like:
        // <line away_rot="993001" home_rot="993002" time="2015-10-17T11:09:33+0" period_id="1" period="FG" type="current" sportsbook="158" no_line="false">
        //   <money away_money="-217" home_money="620" draw_money="290"/>
        //   <ps away_spread="3.25" away_price="110" home_spread="-3.25" home_price="-110"/>
        //   <total total="3.5" over_price="-100" under_price="-120"/>
        //   <display away="0" home="0"/>
        // </line>
        //
        //
        //
        // $pSecondNum : Out ramdom seed
        // $pNumErrorsSpread, Amount of errors expected within the Spread point feed
        // $pNumErrorsTotal,  Amount of errors expected within the Total points
        // $pNumErrorsMoney,  Amount of errors expected within the Money Line
        // $pRotAway,   Rotation number Away
        // $pRotHome,   Rotation number Home
        // $pDateTime,  Date Time
        // $pPeriodId,  Period Id  an ordinal number
        // $pPeriod,    Period name 1h 2h 1q 2q 3q 4q
        // $pBookNumberId Integer
        //
        //


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
