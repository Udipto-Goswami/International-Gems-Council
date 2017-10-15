
 <?php





include "../../includes/database.php";
 global $connection;


if(isset($_POST['create_user'])) {
    $username = $_POST['name'];
    echo "$username";
    echo "</br>";
    $password = $_POST['password'];
    echo "$password";
    echo "</br>";
    $user_role= $_POST['user_role'];
    echo "$user_role";
    echo "</br>";

    $password = hash('sha512',(md5($password)));
    $query ="INSERT INTO users (username,password,role) VALUES ('{$username}','{$password}','{$user_role}')";

    

$create_user_query = mysqli_query($connection, $query);  
          if(!$create_user_query)	{
          	       die("QUERY FAILED ." . mysqli_error($connection));
          }


     $id = mysqli_insert_id($connection);
 
header("Location:../index.php");

}



?>

