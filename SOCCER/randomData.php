<?php
    include "baseData.php";

    class spreadRandomDataNoErrClass extends spreadBaseDataClass {

        private $template1 ;
        private $template2 ;
        private $template3 ;
        private $template4 ;
        private $template5 ;
        private $bookTemplatesMap;

        function __construct() {
           parent::__construct();
        }//__construct

        public function setTemplate1($pTemplate){
            $this->template1 = $pTemplate;
        }//setTemplate1

        public function setTemplate2($pTemplate){
            $this->template2 = $pTemplate;
        }//setTemplate2

        public function setTemplate3($pTemplate){
            $this->template3 = $pTemplate;
        }//setTemplate3

        public function setTemplate4($pTemplate){
            $this->template4 = $pTemplate;
        }//setTemplate4

        public function setTemplate5($pTemplate){
            $this->template5 = $pTemplate;
        }//setTemplate5

        public function setBookTemplatesMap($pBookTemplateMap){
            $this->bookTemplatesMap =$pBookTemplateMap;
        }//setBookTemplatesMap

        public function getTemplate($pBookId){

            $template="";
            switch ($this->bookTemplatesMap[$pBookId]){
                case "template1":
                    $template =  $this->template1;
                    break;
                case "template2":
                    $template =  $this->template2;
                    break;
                case "template3":
                    $template =  $this->template3;
                    break;
                case "template4":
                    $template =  $this->template4;
                    break;
                case "template5":
                    $template =  $this->template5;
                    break;
            }//switch

            return $template;
       }//getTemplate




         public function getValueNoErr($pBookId,$pSecondNum,$pNumErrors){
            if ($pSecondNum<0 ){
                return "";
            }
            if ($pSecondNum > 59){
                return "";
            }
            $templateTmp = $this->getTemplate($pBookId);
            $values = $this->getBookValues($pBookId,$pSecondNum,$pNumErrors);
            $templateTmp = str_replace("##SPREAD_AWAY##", $values['SPREAD_AWAY'], $templateTmp);
            $templateTmp = str_replace("##SPREAD_AWAYPRICE##", $values['SPREAD_AWAYPRICE'], $templateTmp);
            $templateTmp = str_replace("##SPREAD_HOME##", $values['SPREAD_HOME'], $templateTmp);
            $templateTmp = str_replace("##SPREAD_HOMEPRICE##", $values['SPREAD_HOMEPRICE'], $templateTmp);
            return $templateTmp;
       }//getValueNoErr

        public function getData($pBookId,$pSecondNum,$pNumErrors) {
            return $this->getValueNoErr($pBookId,$pSecondNum,$pNumErrors);
        }// public function getData()

    }//class spreadRandomDataNoErrClass

	class totalRandomDataNoErrClass extends totalBaseDataClass {
        private $template1 ;
        private $template2 ;
        private $template3 ;
        private $template4 ;
        private $template5 ;
        private $bookTemplatesMap;

        function __construct() {
           parent::__construct();
        }//__construct

        public function setTemplate1($pTemplate){
            $this->template1 = $pTemplate;
        }//setTemplate1

        public function setTemplate2($pTemplate){
            $this->template2 = $pTemplate;
        }//setTemplate2

        public function setTemplate3($pTemplate){
            $this->template3 = $pTemplate;
        }//setTemplate3

        public function setTemplate4($pTemplate){
            $this->template4 = $pTemplate;
        }//setTemplate4

        public function setTemplate5($pTemplate){
            $this->template5 = $pTemplate;
        }//setTemplate5

         public function setBookTemplatesMap($pBookTemplateMap){
            $this->bookTemplatesMap =$pBookTemplateMap;
        }//setBookTemplatesMap

        public function getTemplate($pBookId){

            $template="";
            switch ($this->bookTemplatesMap[$pBookId]){
                case "template1":
                    $template =  $this->template1;
                    break;
                case "template2":
                    $template =  $this->template2;
                    break;
                case "template3":
                    $template =  $this->template3;
                    break;
                case "template4":
                    $template =  $this->template4;
                    break;
                case "template5":
                    $template =  $this->template5;
                    break;
            }//switch

            return $template;
       }//getTemplate


        public function getValueNoErr($pBookId,$pSecondNum,$pNumErrors){
            if ($pSecondNum<0 ){
                return "";
            }
            if ($pSecondNum > 59){
                return "";
            }
            $templateTmp = $this->getTemplate($pBookId);
            $values = $this->getBookValues($pBookId,$pSecondNum,$pNumErrors);
            //echo "TOTAL templateTmp: $templateTmp values:$values\n ";
            //exit(0);
            $templateTmp = str_replace("##TOTAL##", $values['TOTAL'], $templateTmp);
            $templateTmp = str_replace("##TOTALOVER##", $values['TOTAL_OVER'], $templateTmp);
            $templateTmp = str_replace("##TOTALUNDER##", $values['TOTAL_UNDER'], $templateTmp);
            return $templateTmp;
       }//getValueNoErr

        public function getData($pBookId,$pSecondNum,$pNumErrors) {
            return $this->getValueNoErr($pBookId,$pSecondNum,$pNumErrors);
        }// public function getData()

    }//class totalRandomDataNoErrClass

	class moneyRandomDataNoErrClass extends moneyBaseDataClass {
        private $template1 ;
        private $template2 ;
        private $template3 ;
        private $template4 ;
        private $template5 ;
        private $bookTemplatesMap;

        function __construct() {
           parent::__construct();
        }//__construct

        public function setTemplate1($pTemplate){
            $this->template1 = $pTemplate;
        }//setTemplate1

        public function setTemplate2($pTemplate){
            $this->template2 = $pTemplate;
        }//setTemplate2

        public function setTemplate3($pTemplate){
            $this->template3 = $pTemplate;
        }//setTemplate3

        public function setTemplate4($pTemplate){
            $this->template4 = $pTemplate;
        }//setTemplate4

        public function setTemplate5($pTemplate){
            $this->template5 = $pTemplate;
        }//setTemplate5

         public function setBookTemplatesMap($pBookTemplateMap){
            $this->bookTemplatesMap =$pBookTemplateMap;
        }//setBookTemplatesMap

        public function getTemplate($pBookId){

            $template="";
            switch ($this->bookTemplatesMap[$pBookId]){
                case "template1":
                    $template =  $this->template1;
                    break;
                case "template2":
                    $template =  $this->template2;
                    break;
                case "template3":
                    $template =  $this->template3;
                    break;
                case "template4":
                    $template =  $this->template4;
                    break;
                case "template5":
                    $template =  $this->template5;
                    break;
            }//switch

            return $template;
       }//getTemplate

         public function getValueNoErr($pBookId,$pSecondNum,$pNumErrors){
            if ($pSecondNum<0 ){
                return "";
            }
            if ($pSecondNum > 59){
                return "";
            }
            //echo "book:$pBookId second:$pSecondNum numErr:$pNumErrors\n";
            $templateTmp = $this->getTemplate($pBookId);
            $values = $this->getBookValues($pBookId,$pSecondNum,$pNumErrors);
            //echo "MONEY templateTmp: $templateTmp values:$values\n ";
            //exit(0);

            $templateTmp = str_replace("##MONEY_AWAY##", $values['MONEY_AWAY'], $templateTmp);
            $templateTmp = str_replace("##MONEY_HOME##", $values['MONEY_HOME'], $templateTmp);
            $templateTmp = str_replace("##MONEY_DRAW##", $values['MONEY_DRAW'], $templateTmp);
            return $templateTmp;
       }//getValueNoErr

        public function getData($pBookId,$pSecondNum,$pNumErrors) {
            return $this->getValueNoErr($pBookId,$pSecondNum,$pNumErrors);
        }// public function getData()

    }//class moneyRandomDataNoErrClass

?>
