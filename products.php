<?php
  session_start();
	require "connect.php";
	include "header.html";

  echo $_SESSION['EmailAddr'];
  echo " <br /><a href=\"shopping_cart.php\">View Shopping Cart</a>";

?>

<html>
<body>

<div class="products">
<table border="1" cellpadding="5">
  <tr>
    <td></td>
    <td>Name</td>
    <td>Price</td>
    <td>Quantity</td>
  </tr>

<form id="add_cart" method="post" action="add_to_cart.php">

<?php

	$link = mysql_connect($host,$user,$password);
	if (!$link) {die(mysql_error());}


	$query = "select * from Products";
	
  mysql_select_db($database);
  
  $result = mysql_query($query,$link);
  if (!$result) {die(mysql_error());}


  /* PEODUCTS TABLE */

	while($row = mysql_fetch_array($result)){
		echo "<tr><td>";
 
    $_SESSION['ITEM'] = $row['name'];
    $item_name = $row['name'];


    echo "<button type=\"submit\" name=\"$item_name\">BUY</button>  ";
		echo "</td><td>";
		echo $row['name'];
		echo "</td><td>";
		echo "$" . $row['price'];
		echo "</td><td>";
		echo $row['quantity'];
		echo "</td></tr>";  

	}

?>

</form>
</table>
</div>

</body>

</html>
