<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_GET["mb"]))
{
    $ak47=$_GET["mb"];	
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
$sql1="delete from giohang where soluong='$ak47'";
$result3 = $conn->query($sql1);
$sql1="select * from sanpham where thanhtien='$ak47'";
$result3 = $conn->query($sql1);
header("Location:xemchitiet.php");
?>
</body>
</html>