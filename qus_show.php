<?php 
include("class/users.php");
$qus=new users;
$cat=$_POST['cat'];
$qus->qus_show($cat);
$_SESSION['cat']=$cat;

/*echo "<pre>";
print_r($qus->qus);*/
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  
  </script>
</head>
<style type="text/css">
body{
background-image:url(kh.jpeg);
background-size:cover;
}
</style>
<body style="background-image: url('img/a.jpg');">

	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
	
			<h2 style="font-family:MV Boli;" > EXAMINATION START </h2><br><h6>Good luck!</h6><br>
			
			<form method="post" action="answer.php">
		<?php
		 $i=1;
		foreach($qus->qus as $qust){  ?>
		
			<table class="table table-bordered">
				<thead>
					<tr class="Success">
						<th>&emsp;<?php echo $i; ?>.&emsp;<?php echo $qust['question'];?> </th>
					</tr>
				</thead>
				<tbody>
				<?php if(isset($qust['ans1'])){ ?>
				     <tr >
					    <td>&nbsp;1&emsp;<input type="radio"  value="0" name="<?php echo $qust['id'];?> "/>&nbsp;<?php echo $qust['ans1'];?></td>
					 </tr><?php }?>
					  <tr >
					  <?php if(isset($qust['ans1'])){ ?>
					    <td>&nbsp;2&emsp;<input type="radio"   value="1" name="<?php echo $qust['id'];?> "/>&nbsp;<?php echo $qust['ans2'];?></td>
					 </tr><?php }?>
					  <tr >
					  <?php if(isset($qust['ans1'])){ ?>
					    <td>&nbsp;3&emsp;<input type="radio"  value="2"  name="<?php echo $qust['id'];?> "/>&nbsp;<?php echo $qust['ans3'];?></td>
					 </tr><?php }?>
					  <tr >
					  <?php if(isset($qust['ans1'])){ ?>
					    <td>&nbsp;4&emsp;<input type="radio"   value="3" name="<?php echo $qust['id'];?> "/>&nbsp;<?php echo $qust['ans4'];?></td>
					  </tr><?php }?>
					  
					   <tr >
					     <td><input type="radio"  checked="checked" style="display:none;" value="not_attempt" name="<?php echo $qust['id'];?> "/></td>
					  </tr>
					 
				</tbody>
			</table>
		<?php $i++;} ?>
		<center><button type="submit" value="submit" action="answer.php" class="btn btn-success">Submit</button></center>
		</form>
	
		
</div>
<div class="col-sm-2"></div>
</div>
</body>
</html>
