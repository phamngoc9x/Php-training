<?php 
  require 'components/header.php';
  echo "<h1>List of feedbacks here<br></h1>";

  $sql = "SELECT name, email, body from feedback;";
  if($connection != null) {
    try {
      $statement = $connection -> prepare($sql);
      $statement -> execute();
      $result = $statement -> setFetchMode(PDO::FETCH_ASSOC);
      $feedbacks = $statement -> fetchAll();
      echo '<ul class="list-grounp">';
      foreach($feedbacks as $feedback) {
        $name = $feedback['name'] ?? '';
        $email = $feedback['email'] ?? '';
        $body = $feedback['body'] ?? '';
        echo "<li class='list-group-item'>";
        echo "<span class='p-3'>$name</span>";
        echo "<span class='p-3'>$email</span>";
        echo "<span class='p-3'>$body</span>";
        echo " </li>";
      }
      echo '</ul>';
    } catch (PDOException $e) {
      echo "Cannot query database" . $e -> getMessage();
    }
  }
  
  include 'components/footer.php';
?>