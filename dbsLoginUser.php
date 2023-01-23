<?php  




$db = mysqli_connect('localhost', 'root', '', 'matjre');
if(isset($_POST['Login']))  
{  
    $username = mysqli_real_escape_string($db, $_POST['user_name']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
  
    $query 		= mysqli_query($db, "SELECT * FROM singupuser WHERE  password='$password' and user_name='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
 
  
            if ($num_row > 0) 
            {			
                $_SESSION['user_id']=$row['id'];
                $_SESSION['user_n']=$row['user_name'];
                
                header('location:home.php');
                
            }
        else
            {
                echo '<script>alert("Invalid Username and Password Combination")</script>';
            }
    }

?>  
