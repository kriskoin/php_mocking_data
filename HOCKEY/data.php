<?php

    include "emptyData.php";
    include "staticData.php";
    include "randomData.php";


    //********************************************************************************
    //
    //                    U S I N G    E M P T Y    D A T A
    //
    //********************************************************************************
/*
        $spreadDataOpen = new emptyDataClass();
        $totalDataOpen = new emptyDataClass();
        $moneyDataOpen = new emptyDataClass();

        $spreadDataCurrent = new emptyDataClass();
        $totalDataCurrent = new emptyDataClass();
        $moneyDataCurrent = new emptyDataClass();
*/
    //********************************************************************************
    //
    //                 E N D    U S I N G   E M P T Y    D A T A
    //
    //********************************************************************************



    //********************************************************************************
    //
    //                    U S I N G    S T A T I C    D A T A
    //
    //********************************************************************************
/*
        $spreadDataOpen = new spreadStaticDataClass();
        $totalDataOpen = new totalStaticDataClass();
        $moneyDataOpen = new moneyStaticDataClass();

        $spreadDataCurrent = new spreadStaticDataClass();
        $totalDataCurrent = new totalStaticDataClass();
        $moneyDataCurrent = new moneyStaticDataClass();
*/
    //********************************************************************************
    //
    //                 E N D    U S I N G    S T A T I C    D A T A
    //
    //********************************************************************************




    //********************************************************************************
    //
    //                      A R R A Y      D E F I N I T I O N S
    //
    //********************************************************************************



        $rotNumbersArray = array(
            793001 => 793002,
            793004 => 793005,
            793007 => 793008,
            793010 => 793011,
            793013 => 793014,
            793016 => 793017,
            793020 => 793021,
            793023 => 793024,
            793026 => 793027,
            793029 => 793030,
            793032 => 793033,
            793035 => 793036,
            793038 => 793039,
            793041 => 793042,
            793044 => 793045,
            793046 => 793047,
            793049 => 793050
            );

