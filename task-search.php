<?php
  include('database.php');
  
  
  $search = $_POST['search'];

  if(!empty($search)){
    $query = "SELECT * FROM task WHERE name LIKE '$search%'";
    $result = mysqli_query($connection, $query);
    if(!$result) {
      die('Query Error'. mysqli_error($connection));
    }
    
  }

?>