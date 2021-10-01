<?php
        session_start();
        if($_SESSION['u'] != null){
        include_once('dbconnect.php');
        $ืnames_id = $_GET['names_id'];
       

        $sql = "SELECT names_id FROM    names  WHERE   names_id like ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("n",$names_id);

        $stmt->execute();
        $stmt -> store_result(); 
        $stmt -> bind_result($names_id); 

        if($stmt->fetch()){
                $sql1 = "DELETE FROM names WHERE names_id like ?";
                $stmt = $conn->prepare($sql1);
                $stmt->bind_param("n",$names_id);
                $stmt->execute();

                $sql2 = "DELETE FROM accountroom WHERE room_id like ?";
                $stmt = $conn->prepare($sql2);
                $stmt->bind_param("n",$names_id);
                $stmt->execute();

                $stmt->close();
                header( 'Location: shownames.php');
        }else { ?>
                <div class="alert alert-warning mt-5 pt-3" role="alert">
                ไม่พบข้อมูลที่ต้องการลบ <?php echo $names_id;  ?>
            </div>
      <?php  } }else { header( 'Location:shownames.php'); }?>
?>
