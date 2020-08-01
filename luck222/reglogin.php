<?php

require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>DPBOSS Login and Register form</title>
<!-- bootstrap css -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

<!-- my style css -->
<style type="text/css">
	
	@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

:root {
  --success-color: #2ecc71;
  --error-color: #e74c3c;
}

* {
  box-sizing: border-box;
}

body {
  background-color: #cccccc;
  font-family: 'Open Sans', sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  margin: 0;
}

.container {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  /*width: 400px;*/
  display: flex;
  width: 751px;
  justify-content: space-between;
  margin-top: 30px;
  margin-bottom: 50px;
}

h2 {
  text-align: center;
  margin: 0 0 20px;
}

.form {
  padding: 30px 40px;
  width: inherit;
}

.form-control {
  margin-bottom: 10px;
  padding-bottom: 10px;
  position: relative;
}

.form-control label {
  color: #777;
  display: block;
  margin-bottom: 5px;
}

.form-control input {
  border: 2px solid #f0f0f0;
  border-radius: 4px;
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 14px;
}

.form-control input:focus {
  outline: 0;
  border-color: #777;
}

.form-control.success input {
  border-color: var(--success-color);
}

.form-control.error input {
  border-color: var(--error-color);
}

.form-control small {
  color: var(--error-color);
  position: absolute;
  bottom: 0;
  left: 0;
  visibility: hidden;
}

.form-control.error small {
  visibility: visible;
}

.form button {
  cursor: pointer;
  background-color: #3498db;
  border: 2px solid #3498db;
  border-radius: 4px;
  color: #fff;
  display: block;
  font-size: 16px;
  padding: 10px;
  margin-top: 20px;
  width: 100%;
}

.form_error{
	/*width: 80%;*/
	/*height: 35px;*/
	/*margin:3px 10%;*/
	/*font-size: 1.1em;*/
	color: #D83D5A;
}




/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=date] {
  -moz-appearance:textfield;
}
@media only screen and (max-width: 768px)  {
  .container {
    width: 580px;
  }
  .form {
    width: initial;
  }
}

@media only screen and (max-width: 500px)  {
  .container {
    display: block;
    width: 92%;
    justify-content: space-between;
  }
  .form {
    padding: 20px 25px;
    width: initial;
  }
}

input.if_input_state  {
  border: 2px solid #f0f0f0;
  border-radius: 4px;
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 14px;
  margin-top: 5px;
}

input.if_input_state:focus {
  outline: 0;
  border-color: #777;
}
.if_label_state {
  color: #777;
  display: block;
  margin-bottom: 15px;
}
.form-control.form_error {

}
</style>
</head>
<body>
	    <?php

if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $mobile = $_POST['mobile'];
        $dob = $_POST['dob'];
            $sql_m="SELECT * FROM myguests WHERE mobile='$mobile'";
          
            
            // $sql_bluc="SELECT * FROM users WHERE bestlucky='$bestlucky'";
            $res_m=mysqli_query($db,$sql_m) or die(mysqli_error($db));
          
         


           
           
            if (mysqli_num_rows($res_m) > 0) {

            	$mobile_error="Sorry... Mobile number already taken";
            }else{

            	$query="INSERT INTO myguests (name,username,password,mobile,dob) VALUES('$name','$username','$password','$mobile','$dob')";

            	$result=mysqli_query($db,$query) or die(mysqli_error($db));
            	echo "saved";
            	header("Location: reglogin.php"); 
				exit();
            }
        }

          
?>
    <div class="container">
        <form id="form2"  class="form col-md-6 col-12">
            <h2>Login With Us</h2>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" id="email2" name="username" placeholder="Enter username" / required="">
                
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password3" name="password" placeholder="Enter password" / required="">
                
            </div>
            <button type="submit">Submit</button>
        </form>


        <form action="reglogin.php" method="post" class="form col-md-6 col-12">
            <h2>Register With Us </h2>
            <div class="form-control">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter name" / required="">
                
            </div>
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username" required=""/>
                
            </div>
            <!-- <div class="form-control">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter email" />
                
            </div> -->
            <div class="form-control">
                <label for="password">Password <span style="font-size: 12px;">(Minimum 6 digit)</span></label>
                <input type="password" id="password" name="password" placeholder="Enter password" pattern="[a-zA-Z0-9]{6}" required=""/>
                
            </div>
            <div class="form-control">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" placeholder="Enter password again" required=""/>
                
            </div>
            <div style="box-sizing: border-box; position: relative;"
		<?php
                if (isset($mobile_error)) :?>
            class="form-control form_error" style="position: relative; ">

        <?php endif?>

             
                <label for="mobileno" class="if_label_state">Mobile number <span style="font-size: 12px;">(10 digit)</span></label>
                 <?php
                if (isset($mobile_error)) :?>
                	<span style="font-size: 13px"><?php echo $mobile_error; ?></span>
              <?php  endif
                ?>
                <input type="text" id="mobileno" name="mobile" placeholder="Enter mobile no" pattern="[789][0-9]{9}" required="" class="if_input_state" />
               
                
            </div>
            <div class="form-control">
                <label for="dob">Date of birth</label>
                <input type="date" id="dob" name="dob" placeholder="Enter your date of birth" required="" data-date-inline-picker="true" min="1045-01-01" max="2015-12-31"/>
                
            </div>
            <button type="submit" name="register">Submit</button>
        </form>

    

    </div>
<!-- <script src="script.js"></script> -->
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;    
</script>
</body>
</html>