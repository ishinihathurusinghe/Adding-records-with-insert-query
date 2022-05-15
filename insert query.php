<?php require_once('include/connection.php'); ?>

<?php

   $first_name = 'dileep';
   $last_name = 'hathurusinghe';
   $email = 'ishini@gmail.com';
   $password = 'mypassword';
   $is_deleted = '0';

    $hashed_password = sha1($password);

    echo "hashed password: {$hashed_password}";

?>

<html>

<head>
      <title> insert query </title>
</head>

<body>
      
</body>

</html>

<?php mysqli_close($connection); ?>