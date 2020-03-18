<?php
session_start();
$k = $_SESSION['user'];
$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "note";
date_default_timezone_set("Asia/Calcutta");
$connec = new mysqli($servername,$username,$password,$db_name);
$sql = "SELECT username from user_authentication WHERE email = '".$k."'";
$result = $connec->query($sql);
$row = $result->fetch_assoc();
$db_name_2 =  $row['username'];
$_SESSION['dbname'] = $db_name_2;
$connec1 = new mysqli($servername,$username,$password,$db_name_2);
$stmt = $connec1->prepare("INSERT INTO notes(topic,subtopic,note,date,time) VALUES(?,?,?,?,?)");
$stmt->bind_param("sssss",$k1,$k2,$k3,$k4,$k5);
echo $row['username'];
$k1 = $_POST['topic'];
$k2 = $_POST['subtopic'];
$k3 = $_POST['notes'];
$k4 =  date("Y/m/d");
$k5 = date("h:i:sa");
$stmt->execute();
header("Location:../note.php");
?>