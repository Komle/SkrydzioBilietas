<?php
// define variables and set to empty values
$nameErr = $emailErr = $skrydisErr = $websiteErr = "";
$name = $email = $skrydis = $comment = $website = "";

if (empty($_POST["skrydis"])) {
    $skrydisErr = "*Butina pasirinkti";
  } else {
    $skrydis = test_input($_POST["skrydis"]);
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["vardas"])) {
    $nameErr = "*Butina uzpildyti";
  } else {
    $name = test_input($_POST["vardas"]);
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["pavarde"])) {
      $nameErr = "*Butina uzpildyti";
    } else {
      $name = test_input($_POST["pavarde"]);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
}
?>