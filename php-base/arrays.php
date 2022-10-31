<?php 
  echo 'Array examples'."<br>";

  // $some_number = [1,2,3,4];
  // $fruits = ['pineapple', 'melon', 'apple'];
  // print_r($fruits);
  // echo $fruits[1];

  // $color = [
  //   3 => 'red',
  //   5 => 'green',
  //   7 => 'blue',
  // ];

  // echo $color[7]

  $person = [
    [
      'full_name' => 'Pham Van Ngoc',
      'age' => 41,
      'email' => 'ngoc@gmail.com',
    ],
    [
      'full_name' => 'Raccoon',
      'age' => 23,
      'email' => 'raccon@gmail.com',
    ],
    [
      'full_name' => 'John',
      'age' => 33,
      'email' => 'John@gmail.com',
    ],
  ];

  print_r($person);
  echo $person[2]['full_name']

?>