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
            <h1>訂單</h1>
            <hr>
       <div class='row'> 

       <?php include "connet.php" ; ?>  
       
       <?php
       $sql = "select * from orderdetails;";
       $result = $conn->query($sql);
       //$row = $result->fetch_assoc();

       if ($result-> num_rows > 0) {
        echo "<table class='table table-hower'>";
        echo "<tr class='bg-info text-white'>";
        echo "<td>訂單號</td>";
        echo "<td>產品代碼</td>";
        echo "<td>訂購數量</td>";
        echo "<td>每個的價格</td>";
        echo "<td>訂單型號</td>";
        echo "</tr>";

       while  ($row = $result->fetch_assoc()){
        echo "<tr>";
       echo  "<td>" . $row['orderNumber'] . "</td>";
       echo  "<td>" . $row['productCode'] . "</td>";
       echo  "<td>" . $row['quantityOrdered'] . "</td>";
       echo  "<td>" . $row['priceEach'] . "</td>";
       echo  "<td>" . $row['orderLineNumber'] . "</td>";
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