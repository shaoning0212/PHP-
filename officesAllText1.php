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
            <h1>分公司總覽</h1>
            <hr>
       <div class='row'> 

       <?php include "connet.php" ; ?>  
       
       <?php
       $sql = "select * from offices;";
       $result = $conn->query($sql);
       //$row = $result->fetch_assoc();
       
      if ($result->num_rows > 0) {
        echo "<table class='table table-hower'>";
        echo "<tr class='bg-success text-white'>";
        echo "<td>分公司編號</td>";
        echo "<td>城市</td>";
        echo "<td>電話</td>";
        echo "<td>住址1</td>";
        echo "<td>住址2</td>";
        echo "<td>州</td>";
        echo "<td>國家</td>";
        echo "<td>郵遞區號</td>";
        echo "<td>區域</td>";
        echo "</tr>";



      while  ($row = $result->fetch_assoc()){
        echo "<tr>";
       echo  "<td>" . $row['officeCode'] . "</td>";
       echo  "<td>" . $row['city'] . "</td>";
       echo  "<td>" . $row['phone'] . "</td>";
       echo  "<td>" . $row['addressLine1'] . "</td>";
       echo  "<td>" . $row['addressLine2'] . "</td>";
       echo  "<td>" . $row['state'] . "</td>";
       echo  "<td>" . $row['country'] . "</td>";
       echo  "<td>" . $row['postalCode'] . "</td>";
       echo  "<td>" . $row['territory'] . "</td>";
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