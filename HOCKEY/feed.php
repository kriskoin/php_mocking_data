<?php
        //error_reporting(E_ERROR);
        include "events.php";


        /*
        reset($booksArray);
        while (list($clave, $valor) = each($booksArray)) {
            echo "<h3>Clave: $clave; Valor: $valor<br /></h3>";
        }

        foreach ($array as $clave => $booksArray) {
            echo "<h3>Clave: $clave; Valor: $valor<br /></h3>";
        }
        */

        class feedClass {
            private $rotationNumbersArray;
            private $periodsArray;
            private $bookArray;
            private $eventObj;
            private $eventsData;
            private $templateFeed = <<<EOD
<?xml version='1.0' encoding='utf-8'?>
<don_best_sports>
<title>Simulating Don Best Current Lines ##SECONDNUMBER##</title>
<link>/v2/odds/9</link>
<id>current_lines_9_2_25_false</id>
<updated>2015-10-17T23:20:14+0</updated>
##EVENTSDATA##
</don_best_sports>
EOD;

            public function __construct($pRotationNumbersArray,
									    $pPeriodsArray,
									    $pBookArray,
                                        $pEventObj){
                $this->rotationNumbersArray = $pRotationNumbersArray;
                $this->periodsArray = $pPeriodsArray;
                $this->bookArray = $pBookArray;
                $this->eventObj = $pEventObj;

            }//__construct



            public function getData($pDateTime,
                                    $pNumErrorsSpread,
                                    $pNumErrorsTotal,
                                    $pNumErrorsMoney,
                                    $pOpenLinesFlag){
                $eventIdNumber = rand(777, 29999);
                $dateTime = getdate();

                $secondNumber = $dateTime['seconds'];
                reset($this->rotationNumbersArray);
                $this->eventsData = "";
                while (list($rotAway, $rotHome) = each($this->rotationNumbersArray)) {
                    //echo "rotAway :$rotAway  rotHome: $rotHome\n";

                    $this->eventsData = $this->eventsData . $this->eventObj->getData(
                                                                                    $secondNumber,
                                                                                    $pNumErrorsSpread,
                                                                                    $pNumErrorsTotal,
                                                                                    $pNumErrorsMoney,
                                                                                    $eventIdNumber,
                                                                                    $rotAway,
                                                                                    $rotHome,
                                                                                    $pDateTime,
                                                                                    $this->periodsArray,
                                                                                    $this->bookArray,
                                                                                    $pOpenLinesFlag
                                                                                    );

                }//while
                $this->templateFeed = str_replace("##SECONDNUMBER##", $secondNumber, $this->templateFeed);
                $this->templateFeed = str_replace("##EVENTSDATA##", $this->eventsData, $this->templateFeed);
                return $this->templateFeed;
            }//function getData


		}//feedClass

		/*
		$pRotationNumbersArray, *
									    $pPeriodsArray, *
									    $pBookArray, *
                                        $pEventObj

		*/

		$feed = new feedClass($rotNumbersArray,$periodsArray,$booksArray,$event);
		Header('Content-type: text/xml');

        echo $feed->getData($eventsDateTime,
                            $minAmountErrorsSpread,
                            $minAmountErrorsTotal,
                            $minAmountErrorsMoney,
                            $generateOpenLinesFlag);
    ?>

