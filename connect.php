<?php

$user="mru222"
$password="mru222"
$database="mru222"

mysql_connect(localhost,$user,$password);
@mysql_select_db($database) or die("UNABLE TO SELECT DATABASE!!");

$query="create table Customers(cid integer, fname varchar(20), lname varchar(20), is_reg boolean, PRIMARY KEY (cid));";

mysql_query($query);

$query="create table Staff(sid integer, fname varchar(20), lname varchar(20), manager boolean DEFAULT 0, PRIMARY KEY (sid));";

mysql_query($query);

$query="Create table Orders(order_id integer, cid integer, FOREIGN KEY (cid) REFERENCES Customers(cid), status integer, shipDate date, orderDate date, total integer, PRIMARY KEY (order_id));";

mysql_query($query);

$query="Create table Products(prod_id integer, name varchar(20), price float, quantity integer, toygame boolean, PRIMARY KEY (prod_id));";

mysql_query($query);

$query="create table Promotions(promo_id integer, discount float, start date, end date, manager integer, prod_id integer, PRIMARY KEY (promo_id), FOREIGN KEY (manager) REFERENCES Staff(sid), FOREIGN KEY (prod_id) REFERENCES Products(prod_id));";

mysql_query($query);


mysql_close();



?>
