<?php

session_start();

if(!isset($_SESSION['username'])){
echo"chưa đăng nhập";
header("Location:../pages/login.php");
}
else{
if(isset($_GET["ac"]))
{
	$ac=$_GET["ac"];	
}
else
{
	$ac="";	
}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Trang chủ</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/gta.css"/>
				<link rel="stylesheet" type="text/css" href="../na.css"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
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
	<!-- header -->
	<header>
		<div class="container">
			<div class="row">
				<img src="../anh/header.png" alt="">
			
			</div>
			<div class="row" style="margin-top: 5px;width:100%">
							 <div class="btn-group btn-group-justified">
			  <a href="?ac=trangchu" class="btn btn-primary" style="width:200px">Trang chủ</a>
			  <a href="#" class="btn btn-primary" style="width:200px"></a>
			  <a href="#" class="btn btn-primary" style="width:200px"></a>
			  <a href="#" class="btn btn-primary" style="width:200px"></a>
			  <a href="#" class="btn btn-primary" style="width:400px"></a>
			</div>

			<div class="container" style="margin-top: 5px" >
			<div class="row" >
				<div class="row" style="margin-top: 5px;width:100%">
                                    <div class="btn-group btn-group-justified" style="background-color: #fff;height:30px ">
                            
			  <a href="#" class="btn btn-primary" style="width:250px;background-color: #fff ;border-color:#fff;color: black;font-weight: bold"></a>
                          <a href="#" class="btn btn-primary" style="width:150px;background-color: #fff ;border-color:#fff;color: black;font-weight: bold"></a>
                          
												   <marquee behavior="" direction="" id="banban" >chào admin</marquee>
													 <a href="?ac=ms" class="btn btn-primary" style="width:300px;background-color: #fff ;border-color:#fff;color: black;font-weight: bold">sửa sản phẩm</a>
                          <a href="?ac=sss" class="btn btn-primary" style="width:320px;background-color: #fff ;border-color:#fff;color: black;font-weight: bold">thêm sản phẩm</a>			
			                    <a href="page/logout.php" class="btn btn-primary" style="width:200px;background-color: #fff;border-color: #fff;color: black;;font-weight: bold">logout</a>
			</div>	
			</div>
		
			</div>
			<div class="row" style="margin-top: 5px">
				<div style="background-color: 	yellow; height: 100px; width: 100%">
				<form class="form-inline" style="line-height: 100px; margin-left: 20px;" method="">
					  <div class="form-group">
					   
					  </div>
					   <div class="form-group" style="font-size:30px" >
			&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;			 <?php date_default_timezone_set('Asia/Ho_Chi_Minh');
              $date= date('d/m/Y - H:i:s');
             echo $date;?>
						</div> 
					  <div class="form-group">
                                              
					  </div>
					</form>
				</div> 
			</div>
		</div>

	</header>
	<!-- end header -->
	<!-- content -->
	<div class="content" style="margin-top: 20px;">
		<div class="container">
			<div class="row">
				<!-- sidebar left -->
				<div class="col-md-3">
					<div class="panel panel-primary">
                                            <div align='center' class="panel-heading" class="col-sm-4" style="background-color: blue;color:#fff;border-top-left-radius: 12px;border-top-right-radius: 12px;font-weight: boil;color:#fff;padding-left:3px">HÃNG SẢN XUẤT</div>
				      <div class="panel-body" class="col-sm-4" >
                                          <table border="1" style="width:100%;background-color: lavender;height: 600px">
                                              <tr>
                                                  <td>
																									<div class="btn-group dropright">
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Samsung &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </button>
  <div class="dropdown-menu">
	<a href="?ac=1" class="dropdown-item">smartphone</a>

  </div>
	
</div><br><br>
<div class="btn-group dropright">
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    lenovo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </button>
  
  <div class="dropdown-menu">
	<a href="?ac=2" class="dropdown-item">smartphone</a>
<a href="?ac=6" class="dropdown-item">laptop</a>
  </div>
	
</div><br><br>
<div class="btn-group dropright">
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    HP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </button>
  <div class="dropdown-menu">
	<a href="?ac=9" class="dropdown-item">máy in</a>
<a href="?ac=7" class="dropdown-item">laptop</a>

  </div>
	
</div><br><br>
<div class="btn-group dropright">
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    DELL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </button>
  <div class="dropdown-menu">

<a href="?ac=8" class="dropdown-item">laptop</a>

  </div>
	
</div><br><br>
<div class="btn-group dropright">
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    APPLE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </button>
  <div class="dropdown-menu">

<a href="?ac=5" class="dropdown-item">smartphone</a>

  </div>
	
</div><br>




                                                      <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                                                  </td>
                                              </tr>
                                          </table>
                                          
				      </div>
				    </div>
				</div>
				<!-- end  sidebar left -->
				<!-- main content -->
				<div  class="col-md-6" >
             

									 <div>
									 <?php
				//header("Location: ?ac=home");
            
				switch($ac)
				{
					case "1": require_once("page/smartphone.php");
					break;
					
					case "2": require_once("page/smartphone.php");
					break;
					case "5": require_once("page/smartphone.php");
					break;
					case "9": require_once("page/mayinhp.php");
					break;
					case "6": require_once("page/laptophp.php");
					break;
					case "7": require_once("page/laptophp.php");
					break;
					case "8": require_once("page/laptophp.php");
					break;
					case"dienthoai": require_once("../dienthoai.php");
					break;
					case"sss": require_once("themsanpham.php");
					break;
					case"ms": require_once("suathongtinsanpham.php");
					break;
					default:require_once("../trangchu.php");
				}
			?></div>

									            
                
				</div>
				<!-- end main content -->
				<!-- sidebar right -->
				<div class="col-md-3">
                                    <div class="woft">Đăng tin <br>Không cần tài khoản<br><br>
                                        <button style="background-color:yellow;border-radius:10px;width: 150px; ">Đăng ký ngay>></button>
                                    </div><br>
                                    <div  align='center' style="background-color:blue;color:white;height:30px;border-top-left-radius:12px;border-top-right-radius:12px;width:310px ">TIN QUẢNG CÁO</div>
                                    <table border="1" style="width:300px;height:470px">
                                            <tr>
																							<td>
																	 <img  id="myImg" src="quangcao/1.PNG" >
										
																							</td>
																						</tr>
                  
                                                  
                                            
                                    
                                    </table>
                                    
                                    
                                    </div>
					
	</div>
	<!-- content -->

	<!-- footer -->
	<footer >
		<div class="container" style="margin-bottom: 90px ;margin-left:1px ">
			<div class="row" >
				<div class="col-md-2">
				<img src="../anh/footer.PNG" class="img-footer" style="width: 1110px;height: 300px"  alt="22">
				
				</div>
				
			</div>
		</div>
	</footer>
	<!-- end footer -->
        <script>
// Tabs

var current = 1;
    var num_image = 4;
    var action;
   function myFunction1(){

    current++;
      document.getElementById("myImg").src ='quangcao/' + current + '.PNG';
     if(current < num_image){
       action= setTimeout("myFunction1()", 3000);
     }else if(current == num_image){
       current = 0;
      action= setTimeout("myFunction1()", 3000);
     }
     
       
   
   }
	 window.onload=myFunction1;

</script>

</body>
</html>