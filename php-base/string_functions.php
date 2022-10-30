<?php 
  echo "<h1> We talk about string function in PHP</h1> <br>";

  $full_name = 'Pham Van Ngoc';

  // echo "lenght: " . strlen($full_name);
  // echo strrev($full_name);
  // echo strtolower($full_name);
  // echo strtoupper($full_name);
  echo str_replace(' ','-', $full_name);
?>