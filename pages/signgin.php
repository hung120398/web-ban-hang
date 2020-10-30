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
    <form action="" method="post">
    <h1>Đăng ký</h1>
    <table>
    <tr>
    <td>
    tên khách hàng
    </td>
    <td>
    <input type="text" name="ten">
    </td>
    </tr>
    <tr>
    <td>
    tuổi
    </td>
    <td>
    <input type="text" name="age">
    </td>
    </tr>
    <tr>
    <td>
    địa chỉ
    </td>
    <td>
    <input type="text" name="add">
    </td>
    </tr>
    <tr>
    <td>
    số điện thoại
    </td>
    <td>
    <input type="text" name="sdt">
    </td>
    
    </tr>
    <tr>
    <td>
    username
    </td>
    <td>
    <input type="text" name="user">
    </td>
    </tr>
    <tr>
    <td>
    password:
    </td>
    <td>
    <input type="password" name="pass">
    </td>
    </tr>
    <tr>
    <td colspan="2" align="center">
    <input type="reset" value="nhập lại">
    <input type="submit" value="register" name="ok">

    </td>
    </tr>
    </table>
    </form>
    </div>
    <?php
    if(isset($_POST['ok'])){
    $tenkhachhang=$_POST['ten'];
    $tuoi=$_POST['age'];
    $diachi=$_POST['add'];
    $sdt=$_POST['sdt'];
    $username=$_POST['user'];
    $password=$_POST['pass'];

    $user="root";
    $servername="127.0.0.1";
    $pass=NULL;
    $dbbase="hungnguyen12";
    $conn = mysqli_connect($servername, $user, $pass,$dbbase);
    mysqli_set_charset($conn, 'UTF8');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

   $sql= "INSERT INTO `khach` (`makh`, `tenkh`, `tuoi`, `diachi`, `sdt`, `user`, `pass`) VALUES ( '$tenkhachhang', '$tuoi', '$diachi', '$sdt', '$username', '$password')";
   if ($conn->multi_query($sql) === TRUE) {
    echo "đăng ký thành công";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    }
    ?>
</body>
</html>