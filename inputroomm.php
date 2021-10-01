<?php 
        session_start();
        include_once('dbconnect.php');
        $room_id = $_GET['room_id'];
        $room_name = $_GET['room_name'];


        $sql = "INSERT INTO  roomtype1(room_id,room_name)
                VALUES(?,?)";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("rr",$room_id,$room_name);

        $stmt->execute();
        $stmt->close();
        header( 'Location: showroom.php' ) ;
?>