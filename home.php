<?php
  include("class/users.php");
  $email=$_SESSION['email'];
  $profile =new users;
  $profile->users_profile($email);
  $profile->cat_shows();
  ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
.navbar {
  overflow: hidden;
  background-color: #210B61;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}
</style>


</head>


<img src="img/header.png" class="" height=200px; width=100% alt="Cinque Terre">

<!..menubar of home page..>
<div class="container" >
  <h2>ONLINE EXAMINATION SYSTEM</h2>
  <div class="navbar">
    <a data-toggle="tab" class="active" href="#home">Home</a>
    <a data-toggle="tab" href="#profile">Profile</a>
    <a data-toggle="tab" href="#admin">Admin</a>
    <a data-toggle="tab" class="right" href="#logout">Logout</a>
  </div>
  
<!..description of home menau ..>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
	  <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Info - </b> This is a regular notification made with ".alert-info"</span>
                  </div>
     <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select">Start Exam</button></center>
	  <div class="col-sm-4"></div>
	  <div class="col-sm-4"><br>
	  <div id="select" class="tab-pane fade">
	  
	  <form method="post" action="qus_show.php" >
      <select class="form-control" id="" name="cat">
	  <option>Select Category</option>
	  <?php
	       
		  foreach( $profile->cat as $category)
		  {?>
	      <option value="<?php echo $category['id']; ?>"><?php echo $category['cat_name'];?></option>
        <?php }?>
		
      </select><br>
	  <center><input type="submit" value="submit" class="btn btn-primary" /></center>
	  </form>
	  
       </div>
	 </div>
	 
	 <!..profile contennt page..>
	<div class="col-sm-4"></div>
	</div>
    <div id="menu1" class="tab-pane fade">
      <h3>Showing profile</h3>
	  
	  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
		<th>Email</th>
		<th>Image</th>
      </tr>
    </thead>
    <tbody>
	
	<?php
	    $profile->cat_shows();
	    foreach($profile->data as $prof);
		{?>
	  <tr>
        <td><h3><?php echo $prof['id'];  ?></h3></td>
        <td><h3><?php echo $prof['name']; ?></h3></td>
		<td><h3><?php echo $prof['email']; ?></h3></td>
		<td><img class="img-circle" alt="<?php echo $prof['name'];?>" src="img/<?php echo $prof['img']; ?>"  width="100px" height=100px" /> </td>
      </tr>
     </tbody>
		<?php    }?>
	 </table>
	  
	  </div>
    <div id="admin" class="tab-pane fade">
      <h3>Admin</h3>
	  <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#login">Admin Login</button></center>
	 <br><br>
	 <center>
	  <div id="login" class="tab-pane fade">
	  <div class="col-sm-6">	  
						   <div class="panel panel-primary">
							
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
									<button type="submit" action="admin\index1.php" class="btn btn-default">Submit</button>
									
								  </form>
								</div>
						  </div>
						  
				    </div>
				  
	  </div>
      </center>

    </div>
    <div id="logout" class="tab-pane fade">
      <h3>Logout</h3>
    </div>
  </div>
</div>
	  
   

</body>
</html>
