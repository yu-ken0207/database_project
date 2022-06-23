<!doctype html>
<head>
<meta charset="UTF-8">
<title>刪除</title>
</head>
<h1>
刪除帳號
</h1>
<body>
<form action="" method="GET" >
<p>使用者名稱:<input type="text" name="name"></p>
<p>密 碼: <input type="password" name="password"></p>
<p><input type="submit" name="submit" value="刪除此帳號"></p>
</form>
<?php
    if (isset($_GET["submit"])){       
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'test');
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


        $name_1=$_GET['name'];
        $password_1=$_GET['password'];
        $sql = "DELETE FROM user  where  username=$name_1 and password=$password_1";
        if ($link->query($sql) === TRUE) {
            header('location:del_1');
            exit();
            
        } 
        else {
            echo "Error:刪除失敗 " ;
        }
        $link->close();
    }


    /*$stmt = $mysqli->prepare("DELETE FROM user WHERE filmID = ?");
    $stmt->bind_param('i', $_POST['filmID']);
    $stmt->execute();
    $stmt->close();*/
    
?>
</body>
</html>