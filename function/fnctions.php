<?php

function make_thumb($src, $dest, $desired_width, $file_type)
   {

    echo $src . " " . $dest . " " .$desired_width;

    /* read the source image */
    if ($file_type == 'image/jpeg')
    {
        $source_image = imagecreatefromjpeg($src);    
    }
    elseif ($file_type == "image/png") {
        $source_image = imagecreatefrompng($src);   
    }
    else
    {
        $source_image = imagecreatefromgif($src);
    }
    //$source_image = imagecreatefromjpeg($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);
    
    /* find the "desired height" of this thumbnail, relative to the desired width  */
    $desired_height = floor($height * ($desired_width / $width));
    
     //create a new, "virtual" image 
    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);
    
    /* copy source image at a resized size */
    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
    
    /* create the physical thumbnail image to its destination */
    imagejpeg($virtual_image, $dest);
  }


function mvimage($b_imgage)
  {
    if (move_uploaded_file($_FILES['image']['tmp_name'], "../images/original/".$b_imgage)) {
      $file_source = "../images/original/".$b_imgage;
     echo $file_type = $_FILES['image']['type'];
      make_thumb($file_source, "../images/250x250/".$b_imgage, 250,$file_type); 
    }
  }
  ?>