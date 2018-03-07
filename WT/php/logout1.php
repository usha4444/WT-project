<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
</head>

<body>
      <h1>SMART CLASS BOOKING</h1>
	  <?php
	    session_destroy();
        header('location:first.php');
	  ?>
      </ul>
    </div>
</body>
</html>