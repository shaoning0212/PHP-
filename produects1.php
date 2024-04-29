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
            <h1>產品</h1>
            <hr>
       <div class='row'> 

       <?php include "connet.php" ; ?>  
       
       <?php
       $sql = "select * from products;";
       $result = $conn->query($sql);
       //$row = $result->fetch_assoc();

       if ($result->num_rows > 0) {
        echo "<table class='table'>";
        echo "<tr class='bg-primary text-white'>";
        echo "<td>產品代碼</td>";
        echo "<td>產品名稱</td>";
        echo "<td>產品線</td>";
        echo "<td>產品規模</td>";
        echo "<td>產品供應商</td>";
        echo "<td>產品描述</td>";
        echo "<td>庫存數量</td>";
        echo "<td>買入價格</td>";
        echo "<td>廠商建議零售價</td>";
        echo "</tr>";

       while  ($row = $result->fetch_assoc()){
        echo "<tr>";
       echo  "<td>" . $row['productCode'] . "</td>";
       echo  "<td>" . $row['productName'] . "</td>";
       echo  "<td>" . $row['productLine'] . "</td>";
       echo  "<td>" . $row['productScale'] . "</td>";
       echo  "<td>" . $row['productVendor'] . "</td>";
       echo  "<td>" . $row['productDescription'] . "</td>";
       echo  "<td>" . $row['quantityInStock'] . "</td>";
       echo  "<td>" . $row['buyPrice'] . "</td>";
       echo  "<td>" . $row['MSRP'] . "</td>";
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