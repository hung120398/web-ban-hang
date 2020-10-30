
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
    <td>dòng cpu</td>
    <td><input type="text" name="dongcpu"></td>
    </tr>
    <tr>
    <td>ram</td>
    <td><input type="text" name="ram"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    
    <tr>
    <td>hdd</td>
    <td><input type="text" name="hdd"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>màn hình </td>
    <td><input type="text" name="manhinh"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>thế hệ</td>
    <td><input type="text" name="thehe"></td>
    </tr>
    <tr>
    <td>tốc độ cpu</td>
    <td><input type="text" name="tocdocpu"></td>
    </tr>
    <tr>
    <td>bộ nhớ đệm</td>
    <td><input type="text" name="bonhodem"></td>
    </tr>
    <tr>
    <td>tốc độ bus</td>
    <td><input type="text" name="tocdobus"></td>
    </tr>
    <tr>
    <td>độ phân giải</td>
    <td><input type="text" name="dophangiai"></td>
    </tr>
    <tr>
    <td>cộng nghệ màn hình</td>
    <td><input type="text" name="congnghemanhinh"></td>
    </tr>
    <tr>
    <td>màn hình cảm ứng</td>
    <td><input type="text" name="manhinhcamung"></td>
    </tr>
    <tr>
    <td>card đồ họa</td>
    <td><input type="text" name="carddohoa"></td>
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
      $matkinhcamung=$_POST["manhinhcamung"]; 
      $hdd=$_POST["hdd"];      
      $thehe=$_POST["thehe"];           
      $ram=$_POST['ram'];
      $bonho=$_POST['bonhodem'];
      $manhinh=$_POST['manhinh'];
      $congnghemanhinh=$_POST['congnghemanhinh'];
      $dongcpu=$_POST['dongcpu'];
      $dophangiai=$_POST['dophangiai'];
    $tocdobus=$_POST['tocdobus'];
    $tocdocpu=$_POST['tocdocpu'];
      $carddohoa=$_POST['carddohoa'];
			$user="root";
			$servername="127.0.0.1";
			$pass=NULL;
			$dbbase="hungnguyen12";
      $conn = mysqli_connect($servername, $user, $pass,$dbbase);
      mysqli_set_charset($conn, 'UTF8');
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
		}
	$sql="INSERT INTO ttlaptop (`masp`, `baohanh`, `dongcpu`, `ram`, `hdd`, `manhinh`, `thehe`, `tocdocpu`, `bonhodem`, `tocdobus`, `dophangiai`, `congnghemanhinh`, `manhinhcamung`, `anh`, `carddohoa`) VALUES ('$ac', '$baohanh', '$dongcpu', '$ram', '$hdd', '$manhinh', '$thehe', '$tocdocpu', '$bonho', '$tocdobus', '$dophangiai', '$congnghemanhinh', '$matkinhcamung', '../anh/$file_part', '$carddohoa')";	
   
   if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	echo"<a href='admin/page/dohoa.php.php?mk=$ac'>thêm các thông số khác</a>";




  }

  ?>
</body>
</html>