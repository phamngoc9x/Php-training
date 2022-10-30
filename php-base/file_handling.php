<?php 
  echo "<h1> We talk about file handling in PHP</h1> <br>";

  $file_path = './fruits.txt';

  if(file_exists($file_path)) {
    // echo readfile( $file_path );
    $file_handle = fopen($file_path, 'r');
    $file_content = fread($file_handle, filesize($file_path));

    echo $file_content;
  } else {
    $file_handle = fopen($file_path, 'w');
    $file_content = 'banana' .PHP_EOL.'mango'.PHP_EOL.'orange';
    fwrite($file_handle, $file_content);
  }
  
  fclose($file_handle);
?>