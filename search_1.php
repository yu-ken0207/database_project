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
                    <h2>簡易查詢</h2><br />
                    
                    <div class="table-responsive">
                        <table class="table text-center">
                            <tr>
                                <td><strong>疫苗中文名稱</strong></td>
                                <td><strong>疫苗英文名稱</strong></td>
                                <td><strong>疫苗英文全名</strong></td>
                                
                            </tr>
                            
                        </table>
                        <table class="table text-center">
                            <tr>
                            
                            <strong >
                                <?php 
                                $mysqli = new mysqli("localhost","root","","test");    
                                $query  = "select chi_name,eng_name,eng_allname from vaccine";
                                $result = $mysqli->prepare($query);                            
                                $result->execute();                                                
                                $result->bind_result($chi_name,$eng_name,$eng_allname);                      
                                while ($result->fetch()) {
                                    echo '<tr>';
                                        echo '<td>' .$chi_name . '</td>';
                                        echo '<td>' .$eng_name . '</td>';
                                        echo '<td>' .$eng_allname. '</td>';
                                    echo '</tr>';
                                }
                                $result->close();   
                                ?>
                                </strong >
                                
                            </tr>
                            
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html> 