<?php
session_start();
require_once('connect.php');

$guest_id='10';

if (isset($_POST['login'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
            $sql="SELECT * FROM myguests WHERE username='$username' && password='$password' ";
            
            $sql_id="SELECT id FROM myguests WHERE username='$username' && password='$password' ";
            

            

             $res=mysqli_query($db,$sql) or die(mysqli_error($db));
            

             $res_id=mysqli_query($db,$sql_id) or die(mysqli_error($db));
            

         $data = $res_id->fetch_assoc();
       
             if (mysqli_num_rows($res) > 0 ) {
         //         
                     $_SESSION['id']=$data['id'];
                   
                     // echo $_SESSION['id'];
             	header("Location: guessing_form.php"); 


             }elseif ( mysqli_num_rows($res_f) > 0) {
                 $_SESSION['fakeid']=$dataf['fakeid'];
                     // echo $_SESSION['id'];
                header("Location: guessing_form.php"); 
             }



             else{
                

             	echo "'<h1>Login error! Invalid Username and Password</h1>'";
             }



         }
         
         $mobile=$_SESSION['mobile'];
         // echo $mobile;

         // echo "please register";
         $sql_mid="SELECT id FROM myguests WHERE mobile='".$_SESSION['mobile']."'";
         $res_mid=mysqli_query($db,$sql_mid) or die(mysqli_error($db));
         $data = $res_mid->fetch_assoc();
         $_SESSION['mid']= $data['id'];
        // echo $data['id'];die;

           header("Location: guessing_form.php"); 

             ?>