<?php
  session_start();
	require "connect.php";
	include "header.html";

  echo $_SESSION['EmailAddr'];
?>

<html>
<body>

<div class="products">
<table border="1">
  <tr>
    <td>Name</td>
    <td>Price</td>
    <td>Quantity Left</td>
  </tr>


<?php

	$link = mysql_connect($host,$user,$password);
	if (!$link) {die(mysql_error());}


	/* Collect ALL products */

	/* $count = "select MAX(prod_id) from Products"; 

	while ( $row_num > 0)
	*/

	$query = "select * from Products";
	
  mysql_select_db($database);
  
  $result = mysql_query($query,$link);
  if (!$result) {die(mysql_error());}


  /* PEODUCTS TABLE */

	while($row = mysql_fetch_array($result)){
	echo "<tr><td>" . $row['name'] . "</td><td>" . $row['price'] . "</td><td>" . $row['quantity'] . "</td></tr>";  
	}

	echo "</table>";
  echo "</div>";

?>


</body>

</html>
