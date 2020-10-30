
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype='multipart/form-data'>
    <h1 style="color:red;font-weight:boil" >thêm sản phẩm</h1>
    <table >
    <tr>
    <td>ảnh</td>
    <td><input type="file" name="upload"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>mã sản phẩm</td>
    <td><input type="text" name="sp"></td>
    </tr>
    <tr>
    <td>tên sản phẩm</td>
    <td><input type="text" name="sanpham"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    
    <tr>
    <td>mã hãng sản xuất</td>
    <td><input type="text" name="mahsx"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>số lượng </td>
    <td><input type="text" name="soluong"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>giá</td>
    <td><input type="text" name="gia"></td>
    </tr>
    <tr>
    <td>loại sản phẩm</td>
    <td><input type="text" name="loai"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td align='center' colspan="2"><input type="reset" name="reset">&nbsp;&nbsp;<input type="submit" name ="ok" value="nhập"/></td>
    
    </tr>
    </table>
    </form>
  
    <?php
  	if(isset($_POST["ok"]))
		{
      $file_part=$_FILES['upload']['name'];
      move_uploaded_file($_FILES['upload']['tmp_name'],"../anh/".$file_part);

      $sanpham=$_POST["sanpham"];
      $ma=$_POST["sp"]; 
      $mahsx=$_POST["mahsx"];      
      $soluong=$_POST["soluong"];           
      $gia=$_POST['gia'];
      $loai=$_POST['loai'];
			$user="root";
			$servername="127.0.0.1";
			$pass=NULL;
			$dbbase="hungnguyen12";
      $conn = mysqli_connect($servername, $user, $pass,$dbbase);
      mysqli_set_charset($conn, 'UTF8');
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
		}
	$sql="insert into sanpham (anh,masp,tensp,mahangsx,giaban,soluong,loaisp) values ('../anh/$file_part',$ma,'$sanpham','$mahsx','$gia','$soluong','$loai')"	;	
   
   if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if($loai==="dien thoai"){
	echo"<a href='../phone.php?mk=$ma'>thêm màn hình</a>";


}
else if($loai==="laptop"){
	echo"<a href='../laptop.php?mk=$ma'>thêm thông số laptop</a>";


}
//echo'hinhanh'."<img src='image/$ile_part'/>";
  }

  ?>
</body>
</html>