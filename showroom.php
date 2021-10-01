

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>แสดงข้อมูลห้องพัก</title>
</head>

<body>
    <div class="container">

        
<nav class="nav">
    <a class="nav-link " aria-current="page" href="index.html">หน้าหลัก</a>
    
    <a class="nav-link" href="showroom.php">แสดงข้อมูลห้องพัก</a>
            <!-- <a class="nav-link" href="login.html">Login</a> -->
        <span class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">Login</span>
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button> -->

        <!-- Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">เข้าสู่ระบบ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="chklogin.php" method="GET">
                            <div class="row mb-3">
                                    <label for="username" class="col-sm-2 text-capitalize">Username</label>
                                    <div class="col-sm-6">
                                        <input type="text" autocomplete="off" class="form-control" required name="username" id="username" value="" />
                                    </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-2">Password</label>
                                <div class="col-sm-6">
                                    <input type="password" autocomplete="off" class="form-control" required name="password" id="password" value="" />
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">reset</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </nav>        <div class="container">
        <table class="table table-warning table-striped table-hover table-responsive mt-12">
            <thead>
                <tr>
                    <th scope="col">รหัสห้อง</th>
                    <th scope="col">ชื่อห้องพัก</th>
                </tr>
            </thead>
            <tbody>
            <tr><th>01</th><td>ริมสระ</td></tr><tr><th>02</th><td>เตียงคู่</td></tr>            </tbody>
        </table>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
</body>

</html>
