
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
    <tr>
    <td>bảo hành</td>
    <td><input type="text" name="baohanh"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>khổ giấy</td>
    <td><input type="text" name="khogiay"></td>
    </tr>
    <tr>
    <td>in đảo mặt</td>
    <td><input type="text" name="indaomat"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    
    <tr>
    <td>cổng giao tiếp</td>
    <td><input type="text" name="conggiaotiep"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>bộ nhớ</td>
    <td><input type="text" name="bonho"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>chủng loại</td>
    <td><input type="text" name="chungloai"></td>
    </tr>
    <tr>
    <td>tốc độ in</td>
    <td><input type="text" name="tocdoin"></td>
    </tr>
    <tr>
    <td>khay giấy</td>
    <td><input type="text" name="khaygiay"></td>
    </tr>
    <tr>
    <td>hộp mực</td>
    <td><input type="text" name="hopmuc"></td>
    </tr>
    <tr>
    <td>độ phân giải</td>
    <td><input type="text" name="dophangiai"></td>
    </tr>
    <tr>
    <td>trọng lượng</td>
    <td><input type="text" name="trongluong"></td>
    </tr>
    <tr>
    <td>tương thích hệ điều hành</td>
    <td><input type="text" name="tuongthichhedieuhanh"></td>
    </tr>
    
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

      $baohanh=$_POST["baohanh"];
      $hopmuc=$_POST["hopmuc"]; 
      $khaygiay=$_POST["khaygiay"];      
      $khogiay=$_POST["khogiay"];           
      $tuongthichhedieuhanh=$_POST['tuongthichhedieuhanh'];
      $trongluong=$_POST['trongluong'];
      $indaomat=$_POST['indaomat'];
      $kieumayin=$_POST['kieumayin'];
      $conggiaotiep=$_POST['conggiaotiep'];
      $dophangiai=$_POST['dophangiai'];
    $chungloai=$_POST['chungloai'];
    $tocdocin=$_POST['tocdoin'];
      $bonho=$_POST['bonho'];
			$user="root";
			$servername="127.0.0.1";
			$pass=NULL;
			$dbbase="hungnguyen12";
      $conn = mysqli_connect($servername, $user, $pass,$dbbase);
      mysqli_set_charset($conn, 'UTF8');
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
		}
	$sql="INSERT INTO ttmayin (`masp`, `baohanh`, `kieumayin`, `khogiay`, `indaomat`, `conggiaotiep`, `bonho`, `chungloai`, `todoin`, `dophangiai`, `khaygiay`, `hopmuc`, `trongluong`, `tuongthichhedieuhanh`, `anh`) VALUES ('$ac', '$baohanh', '$kieumayin', '$khogiay', '$indaomat', '$conggiaotiep', '$bonho', '$chungloai', '$tocdocin', '$dophangiai', '$khaygiay', '$hopmuc', '$trongluong', '$tuongthichhedieuhanh', '../anh/$file_part')";	
   
   if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo"<a href='admin/themsanpham.php?'>thêm san pham khac</a>";
    echo"<a href='banban.php'>về trang chủ</a>";


  }

  ?>
</body>
</html>