<?php
session_destroy();
require_once("db.php");
require_once("fonctions.php");
if (isset($_POST['logout']))
 {
  logout();
 }
function logout() { 
     session_destroy();
     header ("Location: index.php");
 }
?>