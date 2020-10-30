<!DOCTYPE html>
<html lang="en"
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/gta.css"/>
	<script src="js/jquery-3.4.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style>
		*{
			padding: 0px;
			margin: 0px;
		}
		.img-footer{
			width: 100%;
		}
	</style>
</head>

<body>
	<?php
    	if(isset($_POST["ok"]))
		{
			$username = $_POST["username"];
			$password = $_POST["password"];
			echo"$password";
			$user="root";
			$servername="127.0.0.1";
			$pass=NULL;
			$dbbase="hungnguyen12";
			$conn = mysqli_connect($servername, $user, $pass,$dbbase);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
		}
	 $sql="select*from khach where user='$username' and pass='$password'"	;	
	 $result=$conn->query($sql);
	 if($result->num_rows>0){
			if($username=="admin"&&$password=="admin")
			{
				session_start();
				$_SESSION["username"]= $username;
				$_SESSION["password"]= $password;
			
				header("Location:../admin/index.php");
				exit();
			}
		else{
    	session_start();
				$_SESSION["username"]= $username;
				$_SESSION["password"]= $password;
				
				header("Location:../guest/khachhang.php");
				exit();

		}
		
		}
			else
			{
				?>
                <script>alert("Nhập sai-Username và pass là 'admin'");</script>
                <?php	
			}
		}
	?>
	<form action="" method="post">
   	  <div align="center">
   	    <table width="416" height="209" border="0">
   	      <tr>
   	        <td colspan="2"><div align="center">Đăng Nhập</div></td>
          </tr>
   	      <tr>
   	        <td width="135"><div align="center">Username</div></td>
   	        <td width="265"><div align="center"><input type="text" name="username" value="" /></div></td>
          </tr>
   	      <tr>
   	        <td><div align="center">Password</div></td>
   	        <td><div align="center"><input type="password" name="password" value="" /></div></td>
          </tr>
   	      <tr>
   	        <td colspan="2"><div align="center">
            	<input type="reset" value="Reset" />
                <input type="submit" name="ok" value="Login" />
            </div></td>
          </tr>
        </table>
      </div>
    </form>
</body>
</html>