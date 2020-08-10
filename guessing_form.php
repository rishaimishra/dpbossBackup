<?php
 require_once('connect.php'); 
 date_default_timezone_set('Asia/Kolkata');
session_start();
$a="";

if (isset($_POST['submitpost'])) {
        $body = $_POST['body'];
        $author = $_POST['author'];
        $lottery = $_POST['lottery'];

        $query="INSERT INTO posts (body,author,lottery_id) VALUES('$body','$author','$lottery')";

              $result=mysqli_query($db,$query) or die(mysqli_error($db));
              $_SERVER['PHP_SELF'];
			  echo '
			  <script>
function myFunction() {
  alert("The form was submitted");
}
</script>';


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
  
</div>
</div>';

        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>DPBOSS.NET | GUESSING FORUM</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- <link rel="shortcut icon" href="img/favicon.ico"> -->
 
<style>
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}
.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 2s ease-in-out;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}

</style>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="top"></div>
<!-- logo   -->
<div class="logo-div">
	<a href="#">
		<img src="img/logo.png" alt="">
	</a>
</div>
<!-- logo   -->
<!-- para1 -->
<div class="para1">
	<p>
		DpBoss Guesing | Satta Matka | Matka Result | Kalyan Matka | Dpboss | Sattamatka.Com | Satta Matka Guessing | 
		<a href="#" title="Satta matka chart">
			Satta Matka Charts
		</a> 
		| Kalyan Main Milan Matka Bazar| Matka Game | 
		<a href="#" title="Free Game Open To Close">
			Fix Matka Number
		</a> 
		| Free Open To Close 17 | Satta King | DpBoss Matka Guessing | Satta Matka 143 Guessing |
	</p>
</div>
<!-- para1 -->
<!-- forum-rules -->
<div class="forum-rules">
	<div>
		<h4>Forum Rules</h4>
		<ul>
			<li>1. Don't Post Wrong Result.</li>
			<li>2. Dont Post Mobile Number Or Any Other Website Link.</li>
			<li>3. Post Your Guessing Daily.</li>
			<li>4. Don't Post More Than 4 Single Disit.</li>
			<li>5. Don't Use Abbusive Language In Forum.</li>
		</ul>
		<p>Follow All These Other Wise Your ID &amp; IP Would Be <span>Blocked Permanently.</span></p>
	</div>
</div>
<!-- forum-rules -->
<!-- login -->

<!-- message-box -->
<form class="text-center" action="guessing_form.php" method="post" onsubmit="myFunction()">


<div class="login-area">
	<h4>USER LOGIN AREA</h4>
<select class="form-control" name="lottery" id="cars" required>
	<option value="">----- Select -----</option>
		<?php 
$time = date('H:i:s', time());
$query_2 = "SELECT * FROM lottery_name WHERE '".$time."' >= strt_time AND '".$time."' < end_time ";
echo $query_2;
$res=mysqli_query($db,$query_2) or die(mysqli_error($db));
while($row = $res->fetch_assoc()) {  
    // populate the options
  
    echo '<option value="' . $row['lottery_id'] . '">' . $row['l_name'] . '</option>';
   
  }
    ?>
</select>
	<textarea rows="10" name="body" class="form-control" placeholder="Enter text here..." required></textarea>


				<!-- fixed-footer -->
				<div class="fixed-footer">
					<div>
						<a href="#">
							<i class="fas fa-home"></i>
							<span>Go to Home</span>
						</a>
					</div>
					<div>
						<a href="#">
							<i class="fas fa-clipboard-list"></i>
							<span>Guessing Forum</span>
						</a>
					</div>
					<div>
						<a href="#">
							<i class="fas fa-comments"></i>
							<span>Tricks Forum</span>
						</a>
					</div>
					<div>
						<a href="#">
							<i class="fas fa-sync"></i>
							<span>Refresh</span>
						</a>
					</div>
				</div>
				<!-- fixed-footer -->

				<?php

