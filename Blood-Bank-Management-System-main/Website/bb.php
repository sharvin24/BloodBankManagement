<?php

$pid = val($_POST["pid"]);
$did = val($_POST["did"]);
$sid = val($_POST["sid"]);
$date = val($_POST["date"]);

function val($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbms = "bloodbank";

$conn = new mysqli($servername, $username, $password, $dbms);

if($conn->connect_error){
    die ("Unable To Connect To Our Server!" . $conn->connect_error);
}
$sql = "INSERT INTO bloodbank (PacketID, Did, Sid, date) VALUES 
    ('$pid','$did','$sid','$date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>