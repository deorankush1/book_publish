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
     $rpp =3;
     $query = "SELECT * from book_main";
     $result1 = mysqli_query($conn1, $query);
     $nor =mysqli_num_rows($result1);
     $nop = ceil($nor/$rpp); 
    
     if(!isset($_GET['page']))
      {
        $page =1;
      }
     else 
      {
       $page = $_GET['page'];
      }
    
     $offset = ($page - 1)*$rpp;
     echo" <div class ='header'>";
     echo "<h4><center> Welcome Back </h4></center>";
     echo "Book Distrubution and Sales Company" ."<br>"."<br>";
     echo"  </div>";
      
      $sql= "SELECT * from book_main Limit $offset , $rpp";
     $result = mysqli_query($conn1,$sql);
        
     if ($result->num_rows > 0){
        echo "<div class='container'>
        <ul class='floating-box'>";
        
        while ($row = mysqli_fetch_array($result))
          {   
            $image = $row['image'];
            $id = $row['book_id'];
            $name = $row['name'];
            $arr=("Book_Name: " . $row["name"].'<br>'."<a href = '../Form/full_page.php?name={$name}&page={$page}'>View</a>". "<br>");
        
            echo " <li>
            <img src='../images/original/$image' width =150 height=100><br>
            $arr<br>
            </li>";
          }
        }
        echo"</ul>
        </div>";
        
        for($page =1; $page<=$nop; $page++){
          echo '<li><a href = "../function/display.php?page=' . $page. '">'. $page . '</a>
          </li>';
        }
      
      
    ?>
  </body>
</html>
