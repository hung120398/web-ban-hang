<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<link rel="stylesheet" type="text/css" href="./na.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/gta.css"/>
	<script src="js/jquery-3.4.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>


<div id="banban1">
<h1>Danh mục sản phẩm</h1>
<?php
								
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
						$sql1 = "SELECT * FROM sanpham";
						$result1 = $conn->query($sql1);
						$sql2="SELECT count(masp) FROM sanpham ";
						$result2 = $conn->query($sql2);
						if ($result1->num_rows > 0) {
								// output data of each row
								
								echo "<table border='1' width='550px' height='100px' >";
								
								while($row = $result1->fetch_assoc()) {
									$a=$row["anh"];
									$b=$row["masp"];
									$giaban=$row["giaban"];
									for($i=0;$i<$result2->num_rows ;$i++){
										echo "<tr>";
										 
										 
												echo "<td  align='center'>"."<img src='anh/$a'/>"."   "."<br>".$row["tensp"]."<br>"."giá: ".number_format($giaban)."đ"."<br>";
												if($row["loaisp"]=="dien thoai"){
													echo"<a href='dienthoai1.php?ac=$b'>xem chi tiết sản phẩm</a>";
												}else if($row["loaisp"]=="mayin"){

													echo"<a href='mayin.php?ac=$b'>xem chi tiết sản phẩm</a>";
												}
												else if($row["loaisp"]=="laptop"){

													echo"<a href='laptop.php?ac=$b'>xem chi tiết sản phẩm</a>";
												}
												
												echo"</td>";	
												
										 
										echo "</tr>";	
									}}
								echo "</table>";
								
								
						} else {
								echo "0 results";
						}
						
						?>    
						<a href=""></a>		
					</div>   
		
					
</body>
</html>