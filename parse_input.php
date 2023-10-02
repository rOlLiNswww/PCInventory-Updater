<?php

function parseInputData() {
    $data = file_get_contents('input.json');
    $jsonDataArray = json_decode($data, true);
    $result = [];

    if (is_array($jsonDataArray)) {
        foreach ($jsonDataArray as $jsonData) {
            $result[] = [
                "code" => $jsonData['HEADER CODE'],
                "stockOnhand" => $jsonData['STOCKONHAND'],
                "incoming" => $jsonData['INCOMING'],
                "qty1" => (string) $jsonData['QTY1'],
                "price1" => $jsonData['BLANK PRICE 1'],
                "qty2" => (string) $jsonData['QTY2'],
                "price2" => $jsonData['BLANK PRICE 2'],
                "qty3" => (string) $jsonData['QTY3'],
                "price3" => $jsonData['BLANK PRICE 3'],
                "qty4" => (string) $jsonData['QTY4'],
                "price4" => $jsonData['BLANK PRICE 4'],
                "qty5" => (string) $jsonData['QTY5'],
                "price5" => $jsonData['BLANK PRICE 5'],
                "qty6" => (string) $jsonData['QTY6'],
                "price6" => $jsonData['BLANK PRICE 6']      
            ];
        }
    }

    return $result; 
}

?>
