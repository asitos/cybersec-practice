<?php
# isset is an in built php function
if (isset($_GET['search'])) {
  $search_query = $_GET['search'];
  echo "<h3>You searched for (via GET): <strong>$search_query</strong></h3>";
}

if (isset($_POST['secret_message'])) {
  $secret = $_POST['secret_message'];
  echo "<h3>You submitted a secret (via POST): <strong>$secret</strong></h3>";
}
?>

<hr>

<!-- puts data in the URL -->
<h2>GET Form (Public)</h2>
<form action="" method="GET">
  <input type="text" name="search" placeholder="Search for something...">
  <button type="submit">Search</button>
</form>

<!-- hides data in the HTTP request -->
<h2>POST Form (Hidden)</h2>
<form action="" method="POST">
  <input type="text" name="secret_message" placeholder="Type a secret...">
  <button type="submit">Send Secret</button>
</form>
