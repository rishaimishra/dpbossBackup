<?php

require_once('connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lucky Number | DP Boss</title>

<style>
body {
    background-color:#fc9;
    color:#000;
    font-weight:bold;
    font-style:italic;
    font-family:Helvetica;
}
#lucky-no-1.container {
    max-width: 300px;
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
    background-color: teal;
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
    background-color:violet;
    padding: 20px 25px;
    margin-left: 20px;
    color: #fff;
    text-shadow: 0px 0px 5px #000;
    font-size: 22px !important;
}.lucky-no-result-3 {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    background-color:red;
    padding: 20px 25px;
    margin-left: 20px;
    color: #fff;
    text-shadow: 0px 0px 5px #000;
    font-size: 22px !important;
}.lucky-no-result-4 {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    background-color:green;
    padding: 20px 25px;
    margin-left: 20px;
    color: #fff;
    text-shadow: 0px 0px 5px #000;
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
input, select, button {
    border-radius: 10px;
} 
input:focus, select:focus, button:focus {
    outline: 0px;
}
</style>

</head>
<body>






    <div id="lucky-no-1" class="container">
      <form action="lcnumber.php" name="form1" method="post" >
        <div>
            <input class="input-1" type="text" id="txtInpu" onclick="myFunction()" name="firstname" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" placeholder="Enter your name" required autocomplete="off">

           
        </div>
        
        <div class="dateofb">
            <select class="lucky-date col" required>
                <option selected value="" disabled>Date</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            <select class="lucky-month col" required>
                <option selected  value="" disabled>Month</option>
                <option value="1">Janaury</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <select class="lucky-year col" required>
                <option selected value="" disabled>Year</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
            </select>
        </div>
        <div>
           <input type="text" id="demo" placeholder="0" name="luck" style="display: none;">
<input type="text" id="demo1" placeholder="0" name="lucky" style="display:none ;" >
<input type="text" id="demo2" placeholder="0" name="bestluck" style="display: none;">
<!-- <input type="text" id="demo3" placeholder="0" name="bestlucky" style="display: ;"> -->

            <button class="lucky-no-submit" type="submit" name="register" value="save">Show Lucky Number</button>
        </div>
       
    

    

  </form>
        </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
   
 $(function(){
    $('#txtInput').on('input',function (){
        var node = $(this);
        console.log('::'+node.val())
            node.val(node.val().trim().replace(/[^a-z]/g,''));
    })
});
function myFunction() {

w = Math.floor(Math.random() * 9 + 1);
x = Math.floor(Math.random() * 9 + 1);
y = Math.floor(Math.random() * 9 + 1);
// z = Math.floor((Math.random() * 10));
a = Math.floor(Math.random() * 10);
b = Math.floor(Math.random() * 10);
c = Math.floor(Math.random() * 10);

// run this loop until w is different than y
do {
    w = Math.floor(Math.random() * 9 + 1);
    x = Math.floor(Math.random() * 9 + 1);
    y = Math.floor(Math.random() * 9 + 1);
} while(w === x || x === y || y === w);

w = w * 10 + a;
x = x * 10 + b;
y = y * 10 + c;

document.getElementById("demo").value = x;
document.getElementById("demo1").value = y;
document.getElementById("demo2").value = w;
// document.getElementById("demo3").value = z;


}
 $(document).ready(function(){
  $('#txtInput').on("cut copy paste",function(e) {
      e.preventDefault();
   });
   $('#txtInput').bind("contextmenu",function(e){ e.preventDefault(); });
});
// $(".mysubmitbutton").click(function(event){
//   event.preventDefault();
//   alert("hello");
// });


//for input numbers in name
function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8);
};

</script>
</body>


</html>