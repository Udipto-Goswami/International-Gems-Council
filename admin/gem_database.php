<?php include"../includes/database.php";?>

<?php include"includes/header_admin.php";?>
<?php include"includes/navigation_admin.php";?>


<?php


if($_SESSION['username'] == null)   {
header("Location: ../index.php");
}

else{
  $user = $_SESSION['username'];
}

?>


    <header>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 col-md-10 back-color">
                <h1 class="text-center big">Welcome  &nbsp<?php echo " $user";?></h1></div>
        </div>
    </header>
   </br>
  <div class="container-fluid">
        <div class="col-md-12">
            <div class="panel panel-default heading-pan">
                <div class="panel-heading heading-pan boger-font">
                    <h3 class="panel-title bigger-font">Gem Database</h3></div>
                
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-white ">
                           
                                                   <?php

                                                
                            global $connection;
                            if(!($connection)){
                                  echo "<thred>";
                                echo "<tr> No Gem Records Found!</tr>";
                                echo "</thread>";
                            }

                            else{
                                     echo" <thead>";
                               echo" <tr>  ";
                                   echo" <th style='color:rgb(248,52,52);width:160px'>Product Number</th>";
                                    echo"<th style='color:rgb(248,52,52); width:400px '>Description</th>";
                                    echo"<th style='color:rgb(248,52,52);'>Gross Weight</th>";
                                    echo"<th style='color:rgb(248,52,52);'>Color Saturation</th>";
                                    echo"<th style='color:rgb(248,52,52); '>Image</th>";
                                    
                                echo"</tr>";
                            echo"</thead>";

                             echo"<tbody>";

                            $query = "SELECT * FROM jproducts ";
                             $select_product = mysqli_query($connection,$query);  
                            while($row = mysqli_fetch_assoc($select_product)) {
                                $p_id           = $row["id"];
                                $product_number = $row["product_no"];
                                $description    = $row["description"];
                                $gross_weight   = $row["gross_weight"];
                                $color_stwt     = $row["color_stwt"];
                                $product_image  = $row["product_image"];
                                
                                if(strlen($description)>150)  {

                                   $description =substr($description,0,150);
                                   $description.= " . . .";
                                }
                               

                                echo" <tr>";

                                    echo "<td>$product_number</td>";
                                    echo"<td>$description</td>";
                                    echo"<td>$gross_weight</td>";
                                     echo"<td>$color_stwt</td>";

                                      if(!$product_image){
                                        echo"<td>No Image Found!</td>";
                                    
                                }

                                else{
                                     echo"<td><img src='assets/img/$product_image' style='width:50px; height:50px' ></td>";
                                }

                                echo '<td><a class="btn btn-primary btn-sm" href="product_page.php?id=' . $p_id . '">View Gem</a></td>';



                            echo '<td><a class="btn btn-info btn-sm" href="edit_product.php?id=' . $p_id .  '">Edit Gem</a></td>';
                            //mistake
                                 echo '<form method="post">';

                                 echo'<input type="hidden" name="product_number" value= ' . "$product_number" . '>';
                                  echo'<input type="hidden" name="product_image" value= ' . "$product_image" . '>';
                    echo '<td><input class="btn btn-danger btn-sm" type="submit" name="delete_gem" value="Delete Gem"</td>';
                                echo '</form>';
                                     
                                echo"</tr>";






                            }

                        }


                         ?>

                        </table>

<?php

  if(isset($_POST['delete_gem'])){   

    $product_no= $_POST['product_number'];   
    $product_image = $_POST['product_image'];                
 $query = "DELETE FROM jproducts WHERE product_no = '{$product_no}' ";
 $delete_query = mysqli_query($connection, $query);

unlink('assets/img/'. $product_image);


header("Location:/International Gems Council/admin/gem_database.php");
                                    
}

?>
                    </div>
                
            </div>
        </div>
     </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 
   <?php include"includes/footer_admin.php";?>

