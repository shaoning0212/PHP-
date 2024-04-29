<?php
        date_default_timezone_set("Asia/Taipei");
        #地區
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