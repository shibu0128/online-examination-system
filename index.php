<!DOCTYPE html>
<html lang="en">
<head>
  <title>ONLINE EXAMINATION</title>
 <style> 
 body{
 font-family:sans-serif;
  background-image:url('bg.jpg');
  background-size:cover;
}
#log1{
background-color:rgba(0,0,0,0.1);
padding-top:2px;
margin:0 auto;
  margin-top:1px;
  padding-left:40px;
  border-radius:20px;
}
#log2{

padding:6px 4px;
margin-top:20px;
-webkit-box-shadow:-5px 2px 62px 8px rgba(0,0,0,0.75);
-moz-box-shadow:-5px 2px 62px 8px rgba(0,0,0,0.75);
box-shadow:-5px 2px 62px 8px rgba(0,0,0,0.75);
}
h2{
color:red;
}
log3{
 background-color:rgba(0,0,0,0.1);   
}
</style>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body > 
<div style="background-image: url('bg.png');">
        <div class="container">
			<div class="row">
                <div class="col-sm-12">	
					<div class="panel panel-success">
					  <div class="panel-heading"><h2 style="font-family:MV Boli;">Online Examination System</h2></div>
					  <div class="panel-body"><h4 style="font-family:MV Boli;">Test Yourself!</h4></div>
					</div>
				</div>	
			</div>
		</div><br><br>



 
		<div class="container">
			   <div class="row">
				    <div class="col-sm-6">	  
						   <div class="panel panel-info">
							
				                <div class="panel-heading" ><h2 style="font-family:MV Boli;">Login</h2></div>
							     <div class="panel-body">
								 
								 <?php
									   if(isset($_GET['run'])  && $_GET['run']=="failed")
									   {
										   echo "your email or password is not correct!"
		;							   }
							     ?>
							
								  <form id="log1" action="signin_sub.php" method="post" >
										<div  id="log3" class="form-group">
										  <label for="email">Email:</label>
										  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
										</div>
										<div class="form-group">
										  <label for="pwd">Password:</label>
										  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
										</div>
										<div class="checkbox">
										  <label><input type="checkbox"> Remember me</label>
										</div>
									<button type="submit" class="btn btn-default">Submit</button>
								  </form>
								</div>
						  </div>
						  
				    </div>
				  
					 
					
						  
					<div class="col-sm-6">	  
						   <div class="panel panel-info">
							  <div class="panel-heading"><h2 style="font-family:MV Boli;">Sign UP</h2></div>
							     <div class="panel-body">
								 
								 
                                        
								         <?php 
										     if(isset($_GET['run']) && $_GET['run']=="success")
											 {
												 echo "<mark>you are successfuly registered!</mark>";
											 }												 
										?>
										
								  <form id="log2" role="form" action="signup_sub.php" method="post" enctype="multipart/form-data" >
								       
										<div class="form-group">
										  <label for="name">Name:</label>
										  <input type="text" class="form-control" name="n" id="name" placeholder="Enter name">
										</div>
										<div class="form-group">
										  <label for="email">Email:</label>
										  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
										</div>
										<div class="form-group">
										  <label for="pwd">Password:</label>
										  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
										</div>
										
										<div class="form-group">
										  <label for="file">Upload Image:</label>
										  <input type="file" class="form-control"  id="file" name="img">
										</div>
										<div class="checkbox">
										  <label><input type="checkbox"> Remember me</label>
										</div>
									<button type="submit" class="btn btn-default">Submit</button>
								  </form>
								</div>
						  </div>
						  
				    </div>
			</div>
		</div>

</body>
</html>
