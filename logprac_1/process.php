<?php


session_start();

//check the form submission
if (isset($_POST["submit"])) {

  //storing username comming from 
  $username = $_POST['username'];
  
  //simple validation
  if (empty($username)) {
    $_SESSION['msg_err'] = 'please, enter  username';
  } else {
    $_SESSION['msg_success'] = "you enter $username as you";
  }
  
  //redirecting
  header("Location:index.php");


}