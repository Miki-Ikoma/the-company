<?php
  include "../classes/User.php";

  // create an obj
  $user = new User;

  // call the methods
  $user->store($_POST);

?>