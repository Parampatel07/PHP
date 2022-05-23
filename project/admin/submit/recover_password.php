<?php
session_start();
require_once("../../inc/connection.php");
extract($_POST);
// var_dump($_POST);
try
{
    $sql="SELECT id FROM admin WHERE email=?";
    $statement=$db->prepare($sql);
    // $statement->setFetchMode(PDO::FETCH_ASSOC);
    // $statement->bindparam(1,$email);
    $statement->execute(array($txtemail));
    $row=$statement->fetch();
    $param=$statement->rowCount(); 
    print_r($param);
    // echo $param ;
    if($param==0)
    {   
        // it means that if select query did not get any row matched with email given by user
        $_SESSION['message']="Email is not valid";
    }
    else
    {
        // generate new password
        $newpassword = rand(0,99) . rand(0,99) . rand(0,99);
        $hashpassword=password_hash($newpassword,PASSWORD_BCRYPT);

        //now the new password is generated and hashed both by above functions
        try
        {
            $sql="update admin set password=? where email=?";
            $statement=$db->prepare($sql);
            $statement->bindparam(1,$hashpassword);
            $statement->bindparam(2,$txtemail);
            $statement->execute();
            //the above code will update the password in the datatables[database]
            // now we have to send the new password we created to the user
            //for that we will include function.php file given to us by ankit uncle
            require_once("../../inc/function.php");
            // will use send mail function to send mail to user 
            $subject="Attention new password for ad booking";
            $content="Dear user <br> your new password for ad booking website is $newpassword";
            SendMail($txtemail,$subject,$content);
            $_SESSION['message']="Your password is mailed to your email address ";
        }
        catch(PDOException $error)
        {
            LogError($error,__FILE__);
        }

    }
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
// header("location:../index.php");
?>