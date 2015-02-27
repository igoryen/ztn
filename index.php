<?php

$file = fopen("../dentist2.csv", "r");
echo "<pre>";

while (!feof($file)) {
  $zipcode = fgetcsv($file)[13];
  if(!is_numeric($zipcode)){ 
    echo $zipcode . " - not numeric but ". gettype($zipcode)."<br>";
    echo "--------<br>";
  }
  else{
    echo $zipcode . " is numeric<br>";
    //print_r(fgetcsv($file)); // 7
    //echo fgetcsv($file)[13]."<br>"; // 8
    $str = "http://zip.getziptastic.com/v2/US/" . $zipcode;
    //echo $str . "<br>";
    $ch = curl_init($str); // 1
    $fp = fopen("result2.txt", "a"); // 5
    curl_setopt($ch, CURLOPT_FILE, $fp); // 2
    curl_setopt($ch, CURLOPT_HEADER, 0); // 6
    curl_exec($ch); // 3
    curl_close($ch); // 4
    fclose($fp);
    echo "--------<br>";
  }
}
echo "</pre>";

fclose($file);

$names = file_get_contents("result2.txt");
echo $names;


echo "<br>============================================<br>";
$ch = curl_init("http://zip.getziptastic.com/v2/US/48867"); // 1
$fp = fopen("result.txt", "w"); // 5

curl_setopt($ch, CURLOPT_FILE, $fp); // 2
curl_setopt($ch, CURLOPT_HEADER, 0); // 6

curl_exec($ch); // 3
curl_close($ch); // 4
fclose($fp);

$string = file_get_contents("result.txt");
echo $string;