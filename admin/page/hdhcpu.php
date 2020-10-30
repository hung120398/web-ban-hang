
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
    <h1 style="color:red;font-weight:boil" >thêm thông tin  hdh cpu kết nốicho smartphone</h1>
    <table >
    <tr>
    <td colspan='2'>hệ điều hành cpu</td>
    
    </tr>
    <tr>
    <td>hệ điều hành</td>
    <td><input type="text" name="hedieuhanh"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>nền tảng</td>
    <td><input type="text" name="nentang"></td>
    </tr>
    <tr>
    <td>tốc độ tối đa</td>
    <td><input type="text" name="tocdotoida"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    
    
    <td colspan=2>kết nối </td>
    
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>băng tần 2g</td>
    <td><input type="text" name="bangtang2g"></td>
    </tr>
    <tr>
    <td>băng tần 3g</td>
    <td><input type="text" name="bangtang3g"></td>
    </tr>
    <tr>
    <td>hộ trợ 4g</td>
    <td><input type="text" name="hotro4g"></td>
    </tr>
    <tr>
    <td>wifi</td>
    <td><input type="text" name="wifi"></td>
    </tr>
    <tr>
    <td>số khe sim</td>
    <td><input type="text" name="sokhesim"></td>
    </tr>
    <tr>
    <td>gps</td>
    <td><input type="text" name="gps"></td>
    </tr>
    <tr>
    <td>bluetooth</td>
    <td><input type="text" name="blutooth"></td>
    </tr>
    <tr>
    <td>NFC</td>
    <td><input type="text" name="nfc"></td>
    </tr>
    
    <tr>
    <td>cổng sạc</td>
    <td><input type="text" name="congsac"></td>
    </tr>
    <tr>
    <td>jack tai nghe</td>
    <td><input type="text" name="jacktainghe"></td>
    </tr>
    <tr>
    <td>kết nối khác</td>
    <td><input type="text" name="ketnoikhac"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td align='center' colspan="2"><input type="reset" name="reset">&nbsp;&nbsp;<input type="submit" name ="ok" value="nhập"/></td>
    
    </tr>
    </table>
    </form>
  
    <?php
    
	if(isset($_GET["mk"]))
	{
		$ac=$_GET["mk"];	
	}
	
  	if(isset($_POST["ok"]))
		{
     
      $hedieuhanh=$_POST["hedieuhanh"];
      $nentang=$_POST["nentang"];
     
       
      $tocdotoida=$_POST["tocdotoida"];  
      $bangtang2g=$_POST["bangtang2g"];     
      $bangtang3g=$_POST["bangtang3g"];           
      $hotro4g=$_POST['hotro4g'];
      $wifi=$_POST['wifi'];
      $sokhesim=$_POST['sokhesim'];
      $gps=$_POST["gps"];     
      $nfc=$_POST["nfc"];     
      $bluetooth=$_POST["blutooth"];     
      $congsac=$_POST["congsac"];
      $jacktainghe=$_POST["jacktainghe"]; 
      $ketnoikhac=$_POST["ketnoikhac"];              
			$user="root";
			$servername="127.0.0.1";
			$pass=NULL;
			$dbbase="hungnguyen12";
      $conn = mysqli_connect($servername, $user, $pass,$dbbase);
      mysqli_set_charset($conn, 'UTF8');
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
		}
	$sql="INSERT INTO hdhcpu (`masp`, `nentang`, `tocdocpu`, `bangtang2g`, `bangtang3g`, `hotro4g`, `wifi`, `sokhesim`, `gps`, `bluetooth`, `NFC`, `congsac`, `jacktainghe`, `ketnoikhac`, `hedieuhanh`) VALUES ('$ac', '$nentang', '$tocdotoida', '$bangtang2g', '$bangtang3g', '$hotro4g', '$wifi', '$sokhesim', '$gps', '$bluetooth', '$nfc', '$congsac', '$jacktainghe', '$ketnoikhac', '$hedieuhanh')";	
   
   if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	echo"<a href='../themsanpham.php'>thêm san pham khac</a>";
    echo"<a href='../../banban.php'>về trang chủ</a>";


//echo'hinhanh'."<img src='image/$ile_part'/>";
  }

  ?>
</body>
</html>