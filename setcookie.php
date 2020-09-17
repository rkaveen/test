<?php
// if ($_COOKIE["Test"] == null){
//   session_start();
// $cookie_name = "Test";
// $cookie_value = session_id();
// setcookie($cookie_name, $cookie_value, 0, "/",FALSE,FALSE); // 86400 = 1 day
// session_destroy();
// echo $cookie_value;
// }else{
session_start();
  echo session_id();
?>
