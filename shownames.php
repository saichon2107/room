<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>ระบบข้อมูลการจอง</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col col-sm-12">
          <h3  class="jumbotron" align="center"> ระบบข้อมูลการจอง </h3>
        </div>
<body>
    <div class="container">
        <?php
        include_once('header.php');
        include_once('dbconnect.php');
        $status = "active";
        ?>
        

        <div class="row">
            <form action="shownames.php" method="GET" class="pt-3">
              

        <?php
        if (isset($_GET['find']) &&  $_GET['room_id'] != '') {
            $room_id = $_GET['room_id'];
            $sql = "SELECT n.names_id,n.names_pre,n.names_rname,n.names_sname,n.names_tel,n.names_email,n.names_rroom,r.room_id,r.room_name
            FROM   names n, roomtype1 r
            WHERE  n.names_id = r.room_id
            AND    n.names_id = r.room_id";
        } else {


            $sql = "SELECT n.names_id,n.names_pre,n.names_rname,n.names_sname,n.names_tel,n.names_email,n.names_rroom,r.room_id,r.room_name
            FROM   n.names_id = r.room_id
            WHERE    n.names_id = r.room_id";
        }

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($names_id, $names_pre, $names_rname, $names_sname, $names_tel, $names_email, $names_rroom, $room_id_old, $room_name);

        if ($stmt->num_rows() > 0) {

        ?>
            <table class="table table-info table-striped table-hover table-responsive mt-3 ">
                <thead>
                    <tr>
                        <th scope="col">รหัส</th>
                        <th scope="col">คำนำหน้า</th>
                        <th scope="col">ชื่อ</th>
                        <th scope="col">นามสกุล</th>
                        <th scope="col">เบอร์โทร</th>
                        <th scope="col">email</th>
                        <th scope="col">ชื่อห้องพัก</th>
                        <th scope="col">ห้อง</th>
                        <?php 
                        if($_SESSION['u'] != null){ ?>
                        <th scope="colspan='2'">Action</th>
                        <th scope="col"></th>
                        <?php }else { ?>
                            <th scope="colspan='2'"></th>
                            <th scope="col"></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($stmt->fetch()) {
                        echo "<tr>";
                        echo "<th>" . $names_id. "</th>";
                        echo "<td>" . $names_pre  . "</td>";
                        echo "<td>" . $names_rname  . "</td>";
                        echo "<td>" . $names_sname . "</td>";
                        echo "<td>" . $names_tel. "</td>";
                        echo "<td>" . $names_email  . "</td>";
                        echo "<td>" . $names_rroom . "</td>";
                        echo "<td>" .$room_id . "</td>";
                        if($_SESSION['u'] != null){
                            echo "<td><a href='deletenames.php?room_id=" . $names_id . "'><input type='submit' class='btn btn-danger' value='DELETE'/></a></td>";
                            echo "<td><a href='editnames.php?room_id=" . $names_id . "'><input type='submit' class='btn btn-warning' value='UPDATE'/></a></td>";
                        }else {
                            echo "<td></td>";
                            echo "<td></td>";
                        }
                        echo "</tr>";
                    }

                    ?>
                </tbody>
            </table>

        <?php } else { ?>
            <div class="alert alert-warning mt-5 pt-3" role="alert">
                ไม่พบข้อมูล
            </div>

        <?php  } ?>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

     
    </div>
</body>

</html>