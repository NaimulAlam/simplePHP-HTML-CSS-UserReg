<?php

// database Connection
$con = mysqli_connect("localhost", "root", "", "simple_db");

// form inputs to POST to database rows
$alias = $_POST['alias'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];

// passwoerd encryption with md5
$password = $_POST['password'];
$encypted_password = md5($password);


// query to insert data into database
$sql = "INSERT INTO `users` (`alias`, `name`, `surname`, `email`, `password`) VALUES ( '$alias', '$name', '$surname', '$email', '$encypted_password')";
// insert data into database
$rs = mysqli_query($con, $sql);

if ($rs) {
  echo "Successfully registration completed";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
