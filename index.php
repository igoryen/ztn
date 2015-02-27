<?php

$file = fopen("../dentist.csv", "r");
echo "<pre>";

while (!feof($file)) {
  //print_r(fgetcsv($file)); // 7
  echo fgetcsv($file)[13]."<br>"; // 8
}
echo "</pre>";

fclose($file);


$ch = curl_init("http://zip.getziptastic.com/v2/US/48867"); // 1
$fp = fopen("result.txt", "w"); // 5

curl_setopt($ch, CURLOPT_FILE, $fp); // 2
curl_setopt($ch, CURLOPT_HEADER, 0); // 6

curl_exec($ch); // 3
curl_close($ch); // 4
fclose($fp);

$string = file_get_contents("result.txt");
echo $string;