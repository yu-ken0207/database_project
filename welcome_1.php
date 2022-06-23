<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>新增成功</title>
</head>
<body>

<h2>歡迎光臨 新增成功</h2>
<nav>
<form action="" method="GET" >
<p><input type="submit" name="submit" value="點此登入帳號"></p>
</form>
</nav>



<?php
    if (isset($_GET["submit"])){
       
        header('location:login');
        exit();
    }
?>
<style>
        h2{color:rgb(22, 49, 124);font-size:75px;text-align:center;}
        nav{text-align:center;font-SIZE:50PX;}
        html {
        height: 100%;
    }
    body {
        background-image: url(first.png);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
    }
      </style>
</body>
</html>