<?php
session_start();
require "connect.php";
include "header.html";

echo $_SESSION['EmailAddr'];

?>

<html>
<head></head>
<body>


<div class="logo">

<p align="center">
<b>WELCOME TO MIKE RUDY'S WEBSTORE</b> <br />
</p>

<br />

<table align="center" cellpadding="16" border="0">
  <tr>
    <td>
      <a class="reglink" href="register.php">NEW USERS</a>
    </td>
    <td>
      <a class="reglink" href="login.php">EXISITNG USERS</a>
    </td>
    <td>
      <a class="reglink" href="emp_login.php">EMPLOYEE LOGIN</a>
    </td>
  </tr>
</table>

<img src="http://www.cs.uky.edu/~mru222/db/Kentucky.gif" width="500px" height="500px" border="0" alt="logo" />


</div>

</body>

</html>
