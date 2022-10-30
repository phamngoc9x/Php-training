<?php 
  echo "<h1> We talk about sessions PHP</h1> <br>";

  session_start();
  if(isset($_POST['submit'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    echo  $email;
    
    if($email == 'ngoc@gmail.com' && $password =='123456') {
      $_SESSION['email'] = $email;
      echo  $email;
      header('Location: /Php-training/php-base/dashboard.php');
    } else {
      echo "Incorrect email/password";
    };
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
  <h1>Login your account</h1>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
    method="POST"
    >
    <div>
      <label for="email">Your Email</label>
      <br>
      <input type="text" name="email">
    </div>
    <div>
      <label for="age">Password</label>
      <br>
      <input type="password" name="password">
    </div>
    <input type="submit" value="Submit" name="submit" />
  </form>
</body>
</html>
<!-- <script>
  alert('test')
</script> -->