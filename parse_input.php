<?php

function parseInputData($jsonDataArray) {
   
    $result = [ 
        "code" => $jsonDataArray['STOCKCODE'],
        "stockOnhand" => $jsonDataArray['STOCKONHAND'],
        "incoming" => $jsonDataArray['INCOMING'],
        "qty1" => (string) $jsonDataArray['QTY1'],
        "price1" => $jsonDataArray['BLANK PRICE 1'],
        "qty2" => (string) $jsonDataArray['QTY2'],
        "price2" => $jsonDataArray['BLANK PRICE 2'],
        "qty3" => (string) $jsonDataArray['QTY3'],
        "price3" => $jsonDataArray['BLANK PRICE 3'],
        "qty4" => (string) $jsonDataArray['QTY4'],
        "price4" => $jsonDataArray['BLANK PRICE 4'],
        "qty5" => (string) $jsonDataArray['QTY5'],
        "price5" => $jsonDataArray['BLANK PRICE 5'],
        "qty6" => (string) $jsonDataArray['QTY6'],
        "price6" => $jsonDataArray['BLANK PRICE 6']      
    ];
        
    return $result; 
}

?>
