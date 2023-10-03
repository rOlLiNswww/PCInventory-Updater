<?php

require_once 'parse_input.php';
require_once 'execute_mutation.php';

$data = file_get_contents('input.json');
$jsonDataArray = json_decode($data, true);

if (is_array($jsonDataArray)) {
    foreach ($jsonDataArray as $jsonData) {
        $dataArray = parseInputData($jsonData);
        executeMutation(["input" => $dataArray]);
    }
}
?>
