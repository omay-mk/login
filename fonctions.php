<?php
session_start();
require_once("db.php");
/*: execute only if... user submit form register */ 
if(isset($_POST['register']))
{
      
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mail = $_POST['email'];
    $pw = $_POST['pw'];
    $pwrepeat = $_POST['pw-repeat'];  
    if (insertinf ($con,$fname,$lname,$mail,$pw,$pwrepeat))
    { 
     $_SESSION['mail'] = $mail;
     header ("Location: index.php");
    }
    }
   // DB insertinfo
function insertinf($connexion,$fname,$lname,$mail,$pw,$pwrepeat)
{   
    if ($pw == $pwrepeat) 
    {
    $date = new DateTime();
    $date_en=$date->format('Y-m-d');
    $query= $connexion->prepare("
    INSERT INTO user (id_user, fname_user,lname_user,login_user,pw_user,crea_date_user)
    VALUES (0, :fname,:lname,:mail ,sha2(:pw, 512),:date)
    ");
    $query->bindParam(":fname",$fname);
    $query->bindParam(":lname",$lname);
    $query->bindParam(":mail",$mail);
    $query->bindParam(":pw",$pw);
    $query->bindParam(":date",$date_en);

    return $query->execute();}
    else { 
        header ("Location: insc.php?error=pwrepeat=");
      
        
    }

}

//**  login
function checkLogin($con,$mail,$pw)
{ 
    $query= $con->prepare("
    SELECT * FROM user WHERE login_user=:mail AND pw_user=sha2(:pw, 512)   
  ");
    $query->bindParam(":mail",$mail);
    $query->bindParam(":pw",$pw);
     $query->execute();
     //If  result matched $mail and $pw, table row must be 1 row
     if($query->rowCount() == 1) {
        return true;
     }else {
        return false;
     }
}



//** change pw  */

    

    function passwchange ($conn,$mail,$pw)
    {   
        $req="update user set  pw_user=sha2(:pw, 512) where login_user=:mail";
        $res=$conn->prepare($req);
        $res->execute(array(':pw'=>$pw,':mail'=>$mail)); 
    }

?>
