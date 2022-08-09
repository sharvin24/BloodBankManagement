<?php
$query = $_POST["query"];

$servername = "localhost";
$username = "root";
$password = "";
$dbms = "bloodbank";

 $conn = new mysqli($servername, $username, $password, $dbms);
 if($conn->connect_error){
     die("Unable to connect." . $conn->conect_error . "<br>");
 }
 $result = $conn->query($query);

echo "Query Searched  : " . $query . "<br><br>";

 if($result->num_rows > 0){
     while($rows = $result->fetch_assoc()){
         echo   "DID :" . $rows["Did"] . 
         " Name :" . $rows["FName"] . 
         " " . $rows["LName"] . 
         " DOB " . $rows["DOB"] . 
         " Gender " . $rows["Gender"] . 
         " City Id " . $rows["CityId"] . 
         " BloodGp " . $rows["BloodGp"] . 
         " Phone No " . $rows["PhoneNo"] . 
         " Remarks " . $rows["Remarks"] . 
                ".<br><br>";
     }
 } else {
     echo "0 Results!";
 }
 $conn->close();
 ?>