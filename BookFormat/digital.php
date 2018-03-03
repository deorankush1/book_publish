<?php
  namespace bookmain\digital;
  include_once '/Applications/XAMPP/xamppfiles/htdocs/Book_Industry/db.php';
  use bookmain\book_main;
 // include_once '/Applications/XAMPP/xamppfiles/htdocs/Book_Industry/BookFormat/book_main.php';
  class Digital 
 {  
    private $author_name;
    private $book_main;
    private $illustrator_name;
    private $editor_name;
    private $publisher_name;
    private $b_weight;
    private $b_price;
    private $b_completion_time;
    //private $book_main;
    function __construct($b_weight,$b_price,$b_completion_time,$author_name,$publisher_name,$editor_name,$illustrator_name, $book_main)
    {
      $this->author_name = $author_name;
      $this->illustrator_name = $illustrator_name;
      $this->book_main = $book_main;
      $this->publisher_name = $publisher_name;
      $this->editor_name = $editor_name;
    	$this->b_weight = $b_weight;
    	$this->b_price = $b_price;
      $this->b_completion_time = $b_completion_time;
      // $this->book_main = new Book_Main();
      // $abc=$this->book_main->getbook_main();
      // $this->book_main = $abc;
    }

    function getbook_main()
    {
      return[$this->b_weight, $this->b_price,$this->b_completion_time,$this->author_name,$this->publisher_name,$this->editor_name,$this->illustrator_name,$this->book_main];
    }

    function insertdetails()
  {
   echo "here";
   global $conn1;
   echo "<br>";
   
   echo  
   $query  = "INSERT into digital (author_name, book_size, book_cost,book_recorded_by, completion_time
    ) Values('{$this->author_name}','{$this->b_weight}','{$this->b_price}','{$this->publisher_name}','{$this->b_completion_time}')";        
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


  
}
  
  $h1= new  Digital($_POST['b_weight'],$_POST['b_price'],$_POST['b_completion_time'],$_POST['author_name'],$_POST['publisher_name'],$_POST['editor_name'],$_POST['illustrator_name'], $_POST['book_main']);
  print_r($h1->getbook_main());
  $h1 ->insertdetails();

  
