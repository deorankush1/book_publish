<?php

 include_once '/Applications/XAMPP/xamppfiles/htdocs/Book_Industry/PeopleTypes/author.php';
 use person\author\Author;


 if (isset($_POST['submit']))
 {
    
    $details = array(
    'fname' => $_POST['fname'],
     'lname' => $_POST['lname'],
     'mobile'    => $_POST['mobile'],
     'city'      => $_POST['city'],
     'state'     => $_POST['state'],
     'country'   => $_POST['country'],
     'postcode'  => $_POST['postcode'],
     'no_of_books'=>$_POST['no_of_books'],
    );


    $author = new Author($details);
    $author->insertdetails();
  
}

?>