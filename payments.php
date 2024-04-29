<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "htmlhead.php" ; ?>
</head>
<body>
    <div class="container-fluid"><!--容器BIGIN-->
    <div class="row flex-nowrap"><!--ROW開始-->
      <?php include "sidebarLEFT.php"; ?>


        <div class="col py-3"><!-- 右邊欄 BEGIN-->
            <h1>付款</h1>
            <hr>
       <div class='row'> 

       <?php include "connet.php" ; ?>  
       
       <?php
       $sql = "select * from payments;";
       $result = $conn->query($sql);
       //$row = $result->fetch_assoc();
      if ($result->num_rows > 0) {
        echo "<table class='table'>";
        echo "<tr class='bg-primary text-white'>";
        echo "<td>顧客編號</td>";
        echo "<td>驗證碼</td>";
        echo "<td>付款日期</td>";
        echo "<td>數量</td>";
        echo "</tr>";



      while  ($row = $result->fetch_assoc()){
        echo "<tr>";
       echo  "<td>" . $row['customerNumber'] . "</td>";
       echo  "<td>" . $row['checkNumber'] . "</td>";
       echo  "<td>" . $row['paymentDate'] . "</td>";
       echo  "<td>" . $row['amount'] . "</td>";
       echo "</tr>";
       
      
       
      }
      echo "</table>";
    } else{
      echo "0 results";
    }
       ?>
  
  
  
        </div><!--右邊欄END-->


    </div><!---ROW結束-->
</div><!--容器END-->
</body>
</html>