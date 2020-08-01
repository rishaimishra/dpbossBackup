<?php

require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>DPBOSS Login and Register form</title>
<!-- bootstrap css -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js"></script>


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
  margin-right: 0%;
}

.container {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  /*width: 400px;*/
  display: flex;
  width: 751px;
  justify-content: space-between;
  margin-top: 10%;
  margin-bottom: 50%;
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
    /*width: initial;*/
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

  .alert {
        padding: 20px;
    background-color: #4caf50;
    box-sizing: border-box;
    width: 100% color: white;
    margin-bottom: auto;
    margin-left: -5%;
    float: left;
    margin-top: -98%;
    position: absolute;
}
  
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
  margin-top: -10px;
}
.form-control.form_error {

}

select#scripts,
input#mobileno {
  border: 2px solid #f0f0f0;
  border-radius: 4px;
  display: block;
  width: 100%;
  padding: 10px 10px;
  font-size: 14px;
}
select#scripts {
  font-size: 13px;
}

select#scripts:focus,
input#mobileno:focus, {
  outline: 0;
  border-color: #777;
}    


.dd-options.dd-click-off-close {

}
.dd-option.dd-option-selected {
  display: flex;
}
ul.dd-options a {
width: 110px;
overflow-x: hidden;

}
ul.dd-options {
  width: 100px !important;
  overflow-x: hidden;
}
.dd-option.dd-option-selected li {
width: 110px;

}
.dd-selected-image, 
.dd-option-image {
  width: 30px !important;
  margin-top: 3px;
  height: auto !important;
}
a.dd-option {
  height: 35px;
  padding: 5px;
}
.dd-option-text {

}
#slick a.dd-selected {
  height: 35px;
  padding: 5px;  
  display: flex;
}
#slick {
    width: 30% !important;
    float: left;
    z-index: 7;
  margin-top: 10px;

}
.dd-selected-text {
  line-height: 30px !important;
}
.dd-select{
    width: 90px !important;
}
#mobileno {
  width: 65% !important;
  margin-top: 10px;
  float: right;
}
.container {
  margin-bottom: 300px;
}
.dd-pointer.dd-pointer-down {
  visibility: hidden;
}
.dateofbirth {
  margin-top: 60px;
}
.dd-selected {
  display: flex;
}

.alert {
  padding: 20px;
  background-color: #4caf50;
  box-sizing: border-box;
  width:  100%
  color: white;
  margin-bottom: auto;
  margin-left: 14%;
  float:  left;
  margin-top: -40%;
  position: absolute;
  
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
 
  font-size: 22px;
  line-height: 20px;

}

.closebtn:hover {
  color: black;
}
.mmm{
    /* position: absolute;
    margin-top: 355px;
    margin-left: 10%;*/
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    background-color: #4caf50 !important;
    border: 2px solid #4caf50 !important;

    border-radius: 4px;
    color: #fff;
    display: block;
    font-size: 16px;
    padding: 10px;
    margin-top: 20px;
    width: 100%;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 20%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/*#mobilenopluscode {
  visibility: hidden;
}*/
.modal-content .modal-input {
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 14px;
    margin-right: 10px;
    margin-left: 10px;
}
#myModal {
  z-index: 9;
}
.btn.btn-success{
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    background-color: #4caf50 !important;
    border: 2px solid #4caf50 !important;

    border-radius: 4px;
    color: #fff;
    display: block;
    font-size: 16px;
    padding: 10px;
    margin-top: 20px;
    width: 100%;
}
#slick2 {
  width: 120px !important;
}
#slick2 .dd-selected {
  display: flex;
}
.d-flex {
  display: flex;
}

.modal-content {
  width: 30%;
}
/*modal style*/
@media only screen and (max-width: 768px) {
.modal-content {
  width: 50%;
}
}
@media only screen and (max-width: 500px) {
.modal-content {
  width: 75%;
}
}
/*modal style*/
</style>
</head>
<body>

    <div class="container">

          <form id="signup-form" action="signin.php" method="post" class="form col-12">
             <?php
                if (isset($login_error)) :?>
                  <span style="font-size: 13px">
                <?php  echo $login_error; ?></span>
           

        <?php endif?>
            <h2>Login With Us</h2>
            <div class="form-control">
                <label for="email">Username</label>
                <input type="text" id="email2" name="username"  placeholder="Enter username" / required="">
                
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password3" name="password" id="mobile" placeholder="Enter password" / required="">
                
            </div>
            <button type="submit" name="login">Login</button>
            
  <!-- <script>
    document.getElementById("hide").addEventListener("click" , function(){
      document.querySelector(".btn9").style.display="block";
      })

  </script> -->

<!-- 
              <h4 id="sent-otp"></h4>
        <div id="magic" class="form-control">
          <div class="form-row">
            <input type="text" placeholder="Enter OTP" id="otp" name="">
          </div>

         <button type="submit">Submit</button>
          
        </div> -->

        </form>
       
        <!-- Trigger/Open The Modal -->


<!-- The Modal -->

    

    </div>
<!-- <script src="script.js"></script> -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->






</body>
</html>