<?php
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); 
$dotenv->load();

function executeMutation($variables) {
    $endpoint = $_ENV['API_URL'];
    
    $mutation = '
    mutation updateInventoryPrice($input: UpdateInventoryPriceInput!) {
      updateInventoryPrice(input: $input) {
          confirmation
      }
    }';

    $headers = [
        'Content-Type: application/json'
    ];

    $ch = curl_init($endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['query' => $mutation, 'variables' => $variables]));

    $response = curl_exec($ch);

    if (!$response) {
        die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
    }

    echo 'HTTP Status Code: ' . curl_getinfo($ch, CURLINFO_HTTP_CODE) . PHP_EOL;
    echo 'Response Body: ' . $response . PHP_EOL;

    curl_close($ch);
}

?>





