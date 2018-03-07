<?php
require 'config.php';
 if(isset($_POST['projector'])) {
        $name=$_POST['name'];
        $department=$_POST['department'];
        $datee=$_POST['date'];
        $from=$_POST['from'];
        $to=$_POST['to'];
        
        $query="select * from projector where `fromm`='$from' AND `too`='$to' AND `datee`='$datee' ";
        $sql=mysqli_query($con,$query);
	if(mysqli_num_rows($sql)>0){
			echo '<script type="text/javascript">alert("Someone has already booked in this period of time...You are in waiting list")</script>';
	}
    else{		
         $qry = "INSERT INTO `projector`( `name`, `department`,`datee`,`fromm`,`too`) VALUES ('$name','$department', '$datee', '$from','$to')";
         $sql=mysqli_query($con,$qry);
	    if($sql){                   
	    	echo '<script type="text/javascript">alert("You have booked the projector")</script>';
	    }
        else{
            echo '<script type="text/javascript">error</script>';
        }
    }
  }		
?>

<!DOCTYPE html>
<html>
<head>
<title>Projector Booking</title>
<link rel="stylesheet" href="reset.css">
</head>
<body>
	<h2>Projector Booking</h2>
	<a href="logout.php">LOGOUT</a>

	<form action="" method="POST">
	<br />	Name<input type="text" name="name"><br />
		Department<input type="text" name="department"><br />
		ChooseDate<input type="date" id="book" name="date"> <br />
         	ChooseFromTime<input type="text" id="book" name="from"><br />
		ChooseToTime<input type="text" id="book" name="to"><br />
		<input type="submit" name="projector" value="BOOKING">
	</form>
</body>

</html>
