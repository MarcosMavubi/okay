
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Ticket</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="cssb/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="cssb/style.css"/>
</head>

<body>
    
	<div  class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
                                            <form action="reserve.php" method="post">
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Booked By</span>
										<input class="form-control" type="text" name="fn" placeholder="Fullname">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Phone</span>
		                                            <input class="form-control" type="text" name="pn" placeholder="Phonenumber" maxlength="11">
									</div>
                                                                    
								</div>
                                                            <div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">From</span>
										<input class="form-control" type="text" name="ff" placeholder="City or District">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">To</span>
                                                                                <input class="form-control" type="text" name="ft" placeholder="City or District">
									</div>
                                                                    
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Departing</span>
										<input class="form-control" type="date" name="dp" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Returning</span>
										<input class="form-control" type="date" name="rt" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Adults (18+)</span>
										<select class="form-control" name="ad">
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
										<select class="form-control" name="cd">
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
										<select class="form-control" name="tc">
											<option>Economy class</option>
											<option>Business class</option>
											<option>First class</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								
                                                            <div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" style="background-color: #9ed034;" name="submit">Book Now</button>
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
