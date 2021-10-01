<?php   
    session_start();
    include_once('dbconnect.php');
$names_id = $_GET['names_id'];
$names_pre = $_GET['names_pre'];
$names_rname = $_GET['names_rname'];
$names_sname= $_GET['names_sname'];
$names_tel = $_GET['names_tel'];
$names_email = $_GET['names_email'];
$names_rroom = $_GET['names_rroom'];
$room_id = $_GET['room_id'];
$user = $_GET['user'];
$pass = $_GET['pass'];

    $sql = "SELECT  names_id FROM    names  WHERE  names_id like ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("n",$names_id);

    $stmt->execute();
    $stmt -> store_result(); 
    $stmt -> bind_result($names_id); 

    if($stmt->fetch()){
            $sql1 = "UPDATE names SET  names_pre = ?,
                     names_rname = ?,
                     names_sname = ?,
                     names_tel = ?,
                     names_email = ?,
                     names_rroom = ?,
                     room_id = ?
                    WHERE names_id like ?";
            $stmt = $conn->prepare($sql1);
            $stmt->bind_param("nnnnnnn",$names_pre,$names_rname,$names_sname,$names_tel,$names_email,$names_rroom ,$id_rt,$room_id);
            $stmt->execute();
            $stmt->close();
            header( 'Location: shownames.php');
    }else {
            echo "ไม่พบข้อมูล" . $room_id;
    }
?>

