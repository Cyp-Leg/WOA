<?php
  require_once('models/Order.php');

  $userid=htmlspecialchars($_POST['userid']);
  $announceid=htmlspecialchars($_POST['announceid']);
  $quantity=htmlspecialchars($_POST['quantity']);
  $date=date('Y\-m\-d');

  require_once('view/validate.php');

?>
