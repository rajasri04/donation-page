<!DOCTYPE html>
<html lang="en">
<head>
  <title>Donation page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    #content{
	   overflow:auto;
	   margin:10px 10px 100px 10px;
	}
  
</style>
</head>
<body>
 <?php
     include('header.php');
?>
<div class="container-fluid text-center" id="content">  
  
    <div class="jumbotron">
      <h1>Welcome</h1>
	  <img style="float:left" src="donation.png" class="img-rounded" alt="Cinque Terre" width="250" height = "250">
      <h2 align="center-left"><i>we make a LIVING by what we GET</i></h2>
	  <h2 align="center"><i>but we make a LIFE by what we GIVE</i></h2>
      <h2 align="center-right"><b>-winston churchill</b></h2>
   </div> 
      <button type="button" id="labove" class="btn btn-primary btn-lg" onclick="location.href='http://localhost/payment_form/PayUMoney_form.php';">DONATE</button>
 <?php
    if(!empty($_GET['PageName'])){
		
		$pagesdir = 'info';
		$info = scandir($pagesdir,0);
		//unset(info[0],info[1]);
		$PageName = $_GET['PageName'];
		if(in_array($PageName.'.php',$info)){
			include($pagesdir.'/'.$PageName.'.php');
		}
		
	} 
?> 
</div>


</body>
</html>
