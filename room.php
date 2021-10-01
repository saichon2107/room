<?php
session_start(); 
include_once('dbconnect.php');

$sql = "SELECT  r.room_id, r.room_name
        FROM    roomtype1 r";

$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($room_id, $room_name);

?>