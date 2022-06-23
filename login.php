<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>登陸</title>
</head>
<body>
<h1>登陸</h1>
<form name="login" action="" method="get">
<p>使用者名稱<input type=text name="name"></p>
<p>密 碼<input type=password name="password"></p>
<p><input type="submit" name="submit" value="登入"></p>
<p><input type="submit" name="submit_1" value="註冊"></p>
</form>

<?php
    if (isset($_GET["submit_1"])){
        
        header('location:signup');
        exit();
    }
    if (isset($_GET["submit"])){
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'test');
        
        $name_1=$_GET['name'];
        $password_1=$_GET['password'];
        /*where user = $name_1 and password=$password_1*/
    
        $mysqli = new mysqli("localhost","root","","test");
        $query  = "select username,password from user where username = $name_1";
        $result = $mysqli->query($query);
        if ($result){
            while ($row = mysqli_fetch_row($result)) {
                if($row[0] == $name_1){
                    if($row[1] == $password_1){
                        $mysqli->close();
                        header('location:homepage');
                        exit();
                    }
                    else {
                        echo "登入失敗1";}
                        break;
                }
                else {
                    echo "登入失敗2";
                    break;
                }
                    
              }
              echo "登入失敗4";

        }
        else {
            echo "登入失敗3";}
        $mysqli->close();

        
       
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
