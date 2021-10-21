<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect('localhost','root','','dhtl_danhba');
    if (!$conn){
        die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
    }
    if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
    $id=$_GET['id'];
    $sql = "DELETE FROM blood_recipient WHERE reci_id='$id'";
    if ($conn->query($sql) === TRUE) {
    echo "Xoá thành công!";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();
    }
    header("Location: /Project/src/index.php");
    ?>
</body>
</html>