<?php

require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lucky number</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<style>
body {
    background-color:#fc9;
    color:#000;
    font-weight:bold;
    font-style:italic;
    font-family:Helvetica;
}
#lucky-no-1.container {
    /*max-width: 300px;*/
    /* background-color: #333; */
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
}
a {
    color:#333
}
.input-1 {
    width: 276px;
    height: 30px;
    margin-bottom: 15px;
    border: 2px solid #afa;
    padding: 10px;
    text-transform: capitalize;
    font-size: 20px;
}
.dateofb {
    width: 100%;
}
.dateofb option {
    font-size: 17px;
}
.lucky-date {
    width: 97px;
    height: 50px;
    border: 2px solid #afa;
}
.lucky-month {
    width: 97px;
    height: 50px;
    border: 2px solid #afa;
}
.lucky-year {
    width: 97px;
    height: 50px;
    border: 2px solid #afa;
}
.lucky-no-submit {
    width: 300px;
    background-color: yellow;
    font-weight: 790;
    height: 50px;
    margin-top: 15px;
    border: 2px solid #afa;
    padding: 10px;
}
.lucky-no-submit:hover {
    background-color: #ccc;
    color: #000;
}
.lucky-no-result {
    margin-top: 30px;
}
.lucky-no-result-1 {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    /*background-color: teal;*/
    padding: 20px 25px;
    margin-right: 20px;
    color: #fff;
    text-shadow: 0px 0px 5px #000;
    font-size: 22px !important;
}
.lucky-no-result-2 {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    /*background-color:violet;*/
    padding: 20px 25px;
    margin-left: 20px;
    color: #fff;
    /*text-shadow: 0px 0px 5px #000;*/
    font-size: 22px !important;
}.lucky-no-result-3 {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    /*background-color:red;*/
    /*padding: 20px 25px;*/
    margin-left: 20px;
    color: #fff;
    /*text-shadow: 0px 0px 5px #000;*/
    font-size: 22px !important;
}.lucky-no-result-4 {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    /*background-color:green;*/
    padding: 20px 25px;
    margin-left: 20px;
    color: #fff;
    /*text-shadow: 0px 0px 5px #000;*/
    font-size: 22px !important;
}
/* fancy headding */
.lucky-horos-eng, 
.lucky-horos-hin {
    font-size: 18px;
    background-color: turquoise;
    padding: 5px 0;
}
.lucky-no-horos-eng {
    margin-top: 30px;
}
.lucky-no-yno,
.lucky-no-horos-head {
    font-size: 20px;
}
/*new css*/
/*new css*/
/*new css*/
/*new css*/
.lucky-no-result-2,
.lucky-no-result-1 {
    text-shadow: 0px 0px 0px #000;
}
.lucky-no-result-1 {
    display: inline-block !important;
}
b.lucky-no-result-1.row {
    display: inline-block !important;
    position: relative;
    left: 2%;
    color: red;
}
#lucky-no-1.container {
    /*max-width: 300px;*/
}
.lucky-no-result-2
{
    display: inline-block !important;
    color: red;
}
#demos.lucky-no-result-1 .fa-star,
.lucky-no-result-2:first-child .fa-star {
    position: relative;
    top: -220%;
    left: -77%;
    z-index: -1;
    text-shadow: 0px 0px 2px #000;
    font-size: 60px;
    color: yellow;
}
.lucky-no-result-2 .fa-star {
    margin-left: 1px;
    position: relative;
    top: -220%;
    left: -77%;
    z-index: -1;
    text-shadow: 0px 0px 2px #000;
    font-size: 60px;
    color: yellow;
}
b.lucky-no-result-1.row .fa-star {
    margin-left: 7px;
    position: relative;
    /*top: -269%;*/
    /*left: -118%;*/
    z-index: -1;
    text-shadow: 0px 0px 2px #000;
    font-size: 80px;
    color: yellow;
}
#demos.lucky-no-result-1 {
    color: red;
}
.lucky-horos-eng,
.lucky-horos-hin {
    width: 120px;
    justify-content: center;
    display: inline-flex;
    margin-top: 0;
}
div.lucky-no-result>#demo2.lucky-no-result-3 {
    position: relative;
    top: -60px;
    left: 50px;
    color: red; 
}
/*div.lucky-no-result>#demo2.lucky-no-result-3 .fa-star{
    margin-left: 7px;
    position: relative;
    top: -12%;
    left: -37%;
    z-index: -1;
    text-shadow: 0px 0px 2px #000;
    font-size: 60px;
    color: yellow;
    display: none;
}*/
.lucky-no-result-1.grid-container {
    display: inline-block !important;
    position: relative;
    left: 13px;
    color: red;
}
.lucky-no-result-1.grid-container .fa-star{
    margin-left: 7px;
    position: relative;
    top: -269%;
    left: -118%;
    z-index: -1;
    text-shadow: 0px 0px 2px #000;
    font-size: 80px;
    color: yellow;
}
.lucky-no-result-1.grid-container +br,
.lucky-no-result-1.grid-container +br+br,
.lucky-no-result-1.grid-container +br+br+br
.lucky-no-result-1.grid-container +br:after,
.lucky-no-result-1.grid-container +br+br:after,
.lucky-no-result-1.grid-container +br+br+br:after
 {
    content: "";
}
.third-row-number {
    display: flex;
    justify-content: center;
}
/*.star {
    clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
    background-color:  red;
    padding: 30px;
}*/
i.fa {
    margin-left: 10px;
    font-size: 30px;
    height: 30px;
    vertical-align: middle;
    margin-left: 7px;
    position: absolute;
    top: 46%;
    left: 144%;
    z-index: -1;
    text-shadow: 0px 0px 2px #000;
    font-size: 60px;
    color: yellow;
    font-size: 60px;
    margin-top: -31px;
    margin-left: -39px;
}
div.lucky-no-result>#demo2.lucky-no-result-3 {
    margin-right: 77px; 
}
/*else statement */
/*else statement */
/*2nd row*/
.distorted-div .d-second-div {

}
.distorted-div .d-second-div>span {
 margin: 0;
}
/*3rd row*/
.distorted-div .d-third-div {

}
.distorted-div .d-third-div>span {
 margin: 0;
 color: red;
 margin: 5px;
}
.distorted-div .d-third-div>span>span {
     margin-left: 7px;
    position: relative;
    top: -269%;
    left: -118%;
    z-index: -1;
    text-shadow: 0px 0px 2px #000;
    font-size: 80px;
    color: yellow;

}
/*else statement */
/*else statement */
@media only screen and (max-width: 576px) {
.lucky-no-result-1.grid-container .fa-star {
    top: -42px !important;
}
div.lucky-no-result>#demo2.lucky-no-result-3 {
    margin-right: 43px; 
}
.two-number {
    font-size: 20px !important;
    padding: 0;
    margin: 0;
    padding-left: 32px;
    margin-left: 6px;
}
span.lucky-no-result-2.two-number>span {
    font-size: 62px;
}
/*3rd row number*/
.two-number.first {
    margin-left: 0;
    padding-left: 0;
}
.two-number.last {
    margin-right: 0;
    padding-right: 0;
}
.lucky-no-result-1.grid-container {
    font-size: 16px !important;
    position: relative;
    left: 13px;
    top: -7px;
    margin-right: 0;
}
.lucky-no-result-1.grid-container>span{
    font-size: 58px !important;
    position: relative !important;
    left: -19px !important;
    top: -47px !important;
}
/*else statement */
/*else statement */
/*2nd row*/
.distorted-div .d-second-div {

}
.distorted-div .d-second-div>span {
 margin: 0;
 padding: 18px;
}
.distorted-div .d-second-div>span>span {
    font-size: 58px !important;  
}
/*3rd row*/
.distorted-div .d-third-div {

}
.distorted-div .d-third-div>span {
 margin: 0;
 padding: 20px;
font-size: 18px !important;  
}
.distorted-div .d-third-div>span>span {
font-size: 64px !important;
    position: relative;
    top: -45px;
    left: -21px;
}
/*else statement */
/*else statement */
} /*end mobil media query*/
@media only screen and (max-width: 375px) {

div.lucky-no-result>#demo2.lucky-no-result-3 {
    margin-right: 13px; 
}

