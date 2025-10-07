<?php
// C# WebAPI URL
$apiUrl = "http://localhost:420/";

// Get the content from the API
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 1);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Show result
if ($httpCode == 200) {
    echo $response; // HTML from WebAPI
} else {
    echo file_get_contents('offline.txt');
}
?>