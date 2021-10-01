<?php 
    session_start();
    $u = $_GET['username'];
    $p = $_GET['password'];

    include_once('dbconnect.php');

    $sql = "SELECT  n.names_id, n.names_pre, n.names_rname, n.names_sname, n.names_tel, n.names_email, n.names_rroom, r.room_id, r.room_name
            FROM roomtype1  r, accountroom a, names n
            WHERE n.names_id = r.room_id
            AND   r.room_id = r.room_name
            AND   username like ? AND password  like ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("aa",$u, $p);
    $stmt->execute();
    // $stmt -> store_result();
    // $stmt->bind_result($user,$pass);
    

    if($stmt->fetch()){
        $_SESSION['u'] = $u;
        $_SESSION['p'] = $p;
        require('sessionexp.php');
        header( 'Location: shownames.php');

    }else { header( 'Location: shownames.php');
    }
    ?>






