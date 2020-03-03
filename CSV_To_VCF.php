<?php
use JeroenDesloovere\VCard\VCard;

$filename = 'tester.csv';
$contacts = [];
/*
Structure:
[First Name][Last Name][Phone Number]
*/

//Open up CSV for reading
$h = fopen("{$filename}", "r");

/*
While there are still rows to read in the CSV, copy them
into Contacts array. Each row represents one person's info.
*/
while(($row = fgetcsv($h, 1000, ",")) !== FALSE) {
  $contacts[] = $row;
  echo $row;
}

fclose($h);

//Loovere VCard Instantiation
$vcard = new VCard();

//Creating a vcard array that we will export
for($x = 0; $x < count($contacts); $x++) {
  $temp = $contacts[$x];

  $vcard->addName($contacts[0], $contacts[1], $contacts[2]);
}

echo "<pre>";
var_dump($contacts);
echo "</pre>";

return $vcard->download();
?>
