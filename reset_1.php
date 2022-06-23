<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>修改成功</title>
</head>
<body> 修改成功


<form action="" method="GET" >
<p><input type="submit" name="submit" value="點此進行登入"></p>
</form>


<?php
    if (isset($_GET["submit"])){
       
        header('location:login');
        exit();
    }
?>

</body>
</html>