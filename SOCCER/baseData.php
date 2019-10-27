<?php
    include "arrays.php";
    include "templates.php";

    class spreadBaseDataClass {
        private $values1;
        private $values2;
        private $values3;
        private $values4;
        private $values5;
        private $bookValuesMap;

       public function __construct(){


       }//__construct

       public function setArrayValues1($pArrayValues){
            $this->values1 = $pArrayValues;
       }//setArrayValues1

       public function setArrayValues2($pArrayValues){
            $this->values2 = $pArrayValues;
       }//setArrayValues2

       public function setArrayValues3($pArrayValues){
            $this->values3 = $pArrayValues;
       }//setArrayValues3

       public function setArrayValues4($pArrayValues){
            $this->values4 = $pArrayValues;
       }//setArrayValues4

       public function setArrayValues5($pArrayValues){
            $this->values5 = $pArrayValues;
       }//setArrayValues5

       public function setMapArray($pArrayValues){
            $this->bookValuesMap = $pArrayValues;
       }//setMapArray

       public function getBookValues($pBookId,$pSecondNum,$pNumErrors){
            if ($pSecondNum<0 ){
                return "";
            }
            if ($pSecondNum > 59){
                return "";
            }
            $valuesArray="";
            switch ($this->bookValuesMap[$pBookId]){
                case "values1":
                    $valuesArray =  $this->values1;
                    break;
                case "values2":
                    $valuesArray =  $this->values2;
                    break;
                case "values3":
                    $valuesArray =  $this->values3;
                    break;
                case "values4":
                    $valuesArray =  $this->values4;
                    break;
                case "values5":
                    $valuesArray =  $this->values5;
                    break;
            }//switch

            return $valuesArray[$pSecondNum];
       }//setMapArray

    }//class spreadBaseDataClass


    /*
     $booksSpreadValuesMapArray = array(
            158 => "values1",
            33 => "values2"
            );
    */

	class totalBaseDataClass {
        private $values1;
        private $values2;
        private $values3;
        private $values4;
        private $values5;
        private $bookValuesMap;

       public function __construct(){


       }//__construct

       public function setArrayValues1($pArrayValues){
            $this->values1 = $pArrayValues;
       }//setArrayValues1

       public function setArrayValues2($pArrayValues){
            $this->values2 = $pArrayValues;
       }//setArrayValues2

       public function setArrayValues3($pArrayValues){
            $this->values3 = $pArrayValues;
       }//setArrayValues3

       public function setArrayValues4($pArrayValues){
            $this->values4 = $pArrayValues;
       }//setArrayValues4

       public function setArrayValues5($pArrayValues){
            $this->values5 = $pArrayValues;
       }//setArrayValues5

       public function setMapArray($pArrayValues){
            $this->bookValuesMap = $pArrayValues;
       }//setMapArray

       public function getBookValues($pBookId,$pSecondNum,$pNumErrors){
            if ($pSecondNum<0 ){
                return "";
            }
            if ($pSecondNum > 59){
                return "";
            }
            $valuesArray="";
            switch ($this->bookValuesMap[$pBookId]){
                case "values1":
                    $valuesArray =  $this->values1;
                    break;
                case "values2":
                    $valuesArray =  $this->values2;
                    break;
                case "values3":
                    $valuesArray =  $this->values3;
                    break;
                case "values4":
                    $valuesArray =  $this->values4;
                    break;
                case "values5":
                    $valuesArray =  $this->values5;
                    break;
            }//switch

            return $valuesArray[$pSecondNum];
       }//setMapArray

    }//class totalBaseDataClass

	class moneyBaseDataClass {
       private $values1;
        private $values2;
        private $values3;
        private $values4;
        private $values5;
        private $bookValuesMap;

       public function __construct(){


       }//__construct

       public function setArrayValues1($pArrayValues){
            $this->values1 = $pArrayValues;
       }//setArrayValues1

       public function setArrayValues2($pArrayValues){
            $this->values2 = $pArrayValues;
       }//setArrayValues2

       public function setArrayValues3($pArrayValues){
            $this->values3 = $pArrayValues;
       }//setArrayValues3

       public function setArrayValues4($pArrayValues){
            $this->values4 = $pArrayValues;
       }//setArrayValues4

       public function setArrayValues5($pArrayValues){
            $this->values5 = $pArrayValues;
       }//setArrayValues5

       public function setMapArray($pArrayValues){
            $this->bookValuesMap = $pArrayValues;
       }//setMapArray

       public function getBookValues($pBookId,$pSecondNum,$pNumErrors){
            if ($pSecondNum<0 ){
                return "";
            }
            if ($pSecondNum > 59){
                return "";
            }
            $valuesArray="";
            switch ($this->bookValuesMap[$pBookId]){
                case "values1":
                    $valuesArray =  $this->values1;
                    break;
                case "values2":
                    $valuesArray =  $this->values2;
                    break;
                case "values3":
                    $valuesArray =  $this->values3;
                    break;
                case "values4":
                    $valuesArray =  $this->values4;
                    break;
                case "values5":
                    $valuesArray =  $this->values5;
                    break;
            }//switch

            return $valuesArray[$pSecondNum];
       }//getBookValues



    }//class moneyBaseDataClass

?>
