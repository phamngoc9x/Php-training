<?php 
  // echo "We talk about function in PHP <br>";

  // function sayHello($name) {
  //   echo "Hello $name";
  // }
  // sayHello("Ngoc");

  function sum($a = 0, $b = 0) {
    return  $a + $b;
  }

  // echo sum(10,20);

  $substract = fn($a, $b) => $a - $b;

  // echo $substract(10, 5);

  $name1 = ['Ngoc', 'Quan', 'Nghia','Hung'];
  $name2 = ['xxx', 'xyz', 'sss','fff'];

  // echo "Number of items: ".count($name);

  // var_dump(in_array('Quan', $name));

  // array_push($name, 'Elon');
  // array_unshift($name, 'Satoshi');

  // array_pop($name);
  // array_shift($name);

  // unset($name[2]);

  // $chunked_array = array_chunk($name, 2);
  $merged_array =array_merge($name1, $name2);

  // print_r($merged_array);

  // combine

  // $a = ['name', 'email', 'age'];
  // $b = ['Quan', 'quan@gmail.com', 18];
  // $c = array_combine($a,$b);
  // print_r($c);

  $numbers = range(0, 10);
  print_r($numbers);

  $fintered_numbers = array_filter($numbers,
  fn($each_number) => $each_number % 2 == 0);
  
  print_r($fintered_numbers);

?>