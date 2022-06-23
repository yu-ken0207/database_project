<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>簡易搜尋</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- 這是最上方導覽列 -->
    <?php include('navbar.html')  ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="text-center">
                    <h2>修改疫苗資料</h2><br />
                    <form  method="GET" action="">
                        疫苗中文名稱：<input name="chi_name1" type="text" placeholder="請輸入改疫苗中文名稱" size="40" /><br/>
                        疫苗英文名稱：<input name="eng_name2" type="text" placeholder="請輸入欲修改疫苗英文名稱" size="40" /><br/>
                        疫苗英文全名：<input name="eng_allname3" type="text" placeholder="請輸入欲修改疫苗英文全名" size="40" /><br/>
                        <input class="btn btn-outline-info my-2" type="submit" name="btn" value="修改" >
                        <input class="btn btn-outline-info my-2" type="button" value="返回" onclick="location.href='homepage'">
                    </form>
                    <?php
                            if (isset($_GET["btn"])){
                                define('DB_SERVER', 'localhost');
                                define('DB_USERNAME', 'root');
                                define('DB_PASSWORD', '');
                                define('DB_NAME', 'test');
                                $chi_name_1=$_GET['chi_name1'];
                                $eng_name_1=$_GET['eng_name2'];
                                $eng_allname_1=$_GET['eng_allname3'];
                                $mysqli = new mysqli("localhost","root","","test");
                                $query  = "select chi_name,eng_name,eng_allname from vaccine where chi_name = '$chi_name_1'";
                                $result = $mysqli->query($query);
                                if ($result){
                                    $query_1  = "UPDATE vaccine SET eng_name ='$eng_name_1' ,  eng_allname = '$eng_allname_1'  where chi_name = '$chi_name_1'";
                                    $result_1 = $mysqli->query($query_1);
                                    if ($result){
                                        echo "成功";
                                    };
                                }
                                else {
                                    echo "失敗1";}
                                $mysqli->close();
                            }

                        ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html> 