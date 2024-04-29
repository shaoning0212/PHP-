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
       $sql = "select * from orders;";
       $result = $conn->query($sql);
       //$row = $result->fetch_assoc();

       if ($result->num_rows > 0) {
        echo "<table class='table'>";
        echo "<tr class='bg-primary text-white'>";
        echo "<td>訂單號</td>";
        echo "<td>訂單數據</td>";
        echo "<td>所需數據</td>";
        echo "<td>發貨數據</td>";
        echo "<td>地位</td>";
        echo "<td>評論</td>";
        echo "<td>客戶編號</td>";
        echo "</tr>";

       while  ($row = $result->fetch_assoc()){
        echo "<tr>";
       echo  "<td>" . $row['orderNumber'] . "</td>";
       echo  "<td>" . $row['orderDate'] . "</td>";
       echo  "<td>" . $row['requiredDate'] . "</td>";
       echo  "<td>" . $row['shippedDate'] . "</td>";
       echo  "<td>" . $row['status'] . "</td>";
       echo  "<td>" . $row['comments'] . "</td>";
       echo  "<td>" . $row['customerNumber'] . "</td>";
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