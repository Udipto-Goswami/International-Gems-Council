<?php 
global $connection;

function confirmQuery($result) {
    

    if(!$result ) {
          
          die("QUERY FAILED ." . mysqli_error($connection));
   
          
      }
    

}

if(isset($_POST['save'])){

$product_number     = $_POST['product_number'];
$description        = addslashes($_POST['description']);
$weight             = $_POST['weight'];
$gross_weight       = $_POST['gross_weight'];
$diamond_weight     = $_POST['diamond_weight'];
$color_saturation   = $_POST['color_saturation'];
$product_image      = $_FILES['product_image']['name'];
$product_image_temp = $_FILES['product_image']['tmp_name'];

move_uploaded_file($product_image_temp, "../admin/assets/img/$product_image" );

$id = 0;
$ctype = 'JC';
$clarity = 'VS';

$query = "INSERT INTO jproducts(product_no, description , weight, clarity, gross_weight, diamond_weight, color_stwt, product_image) ";
$query .="VALUES ('{$product_number}', '{$description}' , '{$weight}' , '{$clarity}','{$gross_weight}','{$diamond_weight}','{$color_saturation}','{$product_image}')"; 

 $create_gem_query = mysqli_query($connection, $query);  
          
      confirmQuery($create_gem_query);

      $id = mysqli_insert_id($connection);


}


?>

    <div class="modal fade " role="dialog" tabindex="-1" id="new_rec_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content mod_gem_rec">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h1 class="text-center modal-title">New Gem Record</h1></div>
                <div class="modal-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <input class="form-control input-lg gem_rec" type="text" name="product_number" placeholder="Product Number">
                        <textarea class="form-control input-lg gem_rec" name="description" placeholder="Description (1000 characters max)"></textarea>
                        <input class="form-control input-lg wat_flds gem_rec" type="text" name="weight" placeholder="Weight">
                        <input class="form-control input-lg wt_flds gem_rec" type="text" name="gross_weight" placeholder="Gross weight">
                        <input class="form-control input-lg wt_flds gem_rec" type="text" name="diamond_weight" placeholder="Max Weight">
                        <input class="form-control input-lg gem_rec" type="text" name="color_saturation" placeholder="Color Saturation">

                        <p class="help-block gem_rec">Upload an Image of the Product</p>

                        <input type="file" name="product_image">
                        
                    
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-lg btn-gem-cust " type="submit" name= "save">Save</button>
                    <button class="btn btn-default btn-lg " type="reset" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
