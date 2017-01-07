<?php
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  /*
if (mysql_query("CREATE DATABASE demo07",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }
  // Create table in my_db database
mysql_select_db("demo07", $con);
$sql = "CREATE TABLE Persons 
(
学号 varchar(200),
姓名 varchar(200),
专业 varchar(200),
手机 varchar(200),
籍贯 varchar(200)
)";
mysql_query($sql,$con);
$sql = "CREATE TABLE Persons 
(
personID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(personID),
学号 varchar(200)),
姓名 varchar(200),
专业 varchar(200),
手机 varchar(200),
籍贯 varchar(200)
)";*/
mysql_select_db("demo07", $con);

$sql="INSERT INTO Persons (学号, 姓名, 专业,手机,籍贯)
VALUES
('$_POST[number]','$_POST[name]','$_POST[major]','$_POST[tel]','$_POST[address]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "记录添加成功！欢迎来到计协！";
mysql_close($con);
?>

