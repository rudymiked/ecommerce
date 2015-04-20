<?php

$user="mru222";
$password="mru222";
$database="mru222";
$host="mastelottoplan.backups.uky.edu";

$link = mysql_connect($host,$user,$password);
mysql_select_db($database) or die("UNABLE TO SELECT DATABASE!!");


/* ORDERS */

$query="Create table if not exists Orders(order_id integer, cid integer, FOREIGN KEY (cid) REFERENCES Customers(cid), status integer, shipDate date, orderDate date, total integer, PRIMARY KEY (order_id));";

$result = mysql_query($query,$link);
if (!$result) {die('1 Could not do anything!!!: ' . mysql_error());}


/* CUSTOMERS */

$query="create table if not exists Customers(cid integer NOT NULL AUTO_INCREMENT, fname varchar(20), lname varchar(20), email varchar(20), is_reg boolean, PRIMARY KEY (cid));"; 

$result = mysql_query($query,$link);
if (!$result) {die('2 Could not do anything!!!: ' . mysql_error());}

/* PRODUCTS */

$query="Create table if not exists Products(prod_id integer AUTO_INCREMENT, name varchar(20), price float, quantity integer, toygame boolean, PRIMARY KEY (prod_id));";

$result = mysql_query($query,$link);
if (!$result) {die('3 Could not do anything!!!: ' . mysql_error());}


/* STAFF */

$query="create table if not exists Staff(sid integer AUTO_INCREMENT, fname varchar(20), lname varchar(20), manager boolean DEFAULT 0, PRIMARY KEY (sid));";

$result = mysql_query($query,$link);
if (!$result) {die('4 Could not do anything!!!: ' . mysql_error());}


/* PROMOTIONS */

$query="create table if not exists Promos(promo_id integer AUTO_INCREMENT, discount float, start date, end date, manager integer, prod_id integer, PRIMARY KEY (promo_id), FOREIGN KEY (manager) REFERENCES Staff(sid), FOREIGN KEY (prod_id) REFERENCES Products(prod_id));";

$result = mysql_query($query,$link);
if (!$result) {die('5 Could not do anything!!!: ' . mysql_error());}


mysql_close();



?>
