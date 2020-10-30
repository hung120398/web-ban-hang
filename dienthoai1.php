<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="na.css"/>
    <title>Document</title>
    <script src="js/jquery.min.js"></script>
</head>
<style>
body  {
  background-image: url("anh/des.jpg");
  background-color: #cccccc;
}
</style>
<body>

<div id="ss">



   
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
$sql="SELECT * FROM ttsmartphone JOIN sanpham on ttsmartphone.masp=sanpham.masp where sanpham.masp=$ac ";
$result=$conn->query($sql);
    
    

while($row = $result->fetch_assoc()){
$a=$row['anh'];
$loivixuly=$row["loivixuli"];
$manhinh=$row["manhinh"];
$ram=$row["ram"];
$bonho=$row["bonho"];
$pin=$row["pin"];
$congnghemanhinh=$row["congnghemanhinh"];
$dophangiai=$row["dophangiai"];
$matkinhcamung=$row["matkinhcamung"];
$tensp=$row["tensp"];
$giaban=$row["giaban"];
$baohanh=$row["baohanh"];
$soluong=$row["soluong"];
?>

   <div>
   <table>
   <tr>
   <td width=75% style="font-size:40;color:red;font-style: oblique;font-weight: bold">
   <?php
   echo $tensp;
   
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


   
<div>
<div id="ban" style="display:none">
<form action="" method="POST" >

 số lượng bạn:muốn mua: <input style="height:100px;border:none" type="text" name="soluong" placeholder="số lượng bạn muốn mua"><br>
 
   
<button style=" width:150px;height:50px;color:blue;font-weight: bold" name="ok">xác nhận</button>
</p>
</form></div>  
<div>
    <button  id="banban">thêm vào giỏ hàng</button>
</div> </div>
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
   <br><br><br> 
   

<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date= date('d/m/Y - H:i:s');
echo $date;
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

}
?>



<?php



?>
<br><br><br>
<table  style="background-color:white">
<tr>
    <td>
        Lõi vi xử lý
    </td>
    <td>
        màn hình 
    </td>
    <td>
        ram
    </td>
    <td>
        bộ nhớ 
    </td>
    <td>
        pin
    </td>
</tr>
<tr>
<td>
    <?php echo $loivixuly."nhân";?>
</td>
<td>
<?php echo $manhinh."inch";?>
</td>
<td>
<?php echo $ram."GB";?>

</td>
<td>
<?php echo $bonho."GB";?>
</td>
<td>
<?php echo $pin."mha";?>
</td>
</tr>

</table>
<br><br>
<?php



$sql2="SELECT * FROM camara  where camara.masp=$ac ";
$result2=$conn->query($sql2);
while($row = $result2->fetch_assoc()){
  $dophangiai1=$row["dophangiai1"];
   $quayphim1= $row["quayphim1"];
    $denflash=$row["denflash"];
   $chupanhnangcao= $row["chupanhnangcao"];
    $quayphim2=$row["quayphim2"];
    $dophangiai2=$row["dophangiai2"];
    $videocall=$row["videocall"];}?>
    <div>thông số điện thoại</div>
<table  style="background-color:white">
<tr>
<td style="color:red; font-style: oblique;background-color:white" colspan=2>
camara sau
</td>
</tr>
<tr>
<td>
độ phân giải
</td>
<td>
<?php
echo $dophangiai1;
?>
</td>
</tr>
<tr>
<td>
quay phim
</td>
<td>
<?php
echo $quayphim1;
?>
</td>
</tr>
<tr>
<td>
đèn flash
</td>
<td>
<?php
echo $denflash;
?>
</td>
</tr>
<tr>
<td>
chụp ảnh nâng cao
</td>
<td>
<?php
echo $chupanhnangcao;
?>
</td>
</tr>

</table>
<br>
<br>
<table style="background-color:white; margin-left:20%">
<tr>
<td style=" color:red; font-style: oblique;background-color:white"colspan=2>
camara trước
</td>
</tr>
<tr>
<td>
độ phân giải
</td>
<td>
<?php
echo $dophangiai2;
?>
</td>
</tr>
<tr>
<td>
quay phim
</td>
<td>
<?php
echo $quayphim2
?>
</td>
</tr>
<tr>
<td>
video call
</td>
<td>
<?php
echo $videocall;
?>
</td>
</tr>
</table>
<br><br>
<?php
$sql4="SELECT * FROM hdhcpu  where hdhcpu.masp=$ac ";
$result4=$conn->query($sql4);
while($row = $result4->fetch_assoc()){
    $hedieuhanh=$row["hedieuhanh"];
    $nentang=$row["nentang"];
    $tocdocpu=$row["tocdocpu"];
    $bangtang2g=$row["bangtang2g"];
    $bangtang3=$row["bangtang3g"];
    $hotro4g=$row["hotro4g"];
    $sokhesim=$row["sokhesim"];
    $wifi=$row["wifi"];
    $bluetooth=$row["bluetooth"];
    $gps=$row["gps"];
    $nfc=$row["NFC"];
    $congsac=$row["congsac"];
    $jacktainghe=$row["jacktainghe"];
    $ketnoikhac=$row["ketnoikhac"];?>
    <table  style="background-color:white;margin-left:40%">
    <tr>
    <td style="color:red; font-style: oblique;"colspan=2>
    hệ điều hành-cpu
    </td>
   
    </tr>
    <tr>
<td>
hệ điều hành
</td>
<td>
<?php
echo $hedieuhanh;
?>
</td>
</tr>
<tr>
<td>
nền tản
</td>
<td>
<?php
echo $nentang."bit";
?>
</td>
</tr>
<tr>
<td>
tốc độ tối đa
</td>
<td>
<?php
echo $tocdocpu."GHZ";
?>
</td>
</tr>

    </table>
    <br><br>
    <table style="background-color:white;margin-left:60%" >
    <tr>
    <td style="color:red; font-style: oblique;" colspan=2>
    kết nối
    </td>
    </tr>
    <tr>
<td>
băng tầng 2G
</td>
<td>
<?php
echo $bangtang2g;
?>
</td>
</tr>
<tr>
<td>
băng tầng 3G
</td>
<td>
<?php
echo $bangtang3;
?>
</td>
</tr>
<tr>
<td>
hộ trợ 4g
</td>
<td>
<?php
echo $hotro4g;
?>
</td>
</tr>
<tr>
<td>
số khe sim
</td>
<td>
<?php
echo $sokhesim;
?>
</td>
</tr>
<tr>
<td>
wifi
</td>
<td>
<?php
echo $wifi;
?>
</td>
</tr>
<tr>
<td>
gps
</td>
<td>
<?php
echo $gps;
?>
</td>
</tr>
<tr>
<td>
NFC
</td>
<td>
<?php
echo $nfc;
?>
</td>
</tr>
<tr>
<td>
cổng sạc
</td>
<td>
<?php
echo $congsac;
?>
</td>
</tr>
<tr>
<td>
jack tai nghe
</td>
<td>
<?php
echo $jacktainghe;
?>
</td>
</tr>
<tr>
<td>
kết nối khác
</td>
<td>
<?php
echo $ketnoikhac;
?>
</td>
</tr>

    </table>
    <?php
}
    ?>
    </div>
</body>
<script>
$(document).ready(function(){
  $("#banban").click(function(){
    $("#ban").show(1000);
    $("#banban").hide(1000);
    
  });
});
</script>

</html>