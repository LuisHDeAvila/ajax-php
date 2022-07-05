<?php
  $connection = mysqli_connect(
    'localhost',
    'root',
    'password',
    'activities-app'
  );

  if($connection) {
    echo "Database is connected";
  }

?>