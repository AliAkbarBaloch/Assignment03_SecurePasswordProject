<!DOCTYPE html>
<html>
<head>
  <title>Practice</title>
</head>
<body>
   <?php 

      $sql=mysqli_connect("localhost","root","");
      if ($sql) {
        echo "Connected";
        # code...
      }
      else{
        die("Not Connected!");

      }
      $database="CREATE DATABASE assignment03";
      if ($sql->query($database)) {
        # code...
        echo "Database Created";
      }
      else{
        echo "Not Created Database";
      }

      mysqli_close($sql);

    
    ?>
</body>
</html>


