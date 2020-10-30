
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
    <h1 style="color:red;font-weight:boil" >thêm thông tin camara cho smartphone</h1>
    <table >
    <tr>
    <td colspan='2'>camara sau</td>
    
    </tr>
    <tr>
    <td>độ phân giải</td>
    <td><input type="text" name="dophangiai1"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>quay phim</td>
    <td><input type="text" name="quayphim1"></td>
    </tr>
    <tr>
    <td>đèn flash</td>
    <td><input type="text" name="denflash"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    
    <tr>
    <td>chụp ảnh nâng cao</td>
    <td><input type="text" name="chupanhnangcao"></td>
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td colspan=2>camara trước </td>
    
    </tr>
    <tr style="height:20px"><td></td><td></td></tr>
    <tr>
    <td>độ phân giải</td>
    <td><input type="text" name="dophangiai2"></td>
    </tr>
    <tr>
    <td>quay phim</td>
    <td><input type="text" name="quayphim2"></td>
    </tr>
    <tr>
    <td>video call</td>
    <td><input type="text" name="videocall"></td>
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
     
      $dophangiai1=$_POST["dophangiai1"];
      $dophangiai2=$_POST["dophangiai2"];
     
       
      $quayphim1=$_POST["quayphim1"];  
      $quayphim2=$_POST["quayphim2"];           
      $denflash=$_POST['denflash'];
      $chupanhnangcao=$_POST['chupanhnangcao'];
      $videocall=$_POST['videocall'];
      
     
      
			$user="root";
			$servername="127.0.0.1";
			$pass=NULL;
			$dbbase="hungnguyen12";
      $conn = mysqli_connect($servername, $user, $pass,$dbbase);
      mysqli_set_charset($conn, 'UTF8');
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
		}
	$sql="INSERT INTO camara (`masp`, `dophangiai1`, `quayphim1`, `denflash`, `chupanhnangcao`, `dophangiai2`, `quayphim2`, `videocall`) VALUES ('$ac', '$dophangiai1', '$quayphim1', '$denflash','$chupanhnangcao', '$dophangiai2', '$quayphim2', '$videocall')";	
   
   if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	echo"<a href='hdhcpu.php?mk=$ac'>thêm san hdp-cpu kết nối...</a>";
 

//echo'hinhanh'."<img src='image/$ile_part'/>";
  }

  ?>
</body>
</html>