div.lucky-no-result>#demo2.lucky-no-result-3 {
    position: relative;
    top: -56px;
    left: 41px;
}
.two-number{
    padding-left: 16px;
    margin-left: 20px;
    position: relative;
    left: 7px;
}
.lucky-no-result-1.grid-container {
    left: 16px;
    font-size: 17px !important;
}
.lucky-no-result-1.grid-container .fa-star {
    top: -41px !important;
}
/*else statement */
/*else statement */
/*3rd row*/
.distorted-div .d-third-div {

}
.distorted-div .d-third-div>span {
 margin: 0;
 padding: 18px;
font-size: 16px !important;  
}
.distorted-div .d-third-div>span>span {
font-size: 55px !important;
    position: relative;
    top: -40px;
    left: -18px;
}
/*else statement */
/*else statement */
} /*end media query*/
@media only screen and (max-width: 320px) {
div.lucky-no-result>#demo2.lucky-no-result-3 {
    position: relative;
    top: -56px;
    left: 41px;
}
.two-number{
    padding-left: 16px;
    margin-left: 10px;
}
.two-number>span{
    font-size: 47px !important;
    position: relative !important;
    left: -11px !important;
    top: -37px !important;
}
.lucky-no-result-1.grid-container {
    left: 16px;
    font-size: 16px !important;
    padding: 18px;
}
.lucky-no-result-1.grid-container .fa-star {
    top: -41px !important;
}
/*else statement */
/*else statement */
/*2nd row*/
.distorted-div .d-second-div {

}
.distorted-div .d-second-div>span {
 margin: 0;
 padding: 13px;
 font-size: 18px !important;
}
.distorted-div .d-second-div>span>span {
    font-size: 47px !important;  
    position: relative !important;
    top: -37px !important;
    left: -10px !important;
}
/*3rd row*/
.distorted-div .d-third-div {

}
.distorted-div .d-third-div>span {
 margin: 13px;
 padding: 0px;
font-size: 16px !important;  
}
.distorted-div .d-third-div>span>span {
    font-size: 52px !important;
    position: relative;
    top: -38px !important;
    left: -17px !important;
}
/*else statement */
/*else statement */
} /*end media query*/
</style>
</head>
<body>
     <div id="lucky-no-1" class="container">

   <div class="lucky-no-yno">
            <p>Your Today's Lucky number Is...!</p>
        </div>
        <div class="lucky-no-result">
       

 

           <?php


            if (isset($_POST['register'])) {
        $firstname = $_POST['firstname'];
        $luck = $_POST['luck'];
        $lucky = $_POST['lucky'];
        $bestluck = $_POST['bestluck'];
        // $bestlucky = $_POST['bestlucky'];
            $sql_u="SELECT * FROM users WHERE firstname='$firstname'";
            $sql_l="SELECT * FROM users WHERE luck='$luck'";
            $sql_lu="SELECT * FROM users WHERE lucky='$lucky'";
            $sql_blu="SELECT * FROM users WHERE bestluck='$bestluck'";
            
            // $sql_bluc="SELECT * FROM users WHERE bestlucky='$bestlucky'";
            $res_u=mysqli_query($db,$sql_u) or die(mysqli_error($db));
            $res_l=mysqli_query($db,$sql_l) or die(mysqli_error($db));
            $res_lu=mysqli_query($db,$sql_lu) or die(mysqli_error($db));
            $res_blu=mysqli_query($db,$sql_blu) or die(mysqli_error($db));
         


           
            // echo $data[0];
            // $res_bluc=mysqli_query($db,$sql_bluc) or die(mysqli_error($db));
            if (mysqli_num_rows($res_u) > 0) {
// $year=date("Y");
// $month=date("m");
// $day=date("d"); 
// srand(mktime($month,$day,$year));
// echo(rand(1,9)); 

                while ($row=mysqli_fetch_array($res_u)) { 
			


						$a = range(1,9);
						shuffle($a);
						$num = array_slice($a, 0, 3);
					?>
                  <span id="demos" class="lucky-no-result-1" style="margin-top: -50px"><?php echo $num[0]; ?> <span class="fa fa-star"></span></span>

                  <span class="lucky-no-result-2"><?php  echo $num[1];  ?><span class="fa fa-star"></span></span>

                  <span id="demo2" class="lucky-no-result-3"><i class="fa fa-star aaaa111"></i> <?php  echo $num[2];  ?></span><br> 

<!-- 2 nd row -->
<span class="lucky-no-result-2 two-number"><?php  echo $row['luck']; ?><span class="fa fa-star"></span></span>
<span class="lucky-no-result-2 two-number"><?php  echo rand(0,9);echo $row['luck'][0];  ?><span class="fa fa-star"></span></span>

<span class="lucky-no-result-2 two-number"><?php  echo $row['lucky']; ?><span class="fa fa-star"></span></span>
<span class="lucky-no-result-2 two-number"><?php echo rand(0,9); echo $row['lucky'][0];  ?><span class="fa fa-star"></span></span>

<span class="lucky-no-result-2 two-number"><?php  echo $row['bestluck']; ?><span class="fa fa-star"></span></span>
<span class="lucky-no-result-2 two-number"><?php echo rand(0,9); echo $row['bestluck'][0]; 





 ?><span class="fa fa-star"></span></span>
<!-- 3rd row -->
<div class="third-row-number">
 <?php 
$sql_alu="SELECT lcnum FROM favourite";

$res_alu=mysqli_query($db,$sql_alu) or die(mysqli_error($db));
 $data =mysqli_fetch_array($res_alu,MYSQLI_ASSOC);
// $ppp=$row['luck'][0];
// $ppq=$row['lucky'][0];
// $ppr=$row['bestluck'][0];
  // echo $row['luck'][0];
  // print_r($data);
  // echo '<pre>'; var_dump($data); echo '</pre>';

 for ($x = 0; $x <= 9; $x++) {

    // print_r($data);
    // print_r($data[$x]);
    // print_r($row['luck'][0]);
 if ($x==$row['luck'][0]) {
    $mas_arr=array($row['luck'][0], $row['lucky'][0], $row['bestluck'][0]);
    foreach ($mas_arr as $jvalue) {
    $sql_lc1="SELECT * FROM favourite WHERE lcnum = '".$jvalue."' ORDER BY RAND() LIMIT 1";
      $res_1=mysqli_query($db,$sql_lc1) or die(mysqli_error($db));
    
     $value=mysqli_fetch_assoc($res_1);
        $j=0;
$m=array(3,4,5,6,7,8);
shuffle($m);
$i=$m[0];
shuffle($m);
$k=$m[0];
$l=0;
foreach ($value as $var) {
   // echo $var;

   if ($j==$i || $j==$k) {

    // echo $var;
    echo  '<span class="lucky-no-result-1 grid-container first" style="display:flex;">'.  $var .'<span class="fa fa-star"></span></span>';
    if ($l==1) {
        break;
    }else{
        $l++;
    }

       
    }else{
        $j++;
    }
}
      }
   
      // var_dump($value);
     // var_dump(count($value));

// $j=1;
// for ($i=1; $i <count($value) ; $i++) { 
//     echo $value[$i];
//     if ($i==$j) {
//         break;
//     }
// }

    
 // echo  '<br><br><br><span class="lucky-no-result-1">'.  $row[rand(2,5)] .'</span>'.'<span class="lucky-no-result-1">'.  $row[rand(5,8)] .'</span>';



break;

  
    
}

 }

 



    ?>



                  <?php

                }
            }else{
                $query="INSERT INTO users (firstname,luck,lucky,bestluck) VALUES('$firstname','$luck','$lucky','$bestluck')";
                 $result=mysqli_query($db,$query) or die(mysqli_error($db));
                $last_id=mysqli_insert_id($db);

              
                $sqli = "SELECT * FROM users where id = '".$last_id."' "; 
                $resultss = mysqli_query($db, $sqli); 

                while ($row = mysqli_fetch_assoc($resultss)) { 



        echo '</span><b class="hidden-div-else"></b><div class="distorted-div" style="margin-bottom:-70px">
                <div class="d-first-div">
                    <span class="lucky-no-result-2" style="margin-top:-50px;">'.$row["luck"][0].'<span class="fa fa-star"></span></span>'.'<span class="lucky-no-result-2">'. $row["lucky"][0].'<span class="fa fa-star"></span></span>' .'<span class="lucky-no-result-2">'. $row["bestluck"][0].'<span class="fa fa-star"></span></span></div>' ;


         echo '<div class="d-second-div"><span class="lucky-no-result-2">' .$row["luck"].'<span class="fa fa-star"></span></span>'.'<span class="lucky-no-result-2">'. $row["lucky"].'<span class="fa fa-star"></span></span>' .'<span class="lucky-no-result-2">'. $row["bestluck"].'<span class="fa fa-star"></span></span>';


 echo '<span class="lucky-no-result-2">'.rand(0,9) .$row["luck"][0].'<span class="fa fa-star"></span></span>'.'<span class="lucky-no-result-2">'.rand(0,9). $row["lucky"][0].'<span class="fa fa-star"></span></span>' .'<span class="lucky-no-result-2">'.rand(0,9). $row["bestluck"][0].'<span class="fa fa-star"></span></span></div>' ;



   $sql_alu="SELECT lcnum FROM favourite";

$res_alu=mysqli_query($db,$sql_alu) or die(mysqli_error($db));
 $data =mysqli_fetch_array($res_alu,MYSQLI_ASSOC);

echo '<div class="d-third-div">';
    for ($x = 0; $x <= 9; $x++) {

    // print_r($data);
    // print_r($data[$x]);
    // print_r($row['luck'][0]);
 if ($x==$row['luck'][0]) {
    $mas_arr=array($row['luck'][0], $row['lucky'][0], $row['bestluck'][0]);
    foreach ($mas_arr as $jvalue) {
    $sql_lc1="SELECT * FROM favourite WHERE lcnum = '".$jvalue."' ORDER BY RAND() LIMIT 1";
      $res_1=mysqli_query($db,$sql_lc1) or die(mysqli_error($db));
    
     $value=mysqli_fetch_assoc($res_1);
        $j=0;
$m=array(3,4,5,6,7,8,9);
shuffle($m);
$i=$m[0];
shuffle($m);
$k=$m[0];
$l=0;

foreach ($value as $var) {
   // echo $var;

   if ($j==$i || $j==$k) {

    echo  '<span class="lucky-no-result-1 grid-container first">'.  $var .'<span class="fa fa-star" ></span></span>';
    if ($l==1) {
        break;
    }else{
        $l++;
    }

       
    }else{
        $j++;
    }
}

      }
   
      // var_dump($value);
     // var_dump(count($value));

// $j=1;
// for ($i=1; $i <count($value) ; $i++) { 
//     echo $value[$i];
//     if ($i==$j) {
//         break;
//     }
// }

    
 // echo  '<br><br><br><span class="lucky-no-result-1">'.  $row[rand(2,5)] .'</span>'.'<span class="lucky-no-result-1">'.  $row[rand(5,8)] .'</span>';



break;

  
    
}

 }
echo '</div>';
                   

       
    } 


              ?>
           
                
           <?php     
               
            }

 


?>



           
            <!-- <span class="lucky-no-result-2"> -->
                <?php
          

// if (mysqli_num_rows($res_u) > 0) {
// //                 $year=date("Y");
// // $month=date("m");
// // $day=date("d");
// // srand(mktime($month,$day,$year));
// // echo (rand(0,9));
//     while ($row=mysqli_fetch_array($res_u)) {
//                    echo $row['lucky'];
//                 }

//             }else{

                // echo(rand(1,9));
                
               
//             }
        }
