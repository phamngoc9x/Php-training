<?php 
  echo "<h1> We talk about super globals in PHP</h1> <br>";



  // print_r($_SERVER);
  // print_r($_GET);
  // print_r($_POST);

  // if(isset($_GET['name'])) {
  //   echo $_GET['name'];
  // }

  // $name = $_GET['name'] ?? '';
  // $age = $_GET['age'] ?? '';

  // echo $name;
  // echo $age;

  $email = htmlspecialchars($_POST['email']) ?? '';
  $password = htmlspecialchars($_POST['password']) ?? '';

  echo $email;
  echo $password;
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
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
    method="POST"
    >
    <h3>Login your account</h3>
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
    <button type="submit">Submit</button>
  </form>
</body>
</html>
<!-- <script>
  alert('test')
</script> -->