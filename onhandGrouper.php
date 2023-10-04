<?php

$datafile = file_get_contents('input.json');
$data = json_decode($datafile, true);

$grouped = [];

foreach ($data as $item) {
    $headerCode = $item['HEADER CODE'];

    $onhand = $item['STOCKONHAND'];

    if (!isset($grouped[$headerCode]) || $onhand < $grouped[$headerCode]) {
        $grouped[$headerCode] = $onhand;
    }
}

$result = json_encode($grouped, JSON_PRETTY_PRINT);

file_put_contents('output.json', $result);

echo "Data written to output.json successfully!";

?>
