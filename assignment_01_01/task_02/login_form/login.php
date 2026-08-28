<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $submitted_user = $_POST['username'];
  $submitted_pass = $_POST['password'];

  if ($submitted_user == "admin" && $submitted_pass == "secret123") {
    echo "<h2 style='color: green;'> login successful </h2>";
  } else {
    echo "<h2 style='color: red;'> invalid login </h2>";
  }

  echo "<hr>";
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Secure Login</title>
</head>

<body>
  <h1>System Login</h1>
  <!-- action="" submits the data to this exact same file -->

  <form action="" method="POST">
    <label>username: </label>
    <input type="text" name="username" required><br><br>

    <label>password: </label>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
  </form>
</body>

</html>
