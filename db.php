<?php
  
  
     /*connecting data base */
     $host = "localhost"; 
     $username = "root";
     $password = "" ;
     $dbname = "mabase";
    
    try { 
     $con = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF8;port=3308",$username,$password);
     $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING); //setting the PDO error mode attribute
    } 
    catch (PDOException $e)
      { 
       echo "Connection failed". $e->getMessage ();
      }

    

