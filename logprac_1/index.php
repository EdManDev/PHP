<?php

session_start();

//displaying the error
if (isset($_SESSION["msg_err"])) {
  echo($_SESSION["msg_err"]);
  unset($_SESSION["msg_err"]);
}
//display success message
if (isset($_SESSION[msg_success])) {
  echo($_SESSION['msg_success']);
  unset($_SESSION['msg_success']);
}

?>

<form action="process.php" method="POST">
  <input type="text" name="username">
  <!-- <button type="submit" value="submit" name="submit">
    <h1>submit</h1>
  </button> -->
  <input type="submit" value="submit" name="submit">
</form>