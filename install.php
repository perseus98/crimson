<?php
require_once './include/const.php';
$con = new mysqli(DB_SERVER, DB_USER, DB_PASS) or exit('could not conect');
echo "conected<br>";

$query = "drop schema if exists $dbname ";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "$dbname dropped<br>";

$query = "create schema $dbname ";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "$dbname created<br>";

mysqli_select_db($con, $dbname);

// TABLE CREATION

$query = "CREATE TABLE emp (
      id  INT NOT NULL AUTO_INCREMENT ,
      name  VARCHAR(40) NOT NULL ,  
      role  ENUM('Founder','Member') NOT NULL DEFAULT 'Member' ,  
      addr  VARCHAR(100) NOT NULL ,  
      email VARCHAR(50) NOT NULL ,
      pass VARCHAR(45) NOT NULL ,
      pno  VARCHAR(15) , 
      status ENUM('approved','pending') NOT NULL DEFAULT 'approved', 
      PRIMARY KEY ( id ),
      UNIQUE INDEX email_UNIQUE (email ASC))
";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "table created<br>";

$query = "CREATE  TABLE enquiry (
  # Name,Phone No,EMail,Message
  id INT NOT NULL AUTO_INCREMENT ,
  name VARCHAR(45) NOT NULL ,
  email VARCHAR(100) NOT NULL ,  
  pno VARCHAR(45) NOT NULL ,
  message TEXT NOT NULL ,
  PRIMARY KEY (id));";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "enquiry table created<br>";

$query = "CREATE  TABLE service (
  id INT NOT NULL AUTO_INCREMENT ,
  name VARCHAR(100) NULL ,  
  price double NULL ,  
  pno VARCHAR(45) NULL ,
  description TEXT NULL ,
  PRIMARY KEY (id));";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "table created<br>";

$query = "CREATE  TABLE blog (
    id INT NOT NULL AUTO_INCREMENT ,
    title VARCHAR(100) NOT NULL ,
    location VARCHAR(100) NOT NULL DEFAULT 'Raipur',
    description TEXT NULL ,
    PRIMARY KEY (id));";
  $r = mysqli_query($con, $query) or exit(mysqli_error($con));
  echo "blog table created<br>";


// INSERT STATEMENTS:

$query = "insert into emp 
 ( name   ,role    ,addr  , email               , pass , pno     ) values 
 ('Prashant', 'Founder','Raipur','perseusmhrn@gmail.com','prashant',+916264029091)
";
$r = mysqli_query($con, $query) or die(mysqli_error($con));
echo "Inserted Founder Prashant into emp <br>";

$query = "insert into emp 
 ( name      ,  role    ,addr  ,email               , pass,pno     ) values 
 ('Chhagan Lal', 'Founder','Balod','chhaganlalsahu1996@gmail.com','chhagan',+919399199334)
";
$r = mysqli_query($con, $query) or die(mysqli_error($con));
echo "Inserted Founder Chhagan into emp <br>";

$query = "insert into emp 
 ( name      ,  role    ,addr  ,email               , pass,pno     ) values 
 ('admin'      , 'Founder'  ,'Raipur','admin@gmail.com','admin123' ,6264029091)
";
$r = mysqli_query($con, $query) or die(mysqli_error($con));
echo "Inserted Admin as Founder into emp <br>";

$query = "insert into emp 
 ( name      ,  role    ,addr  ,email               , pass,pno     ) values 
 ('user'      , 'Member'  ,'Raipur','user@gmail.com','user' ,8349102540)
";
$r = mysqli_query($con, $query) or die(mysqli_error($con));
echo "Inserted User as Member into emp <br>";

// insert into service 
// name price pno description 
  $query = "insert into service 
  (    name         ,  price    , pno       , description ) values 
  ('WEB DEVELOPMENT', 10000.10  ,9876543210 ,'To develop a website')
 ";
 $r = mysqli_query($con, $query) or die(mysqli_error($con));
 echo "Inserted WDev as Entry into service <br>";



  
// insert into blog
// title location description 
$query = "insert into blog 
(    title , description ) values 
('StartUp', 'We launched our site on the year 2019')
";
$r = mysqli_query($con, $query) or die(mysqli_error($con));
echo "Inserted Stup as Entry into blog <br>";