<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Trang Chủ </h1>

<a href="page/gioi thieu.php">Giới Thiệu</a>
<?php
$hoten = 'Lan Anh';
$password='123456';
echo '<h1 style="color:blue;">Xinchao PHP</h1>';
echo 'bạn tên là: <span style="color:red; font-size:20px;">' .$hoten .</span>;

// "bạn tên là: '<span style="color:red; font-size:20px;">'.$hoten .</span>;
echo 'mật khẩu bạn là: ' .$password;
echo "mật khẩu bạn là: $password";
?>
</body>
</html>

