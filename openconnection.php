                                                                                                                                   <?php
$con = mysql_connect("localhost","root","baxi1213","admindash");

//$con = mysql_connect("localhost","root","");


if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }// some codemysql_close($con);

mysql_select_db("kutch_real", $con)or die(mysql_error()); 
//mysql_select_db("test", $con)or die(mysql_error()); 
?>