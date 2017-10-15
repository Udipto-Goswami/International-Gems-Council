<?php include"../includes/database.php";?>
<?php include "includes/header_admin.php";?>
<?php include "includes/navigation_admin.php"; ?>

<?php


if($_SESSION['username'] == null)   {
header("Location: ../index.php");
}

else{
  $user = $_SESSION['username'];
}

?>




        <div class="container-fluid">
            <div class="row register-form">
                <div class="col-md-8 col-md-offset-2">
                    <form class="form-horizontal custom-form cust_back" method="post">
                        <h1 style="color:white;">Update Product</h1>
                        
                        <?php

                            if (isset($_GET['id'])) {

                                $updating_product_number = mysqli_real_escape_string($connection, trim($_GET['id']));
                            }

                                $query = "SELECT * FROM jproducts WHERE id = {$updating_product_number}";
                                 $fetch_query = mysqli_query($connection, $query);
                                  while($row = mysqli_fetch_assoc($fetch_query)){
                                    
                                    $p_id           = $row["id"];
                                    $product_number = $row["product_no"];
                                    $description    = $row["description"];
                                    $gross_weight   = $row["gross_weight"];
                                    $weight         = $row['weight'];
                                    $diamond_weight = $row['diamond_weight'];
                                    $color_stwt     = $row["color_stwt"];
                                    $product_image  = $row["product_image"];

                                }


                                    if (isset($_POST['update'])) {

                                    $product_number = $_POST["product_number"];
                                    $description    = addslashes($_POST["description"]);
                                    $gross_weight   = $_POST["gross_weight"];
                                    $weight         = $_POST['weight'];
                                    $diamond_weight = $_POST['diamond_weight'];
                                    $color_stwt     = $_POST["color_stwt"];
                                    

                                    $id = 0;
                                    $ctype = 'JC';
                                    $clarity = 'VS';
                                    
                                    $query = "UPDATE jproducts SET ";
                                    $query.= "product_no = '{$product_number}'," ;
                                    $query.= " description ='{$description}',";
                                    $query.= " weight = '{$weight}'," ;
                                    $query.= " gross_weight = '{$gross_weight}'," ;
                                    $query.= " diamond_weight = '{$diamond_weight}',";
                                    $query.= " color_stwt = '{$color_stwt}'" ;
                                    $query.= " WHERE id = '{$p_id}'" ;                              
                                    
                                     $update_gem_query = mysqli_query($connection, $query);  
                                              
                                         if(!$update_gem_query ) {
          
                                             die("QUERY FAILED ." . mysqli_error($connection));
   
                                        }

                                             //$product_number = $new_product_number;

                                        echo "<p class='bg-success'>Records Updated &nbsp&nbsp&nbsp <a href='gem_database.php'style='color:white;'>Edit More Posts</a> </p>";
                                    }



                            ?>


                        <div class="form-group">
                            <img class="img-thumbnail img-responsive"src="assets/img/<?php echo "$product_image"?>">
                        </div>

                        <div class="form-group">
                            <div class="col-sm-4">
                                <label class="control-label cust_label" >Product Number</label>
                            </div>
                            <div class="col-sm-7 input-column">
                                <input class="form-control" type="text" value="<?php echo "$product_number" ?>" name="product_number" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label class="control-label cust_label" >Description </label>
                            </div>
                            <div class="col-sm-7 input-column">
                               
                                <textarea class="form-control" type="text" name="description"><?php echo stripslashes($description); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label class="control-label cust_label" >Weight </label>
                            </div>
                            <div class="col-sm-7 input-column">
                                <input class="form-control" type="text" value="<?php echo "$weight" ?>" name="weight">

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label class="control-label cust_label" >Gross Weight</label>
                            </div>
                            <div class="col-sm-7 input-column">
                                <input class="form-control" type="text" value="<?php echo "$gross_weight" ?>" name="gross_weight">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label class="control-label cust_label" >Max Weight</label>
                            </div>
                            <div class="col-sm-7 input-column">
                                <input class="form-control" type="text" value="<?php echo "$diamond_weight" ?>" name="diamond_weight">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label class="control-label cust_label" >Color Saturation</label>
                            </div>
                            <div class="col-sm-7 input-column">
                                <input class="form-control" type="text" value="<?php echo "$color_stwt" ?>" name="color_stwt">
                            </div>
                        </div>
                        <button class="btn btn-danger btn-sm " type="submit" name="update">Update Record</button>
                        <button class="btn btn-default btn-sm " type="reset" name="reset">Cancel Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
<?php include "includes/footer_admin.php";?>