<?php
include_once("../../connection.php");
error_reporting(0);

    ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Check Status - Simple Energy</title>
				<link href="../img/3256favicon2.png" rel="icon">
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
		<link href="../css/style.css" rel="stylesheet">
		<link href="../css/style_slide.css" rel="stylesheet">
		<style>
		#book img {
			width: 100%;
			height: 100vh;
			object-fit: cover;
		}
		</style>
	</head>
	<body>
	   
               
   	<section class="bg-half-170 d-table w-100">
			<div class="container-fluid">
				<div class="row position-relative align-items-center pt-4">
					<div class="col-md-7 col-xs-12 mx-auto chk" >
						<h2 class="mb-3"><span class="text-success">Check Status</span> </h2>
						<br>
						
						 <form method="post" class="form-inline">
    <input class="form-control mr-sm-2" type="text" placeholder="Enter Your Mobile Number" name="search" autocomplete="off">
    <button class="btn btn-success" type="submit" name="submit" value="submit">Search</button>
    <?php

if(isset($_POST['submit']));
       $name = $_POST['search'];
       {
            $sql = "SELECT *,date_format(date,'%d-%b-%Y ') as date FROM simple_one where mobile='$name' AND username='amit22' AND (name  like '$name%'or mobile  like '$name%')";
        $res_data = mysqli_query($db,$sql);
       while($row = mysqli_fetch_array($res_data)){
           echo  '  <div class="row">
							<div class="col-md-6">
								<div class="d-flex mt-4 pt-2">
									<div class="flex-1 ms-3 gh">
										<h5 class="mb-0">Submit Date</h5>
										<p class="mb-0 text-muted">'.$row["date"].'</p>
									</div>
								</div>
								<div class="d-flex mt-4 pt-2">
									<div class="flex-1 ms-3 gh">
										<h5 class="mb-0">Customer Name</h5>
										<p class="mb-0 text-muted">'.$row["name"].'</p>
									</div>
								</div>
								<div class="d-flex mt-4 pt-2 gh">
									<div class="flex-1 ms-3">
										<h5 class="mb-0">Mobile Number</h5>
										<p class="mb-0 text-muted">'.$row["mobile"].'</p>
									</div>
								</div>
								<div class="d-flex mt-4 pt-2 gh">
									<div class="flex-1 ms-3">
										<h5 class="mb-0">Address</h5>
										<p class="mb-0 text-muted">'.$row["address"].'</p>
									</div>
								</div>
								<div class="d-flex mt-4 pt-2 gh">
									<div class="flex-1 ms-3">
										<h5 class="mb-0">Loan Type</h5>
										<p class="mb-0 text-muted">'.$row["loan_type"].'</p>
									</div>
								</div>
								<div class="d-flex mt-4 pt-2 gh">
									<div class="flex-1 ms-3">
										<h5 class="mb-0">Other Loans</h5>
										<p class="mb-0 text-muted">'.$row["other_loan"].'</p>
									</div>
								</div>
								<div class="d-flex mt-4 pt-2 gh">
									<div class="flex-1 ms-3">
										<h5 class="mb-0">Interest Rates</h5>
										<p class="mb-0 text-muted">'.$row["interest_rate"].'</p>
									</div>
								</div>
							
								<div class="d-flex mt-4 pt-2 gh">
									<div class="flex-1 ms-3">
										<h5 class="mb-0">Loan Tenure</h5>
										<p class="mb-0 text-muted">'.$row["loan_tenure"].'</p>
									</div>
								</div>
							<div class="d-flex mt-4 pt-2 gh">
									<div class="flex-1 ms-3">
										<h5 class="mb-0">Customer ID Photo</h5>
										<p class="mb-0 text-muted"><img src="upload/'.$row["photoupload"].'"height="100" width="170"></p>
									</div>
								</div>
							</div>
							<br>
	                               <div class="col-md-6">
							
								 <div class="d-flex mt-4 pt-2 gh">
									<div class="flex-1 ms-3">
										<h5 class="mb-0">Extra Charges Due</h5>
										<p class="mb-0 text-muted">'.$row["extra_charges"].'</p>
									</div>
								</div>
								<div class="d-flex mt-4 pt-2 gh">
									<div class="flex-1 ms-3">
										<h5 class="mb-0">Loan Emi</h5>
										<p class="mb-0 text-muted">'.$row["loan_emi"].'</p>
									</div>
								</div>
								<div class="d-flex mt-4 pt-2 gh">
									<div class="flex-1 ms-3">
										<h5 class="mb-0">Total Loan</h5>
										<p class="mb-0 text-muted">'.$row["loan_amount"].'</p>
									</div>
								</div>
								<div class="d-flex mt-4 pt-2 gh">
									<div class="flex-1 ms-3">
										<h5 class="mb-0">Status</h5>
										<p class="mb-0 text-muted">'.$row["status"].'</p>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>';
		}
       }
       ?>

			
				
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
		<script src="../js/owl.carousel.js"></script>
		<script src="../js/main.js"></script>
   </body>
</html>