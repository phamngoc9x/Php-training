<?php
  session_start();
  if(isset($_SESSION['email'])) {
    echo "Welcome to dashboard <br>";
    echo "Email: ". $_SESSION['email'];
    echo "<br><a href='/Php-training/php-base/logout.php'>Logout</a>";
  } else {
    echo "Welcome guest to Dashboard <br>";
    echo "<a href='/Php-training/php-base/sessions.php'>Back to Session page </a>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>This is dashboard</h1>
</body>
</html>