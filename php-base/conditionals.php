<?php 
  echo "We talk about conditional in PHP <br>";
  $age =15;

  // if ($age > 18) {
  //   echo "You are > 18 years old";
  // } else {
  //   echo "You are so young";
  // };
  $hours = 9;
  // echo $hours;

  // if($hours < 12) {
  //   echo "Good morning";
  // } else if($hours >= 12 && $hours <= 17) {
  //   echo "Good afternoon";
  // } else {
  //   echo "Good evening";
  // }

  $comments = [
    'Good idea', 'I like it', 'How are you?'
  ];

  // if(!empty($comments)) {
  //   echo "There are some comments";
  // } else {
  //   echo "No comments";
  // }

  // $first_comment = $comments[0] ?? 'No comment';
  // echo $first_comment

  $favorite_color = 'green';
  switch($favorite_color) {
    case 'red':
      echo 'You choose RED';
      break;
    case 'green':
      echo 'You choose GREEN';
      break;
    case 'blue':
      echo 'You choose BLUE';
      break;
    default: 
      echo 'Not red, green, blue';
  }
?>