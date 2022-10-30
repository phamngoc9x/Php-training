<?php 
  echo "<h1> We talk about Exceptions in PHP</h1> <br>";

  function divide($a, $b) {
    if(!$b) {
      throw new Exception('Cannot divide by zero !!!');

    }

    return $a / $b;
  };

  
  try {
    echo divide(10, 5);
    echo divide(10, 0);
    echo 'No errors';
  } catch (Exception $e) {
    echo "Caught exception: ".$e->getMessage() . "\n";
  } finally {
    echo "Finally come here ...";
  }
?>