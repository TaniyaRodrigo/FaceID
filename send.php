<html>
<body>
<?php

  $con = mysqli_connect("localhost","root","","faceid");
  if (!$con){
    die('Could not connect: ' . mysqli_error());
  }

  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $picture = $_POST['picture'];

  $sql="INSERT INTO inquiries (`name`,`phone`,`email`,`message`,`picture`)
  VALUES
  ('$name','$phone','$email','$message','$picture')";

  if (!mysqli_query($con, $sql)){
    die('Error: ' . mysqli_error($con));
  }

  mysqli_close($con)

?>

</body>
</html>