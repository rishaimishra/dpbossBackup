<?php
 require_once('connect.php'); 

session_start();

if (isset($_POST['submitpost'])) {
        $body = $_POST['body'];
        $author = $_POST['author'];

        $query="INSERT INTO posts (body,author) VALUES('$body','$author')";

              $result=mysqli_query($db,$query) or die(mysqli_error($db));
              $_SERVER['PHP_SELF'];
              echo '<div>  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display="none";>&times;</span> 
  <strong>Success!</strong> Post Submitted Successfully.
</div>
</div>';


        }else{
$_SERVER['PHP_SELF']; 
         echo '<div>  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display="none";>&times;</span> 
  <strong>Please!</strong> Fill completely.
</div>
</div>';

        }

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>DP BOSS 143 GUESSING FORUM KALYAN MATKA RESULT GUESSING MADHUR - </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- bootstrap css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- google fot roboto -->
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gelasio&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="style.css"> -->

<style>
    /* pre css style */
body{
background-color:#fc9 !important;
text-align: center;
padding-left: 10px;
padding-right: 10px;
font-family: 'Roboto', sans-serif;
}
.pink-border {
border: 4px solid #ff006c;
border-top-left-radius: 10px;
}
.logo{
height: 120px;
}
.h3-header {
font-family: 'Gelasio', serif;
}
.mfnc-ul {
list-style: none;
}
.mfnc-ul li {
text-decoration: none;
padding: 20px ;
}
.mfnc-ul li a {
text-decoration: none;
}
.violet-border{
border-top-left-radius: 10px;
border: 4px solid #000080;
border-top-left-radius: 10px ;
}
.border-b-v {
border-bottom: 2px solid #000080;
}
.violet-bg{
background: #8100B9;
}
.mfnc-ul h2 span{
color: #222;
font-size: 30px;
font-weight: bolder;
font-style: italic;
font-family: 'Gelasio', serif;
}
.mfnc-ul h5{
color: red;
font-size: 25px;
font-family: 'Montserrat', sans-serif;
}
.footer-wrapper.pink-border{
margin-top: 0px !important;
}
/* pre css style */
/*NTW style css*/
.first-table-headding a{font-size: 24px; color: #f5fffa !important   ;}
.first-table-headding +div span{color: #f5fffa !important   ;}
.first-table-headding u{position: relative; top: -7%; font-family: 'Gelasio', serif; font-size: 20px;
        color: #f5fffa !important   ;

}
.first-table-headding +div{font-family: 'Gelasio', serif;}
.pink-border111{border: 3px solid   #800080; border-top-left-radius: 10px ;}
/*.pink-bg111{background-color: pink;}*/
.pink-header111 {
    background-color: #9c27b0; 
    border-top-left-radius: 7px;
}
.pink-header111 .text-light {
}
.pink-bg111 .col-6{border-radius: 0;}
.pink-header111 + div {font-family: 'Montserrat', sans-serif;}
.pink-header111 + div + div{font-family: 'Gelasio', serif;}
.fixed-bottom p {
    color: #333;
    font-weight: bold;
    font-size: 14px;
    margin-bottom: 5px;
}
.font-r {font-family: 'Roboto', sans-serif;}
.font-g{font-family: 'Gelasio', serif;}
.font-m{font-family: 'Montserrat', sans-serif;}
.pink-header111 +div{font-size: 14px;}
.fixed-bottom >div:hover  {
    background: #e6aaff;
}
.fixed-bottom >div:hover svg,
.fixed-bottom >div:hover p {
    color: red !important;
}
.text-t {
    color: transparent;
}
.ptag-m-b-0>p{
    margin-bottom: 0;
}
.first-table-headding.ml-2 {
    /*font-size: */
}
.d-flex.justify-content-between.font-weight-bold.font-italic.text-light.pink-header111 {
    color: #22f5ff !important;
    padding: 10px 0px;
}
/*NTW style css*/
@media only screen and (max-width: 500px) {
.first-table-headding.ml-2 {
    text-align: left;
}
.first-table-headding.ml-2 u { 
    font-size: 14px;
}
.first-table-headding.ml-2 + div>span {
    font-size: 12px;
}
}
</style>
</head>
<!-- 11111111111111111 -->
<body>
<!--header start-->
<header class="mt-2" id="top-head">
    <div class="pink-border p-2">
        <a href="#" class="logo">
            <img src="data:image/webp;base64,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" alt="DPBOSS.NET">
        </a>
    </div>
</header>
<div class="p-3 pink-border mt-2" style="font-family: 'Montserrat', sans-serif; color: #cc0000;">
    Use Google Chrome or Mozilla Firefox, Safari Browser to use and see this Website. Do not use UC Browser UC Mini and opera Mini.
    <div>इस वेबसाइट का उपयोग करने और देखने के लिए Google क्रोम या मोज़िला फ़ायरफ़ॉक्स, सफ़ारी ब्राउज़र का उपयोग करें। यूसी ब्राउज़र यूसी मिनी और ओपेरा मिनी का उपयोग न करें।.</div>
</div>
<!--header end--><!--posting rules start-->
<div class="p-3 pink-border mt-2" style="font-family: 'Montserrat', sans-serif; color: #111; background: bisque;"><h4>Kalyan matka result satta matka guessing forum all satta bazar guessing<br>सात्त मटका कल्याण मटका  मटका रेसुल्ट</h4></div>
<div class="mb-3 text-center p-0 violet-border mt-2 mfnc-ul">
    <div  class="violet-bg mt-2 text-light pt-2 pb-2 ml-2 mr-2 mb-2 font-italic text-left" onclick="myFunction()">
        <h5 style="display: flex;justify-content: space-between;" class="">
            <span class="text-light">  ☔Posting Rules:-☔ </span>

           

                   
                  <!-- $data['id']=$_SESSION['id'];
                   

                   if(isset($_SESSION['id'])){  
                    $data['id']=$_SESSION['id'];
                     -->

            <a href="guestlogout.php" class="btn btn-danger">logout</a>
            <!-- <?php?> -->


            <span class="text-light text-right mr-3"><i class="fas fa-plus-square"></i></span>
        </h5>
        
    </div>
    <div id="myDIV" style="display: none;">
        <p style="color: red; font-size: 20px; font-style: italic;font-weight: bold;">2 OPEN YA CLOSE<br/>
            6 JODI<br/>
            AUR 8 PANNA<br/>
            AUR RESULT TIME SE 20 MIN PHELE GAME POST KARNA HOGA....!!!!<br>
            Dont Mention Date Or Time In Your Post.<br><hr>
            <small><center><b><font color="red">Top 10 Guesser Of Guessing Forum..<br/>
            Will Be Allowed To Experts Forum & Chatforum<br/>
            Top 10 Guessers Will Be Announced On Every Sunday<br/></font></b></center></small>
        </p>
        <a href="#" style="text-decoration:none;">
            <div class="btn btn-danger btn-block rounded-0">Click Here To Read Full Guessing Forum Rules</div>
        </a>
        
    </div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}    
</script>

<!-- <div class="mb-3 text-center p-0 violet-border mt-3 mfnc-ul"> -->
    <!-- </div> -->
<!-- </div> -->
        <div class="text-center mt-3">
            <input type="button" class="btn btn-light shadow shadow-secondary" value="Refresh">
        </div>

        <form class="text-center" action="guessing_form.php" method="post">
            <div class="pink-border p-2 mt-3">
                <div class="">
                    <textarea class="form-control" rows="5" name="body" placeholder="enter text here..."></textarea>
                    
                </div>
                <div>
                   <?php

                   
                  // $data['id']=$_SESSION['id'];
                   

                   if(isset($_SESSION['id'])){  
                    $data['id']=$_SESSION['id'];
                     ?>
                    <input type="text" name="author" value="<?php echo $data['id'] ?>" style="display:none; ;">
<input class="btn btn-success mt-3" style="width: 25%;" name="submitpost" type="submit" value="SUBMIT" />
          <?php     }else{ ?>

                   
                    <a href="reglogin.php" class="btn btn-success mt-3" style="width: 25%;">LOGIN</a>

                    <?php }  ?>
                </div>
            </div>
        </form>


<!--form end-->
<!--Comment-->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>AKKI THE LEGEND</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:06 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: BHAGATRAAJ</p>
<p class="text-t">.</p>
<p>Originally Posted By: AMAN890</p>
<p class="text-t">.</p>
<p>Originally Posted By: NAGA810</p>
<p class="text-t">.</p>
<p>Originally Posted By: CO ADMIN</p>
<p>DILSE</p>
<p class="text-t">.</p>
<p>CONGRATS</p>
<p class="text-t">.</p>
<p>SRIDEVI OPEN WINNERS</p>
<p class="text-t">.</p>
<p>349--6</p>
<p class="text-t">.</p>
<p>====================</p>
<p class="text-t">.</p>
<p>143 GAMBLER</p>
<p class="text-t">.</p>
<p>GOLYA BHAI</p>
<p class="text-t">.</p>
<p>WOLVERINE</p>
<p class="text-t">.</p>
<p>SONURAJ</p>
<p class="text-t">.</p>
<p>KALAA</p>
<p class="text-t">.</p>
<p>DHRUVANTHRAJ</p>
<p class="text-t">.</p>
<p>LALLU PATEL</p>
<p class="text-t">.</p>
<p>SK DK</p>
<p class="text-t">.</p>
<p>ANWAR143</p>
<p class="text-t">.</p>
<p>CHAARIMOHAN</p>
<p class="text-t">.</p>
<p>FRIENDLY BOY</p>
<p class="text-t">.</p>
<p>VIRENDRA100</p>
<p class="text-t">.</p>
<p>CHOR BAZAAR</p>
<p class="text-t">.</p>
<p>SHAURYA</p>
<p class="text-t">.</p>
<p>UNIQUE GAMER</p>
<p class="text-t">.</p>
<p>SUSANT</p>
<p class="text-t">.</p>
<p>VISSU SIR CG</p>
<p class="text-t">.</p>
<p>SAROJ MAHAKUR</p>
<p class="text-t">.</p>
<p>SAGARSTAR</p>
<p class="text-t">.</p>
<p>MAHESH PARMAR</p>
<p class="text-t">.</p>
<p>PREFECT SHOOTER</p>
<p class="text-t">.</p>
<p>RAJENDRA BHAI</p>
<p class="text-t">.</p>
<p>A R BHAII</p>
<p class="text-t">.</p>
<p>DIL SE 2</p>
<p class="text-t">.</p>
<p>====================</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Congratulations...... All winners </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Congratulations all mera nam nhi list me single open pass wit penal fir bhi esa kyu</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Congratulation to all winners            </p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;"> Congrats bhai</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>BETTING RAJA</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:06 PM  </span> &nbsp;&nbsp;</div>
    </div>
    <div class="ptag-m-b-0 font-italic">
<p class="text-t">.</p>
<p>TIME BAZAR</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>455__________( 49 )__________568</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>450__________( 94 )__________158</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>1000% FIX        </p>
<p class="text-t">.</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>AGASTYA</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:06 PM </span> &nbsp;&nbsp;</div>
    </div>
    <div class="ptag-m-b-0 font-italic">
<p class="text-t">.</p>
<p>Sridevi close</p>
<p class="text-t">.</p>
<p>@@ 3 @@ 8 @@</p>
<p class="text-t">.</p>
<p>Game of shadow..!!!       </p>
<p class="text-t">.</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>MAHESH PARMAR</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:06 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: AMAN890</p>
<p class="text-t">.</p>
<p>Originally Posted By: NAGA810</p>
<p class="text-t">.</p>
<p>Originally Posted By: CO ADMIN</p>
<p>DILSE</p>
<p class="text-t">.</p>
<p>CONGRATS</p>
<p class="text-t">.</p>
<p>SRIDEVI OPEN WINNERS</p>
<p class="text-t">.</p>
<p>349--6</p>
<p class="text-t">.</p>
<p>====================</p>
<p class="text-t">.</p>
<p>143 GAMBLER</p>
<p class="text-t">.</p>
<p>GOLYA BHAI</p>
<p class="text-t">.</p>
<p>WOLVERINE</p>
<p class="text-t">.</p>
<p>SONURAJ</p>
<p class="text-t">.</p>
<p>KALAA</p>
<p class="text-t">.</p>
<p>DHRUVANTHRAJ</p>
<p class="text-t">.</p>
<p>LALLU PATEL</p>
<p class="text-t">.</p>
<p>SK DK</p>
<p class="text-t">.</p>
<p>ANWAR143</p>
<p class="text-t">.</p>
<p>CHAARIMOHAN</p>
<p class="text-t">.</p>
<p>FRIENDLY BOY</p>
<p class="text-t">.</p>
<p>VIRENDRA100</p>
<p class="text-t">.</p>
<p>CHOR BAZAAR</p>
<p class="text-t">.</p>
<p>SHAURYA</p>
<p class="text-t">.</p>
<p>UNIQUE GAMER</p>
<p class="text-t">.</p>
<p>SUSANT</p>
<p class="text-t">.</p>
<p>VISSU SIR CG</p>
<p class="text-t">.</p>
<p>SAROJ MAHAKUR</p>
<p class="text-t">.</p>
<p>SAGARSTAR</p>
<p class="text-t">.</p>
<p>MAHESH PARMAR</p>
<p class="text-t">.</p>
<p>PREFECT SHOOTER</p>
<p class="text-t">.</p>
<p>RAJENDRA BHAI</p>
<p class="text-t">.</p>
<p>A R BHAII</p>
<p class="text-t">.</p>
<p>DIL SE 2</p>
<p class="text-t">.</p>
<p>====================</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Congratulations...... All winners </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Congratulations all mera nam nhi list me single open pass wit penal fir bhi esa kyu</p>
<p>             </p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;">Apne late post ki hogi </p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>BHAGATRAAJ</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:05 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: AMAN890</p>
<p class="text-t">.</p>
<p>Originally Posted By: NAGA810</p>
<p class="text-t">.</p>
<p>Originally Posted By: CO ADMIN</p>
<p>DILSE</p>
<p class="text-t">.</p>
<p>CONGRATS</p>
<p class="text-t">.</p>
<p>SRIDEVI OPEN WINNERS</p>
<p class="text-t">.</p>
<p>349--6</p>
<p class="text-t">.</p>
<p>====================</p>
<p class="text-t">.</p>
<p>143 GAMBLER</p>
<p class="text-t">.</p>
<p>GOLYA BHAI</p>
<p class="text-t">.</p>
<p>WOLVERINE</p>
<p class="text-t">.</p>
<p>SONURAJ</p>
<p class="text-t">.</p>
<p>KALAA</p>
<p class="text-t">.</p>
<p>DHRUVANTHRAJ</p>
<p class="text-t">.</p>
<p>LALLU PATEL</p>
<p class="text-t">.</p>
<p>SK DK</p>
<p class="text-t">.</p>
<p>ANWAR143</p>
<p class="text-t">.</p>
<p>CHAARIMOHAN</p>
<p class="text-t">.</p>
<p>FRIENDLY BOY</p>
<p class="text-t">.</p>
<p>VIRENDRA100</p>
<p class="text-t">.</p>
<p>CHOR BAZAAR</p>
<p class="text-t">.</p>
<p>SHAURYA</p>
<p class="text-t">.</p>
<p>UNIQUE GAMER</p>
<p class="text-t">.</p>
<p>SUSANT</p>
<p class="text-t">.</p>
<p>VISSU SIR CG</p>
<p class="text-t">.</p>
<p>SAROJ MAHAKUR</p>
<p class="text-t">.</p>
<p>SAGARSTAR</p>
<p class="text-t">.</p>
<p>MAHESH PARMAR</p>
<p class="text-t">.</p>
<p>PREFECT SHOOTER</p>
<p class="text-t">.</p>
<p>RAJENDRA BHAI</p>
<p class="text-t">.</p>
<p>A R BHAII</p>
<p class="text-t">.</p>
<p>DIL SE 2</p>
<p class="text-t">.</p>
<p>====================</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Congratulations...... All winners </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Congratulations all mera nam nhi list me single open pass wit penal fir bhi esa kyu</p>
<p>             </p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;"> Congrats bhai</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u> TIGERKING</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:05 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: CG BOY 04</p>
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p>      Sridevi live rusult</p>
<p> </p>
<p>     ----------------------</p>
<p class="text-t">.</p>
<p>         349--62--246</p>
<p class="text-t">.</p>
<p>    ------------------------</p>
<p class="text-t">.</p>
<p>         Play safe</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Panel ke sath single pass phir bhi koi wise nahi</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Open mein wise nahi koi baat nahi </p>
<p>       Jodi mein wise hoga </p>
<p>   I am waiting bhaiyon</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Again congratulations..</p>
<p> </p>
<p>♥️ Se..</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Biggest Congratulations bhai</p>
<p>             </p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;">Biggest  congratulations🎉🎊</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>AMAN890</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:04 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: NAGA810</p>
<p class="text-t">.</p>
<p>Originally Posted By: CO ADMIN</p>
<p>DILSE</p>
<p class="text-t">.</p>
<p>CONGRATS</p>
<p class="text-t">.</p>
<p>SRIDEVI OPEN WINNERS</p>
<p class="text-t">.</p>
<p>349--6</p>
<p class="text-t">.</p>
<p>====================</p>
<p class="text-t">.</p>
<p>143 GAMBLER</p>
<p class="text-t">.</p>
<p>GOLYA BHAI</p>
<p class="text-t">.</p>
<p>WOLVERINE</p>
<p class="text-t">.</p>
<p>SONURAJ</p>
<p class="text-t">.</p>
<p>KALAA</p>
<p class="text-t">.</p>
<p>DHRUVANTHRAJ</p>
<p class="text-t">.</p>
<p>LALLU PATEL</p>
<p class="text-t">.</p>
<p>SK DK</p>
<p class="text-t">.</p>
<p>ANWAR143</p>
<p class="text-t">.</p>
<p>CHAARIMOHAN</p>
<p class="text-t">.</p>
<p>FRIENDLY BOY</p>
<p class="text-t">.</p>
<p>VIRENDRA100</p>
<p class="text-t">.</p>
<p>CHOR BAZAAR</p>
<p class="text-t">.</p>
<p>SHAURYA</p>
<p class="text-t">.</p>
<p>UNIQUE GAMER</p>
<p class="text-t">.</p>
<p>SUSANT</p>
<p class="text-t">.</p>
<p>VISSU SIR CG</p>
<p class="text-t">.</p>
<p>SAROJ MAHAKUR</p>
<p class="text-t">.</p>
<p>SAGARSTAR</p>
<p class="text-t">.</p>
<p>MAHESH PARMAR</p>
<p class="text-t">.</p>
<p>PREFECT SHOOTER</p>
<p class="text-t">.</p>
<p>RAJENDRA BHAI</p>
<p class="text-t">.</p>
<p>A R BHAII</p>
<p class="text-t">.</p>
<p>DIL SE 2</p>
<p class="text-t">.</p>
<p>====================</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Congratulations...... All winners </p>
<p>             </p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;"> Congratulations all mera nam nhi list me single open pass wit penal fir bhi esa kyu</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>ABHI ATP</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:04 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p class="text-t">.</p>
<p>Originally Posted By: AADYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: SINGLE SHOOT2</p>
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p>      Sridevi live rusult</p>
<p> </p>
<p>     ----------------------</p>
<p class="text-t">.</p>
<p>         349--62--246</p>
<p class="text-t">.</p>
<p>    ------------------------</p>
<p class="text-t">.</p>
<p>         Play safe</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Panel ke sath single pass phir bhi koi wise nahi</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>  </p>
<p>♥️ Se..</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>  </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> superrrrrrrr bhai, wish ur sangam blast hojaye💐💐</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Thanks bro            </p>
<p class="text-t">.</p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;"> Congrats bhai</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>MAHESH PARMAR</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:04 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p class="text-t">.</p>
<p>Originally Posted By: AADYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: SINGLE SHOOT2</p>
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p>      Sridevi live rusult</p>
<p> </p>
<p>     ----------------------</p>
<p class="text-t">.</p>
<p>         349--62--246</p>
<p class="text-t">.</p>
<p>    ------------------------</p>
<p class="text-t">.</p>
<p>         Play safe</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Panel ke sath single pass phir bhi koi wise nahi</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>  </p>
<p>♥️ Se..</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>  </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> superrrrrrrr bhai, wish ur sangam blast hojaye💐💐</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Thanks bro</p>
<p>             </p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;">Superb bhai </p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u> CG BOY 04</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:04 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: MAHESH PARMAR</p>
<p class="text-t">.</p>
<p>Originally Posted By: MAHESH PARMAR</p>
<p class="text-t">.</p>
<p>Originally Posted By: TIGERKING</p>
<p class="text-t">.</p>
<p>Originally Posted By: DHRUVANTHRAJ</p>
<p class="text-t">.</p>
<p>Originally Posted By: MAHESH PARMAR</p>
<p class="text-t">.</p>
<p>Originally Posted By: MAHESH PARMAR</p>
<p>Sridevi </p>
<p class="text-t">.</p>
<p>Ki Aaj bajaunga </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>190/235/145/479 ------------ 0</p>
<p class="text-t">.</p>
<p>259/268/179/790 ----------- 6</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>60/65/69</p>
<p>05/07/09</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>Good L </p>
<p>M Parmar </p>
<p class="text-t">.</p>
<p>🙏😎😎😎🙏</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Sridevi mujhse pat gyi 😅😅😅</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>60/65/69</p>
<p class="text-t">.</p>
<p>Running </p>
<p>M Parmar </p>
<p class="text-t">.</p>
<p>🙏🙏🙏</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Congratulations🎉🎊🎉🎊</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Thxx to all friends Dil se 🙏🙏🙏</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Aadha ganta laga do ank nikalne me.... </p>
<p class="text-t">.</p>
<p>Tab Jake pass huaa he... </p>
<p class="text-t">.</p>
<p>Aur Yaha koi wish bhi nhi mil rahi he... </p>
<p class="text-t">.</p>
<p>Ke fayda aisa gussing karne ka 😍😍😍</p>
<p>            </p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;">Congratulations bhai pablic ka fayada dekho bhai ji 😊😊😊</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>AKKI THE LEGEND</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:03 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: MAHESH PARMAR</p>
<p class="text-t">.</p>
<p>Originally Posted By: MAHESH PARMAR</p>
<p class="text-t">.</p>
<p>Originally Posted By: TIGERKING</p>
<p class="text-t">.</p>
<p>Originally Posted By: DHRUVANTHRAJ</p>
<p class="text-t">.</p>
<p>Originally Posted By: MAHESH PARMAR</p>
<p class="text-t">.</p>
<p>Originally Posted By: MAHESH PARMAR</p>
<p>Sridevi </p>
<p class="text-t">.</p>
<p>Ki Aaj bajaunga </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>190/235/145/479 ------------ 0</p>
<p class="text-t">.</p>
<p>259/268/179/790 ----------- 6</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>60/65/69</p>
<p>05/07/09</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>Good L </p>
<p>M Parmar </p>
<p class="text-t">.</p>
<p>🙏😎😎😎🙏</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Sridevi mujhse pat gyi 😅😅😅</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>60/65/69</p>
<p class="text-t">.</p>
<p>Running </p>
<p>M Parmar </p>
<p class="text-t">.</p>
<p>🙏🙏🙏</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Congratulations🎉🎊🎉🎊</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Thxx to all friends Dil se 🙏🙏🙏</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Aadha ganta laga do ank nikalne me.... </p>
<p class="text-t">.</p>
<p>Tab Jake pass huaa he... </p>
<p class="text-t">.</p>
<p>Aur Yaha koi wish bhi nhi mil rahi he... </p>
<p class="text-t">.</p>
<p>Ke fayda aisa gussing karne ka 😍😍😍</p>
<p class="text-t">.</p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;"> Congratulations bhai💐</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>SHAURYA</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:03 PM </span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: MAHESH PARMAR</p>
<p class="text-t">.</p>
<p>Originally Posted By: MAHESH PARMAR</p>
<p class="text-t">.</p>
<p>Originally Posted By: TIGERKING</p>
<p class="text-t">.</p>
<p>Originally Posted By: DHRUVANTHRAJ</p>
<p class="text-t">.</p>
<p>Originally Posted By: MAHESH PARMAR</p>
<p class="text-t">.</p>
<p>Originally Posted By: MAHESH PARMAR</p>
<p>Sridevi </p>
<p class="text-t">.</p>
<p>Ki Aaj bajaunga </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>190/235/145/479 ------------ 0</p>
<p class="text-t">.</p>
<p>259/268/179/790 ----------- 6</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>60/65/69</p>
<p>05/07/09</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>Good L </p>
<p>M Parmar </p>
<p class="text-t">.</p>
<p>🙏😎😎😎🙏</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Sridevi mujhse pat gyi 😅😅😅</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>60/65/69</p>
<p class="text-t">.</p>
<p>Running </p>
<p>M Parmar </p>
<p class="text-t">.</p>
<p>🙏🙏🙏</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Congratulations🎉🎊🎉🎊</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Thxx to all friends Dil se 🙏🙏🙏</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Aadha ganta laga do ank nikalne me.... </p>
<p class="text-t">.</p>
<p>Tab Jake pass huaa he... </p>
<p class="text-t">.</p>
<p>Aur Yaha koi wish bhi nhi mil rahi he... </p>
<p class="text-t">.</p>
<p>Ke fayda aisa gussing karne ka 😍😍😍</p>
<p class="text-t">.</p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;"> Congrats  ♥️ Se..</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>MAHESH PARMAR</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:03 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: AMAN890</p>
<p class="text-t">.</p>
<p>Originally Posted By: AMAN890</p>
<p>Shri  Devi </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>666666666666666</p>
<p class="text-t">.</p>
<p>.349=899==277=448=466</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>6666==60=65=66=61=68=63</p>
<p>..68==signal pair</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Wit penal blasted pair on the way </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Biggest Congratulations</p>
<p> </p>
<p>♥️ Se..</p>
<p class="text-t">.</p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;">Big congratulations Bhai Dil se </p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>143 GAMBLER</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:03 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: AADYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: SINGLE SHOOT2</p>
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p>      Sridevi live rusult</p>
<p> </p>
<p>     ----------------------</p>
<p class="text-t">.</p>
<p>         349--62--246</p>
<p class="text-t">.</p>
<p>    ------------------------</p>
<p class="text-t">.</p>
<p>         Play safe</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Panel ke sath single pass phir bhi koi wise nahi</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>  </p>
<p>♥️ Se..</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>  </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> superrrrrrrr bhai, wish ur sangam blast hojaye💐💐</p>
<p>Thanks bro</p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;"> Congrats bhai</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>ANWAR143</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:03 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: AMAN890</p>
<p class="text-t">.</p>
<p>Originally Posted By: AMAN890</p>
<p>Shri  Devi </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>666666666666666</p>
<p class="text-t">.</p>
<p>.349=899==277=448=466</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>6666==60=65=66=61=68=63</p>
<p>..68==signal pair</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Wit penal blasted pair on the way </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Biggest Congratulations</p>
<p> </p>
<p>♥️ Se..</p>
<p class="text-t">.</p>
            </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;"> Wow congrats bhai</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>BIRBAL 143</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:03 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="ptag-m-b-0 font-italic">
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>Sridevi clooz</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>4444444</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>9999999</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>590</p>
<p class="text-t">.</p>
<p>450</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>AKKI THE LEGEND</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:03 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: AADYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: SINGLE SHOOT2</p>
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p>      Sridevi live rusult</p>
<p> </p>
<p>     ----------------------</p>
<p class="text-t">.</p>
<p>         349--62--246</p>
<p class="text-t">.</p>
<p>    ------------------------</p>
<p class="text-t">.</p>
<p>         Play safe</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Panel ke sath single pass phir bhi koi wise nahi</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>  </p>
<p>♥️ Se..</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>  </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> superrrrrrrr bhai, wish ur sangam blast hojaye💐💐</p>
<p class="text-t">.</p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;">Congratulations bhai💐</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>CG BOY 04</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:03 PM </span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: AMAN890</p>
<p class="text-t">.</p>
<p>Originally Posted By: AMAN890</p>
<p>Shri  Devi </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>666666666666666</p>
<p class="text-t">.</p>
<p>.349=899==277=448=466</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>6666==60=65=66=61=68=63</p>
<p>..68==signal pair</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Wit penal blasted pair on the way </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Biggest Congratulations</p>
<p> </p>
<p>♥️ Se..</p>
<p class="text-t">.</p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;"> Congratulations bhai</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>MAHESH PARMAR</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:02 PM   </span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: MAHESH PARMAR</p>
<p class="text-t">.</p>
<p>Originally Posted By: TIGERKING</p>
<p class="text-t">.</p>
<p>Originally Posted By: DHRUVANTHRAJ</p>
<p class="text-t">.</p>
<p>Originally Posted By: MAHESH PARMAR</p>
<p class="text-t">.</p>
<p>Originally Posted By: MAHESH PARMAR</p>
<p>Sridevi </p>
<p class="text-t">.</p>
<p>Ki Aaj bajaunga </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>190/235/145/479 ------------ 0</p>
<p class="text-t">.</p>
<p>259/268/179/790 ----------- 6</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>60/65/69</p>
<p>05/07/09</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>Good L </p>
<p>M Parmar </p>
<p class="text-t">.</p>
<p>🙏😎😎😎🙏</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Sridevi mujhse pat gyi 😅😅😅</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>60/65/69</p>
<p class="text-t">.</p>
<p>Running </p>
<p>M Parmar </p>
<p class="text-t">.</p>
<p>🙏🙏🙏</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Congratulations🎉🎊🎉🎊</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Thxx to all friends Dil se 🙏🙏🙏</p>
<p class="text-t">.</p>
        </div>

<p class="mb-0 text-t">.</p>
<p class="mb-0 text-dark font-weight-bold" style="font-size: 14px;">Aadha ganta laga do ank nikalne me.... </p>
<p class="mb-0 text-t">.</p>

<p class="mb-0 text-dark font-weight-bold" style="font-size: 14px;">Tab Jake pass huaa he... </p>

<p class="mb-0 text-t">.</p>
<p class="mb-0 text-dark font-weight-bold" style="font-size: 14px;">Aur Yaha koi wish bhi nhi mil rahi he... </p>

<p class="mb-0 text-t">.</p>
<p class="mb-0 text-dark font-weight-bold" style="font-size: 14px;">Ke fayda aisa gussing karne ka 😍😍😍</p>
<p class="mb-0 text-t">.</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>CG BOY 04</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:02 PM </span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: AKKI THE LEGEND</p>
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: CHAARIMOHAN</p>
<p class="text-t">.</p>
<p>Originally Posted By: DHRUVANTHRAJ</p>
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p>Sridevi</p>
<p>________</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>666666666</p>
<p>1111111</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>62,69,61</p>
<p>17,14,16</p>
<p class="text-t">.</p>
<p>♥️♠️♦️♣️</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Hame koi wish kyu nhi karta..</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> </p>
<p class="text-t">.</p>
<p>Congratulations bro</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Congrats bhai</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Thanks bhai log</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Big congratulations</p>
<p class="text-t">.</p>
        </div>
<p class="mb-0 text-t">.</p>
<p class="mb-0 text-dark font-weight-bold" style="font-size: 14px;">Congratulations bhai</p>
<p class="mb-0 text-t">.</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>SHAURYA</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:02 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">
<p class="text-t">.</p>
<p>Originally Posted By: AMAN890</p>
<p class="text-t">.</p>
<p>Originally Posted By: AMAN890</p>
<p>Shri  Devi </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>666666666666666</p>
<p class="text-t">.</p>
<p>.349=899==277=448=466</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>6666==60=65=66=61=68=63</p>
<p>..68==signal pair</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Wit penal blasted pair on the way </p>
<p class="text-t">.</p>
        </div>
<p class="mb-0 text-t">.</p>
<p class="mb-0 text-t">.</p>
<p class="mb-0 text-dark font-weight-bold" style="font-size: 14px;">♥️ Se..</p>
<p class="mb-0 text-t">.</p>
<p class="mb-0 text-dark font-weight-bold" style="font-size: 14px;">Biggest Congratulations</p>
<p class="mb-0 text-t">.</p>
<p class="mb-0 text-t">.</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>CG BOY 04</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:02 PM   </span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0 font-italic">
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p class="text-t">.</p>
<p>Originally Posted By: 143 GAMBLER</p>
<p>      Sridevi live rusult</p>
<p> </p>
<p>     ----------------------</p>
<p class="text-t">.</p>
<p>         349--62--246</p>
<p class="text-t">.</p>
<p>    ------------------------</p>
<p class="text-t">.</p>
<p>         Play safe</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Panel ke sath single pass phir bhi koi wise nahi</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Open mein wise nahi koi baat nahi </p>
<p>       Jodi mein wise hoga </p>
<p>   I am waiting bhaiyon</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Again congratulations..</p>
<p> </p>
<p>♥️ Se..</p>
<p class="text-t">.</p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;">Biggest Congratulations bhai</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>143 GAMBLER</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:02 PM </span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0 font-italic">
<p class="text-t">.</p>
<p class="">Originally Posted By: SHAURYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: AKKI THE LEGEND</p>
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: CHAARIMOHAN</p>
<p class="text-t">.</p>
<p>Originally Posted By: DHRUVANTHRAJ</p>
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p class="text-t">.</p>
<p>Originally Posted By: SHAURYA</p>
<p>Sridevi</p>
<p>________</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>666666666</p>
<p>1111111</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>62,69,61</p>
<p>17,14,16</p>
<p class="text-t">.</p>
<p>♥️♠️♦️♣️</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Hame koi wish kyu nhi karta..</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> </p>
<p class="text-t">.</p>
<p>Congratulations bro</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Congrats bhai</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> </p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p> Thanks bhai log</p>
<p class="text-t">.</p>
        </div>
        <p class="text-dark font-weight-bold" style="font-size: 14px;">Big congratulations</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>BAAZIGAR SHEIKH</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:02 PM  </span> &nbsp;&nbsp;</div>
    </div>
    <div class="ptag-m-b-0">
<p class="text-t">.</p>
<p>Time</p>
<p class="text-t">.</p>
<p>Open</p>
<p class="text-t">.</p>
<p>💘3333333333🎯88888888888💘</p>
<p class="text-t">.</p>
<p>🎯888888888💘33333333333🎯</p>
<p class="text-t">.</p>
<p>Storong panna</p>
<p class="text-t">.</p>
<p>139-238-490-580💘134-567-378-350</p>
<p class="text-t">.</p>
<p>Aur Jodi</p>
<p class="text-t">.</p>
<p>38---39--34--💘--83---84--89</p>
<p class="text-t">.</p>
<p>Open fixx aur Jodi print ✍️</p>
<p class="text-t">.</p>
<p>Time bomb dhamakaa 💥💥</p>
<p class="text-t">.</p>
<p class="text-t">.</p>
<p>🕶️🕶️🕶️🕶️🕶️🕶️🕶️🕶️🕶️🕶️🕶️🕶️🕶️🕶️</p>
<p class="text-t">.</p>
<p>Fark hota he khuda aur fakir me</p>
<p class="text-t">.</p>
<p>Fark hota he kismat aur lakir me</p>
<p class="text-t">.</p>
<p>Agar kuch aur chaho aur Na mile</p>
<p class="text-t">.</p>
<p>To samjlena Ki kuch aur achaa..</p>
<p class="text-t">.</p>
<p>Likha he takdeer... baazigar.</p>
<p class="text-t">.</p>
<p>💘◾💘◾💘◾💘◾💘◾💘◾💘◾💘</p>
<p class="text-t">.</p>
<p>Baazigar sheikh</p>
<p>🕶️🕶️🕶️🕶️🕶️🕶️🕶️</p>
<p class="text-t">.</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u>CG BOY 04</u>
        </div>
        <div class="mt-1"><span>24-02-2020 12:02 PM</span> &nbsp;&nbsp;</div>
    </div>
    <div class="ptag-m-b-0">
<p class="text-t">.</p>
<p>Shridevi clozz</p>
<p class="text-t">.</p>
<p>5_________0</p>
<p class="text-t">.</p>
<p>230_____479</p>
<p class="text-t">.</p>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-warning">Google Chrome</div>
        <div class="btn col-6 bg-info"><a style="text-decoration:none;color: #fff!important;" href="#"> (Quote)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
</div>
<!--  -->

<!--  -->

<!--  -->

<!--  -->

<!--  -->
        <br/>
        <div id="bottom"></div>
        <div style="float:left; width:100%;">
            <br>
            <div class="">
                <a class="btn btn-outline-primary" style="background: #fc9; color: #ff006c;"><b>PREV</b></a>
                <a class="btn btn-outline-primary" style="background: #fc9; color: #ff006c;"><b>1</b></a>
                <a class="btn btn-outline-primary" href="#"><b>2</b></a>
                <a class="btn btn-outline-primary" href="#"><b>3</b></a>
                <a class="btn btn-outline-primary" href="#"><b>4</b></a>
                <a class="btn btn-outline-primary" href="#"><b>5</b></a>
                <a class="btn btn-outline-primary" href="#"><b>6</b></a>
                <a class="btn btn-outline-primary" href="#"><b>7</b></a>
                <a class="btn btn-outline-primary" href="#"><b>8</b></a>
                <a class="btn btn-outline-primary" href="#"><b>9</b></a>
                <a class="btn btn-outline-primary" href='#'>...</a>
                <a class="btn btn-outline-primary" href="#"><b>99</b></a>
                <a class="btn btn-outline-primary" href="#"><b>100</b></a>
                <a class="btn btn-outline-primary" href="#"><b>NEXT</b></a>
            </div>
        </div>
        <br>
        <br>
        <div >
            <!--refresh start-->
            <a href="#top" class="btn btn-warning btn-lg text-light mb-3 mt-3">
                Go To Top
            </a>
        </div><!----------- ------------>

            <!--FOOTER START-->
<div class="footer-wrapper " >

    <div class="footer pink-border pb-2" style="border: 4px solid #ff006c;
    border-top-left-radius: 10px;">
        <div class="row mx-0">
            <div class="col-md-4 offset-md-4">
                <div class="text-center pb-2">
                    <img src="data:image/webp;base64,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" alt="DPBOSS.NET">
                  <br>
                    <div class="p-2">
                        <a href="#" class="btn btn-danger rounded btn-sm ">Home</a>
                        <a href="#" class="btn btn-danger rounded btn-sm ">Back</a>   
                    </div>
                </div>
            </div>
        </div>
    <div class="footer dark">
        <div class="row mx-0">
            <div class="col  text-center text-dark" id="btm-link-move">
                Copyright @2019, DP boss 
                <br>
                Powered by DPBOSS.NET
            </div>
        </div>
    </div>
    </div>
</div>
<div  style="color: transparent; height: 85px;">.</div>
            <!--FOOTER end-->
            
            <!--------------------------fixed navigation start-------------------------->
    <div class="fixed-bottom row ml-0 mr-0 bg-light pt-0"><!-- 11111111111111111111 -->
            <div class="col-3 text-center pt-2">
                <a  style="text-decoration:none;" href="#" >
                        <b style="font-size: 20px; color:#333 !important;"><i class="fas fa-home"></i></b>
                        <p>Home</p>
                </a>
            </div>
            <div class="col-3 text-center pt-2">
                <a  style="text-decoration:none;" href="#" >
                        <b style="font-size: 20px; color:#333 !important;"><i class="far fa-question-circle"></i></b>
                        <p>Guessing<br/>Forum</p>
                </a>
            </div>
            <div class="col-3 text-center pt-2">
                <a  style="text-decoration:none;" href="#" >
                        <b style="font-size: 20px; color:#333 !important;"><i class="fas fa-user-shield"></i></b>
                        <p>Experts<br/>Forum</p>
                </a>
            </div>
            <div class="col-3 text-center pt-2">
                <a  style="text-decoration:none;" href="#" onClick="window.location.reload();" >
                            <b style="font-size: 20px; color:#333 !important;"><i class="fas fa-sync"></i></b>
                        <p>Refresh<br/>Page</p>
                </a>
            </div>
    </div>

    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>

<!-- fontawesome cdn -->
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
</body>
</html>