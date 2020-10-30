
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
    <td>lõi vi xử lý</td>
    <td><input type="text" name="sp"></td>
    </tr>
    <tr>
    <td>công nghệ màn hình</td>
    <td><input type="text" name="sanpham"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    
    <tr>
    <td>bộ nhớ</td>
    <td><input type="text" name="mahsx"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>pin </td>
    <td><input type="text" name="soluong"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>ram</td>
    <td><input type="text" name="gia"></td>
    </tr>
    <tr>
    <td>chip</td>
    <td><input type="text" name="loai"></td>
    </tr>
    <tr>
    <td>matkinhcamung</td>
    <td><input type="text" name="loai1"></td>
    </tr>
    <tr>
    <td>màn hình</td>
    <td><input type="text" name="loai2"></td>
    </tr>
    <tr>
    <td>độ phân giải</td>
    <td><input type="text" name="loai3"></td>
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
      $matkinhcamung=$_POST["loai1"]; 
      $chip=$_POST["loai"];      
      $pin=$_POST["soluong"];           
      $ram=$_POST['gia'];
      $bonho=$_POST['mahsx'];
      $manhinh=$_POST['loai2'];
      $congnghemanhinh=$_POST['sanpham'];
      $loivixuli=$_POST['sp'];
      $dophangiai=$_POST['loai3'];
     
      
			$user="root";
			$servername="127.0.0.1";
			$pass=NULL;
			$dbbase="hungnguyen12";
      $conn = mysqli_connect($servername, $user, $pass,$dbbase);
      mysqli_set_charset($conn, 'UTF8');
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
		}
	$sql="INSERT INTO ttsmartphone (`masp`, `baohanh`, `loivixuli`, `manhinh`, `congnghemanhinh`, `dophangiai`, `bonho`, `pin`, `ram`, `chip`, `matkinhcamung`, `anh2`) VALUES ('$ac', '$baohanh', '$loivixuli', '$manhinh', '$congnghemanhinh', '$dophangiai', '$bonho', '$pin', '$ram', '$chip', '$matkinhcamung', '../anh/$file_part')"	;	
   
   if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	echo"<a href='admin/page/camara.php?mk=$ac'>thêm camara</a>";




  }

  ?>
</body>
</html>