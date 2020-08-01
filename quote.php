<?php 
date_default_timezone_set('Asia/Kolkata');
session_start();
require_once('connect.php'); 
$data['id']=$_SESSION['id'];

if(isset($data['id'])){  

	$_SERVER["PHP_SELF"];
	}

	else{ 

	   
header("Location: reglogin.php"); 

	   } 
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/richtext.min.css">
<style type="text/css">
table{
	display:none;
}
</style>

</head>
<body>


<h1>Enter Your comment</h1>

<form action="commentbox.php" method="post" id="usrform">
<div>
<input type="text" name="author" class="num11" value="<?php echo $data['id'] ?>" style="display:none">

<input type="text" name="lottery_id" class="num11" value="<?php echo $_GET['lottery_id'] ?>" style="display:none">

<textarea id="body_post" rows="10" cols="100"  name="body" form="usrform">

<?php if(@ $_GET['postid']){

			

				$q = " SELECT * FROM posts INNER JOIN myguests ON posts.author=myguests.id
					inner join lottery_name on posts.lottery_id=lottery_name.lottery_id
                      where post_id = $_GET[postid] " ;
				
				$r= mysqli_query($db,$q) or die(mysqli_error($db));
              
				

                while($rrow = $r->fetch_assoc()) {
					$dt = new DateTime($rrow['post_time']);

				$date = $dt->format('d/m/Y');
				$time = $dt->format('H:i');
				
					echo "<p>Originally posted by :" .$rrow['name']."\n";echo $rrow['body']; echo "\n</p><p>";

				} 
}  ?>

</textarea> </p></div>
<div>
<button type="submit" name="postinsertauthor" class="my-btn sub-btn">Submit</button>
    <button type="button" class="my-btn close-btn" id="close-btn4">Close</button> </div>
</form>


<br>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.richtext.min.js"></script>
<script>
        $(document).ready(function() {
            $('#body_post').richText();
        });
</script>
</body>
</html>