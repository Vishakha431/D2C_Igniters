<?php
include("config.php");
extract($_POST);
$sql = "INSERT INTO `contact_db`(`fname`, `email`, `mobile`, `message`) VALUES ('".$fname."','".$email."',".$mobile.",'".$message."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo "Thank You For Contacting Us ";
$mysqli->close();
?>