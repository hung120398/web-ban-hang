
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
    <td>Chipset đồ họa</td>
    <td><input type="text" name="chipsetdohoa"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>bộ nhớ đồ họa</td>
    <td><input type="text" name="bonhodohoa"></td>
    </tr>
    <tr>
    <td>Card đồ họa</td>
    <td><input type="text" name="carddohoa"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    
    <tr>
    <td>cổng giao tiếp</td>
    <td><input type="text" name="conggiaotiep"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>LAN </td>
    <td><input type="text" name="lan"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>chuẩn wifi</td>
    <td><input type="text" name="chuanwifi"></td>
    </tr>
    <tr>
    <td>kết nối không dây</td>
    <td><input type="text" name="ketnoikhongday"></td>
    </tr>
    <tr>
    <td>hệ điều hành</td>
    <td><input type="text" name="hedieuhanh"></td>
    </tr>
    <tr>
    <td>phần mềm</td>
    <td><input type="text" name="phanmem"></td>
    </tr>
    <tr>
    <td>webcam</td>
    <td><input type="text" name="webcom"></td>
    </tr>
    <tr>
    <td>pin</td>
    <td><input type="text" name="pin"></td>
    </tr>
    <tr>
    <td>năm sản xuất</td>
    <td><input type="text" name="namsanxuat"></td>
    </tr>
    <
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td align='center' colspan="2"><input type="reset" name="reset">&nbsp;&nbsp;<input type="submit" name ="ok" value="nhập"/></td>
    
    </tr>
    </table>
    </form>
  <a href=""></a>
    <?php
    
	if(isset($_GET["mk"]))
	{
		$ac=$_GET["mk"];	
	}
	
  	if(isset($_POST["ok"]))
		{
      error_reporting(0);
      $file_part=$_FILES['upload']['name'];
      
      move_uploaded_file($_FILES['upload']['tmp_name'],"../anh/".$file_part);

      $hedieuhanh=$_POST["hedieuhanh"];
      $webcom=$_POST["webcom"]; 
      $pin=$_POST["pin"];      
      $namsanxuat=$_POST["namsanxuat"];           
      $phanmem=$_POST['phammem'];
      $ketnoikhongday=$_POST['ketnoikhongday'];
      $chuanwifi=$_POST['chuanwifi'];
      $chipsetdohoa=$_POST['chipsetdohoa'];
      $bonhodohoa=$_POST['bonhodohoa'];
      $conggiaotiep=$_POST['conggiaotiep'];
      $carddohoa=$_POST['carddohoa'];
      $lan=$_POST['lan'];
			$user="root";
			$servername="127.0.0.1";
			$pass=NULL;
			$dbbase="hungnguyen12";
      $conn = mysqli_connect($servername, $user, $pass,$dbbase);
      mysqli_set_charset($conn, 'UTF8');
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
		}
	$sql="INSERT INTO dohoa12 (`masp`, `chipsetdohoa`, `bonhodohoa`, `carddohoa`, `conggiaotiep`, `LAN`, `chuanwifi`, `ketnoikhongday`, `HDH`, `phanmem`, `webcom`, `pin`, `nam`) VALUES ('$ac', '$chipsetdohoa', '$bonhodohoa', '$carddohoa', '$conggiaotiep', '$lan', '$chuanwifi', '$ketnoikhongday', '$hedieuhanh', '$phanmem', '$webcom', '$pin', '$namsanxuat')";	
   
   if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo"<a href='../themsanpham.php?'>thêm san pham khac</a>";
echo"<a href='../../banban.php'>về trang chủ</a>";




  }

  ?>
</body>
</html>