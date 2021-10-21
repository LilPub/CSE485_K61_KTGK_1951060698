<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiến máu nhân đạo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/create.css">
</head>
<body>
    <header class="p-3 bg-success text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>
                <img src="../screenshot/logo.png" alt="" class="logoHome">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 tabActive">
                    <li><a href="#" class="nav-link px-2 text-white"><i class="fas fa-home"></i>Trang chủ</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Tính năng</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Giới thiệu</a></li>
                </ul>
                <div class="text-end">
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../screenshot/logo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>Admin</strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </header>
    <main>
        <form method="POST" class="form">
            <?php
                ob_start();
                $conn = mysqli_connect('localhost', 'root', '', 'dhtl_danhba');
                if (!$conn) {
                    die("Kết nối thất bại ");
                }
            ?>
            <h2>
                <i class="fas fa-plus-square"></i>
                Thêm thành viên
            </h2>
            <label >
                <span>Họ và tên:</span> 
                <input type="text" name="hoten"></label><br />
            <label>
                <span>Tuổi: </span>
                <input type="text" name="tuoi"></label><br />
            <label>
                <span>Nhóm máu: </span>
                <input type="text" name="nhommau"></label><br />
            <label>
                <span>Số lượng máu(ml): </span>
                <input type="text" name="soluongmau"></label><br />
            <label>
                <span>Giới tính: </span>
                <input type="text" name="gioitinh"></label><br />
            <label>
                <span>Ngày đăng kí nhận máu: </span>
                <input type="date" name="ngaydangky"></label><br />
            <label>
                <span>Số điện thoại: </span>
                <input type="text" name="sodidong"></label><br />
            <input type="submit" value="Thêm" name="create_nv" class="fix-info">

            <?php
            if(isset($_POST['create_nv'])){
                $hoten = $_POST['hoten'];
                $tuoi = $_POST['tuoi'];
                $nhommau = $_POST['nhommau'];
                $soluongmau = $_POST['soluongmau'];
                $gioitinh = $_POST['gioitinh'];
                $ngaydangky = $_POST['ngaydangky'];
                $sodidong = $_POST['sodidong'];
                

                $sql = "INSERT INTO blood_recipient ( reci_name, reci_age, reci_bgrp, reci_bqnty, reci_sex, reci_reg_date, reci_phno) VALUES
                ('$hoten', '$tuoi', '$nhommau', '$soluongmau', '$gioitinh', '$ngaydangky', '$sodidong')";

                if(mysqli_query($conn,$sql)==TRUE){
                    echo"Thêm thành công";
                }else{
                    echo"Chưa thêm được";
                }

                mysqli_close($conn);
                header("Location: /Project/src/index.php");
            }
            ?>
        </form>
    </main>
    <footer class="p-3 bg-success text-white position-absolute bottom-0" style="width: 100%;">
        <div class="contaiter">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">@Hiến máu nhân đạo</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="../js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>