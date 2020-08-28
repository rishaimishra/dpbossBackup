<?php
ob_start();
require_once('../../connect.php');
session_start();

$row['admin_id'] = $_SESSION['admin_id'];

if (isset($_SESSION['admin_id'])) {

    $_SERVER["PHP_SELF"];
} else {


    header("Location: ../login.php");
}  ?>




<?php include 'header.php'; ?>
<!-- ============================================================== -->
<!-- ============================================================== -->

<?php include 'sidebar.php'; ?>



<!-- Content Section -->

<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">All Fake Users</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Fake Users</a></li>
                                <!-- <li class="breadcrumb-item active" aria-current="page">Data Tables</li> -->
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->

        <?php
        $sql = "SELECT * FROM emoticons";

        $res = mysqli_query($db, $sql) or die(mysqli_error($db));
        ?>





        <div class="row">
            <!-- ============================================================== -->
            <!-- data table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                   
                    <div class="card-body">
                        <?php while ($row = $res->fetch_assoc()) {  ?>
                            <tr>
                                <!--  -->
                                <td><?php echo $row['emoji_name']  ?></td>
                                <td><?php echo $row['image']  ?></td>
                              


                            </tr>

                        <?php  } ?>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end data table  -->
            <!-- ============================================================== -->
        </div>

    </div>
    <!-- ============================================================== -->


</div>

<!-- /Content Section -->





<!-- footer -->
<!-- ============================================================== -->
<?php include 'footer.php'; ?>