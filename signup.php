<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>症狀評估管理系統</title>
</head>
<h1>註冊帳號</h1>
<body>

<form action="" method="GET" >
<p>使用者名稱:<input type="text" name="name"></p>
<p>密     碼: <input type="text" name="password"></p>
<p><input type="submit" name="submit" value="註冊"></p>
<p><input type="submit" name="find" value="登陸"></p>


</form>

<?php
    if (isset($_GET["find"])){
        echo "成功";
        header('location:login');
        exit();
    }

    if (isset($_GET["submit"])){         /*新增*/
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'test');
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        $name_1=$_GET['name'];
        $password_1=$_GET['password'];
        $sql = "INSERT INTO user (id,username,password) VALUES (null, $name_1, $password_1)";
        if ($link->query($sql) === TRUE) {
            echo "註冊成功";
            header('location:welcome_1');
            exit();
        } 
        else {
            echo "Error:註冊失敗 " ;
        }
        $link->close();
    }
    
?>
<style>
    p{text-align:center;}
    h1{color:rgb(9, 170, 206);font-size:75px;text-align:center;}
    form{text-align:center;}
    html {height: 100%;}
    body {
            background-image: url(oneone.png);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
</style>      

</body>
</html>

