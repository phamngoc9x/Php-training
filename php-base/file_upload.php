<?php 
  echo "<h1> We talk about file upload in PHP</h1> <br>";
  if(isset($_POST['submit'])) {
    $permitted_extensions = ['png', 'jpg', 'jpeg', 'gif'];
    $file_name = $_FILES['upload']['name'];
    if(!empty($file_name)) {
      // print_r($_FILES);
      $file_size = $_FILES['upload']['size'];
      $file_tmp_name = $_FILES['upload']['tmp_name'];
      $generated_file_name = time().'-'.$file_name;
      $destination_path = "uploads/${generated_file_name}";
      $file_extension = explode('.', $file_name);
      $file_extension = strtolower(end($file_extension));
      // echo "$file_name, $file_size, $file_extension, $destination_path";

      if(in_array($file_extension, $permitted_extensions)) {
        if($file_size <= 1000000) {
          move_uploaded_file($file_tmp_name,$destination_path);
          $message = '<p style="color:green"> File is upload success!</p>';
        } else {
          $message = '<p style="color:red"> File size too big!</p>';
        }
      } else {
        $message = '<p style="color:red"> Invalid file type!</p>';
      }

    } else {
      $message = '<p style="color:red"> No file selected, please try again!</p>';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=h1, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>File upload in php</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
    method="POST"  
    enctype="multipart/form-data" 
    >
    <label for="">
      Choose your image to upload
    </label>
    <input type="file" name="upload">
    <input type="submit" value="Submit" name="submit">
  </form>
  <?php echo $message ?? '' ?>
</body>
</html>