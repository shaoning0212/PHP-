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
            <h1>員工</h1>
            <hr>
       <div class='row'> 

       <?php include "connet.php" ; ?>  
       
       <?php
       $sql = "select * from employees;";
       $result = $conn->query($sql);
       //$row = $result->fetch_assoc();

       if ($result->num_rows > 0) {
        echo "<table class='table table-hover'>";
        echo "<tr class='bg-warning text-white'>";
        echo "<td>員工編號</td>";
        echo "<td>姓</td>";
        echo "<td>名</td>";
        echo "<td>擴大</td>";
        echo "<td>電子郵件</td>";
        echo "<td>辦公室代碼</td>";
        echo "<td>匯報</td>";
        echo "<td>職稱</td>";
        echo "</tr>";

       while  ($row = $result->fetch_assoc()){
        echo "<tr>";
        echo  "<td>" . $row['employeeNumber'] . "</td>";
        echo  "<td>" . $row['lastName'] . "</td>";
        echo  "<td>" . $row['firstName'] . "</td>";
        echo  "<td>" . $row['extension'] . "</td>";
        echo  "<td>" . $row['email'] . "</td>";
        echo  "<td>" . $row['officeCode'] . "</td>";
        echo  "<td>" . $row['reportsTo'] . "</td>";
        echo  "<td>" . $row['jobTitle'] . "</td>";
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