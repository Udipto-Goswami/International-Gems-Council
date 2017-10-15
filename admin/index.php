<?php include"../includes/database.php";?>

<?php include"includes/header_admin.php";?>

<?php include"includes/navigation_admin.php";?>


<?php


if($_SESSION['username'] == null)	{
header("Location: ../index.php");
}
else{
    $user = $_SESSION['username'];
}

?>

      <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <header>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 col-md-10 back-color">
                <h1 class="text-center big">Welcome &nbsp<?php echo" $user ";?></h1></div>
        </div>
    </header>


    <section>
        <div class="container">
            <div class="col-lg-3 col-md-3">
                <ul class="list-group">
                    <li class="list-group-item bak item-tog" style="cursor: pointer;"><span class="widget-main-txt"><i class="glyphicon glyphicon-cog"></i> Dashboard </span></li>
                    <li class="list-group-item item-tog"     style="cursor: pointer;"><span><a href="user_database.php" class="cust_ref"><i class="glyphicon glyphicon-user"></i> &nbsp&nbsp&nbsp&nbspUser Database</a></span></li>
                    <li class="list-group-item item-tog tog-cust"   data-target="#new_user_modal" data-toggle="modal"  style="cursor: pointer;"><span><i class="glyphicon glyphicon-user"></i> <i style="font-size: 8px" class="glyphicon glyphicon-plus"></i> &nbspCreate New User</span></li>
                    <li class="list-group-item item-tog"     style="cursor: pointer;"><span><a href="gem_database.php" class="cust_ref"><i class="glyphicon glyphicon-th-list"></i> &nbsp&nbsp&nbsp&nbspGems Database</a></span></li>
                    <li class="list-group-item item-tog" data-target="#new_rec_modal" data-toggle="modal" style="cursor: pointer;"><span class="cust_ref"><i class="glyphicon glyphicon-th-list"></i> <i style="font-size: 8px" class="glyphicon glyphicon-plus"></i> &nbspCreate New Record</span></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-1 col-md-9">
                <div style="font-size: 17px" class="panel panel-default pan-down">
                    <div class="panel-heading heading-pan">
                        <h3 class="panel-title bigger-font">Recent Users</h3></div>
                    <div class="panel-body ">
                        <div class="table-responsive ">
                            <table class="table table-responsive cust_pan_res">
                            
                            <?php include "includes/recent_users.php";?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

    $query_user_count ="SELECT COUNT(*)AS total from users";
    $select_count = mysqli_query($connection,$query_user_count);
    $user_count = mysqli_fetch_assoc($select_count);

    $query_product_count ="SELECT COUNT(*)AS total from jproducts";
    $select_product = mysqli_query($connection,$query_product_count);
    $product_count = mysqli_fetch_assoc($select_product);

    
   
?>




        <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default heading-pan">
                <div class="panel-heading heading-pan boger-font">
                    <h3 class="panel-title bigger-font">Website Overview</h3></div>
                <div class="panel-body">
                    <div class="col-lg-4 col-md-12">
                        <div class="well well-lg well_cust">
                            <h1 class="text-center cust_well_txt"><i class="glyphicon glyphicon-user"></i> <?php print_r($user_count['total']); ?></h1>
                            <h3 class="text-center cust_well_txt">Users </h3></div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="well well-lg well_cust">
                            <h1 class="text-center cust_well_txt"> <i class="glyphicon glyphicon-th-list"></i> <?php print_r($product_count['total']); ?></h1>
                            <h3 class="text-center cust_well_txt">Gem Records</h3></div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="well well-lg well_cust">
                            <h1 class="text-center cust_well_txt"> <i class="glyphicon glyphicon-list-alt"></i> 8</h1>
                            <h3 class="text-center cust_well_txt">Pages </h3></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



  <?php include "includes/create_product.php";?>

  <?php include "includes/add_user.php";?>

    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default heading-pan">
                <div class="panel-heading heading-pan boger-font">
                    <h3 class="panel-title bigger-font">Recent Gems Recorded</h3></div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">

                        <?php include "includes/gem_records.php"; ?>
                        
                            </tbody>

                         </table>




                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include"includes/footer_admin.php";?>