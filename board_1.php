<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>留言板</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- 這是最上方導覽列 -->
    <?php include('navbar.html')  ?>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center">
                    <h2>留言板</h2><br />
                </div>
                <div class="cal26rd">
                    <h5 class="card-title mt-3 ml-4 text-muted">你可以留言</h5>
                    <div class="card-body">
                        <!-- 需要輸入的資訊都在form裡面，submit後會跳轉至 boardAdd.php 執行新增動作，請注意name名稱會對應php的$_POST[''] -->
                        <form method="GET" action="">
                                <input class="form-control" name="m_name" placeholder="您的暱稱" size="40" maxlength="30"  />
                            <br />
                                <textarea class="form-control" style="resize:none" name="m_content" placeholder="請留言..." rows="4" ></textarea>
                            <br />
                            <div class="text-center">
                                <input class="btn btn-outline-primary" type="submit" name="btn" value="Submit" />
                            </div>
                        <p>暱稱　　留言　　　回覆</p>
                        </form>
                        <!-- form 結束 -->
                        <?php
                            if (isset($_GET["btn"])){        
                                define('DB_SERVER', 'localhost');
                                define('DB_USERNAME', 'root');
                                define('DB_PASSWORD', '');
                                define('DB_NAME', 'test');
                                $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                                $name_1=$_GET['m_name'];
                                $m_content_1=$_GET['m_content'];
                                $sql = "INSERT INTO message (id,name,text,reply) VALUES (null, '$name_1', '$m_content_1',null)";
                                if ($link->query($sql) === TRUE) {
                                    echo "留言成功"."<br>";
                                    
                                } 
                                else {
                                    echo "Error:失敗 "."<br>" ;
                                } 
                                $link->close();
                            }
                            $mysqli = new mysqli("localhost","root","","test");     //实例化mysqli
                            $query  = "select name,text,reply from message";
                            $result = $mysqli->prepare($query);                                  //进行预准备语句查询
                            $result->execute();                                                  //执行预准备语句
                            $result->bind_result($name,$text,$reply);                        //绑定结果
                            while ($result->fetch()) {
                                echo $name."　　　";
                                
                                echo $text."　　　";
                                echo $reply."<br>";
                            }
                            $result->close();   
                        
                        ?>
                        <hr>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html> 