<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>điều chỉnh giá số lượng</h1>
    <form action="" method="post">
    tên sản phẩm <input type="text" name="tukhoa">
    <button name="ok">tìm kiếm</button>
    </form>
    <?php
    if(isset($_POST['ok'])){
        $tukhoa=$_POST['tukhoa'] ;
        $user="root";
        $servername="127.0.0.1";
        $pass=NULL;
        $dbbase="hungnguyen12";
        $conn = mysqli_connect($servername, $user, $pass,$dbbase);
        mysqli_set_charset($conn, 'UTF8');
        if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());


    }
    $mi="select * from sanpham where tensp like '$tukhoa%' or tensp LIKE '%$tukhoa%' or tensp like '$tukhoa%' or tensp LIKE
                                                    '%$tukhoa'" ; 
    $mi1 = $conn->query($mi);
    $sql2="SELECT count(masp) FROM sanpham where tensp like '$tukhoa%' or tensp LIKE '%$tukhoa%' or tensp like '$tukhoa%' or tensp LIKE
    '%$tukhoa' ";
$result2 = $conn->query($sql2);
if($mi1->num_rows >0)	{
    echo "<table border='1' width='550px' height='100px' >";

    while($row =$mi1->fetch_assoc() ){
        $a=$row["anh"];
        $b=$row["masp"];
        
        for($i=0;$i<$result2->num_rows  ;$i++){
            echo "<tr>";
             
             
                    echo "<td  align='center'>"."<img src='anh/$a'/>"."   "."<br>".$row["tensp"]."<br>"."giá: ".$row["giaban"]."đ"."<br>";
                    echo"<a href='page/gia.php?ac=$b'>sửa</a>";
                  
                    
                    echo"</td>";	
                    
             
            echo "</tr>";	
        }}
    echo "</table>";
}
else
{echo"Không có sản phẩm nào với từ khóa mà bạn tìm kiếm"."<br>"	."	Chúng tôi khuyên bạn nên:"."<br>".	"	Kiểm tra lại từ khóa có thể bạn đã gõ sai. Ví dụ iphone - iphomw"."<br>"."Hãy dùng từ khóa ngắn hơn và đơn giản hơn.";}
}?>
    </div>
</body>
</html>