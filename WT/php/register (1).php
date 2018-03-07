<?php
     require 'config.php';
     if(isset($_POST['register'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        if($name==''||$email==''||$password==''){
               $warning= "*****All fields must be filled*****";
        }
        else{
                $query="select * from tbl where email='$email'";
				$sql=mysqli_query($con,$query);
				if(mysqli_num_rows($sql)>0){
					echo '<script type="text/javascript">alert("user already exists .... go to login")</script>';
                }
                else
				{
					 $qry = "INSERT INTO `tbl` ( `name`,`email`, `password`) VALUES ('$name', '$email', '$password')";
					 $sql=mysqli_query($con,$qry);
					 if($sql){
                        header("Location:login.php");
                	}
					else{
						echo '<script type="text/javascript">alert("error")</script>';
					}
				}
       }
   }
?>

<!DOCTYPE html>
<html>
    <head>
            <title>Registration</title>
            <link rel="stylesheet" href="reset.css">
     </head>   
    <body>
           <h1>SMART CLASS BOOKING</h1>
               <a href="" > REGISTER </a>
               <a href="login.php" > LOGIN </a><br />  
                <br /><h2>REGISTER</h2>            
                <?php if(isset($warning) ) echo $warning; ?>
                <form class="form" method="post" action="">
		        Name<input type="text" name="name"><br />
		        Email<input type="text" name="email"><br />
		        Password<input type="password" name="password"><br />
		        <input type="submit" name="register" value="REGISTER">
                 </form>
    </body>  
</html>


