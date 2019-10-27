<?php
     include "lines.php";




	 class eventClass {
        private $lineOpenObj;
        private $lineCurrentObj;
		private $numMinErrSpreadData;
		private $numMinErrTotalData;
		private $numMinErrMoneyData;
		private $eventLines;
		private $templateEvents = <<<EOD
<event id="##EVENTIDNUMBER##" date="##EVENTDATE##">
##EVENTLINES##
</event>
EOD;
		public function __construct($pLineOpenObj,
									$pLineCurrentObj,
									$pNumMinErrSpreadData,
									$pNumMinErrTotalData,
									$pNumMinErrMoneyData
									){
            $this->lineOpenObj = $pLineOpenObj;
            $this->lineCurrentObj = $pLineCurrentObj;
			$this->numMinErrSpreadData = $pNumMinErrSpreadData;
			$this->numMinErrTotalData = $pNumMinErrTotalData;
			$this->numMinErrMoneyData = $pNumMinErrMoneyData;
        }//__construct



		public  function getData(
										$pSecondNum,
                                        $pNumErrorsSpread,
                                        $pNumErrorsTotal,
                                        $pNumErrorsMoney,
										$pEventId,
										$pRotAway,
										$pRotHome,
										$pDateTime,
										$pPeriodIdArray,
										$pBookNumberIdArray,
										$pOpenLinesFlag
										) {
            // process the period array
            reset($pPeriodIdArray);
            $this->eventLines ="";
            while (list($periodIdNumber, $periodId) = each($pPeriodIdArray)) {
               //process the pBookNumberIdArray
               reset($pBookNumberIdArray);

                while (list($bookIdNumber, $bookId) = each($pBookNumberIdArray)) {

                    //echo "rotAway :$pRotAway  rotHome: $pRotHome periodId:$periodIdNumber period:$periodId bookId:$bookIdNumber book:$bookId \n";
                    if($pOpenLinesFlag == 1){
                        $this->eventLines = $this->eventLines . $this->lineOpenObj->getData($pSecondNum,
                                                                                        $pNumErrorsSpread,
                                                                                        $pNumErrorsTotal,
                                                                                        $pNumErrorsMoney,
                                                                                        $pRotAway,
                                                                                        $pRotHome,
                                                                                        $pDateTime,
                                                                                        $periodIdNumber,
                                                                                        $periodId,
                                                                                        $bookIdNumber);
                    }

                    $this->eventLines = $this->eventLines . $this->lineCurrentObj->getData($pSecondNum,
                                                                                            $pNumErrorsSpread,
                                                                                            $pNumErrorsTotal,
                                                                                            $pNumErrorsMoney,
                                                                                            $pRotAway,
                                                                                            $pRotHome,
                                                                                            $pDateTime,
                                                                                            $periodIdNumber,
                                                                                            $periodId,
                                                                                            $bookIdNumber);


                }//While
            }//While
            $template = $this->templateEvents ;
            $template = str_replace("##EVENTLINES##", $this->eventLines, $template);
            $template = str_replace("##EVENTIDNUMBER##", $pEventId, $template);
            $template = str_replace("##EVENTDATE##", $pDateTime, $template);
            return $template;
		}//function getData
	 }// class eventClass

	 $event = new eventClass($openLine,$currentLine,0,0,0);
?>
