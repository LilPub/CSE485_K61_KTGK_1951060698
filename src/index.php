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
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <footer class="p-3 bg-success text-white position-absolute bottom-0" style="width: 100%;">
        <div class="contaiter">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">@Hiến máu nhân đạo</p>
                </div>
            </div>
        </div>
    </footer>

    <main class="">
      <div class="container">
          <div class="row d-flex">
              <div class="col-md-4 ">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 100%;margin-left:-120px">
                    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                        <span class="fs-4">Quản lý thông tin</span>
                    </a>
                    <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="tab-item ">
                                <a href="#" class="nav-link link-dark" aria-current="page">
                                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                                    <i class="fas fa-list-alt"></i>
                                    Danh sách
                                </a>
                            </li >
                            <li class="tab-item nav-item">
                                <a href="#" class="nav-link link-dark">
                                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                                    <i class="fas fa-tools"></i>
                                    Thông tin chi tiết
                                </a>
                            </li>
                        </ul>
                    <hr>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../screenshot/logo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                            <strong>Admin</strong>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
              </div>
              <div class="col-md-8 inFo" style="width: 74%;margin-left: -100px;">

                <div class="tab-info ">
                    <div class="search d-flex">
                        <div class="input-group rounded input-search">
                            <input type="search" class="form-control rounded" placeholder="Eg: Nguyễn Văn A" aria-label="Search"
                                aria-describedby="search-addon" />
                            <span type="submit" class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <table class="table table-bordered tableNew">
                        <thead class="">
                            <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Tuổi</th>
                            <th scope="col">Nhóm máu</th>
                            <th scope="col">Số lượng máu(ml)</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Ngày đăng kí nhận máu</th>
                            <th scope="col">Số điện thoại</th>
                            </tr>
                        </thead>
                        <tbody> 
                            
                            <?php 
                                $conn = mysqli_connect('localhost','root','','dhtl_danhba');
                                if (!$conn){
                                    die("Kết nối thất bại  .Kiểm tra lại các tham số khai báo kết nối");
                                }

                                $sql = "SELECT * from blood_recipient";
                                $result = mysqli_query($conn,$sql);
                                  
                                if(mysqli_num_rows($result)>0){
                                    $i=1;
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; ?> </th>
                                            <td><?php echo $row['reci_name']; ?> </td>
                                            <td><?php echo $row['reci_age']; ?> </td>
                                            <td><?php echo $row['reci_bgrp']; ?> </td>
                                            <td><?php echo $row['reci_bqnty']; ?> </td>
                                            <td><?php echo $row['reci_sex']; ?> </td>
                                            <td><?php echo $row['reci_reg_date']; ?> </td>
                                            <td><?php echo $row['reci_phno']; ?> </td>
                                        </tr>
                            <?php
                                        $i++;
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="tab-info active" >
                    <div class="search d-flex">
                        <div class="input-group rounded input-search">
                            <input type="search" class="form-control rounded" placeholder="Eg: Nguyễn Văn A" aria-label="Search"
                                aria-describedby="search-addon" />
                            <span type="submit" class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="btn-admin d-flex float-end">
                        <a href="./CreateNV.php">
                            <button type="button" class="btn btn-primary btn-lg btn-create float-end">+ Tạo mới</button>
                        </a>
                        <!-- <button type="button" class="btn btn-primary btn-lg btn-save">Lưu thay đổi</button> -->
                    </div>
                    <table class="table table-bordered tableAdmin">
                        <thead class="table-fix">
                            <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Tuổi</th>
                            <th scope="col">Nhóm máu</th>
                            <th scope="col">Số lượng máu(ml)</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Ngày đăng kí nhận máu</th>
                            <th scope="col">Số điện thoại</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <!-- Nhan xet :day la vung du lieu thay doi duoc-->
                            <?php 
                                //b1 :ket noi csdl
                                $conn = mysqli_connect('localhost','root','','dhtl_danhba');
                                if (!$conn){
                                    die("Kết nối thất bại  .Kiểm tra lại các tham số khai báo kết nối");
                                }
                                //b2 khai bao va thuc hien truy vấn
                                $sql = "SELECT * from blood_recipient";
                                $result = mysqli_query($conn,$sql);
                                
                                //b3  kiem tra va xu li tap ket qua  - ung voi cau lenh select  
                                if(mysqli_num_rows($result)>0){
                                    $i=1;
                                    while($row = mysqli_fetch_assoc($result)){
                                ?>
                                        <tr>
                                        <th scope="row"><?php echo $i; ?> </th>
                                            <td><?php echo $row['reci_name']; ?> </td>
                                            <td><?php echo $row['reci_age']; ?> </td>
                                            <td><?php echo $row['reci_bgrp']; ?> </td>
                                            <td><?php echo $row['reci_bqnty']; ?> </td>
                                            <td><?php echo $row['reci_sex']; ?> </td>
                                            <td><?php echo $row['reci_reg_date']; ?> </td>
                                            <td><?php echo $row['reci_phno']; ?> </td>
                                            <td>
                                                <a href="UpdateNV.php?id=<?php echo $row['reci_id']; ?>"><i class="fas fa-edit icon-edit"></i></a>
                                                <a href="DeleteNV.php?id=<?php echo $row['reci_id']; ?>"><i class="fas fa-trash icon-delete"></i></a>
                                            </td>
                                        </tr>
                            <?php
                                        $i++;
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

              </div>
          </div>
      </div>
</main>

    <script src="../js/main.js"></script>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>