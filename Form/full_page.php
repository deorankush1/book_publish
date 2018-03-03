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
     $result = mysqli_query($conn1,$sql);
        
     if ($result->num_rows > 0){
        echo "<div class='container'>
        <ul class='floating-box'>";
        
        while ($row = mysqli_fetch_array($result))
          {   
            $name = $row['name'];
            $p_year = $row['publicationyear'];
			$image = $row['image'];   
             $arr=("Book_Name: " . $row["name"].'<br>'. "$p_year: ".$row["publicationyear"].'<br>'." <br> available in <br>"."<a href = '../Form/digital.php?name={$name}'>digital</a>". "<br>"."<a href = '../Form/audio.php?name={$name}'>audio</a>". "<br>"."<a href = '../Form/hardcover_page.php?name={$name}'>harrdcover_page</a>". "<br>"."<a href = '../Form/paperback_page.php?name={$name}'>paperback_page</a>". "<br>");
            echo " <li><center>
            <img src='../images/original/$image' width =150 height=100><br>
            $arr<br>
            </li> </center>";
          }
        }
        echo"</ul>
        </div>";
      
    ?>
  </body>
</html>
