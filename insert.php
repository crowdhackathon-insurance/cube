<html>
<head>  </head>


<body>





<?php
   $dbhost = 'localhost';
   $dbuser = 'cube';
   $dbpass = 'cube';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   //trabame tis times
   $contractnumb= $_GET['contractnumb'];
      $plate= $_GET['plate'];

	     $lat= $_GET['lat'];

		    $longitude= $_GET['longitude'];

			   $email= $_GET['email'];

			      $telephone= $_GET['telephone'];

				     $address= $_GET['address'];

					    $info= $_GET['info'];

						   $description= $_GET['description'];
/* 						   
						   $contractnumb="yeaaah";
      $plate= "yeaaah";

	     $lat= "yeaaah";

		    $longitude= "yeaaah";

			   $email="yeaaah";

			      $telephone="yeaaah";

				     $address= "yeaaah";

					    $info= "yeaaah";

						   $description= "yeaaah"; */


   
   $sql = "INSERT INTO incidents (contractnumb,plate,lat,longitude,email,telephone,address,info,description) 
      VALUES ('".$contractnumb."','".$plate."','".$lat."','".$longitude."','".$email."','".$telephone."','".$address."','".$info."','".$description."');";
	  echo  $sql;
      
   mysql_select_db('cube');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($conn);
?>

</body>




</html>