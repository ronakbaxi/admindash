<?php
include("openconnection.php"); 
error_reporting(E_PARSE);
if($_POST['Submit'])
{

    
  $url=$_POST['url'];

$query=mysql_query("INSERT INTO url(url_name) VALUES ('$url')")or die(mysql_error());
?>
<script language="javascript">

window.location="dash.php";
</script>
<?php
}
?>

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Admin Dashboard</title>
	<meta name="description" content="">
	<meta name="author" content="">
   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="lib/bootstrap-3.2.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="lib/bootstrap-3.2.0-dist/css/bootstrap-theme.min.css">
   <link rel="stylesheet" href="lib/font-awesome-4.2.0/css/font-awesome.min.css">
</head>
<body>
   <!-- Java Script -->
   <script src="lib/jquery-2.1.1.min.js"></script>
   <script src="lib/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
   <script src="dash.js"></script>
<!-- HEADER -->
<div class="text-center">
   <h1>
      <label class="label label-danger">
         <strong>Enter Your Page URL</strong>
      </label>
   </h1>
</div>
<div class="row" style="margin-top: 100px;">
  <div class="col-md-6 col-md-offset-3">
    <div class="input-group">
      <input type="text" name="url" placeholder="https://www.example.com" class="rb_url_input form-control">
      <span class="input-group-btn">
        <button class="rb_url_submit btn btn-danger" type="submit">Check it out.!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</body>
</html>