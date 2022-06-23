<!doctype html>
<head>
<meta charset="UTF-8">
<title>首頁</title>
</head>
<h1>
修改密碼
</h1>
<body>

<form action="" method="GET" >
<p>使用者名稱:<input type="text" name="name"></p>
<p>密 碼: <input type="password" name="password"></p>
<p><input type="submit" name="submit" value="確定"></p>
</form>

<?php
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
            $query_1  = "UPDATE user SET password =$password_1 where username = $name_1";
            $result_1 = $mysqli->query($query_1);
            if ($result){
                header('location:reset_1');
                exit();;
            };
        }
        else {
            echo "失敗1";}
        $mysqli->close();

        
       
}
?>



</body>
</html>