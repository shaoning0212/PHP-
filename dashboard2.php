<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>MySQLTUTORIAL Sample Database</title>
  
</head>
<body>
<?php
  date_default_timezone_set("Asia/Taipei");
  #地區
?>
<?php
 echo header("refresh:5");
?>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "classicmodels";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
  ?>
  
    <div class="card" style="width: 180px;height: 180px; float: left;margin: 20px;background-color:	#FFC1E0;">
        <!-- img src="..." class="card-img-top" alt="..." -->
        <div class="card-body">
          <h5 class="card-title">本站顧客</h5>
          <?php
            
            $sql = "SELECT count(*) as totalCustomers FROM customers";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
             /* echo $row['totalCustomers'] ; */
             echo "<p class='card-text'>共" . $row['totalCustomers'] . "位</p>"; 
             echo "今天是 " . date("Y/m/d h:i:sa") . "<br>" ;
             
              }
            } else {
              echo "0 results";
            }
          ?>            
           
        </div>
        <a href ="#" class="btn btn-primary" style="background-color:	#FF8EFF;color:white;solid white;" >更多...</a> 
    </div>

    <div class="card" style="width: 180px;height: 180px; float: left;margin: 20px;">
        <!-- img src="..." class="card-img-top" alt="..." -->
        <div class="card-body">
          <h5 class="card-title">員工</h5>
          <?php
            
            $sql = "SELECT count(*) as totalemployees FROM employees";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                /* echo $row['totalemployees'] ; */
                echo "<p class='card-text'>共" . $row['totalemployees'] . "位</p>";
                echo "今天是 " . date("Y/m/d") . "<br>" . date("h:i:sa");                
              }
            } else {
              echo "0 results";
            }
          

                     
          ?>
            
        </div>
        <a href="#" class="btn btn-primary">更多...</a>
    </div>

    <div class="card" style="width: 180px;height: 180px; float: left;margin: 20px;">
        <!-- img src="..." class="card-img-top" alt="..." -->
        <div class="card-body">
          <h5 class="card-title">辦公室</h5>
          <?php
            
            $sql = "SELECT count(*) as totaloffices FROM offices";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                /* echo $row['totalemployees'] ; */
                echo "<p class='card-text'>共" . $row['totaloffices'] . "間</p>";
                echo "今天是 " . date("Y/m/d") . "<br>" . date("h:i:sa");                
              }
            } else {
              echo "0 results";
            }
          

                     
          ?>
            
        </div>
        <a href="#" class="btn btn-primary">更多...</a>
    </div>


    <div class="card" style="width: 180px;height: 180px; float: left;margin: 20px;">
        <!-- img src="..." class="card-img-top" alt="..." -->
        <div class="card-body">
          <h5 class="card-title">付款</h5>
          <?php
            
            $sql = "SELECT count(*) as totalpayments FROM payments";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                /* echo $row['totalemployees'] ; */
                echo "<p class='card-text'>共" . $row['totalpayments'] . "付款方式</p>";  
                echo "今天是 " . date("Y/m/d") . "<br>" . date("h:i:sa");              
              }
            } else {
              echo "0 results";
            }
          

                     
          ?>
            
        </div>
        <a href="#" class="btn btn-primary">更多...</a>
    </div>

    <div class="card" style="width: 180px;height: 180px; float: left;margin: 20px;">
        <!-- img src="..." class="card-img-top" alt="..." -->
        <div class="card-body">
          <h5 class="card-title">訂單</h5>
          <?php
            
            $sql = "SELECT count(*) as totalorders FROM orders";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                /* echo $row['totalemployees'] ; */
                echo "<p class='card-text'>共" . $row['totalorders'] . "筆訂單</p>"; 
                echo "今天是 " . date("Y/m/d") . "<br>" . date("h:i:sa");               
              }
            } else {
              echo "0 results";
            }
          

                     
          ?>
                      
        </div>
        <a href="#" class="btn btn-primary">更多...</a>
    </div>

    <div class="card" style="width: 180px;height: 180px; float: left;margin: 20px;">
        <!-- img src="..." class="card-img-top" alt="..." -->
        <div class="card-body">
          <h5 class="card-title">產品</h5>
          <?php
            
            $sql = "SELECT count(*) as totalproducts FROM products";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                /* echo $row['totalemployees'] ; */
                echo "<p class='card-text'>共" . $row['totalproducts'] . "樣產品</p>";     
                echo "今天是 " . date("Y/m/d") . "<br>" . date("h:i:sa");           
              }
            } else {
              echo "0 results";
            }
          

                     
          ?>
                      
        </div>
        <a href="#" class="btn btn-primary">更多...</a>
    </div>

    <div class="card" style="width: 180px;height: 180px; float: left;margin: 20px;">
        <!-- img src="..." class="card-img-top" alt="..." -->
        <div class="card-body">
          <h5 class="card-title">產品線</h5>
          <?php
            
            $sql = "SELECT count(*) as totalproductlines FROM productlines";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                /* echo $row['totalemployees'] ; */
                echo "<p class='card-text'>共" . $row['totalproductlines'] . "條產品</p>";  
                echo "今天是 " . date("Y/m/d") . "<br>" . date("h:i:sa");              
              }
            } else {
              echo "0 results";
            }
          

                     
          ?>
                      
        </div>
        <a href="#" class="btn btn-primary">更多...</a>
    </div>
            <?php             mysqli_close($conn); ?>
            
</body>
</html>