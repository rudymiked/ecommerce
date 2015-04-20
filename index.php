<html>
  <head>
    <title>
      Mike Rudy E-Commerece Website
    </title>
  </head>
<body>


<a href="register.php">NEW USERS</a>. <br />
<a href="login.php">EXISITNG USERS</a>. <br />

<?php

require "connect.php";
include "header.html";

$link = mysql_connect($host, $user, $password);
if (!$link) { die('Could not connect to DB: ' . mysql_error());}


/* Products Query */


$query = "SELECT * FROM Products;";

mysql_select_db($database);

$result = mysql_query($query, $link); 
if (!$result) { die('Could not collect data: ' . mysql_error());}

while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
  echo "Products: <br>";
  echo "{$row['name']} <br>";
}


mysql_close($link);
?>

</body>

</html>