if(isset($_SESSION['id'])){  
 $data['id']=$_SESSION['id'];

  ?>
<input type="text" name="author" value="<?php echo $data['id'] ?>" style="display:none; ;">

<input class="btn-aa my-btn22" name="submitpost" type="submit" value="SUBMIT" />
<?php }elseif (isset($_SESSION['fakeid'])){
$dataf['fakeid']=$_SESSION['fakeid'];  ?>

<input type="text" name="fakeuser" value="<?php echo $dataf['fakeid']; ?>" style="display: none;">
<input class="btn-aa my-btn22" name="submitfakepost" type="submit" value="SUBMIT" />


<?php  } else{ ?>



<a href="reglogin.php" class="btn-aa my-btn22" style="background-color: #e91e63;">LOGIN</a>
<?php }  ?>


	</form>
	<!-- <a href="#" class="btn-bb my-btn22">SIGN UP NOW</a> -->
	<!-- extra features -->
	<div class="extra-feature">
		<h5>Extra feature</h5>
		<a href="#" class="btn-aa1 btn">Emoji</a>
		<a href="#" class="btn-bb1 btn">Special Offer</a>
		<a href="#" class="btn-cc1 btn">Search Users</a>
	</div>
	<!-- extra features -->
</div>
<!-- login -->
<!-- quote-card-div -->


<?php   $sql="SELECT * from posts p left outer join myguests q on q.id=p.author 
				left outer join fakeuser r on r.fakeid=p.fakeuser 
				left outer join admin s on s.admin_id=p.admin_id 
        inner join lottery_name on p.lottery_id=lottery_name.lottery_id
				left outer join subadmin t on t.subadmin_id=p.subadmin_id order by post_id DESC";
      //echo $sql;die;
	  
            $res=mysqli_query($db,$sql) or die(mysqli_error($db));
              
                $i=1;
                if ($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                 
                  $dt = new DateTime($row['post_time']);

                  $date = $dt->format('d/m/Y');
                  $time = $dt->format('H:i A');
                  
?>


<div class="quote-card-div">
	<div class="my-card">
		<div class="card-head">
			<h4><?php echo $row['name']; echo $row['firstname']; echo $row['admin_name']; echo $row['fullname']; ?></h4>
			<h5><?php echo $date;echo "\n".$time; ?></h5>
		</div>
		<div class="card-body">
		<?php 
     if(isset($row['l_name'])){
      echo "<p style='margin-top:10px;line-height: 2;'>".$row['l_name']."</p><br>".nl2br($row['body'])."</p>";	
    
     }
    else{
      echo "<p style='margin-top:10px'><br>".$row['body']."</p>";	
 
    }
    ?>
		</div>
		<div class="card-footer">
		<?php if(isset($_SESSION['id'])){  
			$data['id']=$_SESSION['id'];  ?>
		
	<a href="quote.php?postid=<?php echo $row['post_id']; ?>&lottery_id=<?php echo $row['lottery_id']; ?>" class="card-btn btn-11">[Quote]</a>
	<a href="#top" class="card-btn btn-22">[Top]</a>
	<a href="#bottom" class="card-btn btn-33">[Down]</a>
			<?php     }elseif (isset($_SESSION['fakeid'])){
 					$dataf['fakeid']=$_SESSION['fakeid']; 
			?>
	
	
	<a href="quote.php?postid=<?php echo $row['post_id']; ?>" class="card-btn btn-11">[Quote]</a>
	<a href="#top" class="card-btn btn-22">[Top]</a>
	<a href="#bottom" class="card-btn btn-33">[Down]</a>

			<?php }else{ ?>
  

			<a href="reglogin.php" class="card-btn btn-11">[Quote]</a>
			<a href="#top" class="card-btn btn-22">[Top]</a>
			<a href="#bottom" class="card-btn btn-33">[Down]</a>
			<?php } ?>
		</div>
	</div>
	
</div>

<?php

$i++; } } ?>

<!-- quote-card-div -->
<!-- page-no -->
<div class="page-no">
	<ul class="page-no-ul">
		<li><a href="#">«</a></li>
		<li class="active"><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">6</a></li>
		<li><a href="#">7</a></li>
		<li><a href="#">8</a></li>
		<li><a href="#">»</a></li>
	</ul>
</div>
<!-- page-no -->


<div id="bottom"></div>
<script>
if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

</script>

<script src="ft.js"></script>
</body>
</html>