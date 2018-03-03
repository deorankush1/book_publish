<?php
namespace bookmain;
include_once '/Applications/XAMPP/xamppfiles/htdocs/Book_Industry/db.php';
include_once '/Applications/XAMPP/xamppfiles/htdocs/Book_Industry/function/fnctions.php';
use bookmain\PeopleType\TypesOfPeople;
?>
<?php

class Book_Main
{
  private $b_name;
  private $b_image;
  private $b_publicationyear;

  function __construct($book_name, $p_year,$image)
  {
    $this->b_name = $book_name;
    $file_ext  = strtolower(end(explode('.',$_FILES['image']['name'])));
    echo $img = uniqid().".".$file_ext;
    mvimage($img);
    $this->b_image = $img;
    $this->b_publicationyear = $p_year;
  }

  function insertdetails()
  {
   echo "here";
   global $conn1;
   echo "<br>";
   
   echo  
   $query  = "INSERT into book_main (name,image,publicationyear) Values('{$this->b_name}','{$this->b_image}','{$this->b_publicationyear}')";        
   $result = mysqli_query($conn1, $query);
     
    if (!$result)
    {
      echo 'here2';
      echo "Error:2 " . $result . "<br>" . mysqli_error($conn1);
    }

    else
    {
      echo $this->last_id = $conn1->insert_id;        
      return($this->last_id);
      echo "successuflly added";
    }
  }


  function getbook_main()
  {
    return[$this->b_name,$this->b_publicationyear, $this->b_image];
  }
}
$b1=new Book_Main($_POST['book_name'], $_POST['p_year'], $_FILES['image']);

echo "<pre>";
print_r($b1->getbook_main());
echo "</pre>";

$b1 ->insertdetails();
