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
                                   echo" <th style='color:rgb(248,52,52);'>Product Number</th>";
                                  echo" <th style='color:rgb(248,52,52);'>Category</th>";
                                    echo"<th style='color:rgb(248,52,52);'>Gross Weight</th>";
                                    echo"<th style='color:rgb(248,52,52);'>Color Saturation</th>";
                                    echo"<th style='color:rgb(248,52,52);'>Image</th>";
                                echo"</tr>";
                            echo"</thead>";

                             echo"<tbody>";

                            $query = "SELECT * FROM jproducts ORDER BY date_created DESC LIMIT 3";
                             $select_users = mysqli_query($connection,$query);  
                            while($row = mysqli_fetch_assoc($select_users)) {

                                $product_number = $row["product_no"];
                                //$description    = $row["description"];
                                $gross_weight   = $row["gross_weight"];
                                $color_stwt     = $row["color_stwt"];
                                $product_image  = $row["product_image"];
                                $ctype          = $row["ctype"];

                               


                                echo" <tr>";

                                    echo "<td>$product_number</td>";
                                    echo "<td>$ctype</td>";
                                    echo"<td>$gross_weight</td>";
                                     echo"<td>$color_stwt</td>";

                                      if(!$product_image){
                                        echo"<td>No Image Found!</td>";
                                    
                                }
                                else{
                                     echo"<td><img src='assets/img/$product_image' style='width:50px; height:50px' ></td>";
                                }


                                    
                                     
                                echo"</tr>";


                            }

                        }


                         ?>