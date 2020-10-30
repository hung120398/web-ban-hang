<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
giá <input type="text" name="gia">
số lượng <input type="text" name="soluong">

<button name="ok">ok</button>
</form>

<?php

if(isset($_GET["ac"]))
{
    $ac=$_GET["ac"];	
}
$user="root";
        $servername="127.0.0.1";
        $pass=NULL;
        $dbbase="hungnguyen12";
        $conn = mysqli_connect($servername, $user, $pass,$dbbase);
        mysqli_set_charset($conn, 'UTF8');
        if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());


    }
    if(isset($_POST['ok'])){
     $gia=$_POST['gia'];
     $soluong=$_POST['soluong'];
    if($gia==""){
        $sql2="update sanpham set soluong='$soluong' where masp='$ac' ";
$result1 = $conn->query($sql2);

    }
    if($soluong==""){
        $sql="update sanpham set giaban='$gia' where masp='$ac' ";
$result2 = $conn->query($sql);

    }
    else{
        $sq2="update sanpham set giaban='$gia',soluong='$soluong'where masp='$ac' ";
$result21 = $conn->query($sq2);


    }
       echo"cập nhập thanh công";
       ?>
            <a href="../index.php">về trang chủ</a>

       <?php
    }
    
    
    ?>
</body>
</html>