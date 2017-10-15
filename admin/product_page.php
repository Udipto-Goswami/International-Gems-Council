<?php include "includes/header_admin.php";?>



<?php include"../includes/database.php";?>

<?php
if(isset($_SESSION['username']))  {
 include"includes/navigation_admin.php";
  
}
else{
  include"../includes/navigation_default.php";
}

?>

<?php
if (isset($_GET['id'])) {

	$product_id = $_GET['id'];
	$query ="SELECT * FROM jproducts WHERE id= $product_id";
	$select_product = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_product)) {
           $fetched_id     = $row["id"];
           $product_number = $row["product_no"];
           $description    = $row["description"];
           $weight   	     = $row["weight"];
           $diamond_weight = $row["diamond_weight"];
           $gross_weight   = $row["gross_weight"];
           $color_stwt     = $row["color_stwt"];
           $ctype		   = $row["ctype"];
           $clarity        = $row["clarity"];
           $product_image  = $row["product_image"];
           $date           = $row["date_created"];
           $splitTimeStamp = explode(" ",$date);
           $date           = $splitTimeStamp[0];
       }

}

else{
  header("location:/International Gems Council/admin/gem_database.php");
}
?>



    <div class="cust_div">
        <div class="container-fluid">
        <br>
        <div><center><img class="img img-responsive"src="assets/img/idc_nw.png" width="100px"></center> </div>
        <h1 class="text-center">International Gems Council Gem Record</h1>
        </br>
           <?php
           if(empty($fetched_id)){
            echo'<h1 class="text-center">No records Found!</h1>';

           }
           else{

            echo' <h1>Product Number:' . $product_number . ' </h1>';

            echo'<div><img class="img img-responsive img-thumbnail" src="assets/img/'. $product_image .' "></div>';
            echo'<h2>Description  </h2>';
            echo' <div class="jumbotron"> ';
            echo'<p>Date Recorded: &nbsp' . $date .'</p> ';
            echo'<p>' . $description. '</p>';
            echo'</div>';
            
            echo'<div class="col-lg-5 col-md-12 jumbotron">';
            echo'  <h2 class="g_wt">Gross weight: &nbsp<span> '. $gross_weight . '</span></h2>';
            echo'  <h2 class="g_wt">Weight: &nbsp <span> ' . $weight . '</span></h2>';
            echo'  <h2 class="g_wt">Diamond weight: &nbsp<span>'.   $diamond_weight .'</span></h2></div>';

           echo' <div class="col-lg-5 col-lg-offset-2 col-md-12 jumbotron" >';
           echo' <h2 class="g_wt">Color Saturation: &nbsp<span>' . $color_stwt .'</span></h2>';
           echo' <h2 class="g_wt">Category Type: &nbsp<span> ' . $ctype . '</span></h2>';
           echo' <h2 class="g_wt">Clarity: &nbsp <span>' .  $clarity . ' </span></h2></div>';
           
       echo' </div>';
    echo'</div>';
    echo'</br>';
    echo'</br>';
    echo'<div class="container-fluid cust_ctainer">';
     echo'   <div class="col-lg-3 col-lg-offset-3 col-md-12 cust_cn">';
     echo'       <button class="btn btn-danger btn_gen_cust" type="button">Generate PDF &nbsp <i class="glyphicon glyphicon-print"></i> </button>
        </div>
        <div class="col-lg-3 col-md-12">
            <button class="btn btn-primary" type="button">Generate Gem Card &nbsp <i class="fa fa-file-text"></i> </button>
        </div>
    </div>';

           }
           ?>
    </br>
    </br>
    <div class="container-fluid">
        <h3 class="text-center">Terms &amp; Conditions</h3>
        <div class="col-lg-10 col-lg-offset-1 col-md-12">
            <p class="text-justify">RFC-127 Internation gems Council Demo data.RFC-127 Internation gems Council Demo data.RFC-127 Internation gems Council Demo data.RFC-127 Internation gems Council Demo data.RFC-127 Internation gems Council Demo data.RFC-127 Internation gems
                Council Demo data.RFC-127 Internation gems Council Demo data.RFC-127 Internation gems Council Demo data.RFC-127 Internation gems Council Demo data.RFC-127 Internation gems Council Demo data.RFC-127 Internation gems Council Demo data.RFC-127
                Internation gems Council Demo data.RFC-127 Internation gems Council Demo data.RFC-127 Internation gems Council Demo data.RFC-127 Internation gems Council Demo data. </p>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

<?php include"includes/footer_admin.php";?>