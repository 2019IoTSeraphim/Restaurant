<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
// define variables and set to empty values
$FirstNameErr = $MiddleNameErr = $LastNameErr = $IDPassportErr = "";
$DateofBirth = $Age = $Country = $RoomType = $RoomNo $CheckInDate = $Noofdaystostay = $CheckOutDate = $Children = $Adult = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["FirstName"])) {
    $FirstNameErr = "FirstName is required";
  } else {
    $FirstName = test_input($_POST["FirstName"]);
  }

  if (empty($_POST["MiddleName"])) {
    $MiddleNameErr = "MiddleName is required";
  } else {
    $MiddleName = test_input($_POST["MiddleName"]);
  }

  if (empty($_POST["LastName"])) {
    $LastName = "";
  } else {
    $LastName = test_input($_POST["LastName"]);
  }

  if (empty($_POST["IDPassportNo"])) {
    $IDPassportNo = "";
  } else {
    $IDPassportNo = test_input($_POST["IDPassportNo"]);
  }

  if (empty($_POST["Age"])) {
    $AgerErr = "Age is required";
  } else {
    $Age = test_input($_POST["Age"]);
  }
  if (empty($_POST["Country"])) {
    $CountryErr = "Country is required";
  } else {
    $Country = test_input($_POST["Country"]);
  }
  if (empty($_POST["RoomType"])) {
    $RoomTypeErr = "RoomType is required";
  } else {
    $RoomType = test_input($_POST["RoomType"]);
  }
  if (empty($_POST["RoomNo"])) {
    $RoomNoErr = "RoomNo is required";
  } else {
    $RoomNo = test_input($_POST["RoomNo"]);
  }
  if (empty($_POST["Noofdaystostay"])) {
    $NoofdaystostayErr = "Noofdaystostay is required";
  } else {
    $Noofdaystostay = test_input($_POST["Noofdaystostay"]);
  }
  if (empty($_POST["CheckOutDate"])) {
    $CheckOutDateErr = "CheckOutDate is required";
  } else {
    $CheckOutDate = test_input($_POST["CheckOutDate"]);
  }
  if (empty($_POST["Children"])) {
    $ChildrenErr = "Children is required";
  } else {
    $Children = test_input($_POST["Children"]);
  }
  if (empty($_POST["Adult"])) {
    $AdultErr = "Adult is required";
  } else {
    $Adult = test_input($_POST["Adult"]);
  }
}


?>