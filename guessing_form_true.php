<?php
 require_once('connect.php'); 

session_start();

if (isset($_POST['submitpost'])) {
        $body = $_POST['body'];
        $author = $_POST['author'];

        $query="INSERT INTO posts (body,author) VALUES('$body','$author')";

              $result=mysqli_query($db,$query) or die(mysqli_error($db));
              $_SERVER['PHP_SELF'];
              echo '<div>  <div class="alert" style="color:green;">
  <span class="closebtn" onclick="this.parentElement.style.display="none";></span> 
  <strong>Success!</strong> Post Submitted Successfully.
</div>
</div>';


        }elseif (isset($_POST['submitfakepost'])) {
        $body = $_POST['body'];
        $fakeuser = $_POST['fakeuser'];

        $query="INSERT INTO posts (body,fakeuser) VALUES('$body','$fakeuser')";

              $result=mysqli_query($db,$query) or die(mysqli_error($db));
              $_SERVER['PHP_SELF'];
              echo '<div>  <div class="alert" style="color:green;">
  <span class="closebtn" onclick="this.parentElement.style.display="none";></span> 
  <strong>Success!</strong> Post Submitted Successfully.
</div>
</div>';


        }else{
$_SERVER['PHP_SELF']; 
         echo '<div>  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display="none";></span> 
  <strong>Please!</strong> Fill completely.
</div>
</div>';

        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>DP BOSS 143 GUESSING FORUM KALYAN MATKA RESULT GUESSING MADHUR</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- <link rel="shortcut icon" href="img/favicon.ico"> -->

<style>
html{overflow-x:hidden;scroll-behavior:smooth}body{background-color:#fc9;color:#000;text-align:center!important;margin-bottom:0;margin-top:4px;font-family:roboto,sans-serif;padding:0 10px}*{margin:0;padding:0;box-sizing:border-box;transition:all .3s ease-in-out}a:hover,a{text-decoration:none}.my-bdr{margin-bottom:5px;border:2px solid #eb008b;border-radius:10px 0 10px 10px;overflow:hidden}.btn{display:inline-block;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;padding:5px 10px;font-weight:500;border-radius:8px 0}.logo-div{padding:7px 0 4px}footer.my-bdr{background-color:#ffc285;border-color:#a127ac;margin-top:12px;padding-bottom:12px;padding-top:6px;margin-bottom:55px}footer h4{font-size:32px;color:#E91E63;line-height:2;font-style:normal;text-shadow:1px 1px 2px #fff}footer .ftr-btn-div{display:flex;justify-content:center;margin-bottom:12px}footer .btn-back{margin:0 6px}footer .btn{font-weight:700;color:#fff;padding:4px 14px 2px;font-size:20px;border-radius:50px;text-shadow:1px 1px 2px #444;font-style:normal;transition:all .3s;transform:scale(1);border:2px solid #950435;background:#e71e62}footer .btn:hover{border:2px solid #781182;background:#a127ac}footer h5{color:#E91E63;font-size:20px;padding-bottom:6px;text-shadow:1px 1px 2px #fff}.browser-info{padding:10px 10px}.browser-info p,.browser-info b{font-size:16px;color:#cc0000}.browser-info p{margin-top:10px}.kalan-heading{background-image:linear-gradient(45deg,#9c27b0,#e91e63,#9c27b0);padding:5px 10px;margin-bottom:5px}.kalan-heading h4{color:#fff;font-size:24px;text-shadow:1px 1px 2px #333}.post-head{position:relative;border-color:#7f0090;height:50px;background:#aa00c0}.post-head h4,.post-head a{position:absolute;top:50%;color:#fff;font-size:24px}.post-head h4{left:50%;transform:translate(-50%,-50%);letter-spacing:1px}.post-head a{right:10px;border:2px solid #a5a5a5;transform:translate(0px,-50%);background-color:white;color:red;font-size:16px}.post-head a:hover{background-color:crimson;color:white;text-shadow:1px 1px 2px #9f0524;border-color:aliceblue}.post-rules .para22 p{color:red;font-size:20px;font-style:italic;font-weight:bold;padding-top:5px}.post-rules hr{border-width:0;border-top:1px solid #dc143c;margin-top:5px;margin-bottom:5px}.post-rules .para33 p{color:red;font-size:13px;font-weight:600;padding-bottom:2px}.read-more-btn{display:block;background-color:crimson;color:#fff;font-size:17px;margin-top:6px;padding:5px}.read-more-btn:hover{background-color:#ff6a9d;text-shadow:1px 1px 2px #c43767}.refresh-btn{background-color:#E91E63;color:#fff}.message-box{padding:7px;border-color:#024c88;margin-top:5px}.message-box h4{padding-bottom:6px;font-size:24px;color:#074f88;text-decoration:underline}.message-box textarea{border-color:#0073d1;width:100%;padding:10px 10px;font-size:16px;outline:none}.message-box .login-btn{display:block;width:120px;margin-left:auto;margin-right:auto;background-color:#024c88;color:#fff;text-shadow:1px 1px 3px #444}.com-card{border-color:#0669b8}.com-head{display:flex;justify-content:space-between;background-color:#2196F3;padding:4px 10px 3px}.com-head span,.com-head a{color:#fff;display:flex;flex-direction:column;justify-content:center;font-style:italic}.com-head a{font-size:26px}.com-head span{font-size:18px}.com-body{background-color:#fc9;padding:7px 10px}.com-body p{line-height:1.6}.com-text{padding:10px 0}.btn-group{display:flex}.btn-group .btn{width:50%;border-radius:0;padding-top:7px;padding-bottom:7px;font-size:18px;letter-spacing:0px}.btn-group .btn-1{background-color:#E91E63;color:#fff}.btn-group .btn-2{background-color:aquamarine;color:#003864}.btn-group .btn-3{background-color:#00a4ff;color:#fff}.btn-group .btn-4{background-color:chartreuse;color:#102000}.btn-group .btn:hover{background-color:#ffffff;color:#2196f3;text-shadow:1px 1px 2px #cfcfcf;font-weight:700}.page-num{margin-top:31px}.page-num ul{list-style:none;justify-content:center}.page-num li{display:inline-block;margin-bottom:10px}.page-num a{border:1px solid #b040a6;margin-left:2px;margin-right:2px;font-size:18px;display:inline-block;border-radius:4px;padding:5px 10px}.page-num .selected a{background-color:#9C27B0;color:#fff}.page-num a:hover{background-color:#afa}.go-to-top{margin-top:10px;background-color:#FF9800;color:#fff;border:2px solid #aa6500}.fixed-bottom{position:fixed;right:0;display:flex;bottom:0;left:0;z-index:1030;background-color:#f8f9fa;box-shadow:0 2px 10px 1px #000}.fixed-bottom a{color:#333;font-weight:700;font-size:15px;width:25%;padding-top:10px;padding-bottom:10px;border-right:1px solid #7e7e7e}.fixed-bottom a:last-child{border-right-width:0}.fixed-bottom a:hover{background:#e6aaff;color:red}.modal{outline:none!important;pointer-events:none;opacity:0;transition:opacity 0.3s;position:fixed;top:45%;left:0;right:0;max-width:400px;margin:0 auto;padding:10px 10px;background:#fff;border-radius:4px;box-shadow:0 3px 10px rgba(0,0,0,0.3);transform:translateY(-50%)}.modal-close-btn{cursor:pointer;position:absolute;right:10px;top:5px;font-size:24px;background-color:#E91E63;width:25px;height:25px;display:flex;justify-content:center;flex-direction:column;border-radius:50%;color:#Fff}.overlay2,.overlay{pointer-events:none;opacity:0;transition:opacity 0.3s;position:fixed;top:0;left:0;right:0;bottom:0;width:100%;height:100%;background-color:rgba(0,0,0,0.7)}.is-visible{opacity:1;pointer-events:auto}.modal h5{font-size:20px}.modal .div11{border-bottom:1px solid #aaa}.modal .my-label11{font-size:18px}.modal .num11{padding:4px;outline:none!important;width:120px}.modal .num22{outline:none!important;display:block;margin:10px auto;padding:5px;width:100%}.modal .textarea-11{width:100%;outline:none!important;padding:10px;margin-bottom:9px}.modal form{padding-top:10px}.modal .my-btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem}.modal .sub-btn{color:#fff;background-color:#007bff;border-color:#007bff}.modal .close-btn{color:#fff;background-color:#6c757d;border-color:#6c757d}@media only screen and (max-width:500px){body{padding-left:5px;padding-right:5px}.post-head{position:initial;height:auto}.post-head h4,.post-head a{position:initial;transform:inherit}.post-head a{margin-bottom:5px;margin-top:5px}.btn-group .btn{font-size:14px}.modal{width:90%}}</style>

</head>
<body>
<!-- logo -->
<div class="logo-div my-bdr" id="top">
	<img src="img/logo.png" alt="dpboss.net logo" width="200" height="auto">
</div>
<!-- browser info -->
<div class="browser-info my-bdr">
    <b>Use Google Chrome or Mozilla Firefox, Safari Browser to use and see this Website. Do not use UC Browser UC Mini and opera Mini.</b>
    <p>इस वेबसाइट का उपयोग करने और देखने के लिए <b>Google</b> क्रोम या मोज़िला फ़ायरफ़ॉक्स, सफ़ारी ब्राउज़र का उपयोग करें। यूसी ब्राउज़र यूसी मिनी और ओपेरा मिनी का उपयोग न करें।.</p>
</div>
<!-- kalyan heading -->
<div class="kalan-heading my-bdr">
	<h4>Kalyan matka result satta matka guessing forum all satta bazar guessing</h4>
	<h4>सात्त मटका कल्याण मटका  मटका रेसुल्ट</h4>
</div>
<!-- post-rules -->
<div class="post-head my-bdr">
    <h4>☔ POSTING RULES ☔</h4>
    <?php if(isset($_SESSION['id'])){  ?>
    <a href="guestlogout.php" class="logout-btn btn">Logout</a>
    <?php } elseif(isset($_SESSION['fakeid'])){?>
      <a href="guestlogout.php" class="logout-btn btn">Logout</a>
      <?php } ?>
</div>
<!-- post body -->
<div class="post-rules my-bdr" style="border-color: #aa00c0;">
	<div class="para22">
		<p>2 OPEN YA CLOSE </p>
		<p>6 JODI </p>
		<p>AUR 8 PANNA </p>
		<p>AUR RESULT TIME SE 20 MIN PHELE GAME POST KARNA HOGA....!!!! </p>
		<p>Dont Mention Date Or Time In Your Post. </p>
	</div>
	<hr>
	<div class="para33">
		<p>Top 10 Guesser Of Guessing Forum..</p>
		<p>Will Be Allowed To Experts Forum & Chatforum</p>
		<p>Top 10 Guessers Will Be Announced On Every Sunday</p>
	</div>
	<a href="#" class="read-more-btn">Click Here To Read Full Guessing Forum Rules</a>
</div>
<div>
	<a href="#" class="refresh-btn btn">Refresh</a>
</div>
<!-- message-box -->
<form class="text-center" action="guessing_form.php" method="post">

<div class="message-box my-bdr">
	<h4>COMMENT BOX</h4>
    <textarea class="my-bdr" rows="5" name="body" placeholder="enter text here..."></textarea>
    
                    <?php

                   
                  // $data['id']=$_SESSION['id'];
                   

                   if(isset($_SESSION['id'])){  
                    $data['id']=$_SESSION['id'];
                   
                     ?>
    <input type="text" name="author" value="<?php echo $data['id'] ?>" style="display:none; ;">

    <input class="login-btn btn" name="submitpost" type="submit" value="SUBMIT" />
          <?php }elseif (isset($_SESSION['fakeid'])){
 $dataf['fakeid']=$_SESSION['fakeid'];  ?>

<input type="text" name="fakeuser" value="<?php echo $dataf['fakeid']; ?>" style="display: none;">
<input class="login-btn btn" name="submitfakepost" type="submit" value="SUBMIT" />

 
        <?php  } else{ ?>



    <a href="reglogin.php" class="login-btn btn">LOGIN</a>
    <?php }  ?>
</div>

</form>


<?php   $sql="SELECT * from posts p left outer join myguests q on q.id=p.author left outer join fakeuser r on r.fakeid=p.fakeuser left outer join admin s on s.admin_id=p.admin_id left outer join subadmin t on t.subadmin_id=p.subadmin_id order by post_id DESC";
      // echo $sql;die;
            $res=mysqli_query($db,$sql) or die(mysqli_error($db));
               // $data=$res->fetch_assoc();
               // var_dump($data);
                $i=1;
                if ($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {   

?>


<!-- comment-card -->
<div class="comments-div">
	<div class="com-card my-bdr">
		<div class="com-head">
			<a href="#"><?php echo $row['name']; echo $row['firstname']; echo $row['admin_name']; echo $row['fullname']; ?></a>
		  <span><?php echo $row['post_time']; ?></span>
		</div>



   
		<div class="com-body">
    <p style="background-color:#FFF" class="com-body">
    <?php 
     echo $row['body'];
     if($row['repost_id'])
     echo": Reposted by ".$row['name'].$row['firstname']."<br><br>"; ?></p>
<p>
    <?php 
   
if($row['repost_id']){
  $sql_repost="SELECT body,author,fakeuser FROM posts WHERE repost_id='".$row['repost_id']."' AND publication_status=1 ";
  $res_repost=mysqli_query($db,$sql_repost) or die(mysqli_error($db));
  
  while($datare=$res_repost->fetch_assoc()){
   
  $sql_post="SELECT body,author FROM posts WHERE post_id='".$row['repost_id']."' AND publication_status=1 ";
  
  $res_post=mysqli_query($db,$sql_post) or die(mysqli_error($db));
  while($data=$res_post->fetch_assoc()){
    echo $data['body'];
  
  }
  echo '</p><br><p>';
break;
echo $datare['body']; 
 

     
  }
 
  
}
// echo $row['body'];

 
?>
			</p>
			
		</div>

		
		
		<div class="btn-group">
    
		<?php if(isset($_SESSION['id'])){  
                    $data['id']=$_SESSION['id'];  ?>

<a href="#" class="btn btn-3">Go to Top</a>
    <a href="#" class="btn btn-4">Go to Bottom</a>
			<a id="btn-modal-b" class="btn btn-1" onclick="showPost('postid_<?php echo $i; ?>')" data-id="<?php echo $row['post_id']; ?>" data-toggle="modal" data-target="#modal2">Quote</a>

			<?php     }elseif (isset($_SESSION['fakeid'])){
 $dataf['fakeid']=$_SESSION['fakeid'];  ?>
 <a id="btn-modal-b" class="btn btn-1" onclick="showPost('postid_<?php echo $i; ?>')" data-id="<?php echo $row['post_id']; ?>" data-toggle="modal" data-target="#modal2">Quote</a>
 <?php }else{ ?>
  <a href="#" class="btn btn-3">Go to Top</a>
    <a href="#" class="btn btn-4">Go to Bottom</a>
	<a href="reglogin.php" class="btn btn-1" >Quote</a>
    <?php } ?>
    
			</div>
		<div class="btn-group">
			<!-- <a href="#" class="btn btn-3">Go to Top</a> -->
			<!-- <a href="#" class="btn btn-4">Go to Bottom</a> -->
		</div>
	</div>
	<br>
</div>


<?php $i++; } } ?>
<div class="page-num">
	<ul>
		<li><a href="#">PREV</a></li>
		<li class="selected"><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">6</a></li>
		<li><a href="#">...</a></li>
		<li><a href="#">99</a></li>
		<li><a href="#">100</a></li>
		<li><a href="#">NEXT</a></li>
	</ul>
</div>
<!-- go-to-top --> 
<div>
	<a href="#" class="go-to-top btn">GO TO TOP</a>
</div>
<!-- footer -->
<!--   <a class="btn btn-2" id="btn-modal">(Comment)</a>
  <a id="btn-modal-b">new modal button</a> -->
<footer class="my-bdr">
  <h4>DPBOSS.NET</h4>
  <div class="ftr-btn-div">
  	<a href="#" class="btn btn-home">HOME</a>
  	<a href="#" class="btn btn-back">BACK</a>
  	<a href="#" class="btn btn-dm">DCMA</a> 
  </div>
  <h5>Copyright @2020</h5>
  <h5>Powered by DPBOSS.NET</h5>
</footer>
<!-- fixed bottom -->
<div class="fixed-bottom">
		<a href="#">Home</a>
		<a href="#">Guessing Form</a>
		<a href="#">Expert Forum</a>
		<a href="#">Refresh Page</a>
</div>
<!-- fixed bottom -->
<!-- modal for repost-->
<div class="overlay2" id="overlay2"></div>
<div id="modal2" class="modal show" tabindex="-1">
  <div class="div11">
    <h5 class="modal-title" id="exampleModalLabel">reposting Box</h5>
    <a class="modal-close-btn" id="close-btn3">×</a>
  </div>

  <?php  if(isset($_SESSION['id'])){  
                    $data['id']=$_SESSION['id'];
                   
                     ?>

  <form action="commentbox.php" method="post">
    <div class="divaa">
      <label for="exampleFormControlTextarea1" class="my-label11">Example textarea</label>
      <input type="text" name="author" class="num11" value="<?php echo $data['id'] ?>" style="display:none">
    </div>
    <input type="" name="repost_id" class="mrepost rePost1" style="display:none" >
    <textarea rows="4" name="body" class="textarea-11"></textarea>
    <button type="submit" name="postinsertauthor" class="my-btn sub-btn">Submit</button>
    <button type="button" class="my-btn close-btn" id="close-btn4">Close</button>
  </form>


  <?php } elseif(isset($_SESSION['fakeid'])){  
                    $dataf['fakeid']=$_SESSION['fakeid'];
                   
                     ?>

<form action="commentbox.php" method="post">
    <div class="divaa">
      <label for="exampleFormControlTextarea1" class="my-label11">Example textarea</label>
      <input type="text" name="fakeuser" style="display:none;" value="<?php echo $dataf['fakeid'] ?>">
    </div>
    <input type="" name="repost_id" class="mrepost2 rePost2" style="display:none;"  >
    <textarea rows="4" name="body" class="textarea-11"></textarea>
    <button type="submit" name="postinsert" class="my-btn sub-btn">Submit</button>
    <button type="button" class="my-btn close-btn" id="close-btn4">Close</button>
  </form>

  <?php }  ?>

</div>
<!-- modal for repost-->
<!-- modal for comment-->
<div class="overlay" id="overlay"></div>
<div id="modal" class="modal show" tabindex="-1">
	<div class="div11">
		<h5 class="modal-title" id="exampleModalLabel">Comment Box</h5>
		<a class="modal-close-btn" id="close-btn">×</a>
  </div>
  
  <?php  if(isset($_SESSION['id'])){  
                    $data['id']=$_SESSION['id'];
                   
                     ?>

	<form action="commentbox.php" method="post">
		<div class="divaa">
			<label for="exampleFormControlTextarea1" class="my-label11">Example textarea</label>
			<input type="" class="num11" name="user_id" style="display:none;" value="<?php echo $data['id'] ?>">
		</div>
		<input type="text" name="post_id" class="comnt mcomnt" style="display:none">
		<textarea rows="4" class="textarea-11" name="quote" ></textarea>
		<button type="submit" class="my-btn sub-btn" name="commentinsertauthor">Submit</button>
		<button type="button" class="my-btn close-btn" id="close-btn2">Close</button>
  </form>
  
  
 <?php } elseif(isset($_SESSION['fakeid'])){  
                    $dataf['fakeid']=$_SESSION['fakeid'];
                   
                     ?>

<form action="commentbox.php" method="post">
		<div class="divaa">
			<label for="exampleFormControlTextarea1" class="my-label11">Example textarea</label>
			<input type="" class="num11" name="user_id" style="display:none;" value="<?php echo $dataf['fakeid'] ?>">
		</div>
		<input type="text" name="post_id" class="num22 mcomnt" style="display:none">
		<textarea rows="4" class="textarea-11" name="quote" ></textarea>
		<button type="submit" class="my-btn sub-btn" name="commentinsert">Submit</button>
		<button type="button" class="my-btn close-btn" id="close-btn2">Close</button>
  </form>

  <?php } else{  ?>


<form action="commentbox.php" method="post">
		<div class="divaa">
			<label for="exampleFormControlTextarea1" class="my-label11">Example textarea</label>
			<input type="" class="num11" name="user_id" style="display:; ;" value="Guest">
		</div>
		<input type="text" name="post_id" class="num22 mcomnt" style="display:">
		<textarea rows="4" class="textarea-11" name="quote" ></textarea>
		<button type="submit" class="my-btn sub-btn" name="commentinsert">Submit</button>
		<button type="button" class="my-btn close-btn" id="close-btn2">Close</button>
  </form>

  <?php }  ?>

</div>
<!-- modal for comment-->




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script>
//modal for repost

       
  var modalBtns = Array.from(document.querySelectorAll("#btn-modal-b"));
modalBtns.forEach(function(btn){
  btn.onclick = function() {
    var modal = btn.getAttribute('data-modal');
  document.getElementById('overlay2').classList.add('is-visible');
  document.getElementById('modal2').classList.add('is-visible');
  // 
  var dataId = this.getAttribute("data-id");
  console.log(dataId);

  const repostData5441 = document.querySelectorAll('.mrepost');
  repostData5441.forEach(input => 
      document.querySelector(".rePost1").value = dataId
  );
  const repostData6546466 = document.querySelectorAll('.mrepost2');
  // console.log(repostData6546466);
  
  repostData6546466.forEach(input => 
      document.querySelector(".rePost2").value = dataId
  );
  }
});

document.getElementById('close-btn3').addEventListener('click', function() {
  document.getElementById('overlay2').classList.remove('is-visible');
  document.getElementById('modal2').classList.remove('is-visible');
});
document.getElementById('close-btn4').addEventListener('click', function() {
  document.getElementById('overlay2').classList.remove('is-visible');
  document.getElementById('modal2').classList.remove('is-visible');
});
document.getElementById('overlay2').addEventListener('click', function() {
  document.getElementById('overlay2').classList.remove('is-visible');
  document.getElementById('modal2').classList.remove('is-visible');
});

// modal for comment 
  var modalBtns = Array.from(document.querySelectorAll("#btn-modal"));
modalBtns.forEach(function(btn){
  btn.onclick = function() {
    var modal = btn.getAttribute('data-modal');
	document.getElementById('overlay').classList.add('is-visible');
	document.getElementById('modal').classList.add('is-visible');

  var dataId = this.getAttribute("data-id");
  console.log(dataId);

  const repostData54412 = document.querySelectorAll('.comnt');
  repostData54412.forEach(input => 
      document.querySelector(".mcomnt").value = dataId
  );
  const repostData6546466 = document.querySelectorAll('.mcomnt');
  // console.log(repostData6546466);
  
  repostData6546466.forEach(input => 
      document.querySelector(".rePost2").value = dataId
  );
  }
});
document.getElementById('close-btn').addEventListener('click', function() {
	document.getElementById('overlay').classList.remove('is-visible');
	document.getElementById('modal').classList.remove('is-visible');
});
document.getElementById('close-btn2').addEventListener('click', function() {
	document.getElementById('overlay').classList.remove('is-visible');
	document.getElementById('modal').classList.remove('is-visible');
});
document.getElementById('overlay').addEventListener('click', function() {
	document.getElementById('overlay').classList.remove('is-visible');
	document.getElementById('modal').classList.remove('is-visible');
});


    
    function showQuote(id){
        $(".mpost").val( $("#"+id).attr('data-id'));
        
           $("#modal").modal('show');
           console.log(this);
            
        }
    
    function showPost(id){
      
        $(".mrepost").val( $("#"+id).attr('data-id'));
        
           $("#modal2").modal('show');
           console.log(this);
            
        }


        //  function showAgainPost(id){
        // $(".mrepostagain").val( $("#"+id).attr('data-id'));
        
        //    $("#exampleModalagainpost").modal('show');
        //    console.log(this);
            
        // }

        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

</script>

</body>
</html>