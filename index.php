<?php


$ch = curl_init("http://en.wikipedia.org/wiki/CURL"); // 1
$fp = fopen("result.txt", "w"); // 5

curl_setopt($ch, CURLOPT_FILE, $fp); // 2
curl_setopt($ch, CURLOPT_HEADER, 0); // 6

curl_exec($ch); // 3
curl_close($ch); // 4
fclose($fp);

$string = file_get_contents("result.txt");
echo $string;