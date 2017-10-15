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
                                    echo"</tr>";
                                echo"</thead>";

                                echo"<tbody>";

                                $query = "SELECT username, created,modified FROM users ORDER BY created DESC Limit 2";
                                $select_users = mysqli_query($connection,$query);  

                              while($row = mysqli_fetch_assoc($select_users)) {

                                    $username = $row['username'];
                                    $created  = $row['created'];
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
                                    echo"</tr>";


                              }

                            }


 ?>