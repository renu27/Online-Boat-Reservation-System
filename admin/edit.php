<?php 

	include_once('../config.php');//database
	$db = new Database();
?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Boat Reservation</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/jquery.dataTables.css">

	</head>

	<style type="text/css">
		.navbar { margin-bottom:0px !important; }
		.carousel-caption { margin-top:0px !important }
	</style>

	<body>

		<br />
		<br />
		<br />
		
	
			

		<!-- begin whole content -->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<img src="../img/boatlogo.png" height="50" width="50"> &nbsp;
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="#" style="font-family: Times New Roman; font-size: 30px;">Boat Reservation</a></li>
						</ul>

						<ul class="nav navbar-nav" style="font-family: Times New Roman;">
							<li class="active">
								<a href="index.php">Boats</a>
							</li>
							<li>
								<a href="reservation.php">Reservation</a>
							</li>
							<li>
								<a href="adminfeedbacck.php">Feedback</a>
							</li>
						</ul>
						
						<ul class="nav navbar-nav navbar-right" style="font-family: Times New Roman;">
							<li>
								<?php include_once('../includes/logout.php'); ?>
							</li>
						
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		<!-- end -->

		<br />

		
		<!-- main cntent -->
		<div class="container-fluid">

			<div class="col-md-3"></div>
			<div class="col-md-6">
				<a href="index.php" class="btn btn-success">
					Back
					<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
				</a>
			<br />
			<br />

			

				<form action = "" method = "POST" enctype="multipart/form-data">
						<?php 
								if(isset($_GET['editid']))
								{
									$editid = $_GET['editid'];
									

									 $sql = "SELECT * FROM reservation where r_id=?" ;
									
									$res = $db->getRow($sql, [$editid]);
									//echo "$editid";
									$bid=$res['b_id'];
									$tid =  $res['tour_id'];
									$des =  $res['r_dstntn'];
									$date =  $res['r_date'];
									$am = $res['r_ampm'];
									$hr=$res['r_hr'];
									
									$sql1 = "SELECT * FROM boats where b_id=?" ;
									$res1 = $db->getRow($sql1, [$bid]);
									$bn=$res1['b_name'];
									$im=$res1['b_img'];
									$bo=$res1['b_on'];
									$sql2 = "SELECT * FROM tourist where tour_id=?" ;
									
									$res2 = $db->getRow($sql2, [$tid]);
									$fn=$res2['tour_fN'];
									$mn=$res2['tour_mN'];
									$ln=$res2['tour_lN'];
									
								}
								 //update boat
								 if(isset($_POST['updateboat']))
								 	{
								 		$sss= $_POST['bc'];
										$sql4= "UPDATE reservation SET r_status = ? WHERE r_id = ?";
								 			$res4 = $db->updateRow($sql4, [$sss,$editid]);
											echo '
							 				<div class="alert alert-success">
											  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											  <strong>Success!</strong> Edit Successfully.
											</div>
							 			';
								 	}//end if isset updateboat
						?>

					
					   <div class="form-group">
					    <label for="inputdefault">Torist Name : <?php echo " $fn $mn $ln" ?></label>
					    
					  </div>

					  <div class="form-group">
					    <label for="inputdefault">Boat name : <?php echo " $bn" ?></label>
					    
					  </div>

					  <div class="form-group">
					    <label for="inputdefault">destination : <?php echo " $des" ?></label><br />
					    
						</select>
					  </div>

					  

					   <div class="form-group">
				    	  <label for="inputdefault">Boat Picture :</label>
						<img src="<?php echo $im; ?>" width="50" height="50">
					      
					    </div>
						 <div class="form-group">
					    <label for="inputdefault">Date and Time : <?php echo " $date    $hr $am" ?></label>
					    
					  </div>
					   
					  <div class="form-group">
					    <label for="inputdefault">Status :</label><br />
					    <select name = "bc" class = "btn-lg" style = "width:250px;">
					    	<option >Accepted</option>
							<option >Rejected</option>
							<option >Pending</option>
						</select>
					  </div>


					  <button class="btn btn-info" name = "updateboat">
					  		Save
					  		<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
					  </button>
				</form>	
			</div>
			<div class="col-md-3"></div>
		</div>
		<!-- main cntent -->



 		<script src="../bootstrap/js/jquery-1.11.1.min.js"></script>
 		<script src="../bootstrap/js/dataTables.js"></script>
 		<script src="../bootstrap/js/dataTables2.js"></script>
 		<script src="../bootstrap/js/bootstrap.js"></script>

	</body>
</html>