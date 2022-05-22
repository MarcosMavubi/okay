<?php

include_once('connection.php');

$sql="SELECT * FROM reserved";
$query=$conn->prepare($sql);
$query->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="csstb/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
</head>
<body style="background:url(images/ff.jpg) no-repeat center;">
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">VIEW ALL TICKETS</h2>
				</div>
			</div>
			<div class="row"></div>
						<table class="table">
					    <thead class="thead-primary">
			<tr><th>FNAME</th>
			<th>PHONE</th>
			<th>FROM</th>
			<th>TO</th>
			<th>DEPART</th>
			<th>RETURN</th>
			<th>ADULT</th>
            <th>CHILD</th>
			<th>CLASS</th>
            
		</tr>
        </thead> 
		<?php
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
		
			echo "<tr>";
			echo "<td>".$row['fn']."</td>";
			echo "<td>".$row['pn']."</td>";
			echo "<td>".$row['ff']."</td>";
			echo "<td>".$row['ft']."</td>";
			echo "<td>".$row['dp']."</td>";
            echo "<td>".$row['rt']."</td>";
			echo "<td>".$row['ad']."</td>";
			echo "<td>".$row['cd']."</td>";
			echo "<td>".$row['tc']."</td>";
			
			echo "</tr>";


		}

		?>
      
					   </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
        <div class="form-btn">
										<center><button class="submit-btn" style="background-color: #9ed034;" name="submit" class="slider-btn" style="color:white;" onclick="window.print()">PRINT</button></center>
									</div>
										
	</section>
  
</body>
</html>

