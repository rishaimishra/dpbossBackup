<?php

  require_once('../../connect.php');

if (isset($_POST['addfakeuser'])) {
		
		$firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        

        $sql_m="INSERT INTO fakeuser (firstname,lastname,username,password,mobile) VALUES('$firstname','$lastname','$username','$password','$mobile')";
          
            
            // $sql_bluc="SELECT * FROM users WHERE bestlucky='$bestlucky'";
            $res_m=mysqli_query($db,$sql_m) or die(mysqli_error($db));

            header("location: allfakeuser.php");
	}


    ?>