<?php 
  echo "We talk about iterations in PHP <br>";

  // for($i = 0; $i <= 10; $i++) {
  //   echo "i = $i <br>";
  // }

  $i = 31;
  // while($i < 20) {
  //   echo "i = $i <br>";
  //   $i++;
  // }

  // do {
  //   echo "i = $i <br>";
  //   $i++;
  // } while($i < 30);

  $fruits = ['apple', 'pineapple', 'orange',  'lemon'];

  // for($i = 0; $i < count($fruits); $i++) {
  //   echo $fruits[$i]."<br>";
  // };

  // foreach($fruits as $index => $fruit ) {
  //   echo "$index - $fruit <br>";
  // }

  $person = [
    'full_name' => 'Pham Van Ngoc',
    'age' => 20,
    'email' => 43,
  ];

  foreach($person as $key => $value) {
    echo "$key - $value <br>";
  }
?>