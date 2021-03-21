

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
							<li >
								<a href="index.php">Boats</a>
							</li>
							<li>
								<a href="myreservation.php">Reservation</a>
							</li>
							</li>
							<li class="active">
								<a href="feedback.php">Feedback</a>
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

				<?php 

					include_once('../config.php');//database
					$db = new Database();
					if(isset($_POST['hhh']))
						{
						$tid = $_SESSION['tourID'];
						$f=$_POST['fb'];
						$b=$_POST['bi'];
						$sql = "INSERT INTO feedback (bid,tid,feedb)
									VALUES(?,?,?)
								";
								
								if(!$f)
								{
							echo '
					<div class="alert alert-danger">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Warning!</strong> Feedback is required.
					</div>
				';
			}	
			else
				{
				echo '
					<div class="alert alert-success">
													  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
													  <strong>Success!</strong> Reserved Successfully.
													</div>
				';
				$res = $db->insertRow($sql, [$b,$tid,$f]);
			}
						}
					?>
	
				<form action = "" method = "POST" enctype="multipart/form-data">

					<!--  <div class="form-group">
					    <label for="inputdefault">Boat Name:</label>
					    <input class="form-control" id="inputdefault"  name="bN" type="text">
					  </div>-->

					  <div class="form-group">
					    <label for="inputdefault">FEEDBACK:</label>
					    <input  class="form-control" id="inputdefault" name="fb" type="text">
					  </div>
					  <div class="form-group">
					    <label for="inputdefault">BOAT ID:</label>
						<select class="form-control" id="inputdefault" name="bi">
					  <?php 
			$tid = $_SESSION['tourID'];
			$sql = "SELECT DISTINCT(r.b_id) FROM reservation r INNER JOIN boats b ON b.b_id = r.b_id
			INNER JOIN tourist t ON t.tour_id = r.tour_id
			WHERE t.tour_id = ? order by r.b_id";
			$res = $db->getRows($sql, [$tid]);
			foreach ($res as  $r) {

				$b = $r['b_id'];
			
					  	
					   /*<input  class="form-control" id="inputdefault" name="bi" type="text">*/
							?>
													
													<option/><?php echo $b ?>
					<?php								
			} 
				?>
			</select>
			</div>
		
					 
					  <button class="btn btn-info" name = "hhh">
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