/*
        $rotNumbersArray = array(
            793001 => 793002,
            793004 => 793005,
            793007 => 793008
            );
*/
        $periodsArray = array(
            1 => "FG"


        );

        $booksArray = array(
            158 => "BetOnline",
            38 => "BetCris"
        );


        $BOOKS_SPREAD_VALUES_MAP_ARRAY1= array(
            158 => "values1",
            38 => "values2"
            );

        $BOOKS_SPREAD_TEMPLATES_MAP_ARRAY1 = array(
            158 => "template1",
            38 => "template2"
            );

        $BOOKS_TOTAL_VALUES_MAP_ARRAY1 = array(
            158 => "values1",
            38 => "values2"
            );

        $BOOKS_TOTAL_TEMPLATES_MAP_ARRAY1 = array(
            158 => "template1",
            38 => "template2"
            );

        $BOOKS_MONEY_VALUES_MAP_ARRAY1 = array(
            158 => "values1",
            38 => "values2"
            );

        $BOOKS_MONEY_TEMPLATES_MAP_ARRAY1 = array(
            158 => "template1",
            38 => "template2"
            );


    //********************************************************************************
    //
    //                     E N D    A R R A Y      D E F I N I T I O N S
    //
    //********************************************************************************




    //********************************************************************************
    //
    //                      V A R I A B L E S      D E F I N I T I O N S
    //
    //********************************************************************************

        $eventsDateTime ="2015-10-17T11:09:33+0";
        $minAmountErrorsSpread = 0;
        $minAmountErrorsTotal = 0;
        $minAmountErrorsMoney = 0;
        $generateOpenLinesFlag = 0;

    //********************************************************************************
    //
    //                      E N D    V A R I A B L E S      D E F I N I T I O N S
    //
    //********************************************************************************







    //********************************************************************************
    //
    //                    U S I N G    R A N D O M     D A T A
    //                                 without errors
    //********************************************************************************
        /*
        $spreadDataOpen = new spreadRandomDataNoErrClass();
        $totalDataOpen = new totalRandomDataNoErrClass();
        $moneyDataOpen = new moneyRandomDataNoErrClass();

        $spreadDataCurrent = new spreadRandomDataNoErrClass();
        $totalDataCurrent = new totalRandomDataNoErrClass();
        $moneyDataCurrent = new moneyRandomDataNoErrClass();
        */





        $spreadDataOpen = new spreadStaticDataClass();
        $totalDataOpen = new totalStaticDataClass();
        $moneyDataOpen = new moneyStaticDataClass();

        $spreadDataCurrent = new spreadRandomDataNoErrClass();
        //set up values
        $spreadDataCurrent->setArrayValues1($ARR_SPREAD_VALUES_NO_ERRORS1);
        $spreadDataCurrent->setArrayValues2($ARR_SPREAD_VALUES_NO_ERRORS1);
        $spreadDataCurrent->setArrayValues3($ARR_SPREAD_VALUES_NO_ERRORS1);
        $spreadDataCurrent->setArrayValues4($ARR_SPREAD_VALUES_NO_ERRORS1);
        $spreadDataCurrent->setArrayValues5($ARR_SPREAD_VALUES_NO_ERRORS1);
        $spreadDataCurrent->setMapArray($BOOKS_SPREAD_VALUES_MAP_ARRAY1);
        //setup templates
        $spreadDataCurrent->setTemplate1($TPL_SPREAD_NOERR1);
        $spreadDataCurrent->setTemplate2($TPL_SPREAD_NOERR1);
        $spreadDataCurrent->setTemplate3($TPL_SPREAD_NOERR1);
        $spreadDataCurrent->setTemplate4($TPL_SPREAD_NOERR1);
        $spreadDataCurrent->setTemplate5($TPL_SPREAD_NOERR1);
        $spreadDataCurrent->setBookTemplatesMap($BOOKS_SPREAD_TEMPLATES_MAP_ARRAY1);




        $totalDataCurrent = new totalRandomDataNoErrClass();
        //setup the values
        $totalDataCurrent->setArrayValues1($ARR_TOTAL_VALUES_NO_ERRORS1);
        $totalDataCurrent->setArrayValues2($ARR_TOTAL_VALUES_NO_ERRORS1);
        $totalDataCurrent->setArrayValues3($ARR_TOTAL_VALUES_NO_ERRORS1);
        $totalDataCurrent->setArrayValues4($ARR_TOTAL_VALUES_NO_ERRORS1);
        $totalDataCurrent->setArrayValues5($ARR_TOTAL_VALUES_NO_ERRORS1);
        $totalDataCurrent->setMapArray($BOOKS_TOTAL_VALUES_MAP_ARRAY1);
        //setup the templates
        $totalDataCurrent->setTemplate1($TPL_TOTAL_NOERR1);
        $totalDataCurrent->setTemplate2($TPL_TOTAL_NOERR1);
        $totalDataCurrent->setTemplate3($TPL_TOTAL_NOERR1);
        $totalDataCurrent->setTemplate4($TPL_TOTAL_NOERR1);
        $totalDataCurrent->setTemplate5($TPL_TOTAL_NOERR1);
        $totalDataCurrent->setBookTemplatesMap($BOOKS_TOTAL_TEMPLATES_MAP_ARRAY1);


        $moneyDataCurrent = new moneyRandomDataNoErrClass();
        //setup the values
        $moneyDataCurrent->setArrayValues1($ARR_MONEY_VALUES_NO_ERRORS1);
        $moneyDataCurrent->setArrayValues2($ARR_MONEY_VALUES_NO_ERRORS1);
        $moneyDataCurrent->setArrayValues3($ARR_MONEY_VALUES_NO_ERRORS1);
        $moneyDataCurrent->setArrayValues4($ARR_MONEY_VALUES_NO_ERRORS1);
        $moneyDataCurrent->setArrayValues5($ARR_MONEY_VALUES_NO_ERRORS1);
        $moneyDataCurrent->setMapArray($BOOKS_MONEY_VALUES_MAP_ARRAY1);
        //setup the templates
        $moneyDataCurrent->setTemplate1($TPL_MONEY_NOERR1);
        $moneyDataCurrent->setTemplate2($TPL_MONEY_NOERR1);
        $moneyDataCurrent->setTemplate3($TPL_MONEY_NOERR1);
        $moneyDataCurrent->setTemplate4($TPL_MONEY_NOERR1);
        $moneyDataCurrent->setTemplate5($TPL_MONEY_NOERR1);
        $moneyDataCurrent->setBookTemplatesMap($BOOKS_MONEY_TEMPLATES_MAP_ARRAY1);



    //********************************************************************************
    //
    //                    U S I N G    R A N D O M     D A T A
    //                                 without errors
    //********************************************************************************



?>
