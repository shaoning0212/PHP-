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
            <h1>產品線</h1>
            <hr>
       <div class='row'> 

       <?php include "connet.php" ; ?>  
       
       <?php
       $sql = "select * from productlines;";  /*組合SQL字串*/
       $result = $conn->query($sql);  /*執行SQL指令*/
       //$row = $result->fetch_assoc();

       if ($result->num_rows > 0) { /*執行結果>0*/
        echo "<table class='table table-hover'>";  /*<tr><th></th>是表頭</tr>*/
        echo "<tr class='bg-danger text-white'>";
        echo "<th>產品線</th>";
        echo "<th>文字說明</th>";
        echo "<th>HTML 描述</th>";
        echo "<th>圖像</th>";
        echo "</tr>";

       while  ($row = $result->fetch_assoc()){  /*讀取下一筆*/
        echo "<tr>";  /*<tr><td></td>是表頭</tr>  這是一個迴圈*/
       echo  "<td>" . $row['productLine'] . "</td>";
       echo  "<td>" . $row['textDescription'] . "</td>";
       echo  "<td>" . $row['htmlDescription'] . "</td>";
       echo  "<td>" . $row['image'] . "</td>";
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