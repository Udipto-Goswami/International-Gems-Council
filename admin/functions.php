<?php

function redirect($location){


    return header("Location:" . $location);


}
	


function login_user($username, $password){

	global $connection;
	global $value;
	//print_r($connection);
	$username = trim($username);
	$password = trim($password);
	
	$username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    echo $password;
    $password = hash('sha512',(md5($password)));
    $query = "SELECT * FROM users WHERE username = '{$username}' ";
    $select_user_query = mysqli_query($connection, $query);

    if(!$select_user_query) {

        die("QUERY FAILED". mysqli_error($connection));

    }

     while($row = mysqli_fetch_assoc($select_user_query)) {
          
          $db_user_id = $row['id'];
          $db_username = $row['username'];
          $db_user_password = $row['password'];
          $db_user_role = $row['role'];
          $db_user_created = $row['created'];
          $db_user_modified = $row['modified'];
         
          
      
      }

    // $verify = password_verify($password,$db_user_password);
     //echo $verify;
      if($password == NULL){

      	 redirect("/International Gems Council/index.php");
      }
		else if ($password == $db_user_password) {
           
        $_SESSION['username'] = $db_username;
        $_SESSION['created'] = $db_user_created;
        $_SESSION['modified'] = $db_user_modified;
        $_SESSION['role'] = $db_user_role;
            
        //echo "redirecting";
        redirect("/International Gems Council/admin/index.php");
        //$value =0;
        


        } else {




        redirect("/International Gems Council/index.php");
        //$value = 1;
         
        }
        
}






?>