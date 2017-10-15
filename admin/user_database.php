<?php include"../includes/database.php";?>

<?php include"includes/header_admin.php";?>
<?php include"includes/navigation_admin.php";?>

  <script src="admin/assets/js/jquery.min.js"></script>
    <script src="admin/assets/bootstrap/js/bootstrap.min.js"></script>


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
                    <h3 class="panel-title bigger-font">User Database</h3></div>
                
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-white">
                           
                           
                            <?php
                            global $connection;
                            if(!($connection)){
                                echo "<thred>";
                                echo "<tr> No Records Found!</tr>";
                                echo "</thread>";
                            }

                            else{


                                 echo"<thead>";
                                    echo"<tr>";
                                        echo"<th style='color:rgb(248,52,52);'>UserName </th>";
                                        echo"<th style='color:rgb(248,52,52);'>Joining Date </th>";
                                        echo"<th style='color:rgb(248,52,52);'>Last Modified </th>";
                                        echo"<th style='color:rgb(248,52,52);'>User Role </th>";
                                    echo"</tr>";
                                echo"</thead>";

                                echo"<tbody>";

                                $query = "SELECT username,role, created,modified FROM users";
                                $select_users = mysqli_query($connection,$query);  

                              while($row = mysqli_fetch_assoc($select_users)) {

                                    $username = $row['username'];
                                    $created  = $row['created'];
                                    $userrole = $row['role'];
                              $splitTimeStamp = explode(" ",$created);
                                     $created = $splitTimeStamp[0];

                                    $modified = $row['modified'];
                              $splitTimeStamp = explode(" ",$modified);
                                    $modified = $splitTimeStamp[0];
                                    
                                    if(!$modified){
                                        $modified = 'No modifications';
                                    }

                                   
                                   echo" <tr>";

                                    echo "<td>$username</td>";
                                    echo"<td>$created</td>";
                                      echo"<td>$modified</td>";
                                      echo "<td>$userrole</td>";

                                 echo '<td><a class="btn btn-primary btn-sm" href="">View User</a></td>';
                                 echo '<td><a class="btn btn-info btn-sm" href="">Edit User</a></td>';

                                  echo '<form method="post">';

                                 echo'<input type="hidden" name="username" value= ' . "$username" . '>';
                                 if($user ==$username)  {
                                   echo '<td><input class="btn btn-success btn-sm disabled" type="button" value="User Online"</td>';
                                 }
                                 else{
                                  echo '<td><input class="btn btn-danger btn-sm" type="submit" name="delete_user" value="Delete User"</td>';
                                 }
                    
                                echo '</form>';


                                // echo "<td><button class='btn  btn-sm btn-danger'>Delete User</button></td>";
                                    echo"</tr>";


                              }

                            }


 ?>


                        </table>


<?php

  if(isset($_POST['delete_user'])){   

    $username= $_POST['username'];              
 $query = "DELETE FROM users WHERE username = '{$username}' ";
 $delete_query = mysqli_query($connection, $query);




header("Location:/International Gems Council/admin/user_database.php");
                                    
}

?>


                    </div>
                
            </div>
        </div>
   
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   
   <?php include"includes/footer_admin.php";?>