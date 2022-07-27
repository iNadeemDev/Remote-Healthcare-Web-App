<?php
include 'connection.php';
$username = $_POST["username"];
$usersRes = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'");
$usersCount = mysqli_num_rows($usersRes);

if(!empty($_POST["username"])) {
  $query = "SELECT * FROM users WHERE username = '" . $username . "'";
  $user_count = $usersCount;
  if($user_count>0) {
      echo "<span class='status-not-available'> Username Not Available.</span>";
  }else{
      echo "<span class='status-available'> Username Available.</span>";
  }
}
?>