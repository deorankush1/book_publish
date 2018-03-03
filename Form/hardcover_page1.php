<!DOCTYPE html>
<html>

  <head>
    <title> BDS Company </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../templete-style.css">
  </head>
  
  <body>
  	<?php
     include '../db.php';
     echo"  </div>";
      
     $sql= "SELECT * from book_main";
     $hardcover ="SELECT * From hardcover";
     $result1 = mysqli_query($conn1,$hardcover);
     $result = mysqli_query($conn1,$sql);
        
     if ($result->num_rows > 0 && $result1->num_rows >0){
        echo "<div class='container'>";
        
        while ($row = mysqli_fetch_array($result) && $row1 = mysqli_fetch_array($result1))
          {     
            $arr=("Book_Name: " . $row["name"].'<br>'. "p_year: " .$row["publicationyear"]. '<br>'."Author_name: " . $row1["author_name"].'<br>'."Book_size: ".$row1["book_size"].'<br>'."Book_cost: ".$row1["book_cost"].'<br>'."book_recorded_by: " .$row1["book_recorded_by"].'<br>'."completion_time" .$row1["completion_time"]. '<br>');
            echo " <center>
            <img src='../images/original/$image' width =150 height=100><br>
            $arr<br>
             </center>";
          }
        }
        echo"
        </div>";
    ?>
  </body>
</html>
