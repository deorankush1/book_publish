<!DOCTYPE html>
<html>

  <head>
    <title> BDS Company </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../templete-style.css">
  </head>
  <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: silver;
   color: white;
   text-align: center;
}
</style>
</head>
  
  <body>
  	<?php
     include '../db.php';
    s
      
     $sql= "SELECT * from book_main";
     $result = mysqli_query($conn1,$sql);
        
     if ($result->num_rows > 0){
        
        while ($row = mysqli_fetch_array($result))
          {   
            $name = $row['name'];
            $image = $row['image'];   
            $arr=("Book_Name: " . $row["name"].'<br>'. "Publication_year: " .$row["publicationyear"] );
            echo " <li><center>
            <img src='../images/original/$image' width =150 height=100><br>
            $arr<br>
            </li> </center>";
          }
        }
        $hardcover ="SELECT * From hardcover";
        $result = mysqli_query($conn1,$hardcover);

       if($result->num_rows>0)
       {

        while ($row = mysqli_fetch_array($result))
        {   
          $arr=("Author_name: " . $row["author_name"].'<br>'."Book_Published_By: " .$row["book_recorded_by"].'<br>'."Book_size: ".$row["book_size"].'<br>'."Book_cost: ".$row["book_cost"].'<br>'."completion_time" .$row["completion_time"]. '<br>');
          echo " <li><center>
          $arr<br>
          </li> </center>";
        }
      }
    
    ?>
    <div class="footer">
      <?php
      $author = "SELECT * From author where "
      ?>
    </div>
  </body>
</html>
