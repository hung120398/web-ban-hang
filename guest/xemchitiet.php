<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
body  {
  background-image: url("anh/des.jpg");
  background-color: #cccccc;
}
</style>
<body>
<h1 style="color:red">Thông tin giỏ hàng của bạn</h1>
<?php

if(isset($_GET["ac"]))
{
    $ac=$_GET["ac"];	
}
else {$ac=0;}

$user="root";
$servername="127.0.0.1";
$pass=NULL;
$dbbase="hungnguyen12";
$conn = mysqli_connect($servername, $user, $pass,$dbbase);
mysqli_set_charset($conn, 'UTF8');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//echo'hinhanh'."<img src='image/$ile_part'/>";
$sql1 = "SELECT tensp,giohang.soluong,thanhtien,anh FROM giohang join khach on giohang.makh=khach.makh join sanpham on sanpham.masp=giohang.masp where khach.makh='$ac' and thanhtoan='chưa trả'";
$result1 = $conn->query($sql1);
$sql2="SELECT anh,tensp,sanpham.soluong,sanpham.masp from sanpham join giohang on giohang.masp=sanpham.masp where thanhtoan='chưa trả'";
$result2 = $conn->query($sql2);

$sql3="select count(makh) from giohang where makh=$ac and thanhtoan='chưa trả'";
$result3 = $conn->query($sql3);


while($row = $result2->fetch_assoc()) {
    $c=$row["anh"];
    $d=$row["tensp"];
    $ck=$row['soluong'];
    $sk=$row['masp'];
    
    }
    while($row = $result3->fetch_assoc()) {
        $e=$row["count(makh)"];
      
        }
// output data of each row
if($e==0) {header("Location:khachhang.php");}
?>
<div style="background-color:lavender;width:550px">
<?php
echo "<table border='1' width='550px' height='100px' >";
while($row = $result1->fetch_assoc()) {
    $a=$row["anh"];
    $m=$row["soluong"];
    $b=$row["thanhtien"];
    $mk=$ck-$m;
    $thanhtien= number_format($b);
    for($i=0;$i<1;$i++){
        echo "<tr>";
         ?>
         
         <div style="color:green;   font-style:oblique;  font-weight: bold;">
         <?php
         
                echo "<td  align='center'>"."<img src='anh/$a'/>"."   "."<br>".$row["tensp"]."<br>"."số lượng: ".$m."<br>"."thành tiền".$thanhtien."Đ"."<br>"."<a href='huy.php?mb=$b'>hủy</a>"."</td>";	
            
         
        echo "</tr>";	
    }}
echo "</table>";
$sql000="select sum(thanhtien) from giohang where thanhtoan='chưa trả'";
$result3 = $conn->query($sql000);
while($row = $result3->fetch_assoc()) {
$sc=$row['sum(thanhtien)'];


}?></div>
<div style="color:red;   font-style:oblique;  font-weight: bold;"><?php

echo"total:"." ". number_format($sc)."Đ"."<br>";
?></div>
</div>
<br>

<div>
<form action="" method="post">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="ok" style="height:40px;color:red   ; font-weight:bold">bạn có muốn mua chúng không?</button>
<button name="huy" style="height:40px;color:red   ; font-weight:bold">hủy</button>

</form>

</div>

<?php

if(isset($_POST["huy"])){
$sql999="delete from giohang where makh='$ac'";
$result3 = $conn->query($sql999);

echo"<a href='khachhang.php'>về trang chủ</a>";

}
else{
    if(isset($_POST["ok"])){
        $sql999="update sanpham set soluong='$mk' where masp='$sk'";
        $result999 = $conn->query($sql999);
        $sql9998="update giohang set thanhtoan='đã trả' where makh='$ac' ";
        $result9998 = $conn->query($sql9998);
        
        echo" chúng tôi sẽ chuyển hàng đến tận nhà cho bạn";
        echo"<a href='khachhang.php'>về trang chủ</a>";
        
        }

}
?>

<html>


</html>
</body>
</html>