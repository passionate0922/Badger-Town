<?php
 $host = 'localhost';
 $user = 'SAMSUNG\USER';
 $dbName = 'users_list';
 $mysqli = new mysqli($host, $user, $dbName);
 
 function id_inc(){
 
 };
 $id = 0;
 $firstname = $_POST['FName'];
 $lastname = $_POST['LName'];
 $password = md5($_POST['PWD']);	//md5, for security
 $email=$_POST['EMAIL'];
 
 $sql = "INSERT INTO userlist (id, firstname, lastname, pwd, email)";
 $sql = $sql. "values('$id','$firstname','$lastname','$password','$email')";
 $id++;

 if($mysqli->query($sql)){
  echo 'success';	//For testing
 }else{
  echo 'fail';
 }
?>