?></span>


</div>
  <div class="lucky-no-horos-eng">
            <p class="lucky-no-horos-head">And Your's horoscope Is...!</p>
            <p class="lucky-horos-eng"><?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$rasi=$_POST["firstname"];
$rasii=strtoupper($rasi[0]);

   
        // switch ($rasii) {
        //     case 'A' || 'L' || 'E'|| 'I'|| 'O':
        //         echo "Aries";
        //         break;

        //     case 'B' || 'V' || 'U'|| 'W':
        //         echo "Taurus";
        //         break;
            
        //     default:
        //         echo "Does not Exist";
        //         break;
        // }
    if ($rasii == "A" || $rasii == "L" || $rasii == "E" || $rasii == "I" || $rasii == "O") {
    echo "Aries";
}
elseif ($rasii == "B" || $rasii == "V" || $rasii == "U" || $rasii == "W") {
    echo "Taurus";
} elseif ($rasii == "R" || $rasii == "T") {
    echo "Libra";
} elseif ($rasii == "K" || $rasii == "Q" || $rasii = "C") {
    echo "Gemini";
} elseif ($rasii == "H") {
    echo "Cancer";
} elseif ($rasii == "M") {
    echo "Leo";
} elseif ($rasii == "P") {
    echo "Vigro";
} elseif ($rasii == "N" || $rasii == "Y") {
    echo "Scorpius";
} elseif ($rasii == "F") {
    echo "Sagittarius";
} elseif ($rasii == "J") {
    echo "Capricorn";
} elseif ($rasii == "G" || $rasii == "S") {
    echo "Aquarius";
} elseif ($rasii == "D" || $rasii == "Z") {
    echo "Pisces";
}
else{
echo "None";
}
 

}?></p>
        </div>
        <div class="lucky-no-horos-hin">
            <p class="lucky-no-horos-head">और आपकी राशि है ...!</p>
            <p class="lucky-horos-hin"><?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$rasi=$_POST["firstname"];
$rasii=strtoupper($rasi[0]);

    if ($rasii == "A" || $rasii == "L" || $rasii == "E" || $rasii == "I" || $rasii == "O") {
    echo "मेष";
} elseif ($rasii == "B" || $rasii == "V" || $rasii == "U" || $rasii == "W") {
    echo "वृषभ";
} elseif ($rasii == "R" || $rasii == "T") {
    echo "तुला";
} elseif ($rasii == "K" || $rasii == "Q" || $rasii = "C") {
    echo "मिथुन";
} elseif ($rasii == "H") {
    echo "कर्क";
} elseif ($rasii == "M") {
    echo "सिंह";
} elseif ($rasii == "P") {
    echo "कन्या ";
} elseif ($rasii == "N" || $rasii == "Y") {
    echo "वृशिका ";
} elseif ( $rasii == "F") {
    echo "धनु ";
} elseif ($rasii == "J") {
    echo "मकर";
} elseif ($rasii == "G" || $rasii == "S") {
    echo "कुंभ";
} elseif ($rasii == "D" || $rasii == "Z") {
    echo "मीन";
}
else{
echo "None";
}
 

}?></p>
        </div>
        
    </div>
</div>
<!-- cdn for fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</body>
</html>