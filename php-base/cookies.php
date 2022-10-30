<?php 
  echo "<h1> We talk about cookies in PHP</h1> <br>";

  
  setcookie('name', 'Raccoon', time() + 24*3600);

  if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
  };

  // setcookie('name', '', time() - 24*3600);
?>