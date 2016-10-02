<html>


<head>
<meta http-equiv="refresh" content="59">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

<?php
   $dbhost = 'localhost';
   $dbuser = 'cube';
   $dbpass = 'cube';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   

$sql = 'SELECT id, contractnumb, plate, lat, longitude, email, telephone, address, info, description, timenow FROM incidents ORDER BY id DESC ';
   mysql_select_db('cube');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

 /*   echo "<tb>";
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	   echo "<tr>";
      echo "<td>{$row['contractnumb']}  </td> ".
         "<td>EMP NAME : {$row['plate']} > </td>".
         "<td>EMP SALARY : {$row['lat']}  </td>".
		 "<td>EMP SALARY : {$row['longitude']}  </td> ".
         "<td>EMP SALARY : {$row['email']}  </td>".
         "<td>EMP SALARY : {$row['telephone']} <br></td> ".
         "<td>EMP SALARY : {$row['address']} <br> </td>".
         "<td>EMP SALARY : {$row['info']} <br> </td>".
         "<td>EMP SALARY : {$row['description']} <br></td> ".

         "--------------------------------<br>";
		 	   echo "</tr>";

   }
   echo "</tb>"; */
 //  echo "Fetched data successfully\n";

?>
<div style="background-color:blue; width:100%; height:50px;"> 
<div class="container">
<table><tr><td valign="top"> <img src="logo.png" alt="..." class="img-responsive" style="background-color:transparent; margin-top:7px; margin-right:7px; width:30px;"></td><td> <h2 style="color:white; margin:7 0 20 0;">ΑΣΦΑΛΙΣΤΙΚΗ ΕΤΑΙΡΕΙΑ </h2> </td></tr></table></div>
</div>  
<br><br>
<div class="container">
<div class="row">
<div class="table-responsive">

<table class="table table-bordered">
  <!-- On rows -->

  <th class="danger">Case Number</th>

<th class="danger">Contract number</th>
<th class="danger">Plate number</th>
<th class="danger">Latitude</th>
<th class="danger">Longitude</th>
<th class="danger">Email</th>
<th class="danger">Telephone</th>
<th class="danger">Address</th>
<th class="danger">Info</th>
<th class="danger">Description</th>


<?php    while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
?>
<!-- On cells (`td` or `th`) -->
<tr>
  <td >    <?php  echo "{$row['id']} "; ?></td>

  <td >    <?php  echo "{$row['contractnumb']} "; ?></td>
  <td class=""> <?php  echo "{$row['plate']} "; ?></td>
  <td class=""><?php  echo "{$row['lat']} "; ?></td>
  <td class=""><?php  echo "{$row['longitude']} "; ?></td>
  <td class=""><?php  echo "{$row['email']} "; ?></td>
  <td class="">    <?php  echo "{$row['telephone']} "; ?></td>
  <td class=""> <?php  echo "{$row['address']} "; ?></td>
  <td class=""><?php  echo "{$row['info']} "; ?></td>
  <td class=""><?php  echo "{$row['description']} "; ?></td>
  

</tr> <?php }?> 
</table>

</div></div></div>

   <?php
      mysql_close($conn); 
?>
</body>


</html>