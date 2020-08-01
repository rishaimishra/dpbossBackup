<?php

  require_once('../../connect.php');
session_start();

$row['admin_id']=$_SESSION['admin_id'];

        if(isset($_SESSION['admin_id'])){  

                $_SERVER["PHP_SELF"];
                }

                else{ 

                   
 header("Location: ../login.php"); 


                   }  ?>


   

 <?php include 'header.php';?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
       
        <?php include 'sidebar.php';?>




        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                <h1>This is notification page</h1>

                <?php
                
              
                 
                 
                
                //  $datas=json_encode($_POST['notication']);
                if(!empty($_POST['title'])){
                    $title = $_POST['title'];
                }else{
                    $title="test title";
                }
                
                if(!empty($_POST['body'])){
                    $body = $_POST['body'];
                }else{
                    $body="THis is body";
                }
                
                if(!empty($_POST['reg_id'])){
                    $id = $_POST['reg_id'];
                }else{
                    $id="cm-fcpWCSSunW0jkT1lU95:APA91bFg6n2ngtPOKnuDyZVO8_M-ZFf-2yn7Z6KU7rb7QqdJETZCYQISoXMR5q5CZoj3wxzmdbNPihVYoBssrJI3UcU8MbrSGeReXI1raYKGxY8cVn3m1L1evMmq05OBnEUEk7hVcypJ";
                }


                
				
                $url='https://fcm.googleapis.com/fcm/send';
                $headers = array(
                    'Authorization: key=AAAA7iLipe0:APA91bHTgCzlUXDctd23WdlFosAzVQcV2sA1E8dYVg3FSUqcy9vfSzxh2ET5yG4iOhW-tMkk0y5WjPxr62-DXo4hM7rpgsWAizRnIwj8-kAkL_y7JoqjXP2k20ILamm9fBfiMVZX8v-u',
                    'Content-Type: application/json'
                );
                $msg=array(
                    'body'=>$body,
                    'title'=>$title
                );
                $story=array(
                    'story_id'=>'story'
                );

                
                

                $fields = array(
                    'registration_ids' => $_POST['checkbox'],
                    'notification' => $msg,
                    'data'=>$story

                );

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

                $result= curl_exec($ch);
                if ($result === FALSE) {
                    die('Curl failed : ' . curl_error($ch));
                }
                curl_close($ch);
                echo($result);
            
            

                
              ?>
               
                </div>
                </div>
                </div>


            <!-- footer -->
            <!-- ============================================================== -->
     <?php include 'footer.php'; ?>