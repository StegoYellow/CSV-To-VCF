<?php
$filename = 'tester.csv';
$contacts = [];

$h = fopen("{$filename}", "r");

while(($row = fgetcsv($h, 1000, ",")) !== FALSE) {
  $contacts[] = $row;
  echo $row;
}

fclose($h);

echo "<pre>";
var_dump($contacts);
echo "</pre>";
?>
