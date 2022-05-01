<?php

include "database.php";


$title = $_POST["title"];
$text = $_POST["text"];
$time = $_POST["time"];
$date = $_POST["date"];
$color = $_POST["color"];

$db->query("INSERT INTO taskdata(title,text,date,time,color) VALUES ('$title', '$text','$date', '$time', '$color')");
    header("Location: index.php");

?>

