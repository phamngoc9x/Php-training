<?php 
  echo "<h1> We talk about OOP in PHP</h1> <br>";

  class User {
    protected $name;
    public $email;
    public $age;
    public $passsword;

    public function __construct($name, 
                                $age, 
                                $email, 
                                $password) {
      // echo "Constructor run <br>";
      $this -> name = $name;
      $this -> age = $age;
      $this -> email = $email;
      $this -> password = $password;
    }

    function set_name($name) {
      $this-> name = $name;
    }

    function get_name () {
      return $this-> name;
    }
  };

  $user1 = new User('Raizo', 36, 'Raizo@gmail.com', '123456');
  $user2 = new User('Kakashi', 25, 'Kakashi@gmail.com', '123456');

  // $user1 -> name = 'Ngoc';
  // $user1 -> age = 32;
  // $user1 -> email = 'Raizo@gmail.com';
  // $user1 -> passsword = '123456';

  // $user1 -> set_name('Ngoc NGoc');
  // $user2 -> set_name('King King');
  // print_r($user1);
  // print_r($user2);

  // echo $user1->get_name() 

  // echo $user1 -> email;

  class Employee extends User {
    public function __construct($name, 
      $age, 
      $email, 
      $password,
      $title) {
      // echo "Constructor run <br>";
      parent::__construct($name, 
      $age, 
      $email, 
      $password);
      $this -> title = $title;
    }
    public function get_title() {
      return $this-> title;
    }
  }

  $employee1 = new Employee('Naruto', 36, 'Naruto@gmail.com', '123456', 'Hokage');

  echo $employee1 -> get_title()
?>