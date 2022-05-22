<?php
include_once('connection.php');
if(isset($_POST['update'])){
    $fn=$_POST['fn'];
	$pn=$_POST['pn'];
	$ff=$_POST['ff'];
	$ft=$_POST['ft'];
	$dp=$_POST['dp'];
    $rt=$_POST['rt'];
	$ad=$_POST['ad'];
	$cd=$_POST['cd'];
	$tc=$_POST['tc'];
	$sql="UPDATE reserved SET pn='$pn',ff='$ff',ft='$ft',dp='$dp',rt='$rt',ad='$ad',cd='$cd' WHERE fn='$fn'";
	$query=$conn-> exec($sql);

	header('location: view.php');
}
$fn=$_GET['fn'];

$select=$conn->query("SELECT * FROM reserved Where fn='$fn'");

While($row=$select->fetch(PDO::FETCH_ASSOC)){
$fn=$row['fn'];
$pn=$row['pn'];
$ff=$row['ff'];
$ft=$row['ft'];
$dp=$row['dp'];
$rt=$row['rt'];
$ad=$row['ad'];
$cd=$row['cd'];
$tc=$row['tc'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Ticket</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="cssb/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="cssb/style.css" />
</head>

<body>
    
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
                                            <form action="edit.php" method="post">
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Booked By</span>
										<input class="form-control" type="text" name="fn" value="<?php echo $fn ?>" placeholder="Fullname" required readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Phone</span>
		                                            <input class="form-control" type="text" name="pn" value="<?php echo $pn ?>" placeholder="Phonenumber" maxlength="11">
									</div>
                                                                    
								</div>
                                                            <div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">from</span>
										<input class="form-control" type="text" name="ff" value="<?php echo $ff ?>" placeholder="City or airport" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">to</span>
                                                                                <input class="form-control" type="text" name="ft" value="<?php echo $ft ?>" placeholder="City or airport" required>
									</div>
                                                                    
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Departing</span>
										<input class="form-control" type="date" name="dp" value="<?php echo $dp ?>" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Returning</span>
										<input class="form-control" type="date" name="rt" value="<?php echo $rt ?>" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Adults (18+)</span>
										<select class="form-control" name="ad" value="<?php echo $ad ?>" required>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
                                                                    
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Children (0-17)</span>
										<select class="form-control" name="cd" value="<?php echo $cd ?>" required>
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Travel class</span>
										<select class="form-control" name="tc" value="<?php echo $tc ?>" required>
											<option>Economy class</option>
											<option>Business class</option>
											<option>First class</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								
                                                            <div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" style="background-color: #9ed034;" name="update">Update Now</button>
									</div>
                                                                    
								</div>
                                                            <div class="col-md-3">
									<div class="form-btn">
                   <button class="submit-btn" style="background-color: #9ed034;"><a class="submit-btn" href="index1.php" style="background-color: #9ed034;">REturn Home</a></button>
									</div>
                                                                    
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    
</body>

</html>
