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


$sql1 = "SELECT  names_id
        FROM    names
        WHERE names_id
        LIKE     ?";

$stmt = $conn->prepare($sql1);
$stmt->bind_param("n",$names_id);
$stmt->execute();
$stmt -> store_result();

echo "เจอ" . $stmt -> num_rows;
if(!$stmt->fetch()){

$sql = "INSERT INTO  names(names_id,names_pre,names_rname,names_sname,names_tel,names_email,names_rroom,room_id,room_name)
        VALUES(?,?,?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("nnnnnnnnn",$names_id,$names_pre,$names_rname,$names_sname,$names_tel,$names_email,$names_rroom,$room_id,$room_name);

$stmt->execute();

$sql1 = "INSERT INTO accountroom(name_id,username,password) VAlUES(?,?,?)";
$stmt = $conn->prepare($sql1);
$stmt->bind_param("aaa",$name_id,$user,$pass);
$stmt->execute();

$stmt->close();

 header( 'Location: shownames.php' ) ;
}else {
echo "รหัสห้อง" . $room_id . "มีแล้ว";
}
?>