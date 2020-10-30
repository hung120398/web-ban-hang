<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./na.css"/>
    <title>Document</title>
</head>
<style>
body  {
  background-image: url("anh/des.jpg");
  background-color: #cccccc;
}
</style>
<body>

    
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
$sql="SELECT * FROM ttmayin JOIN sanpham on ttmayin.masp=sanpham.masp where sanpham.masp=$ac ";
$result=$conn->query($sql);
    
    

while($row = $result->fetch_assoc()){
$giaban=$row['giaban'];
$baohanh=$row['baohanh'];
$soluong=$row['soluong'];
$a=$row['anh'];
$b=$row['tensp'];
$c=$row['kieumayin'];
$d=$row['khogiay'];
$e=$row['indaomat'];
$f=$row['conggiaotiep'];
$g=$row["bonho"];$dophangiai=$row["dophangiai"];$tocdoin=$row["todoin"];$tuongthichhedieuhanh=$row["tuongthichhedieuhanh"];
$hopmuc=$row["hopmuc"];$trongluong=$row["trongluong"];$khaygiay=$row['khaygiay'];
}
?>
 <div>
   <table>
   <tr>
   <td width=75% style="font-size:40;color:red;font-style: oblique;font-weight: bold">
   <?php
   echo $b;
   
   ?>
   <br><br><br><br>
    <?php echo"<img src='anh/$a' alt='chua co anh'/>"."<br>"; ?>
   </td>
   
   <td  style="font-weight: bold;color:red; font-style: oblique;font-size:25px">
   
   <div>
   giá bán :<?php 
   echo number_format($giaban)."đ"."<br>";?>
   bảo hành :<?php 
   echo $baohanh."năm"."<br>";?>
   số lượng :<?php 
   if($soluong>0){
   echo$soluong;

   }else if($soluong==0) {echo"hết hàng";}?>


   <div id='dang2' class="city">
      
   </div>
   <div id='dang4' class="city" style="display:none">
<form action="" method="POST">
  
   số lượng bạn:muốn mua: <input style="height:100px;border:none" type="text" name="soluong" placeholder="số lượng bạn muốn mua"><br>
 
   
<button style=" width:150px;height:50px;color:blue;font-weight: bold" name="ok">xác nhận</button></form></div>  
<div>
    <button onclick="openCity('dang4')"  style=" width:150px;height:50px;color:blue;font-weight: bold">thêm vào giỏ hàng</button>
</div>  </div>
   </td>
   </tr>
   <tr>
       <td>
     
       </td>
       <td>
       
       </td>
   </tr>
   </table>
   
   </div>

<br><br>
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date= date('d/m/Y - H:i:s');
session_start();

if(isset($_POST['ok'])){

    $soluong1=$_POST['soluong'];
    
  
  if(!isset($_SESSION["username"])){
   echo"chưa đăng nhập";
   header("Location:pages/login.php");
  }
else{
 if($soluong1>$soluong){
     echo"không đủ hàng";
 }
else{
    $user= $_SESSION["username"];
    echo $user;
    $spl="select * from khach where user='$user'";
    $result31=$conn->query($spl);
    while($row = $result31->fetch_assoc()){
        $makh1=$row["makh"];
        $tenkh=$row["tenkh"];
        $sdt=$row["sdt"];
        $diachi=$row["diachi"];
       echo$makh1;
    
    }
}
    
 
    $thanhtien=$giaban*$soluong1;
    $c=$soluong-$soluong1;
    echo$c;
   $sqlb="insert into giohang (`makh`, `masp`, `soluong`, `thanhtien`,`date`,`thanhtoan`) values ('$makh1', '$ac', '$soluong1', '$thanhtien','$date','chưa trả')";
   $sqlc="update sanpham set soluong='$c' where masp=$ac";
   if ($conn->multi_query($sqlc) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

   if ($conn->multi_query($sqlb) === TRUE) {
    echo "thêm vào giỏ hàng thành công!!!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:guest/khachhang.php?ma=$makh1");
}

}


?>
<table>
<tr>

<td colspan=2>
thông số kĩ thuật
</td>


</tr>
<tr>
<td>
kiểu máy in
</td>
<td>
khổ giấy
</td>
<td>
in đảo mặt
</td>
<td>
cổng giao tiếp
</td>
</tr>
<tr>
<td>
<?php 
echo$c;
?>
</td>
<td>
<?php 
echo$d;
?>
</td>
<td>
<?php 
echo$e;
?>
</td>
<td>
<?php 
echo$f;
?>
</td>
</tr>
</table>

<table>
<tr>
<td>
bộ nhớ
</td>
<td>
<?php 
echo$g."MB";
?>
</td>

</tr>
<tr>

<td>
độ phân giải
</td>
<td>
<?php 
echo$dophangiai;
?>
</td>

</tr>
<tr>

<td>
tốc độ in
</td>
<td>
<?php 
echo$tocdoin;
?>
</td>

</tr>
<tr>

<td>
tương thích hệ điều hành
</td>
<td>
<?php 
echo$tuongthichhedieuhanh;
?>
</td>

</tr>
<tr>

<td>
hộp mực
</td>
<td>
<?php 
echo$hopmuc;
?>
</td>

</tr>
<tr>

<td>
trọng lượng
</td>
<td>
<?php 
echo$trongluong."kg";
?>
</td>

</tr>
<tr>

<td>
khay giấy
</td>
<td>
<?php 
echo$khaygiay;
?>
</td>

</tr>
</table>
    
    </div>
</body>
<script>
// Tabs
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>
</html>