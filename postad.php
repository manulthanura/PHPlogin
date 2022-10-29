<?php 

include 'includes/config.php';

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Post My AD</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="assets/css/postad-style.css" />

	 

</head>

<body>
	<form action="includes/postad-action.php" method="POST" enctype="multipart/form-data">
		<div id="booking" class="section">
			<div class="section-center">
				<div class="container">
					<div class="row">
						<div class="booking-form">
							<div class="form-header">
								<h1>Make My AD</h1>
							</div>
							<form>
					<!--Title-->
								<div class="form-group">
									<span class="form-label">Title</span>
									<input class="form-control" type="text" name="ad_title" placeholder="Enter here my AD title" required>
								</div>
					<!--Description-->
								<div class="form-group">
									<span class="form-label">Description</span>
									<input class="form-control" type="text" name="ad_description" placeholder="Enter here my AD Description" required>
								</div>
								<div class="row">
					<!--Category-->
									<div class="col-md-6">
										<div class="form-group">
											<span class="select-arrow"></span>
											<span class="form-label">Category</span>
											<select class="form-control" required name="ad_category">
												<option selected hidden>Select my AD Category</option>
												<option value="Carrot">Carrot</option>
												<option value="Leek">Leek</option>
												<option value="Cabbage">Cabbage</option>
												<option value="Cauliflower">Cauliflower</option>
												<option value="Salad Leaves">Salad Leaves</option>
												<option value="Beetroot">Beetroot</option>
												<option value="Bean">Bean</option>
												<option value="Bell-pepper">Bell-pepper</option>
												<option value="Salad Cucumber">Salad Cucumber</option>
												<option value="Gherkins">Gherkins</option>
												<option value="Green Chilli">Green Chilli</option>
												<option value="Red Onion">Red Onion</option>
												<option value="Pumpkin">Pumpkin</option>
												<option value="Bitter-gourd">Bitter-gourd</option>
												<option value="Ginger">Ginger</option>
												<option value="Kohila">Kohila</option>
												<option value="Manioc">Manioc</option>
												<option value="Potato">Potato</option>
												<option value="Radish">Radish</option>
												<option value="Tomato">Tomato</option>
												<option value="Garlic">Garlic</option>
												<option value="Knol Kohl">Knol Kohl</option>
												<option value="Leeks">Leeks</option>
												<option value="Lemongrass">Lemongrass</option>
												<option value="Capsicum">Capsicum</option>
												<option value="Chilies">Chilies</option>
												<option value="Green Chilies">Green Chilies</option>
												<option value="Red Chilies">Red Chilies</option>
												<option value="Other">Other</option>
											</select>
										</div>
									</div>
					<!--Stock-->
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Available Stock (kg)</span>
											<input class="form-control" name="ad_stock" type="number" placeholder="Available Stock (kg)" required>
										</div>
									</div>
								</div>
								<div class="row">
					<!--Payment Method-->
									<div class="col-md-6">
										<div class="form-group">
											<span class="select-arrow"></span>
											<span class="form-label">Payment Method</span>
											<select class="form-control" required name="ad_payment">
												<option selected hidden>Payment Method</option>
												<option value="Not Selected">Not Selected</option>
												<option value="Cash">Cash</option>
												<option value="Cards Payments">Cards Payments</option>
												<option value="Mobile Payments">Mobile Payments</option>
												<option value="Checks">Checks</option>
												<option value="Bank Transfers">Bank Transfers</option>
												<option value="All Payments">All</option>
											</select>
										</div>
									</div>
					<!--Price-->
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Price (per 1kg)</span>
											<input class="form-control" name="ad_price" type="text" placeholder="Enter here my AD Price" required>
										</div>
									</div>
								</div>
								<div class="row">
					<!--Delivery-->
									<div class="col-md-3">
										<div class="form-group">
											<span class="select-arrow"></span>
											<span class="form-label">Delivery</span>
											<select class="form-control" required name="ad_delivery">
												<option selected hidden>Delivery</option>
												<option value="Not Selected">Not Selected</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
									</div>
					<!--Delivery Charge-->
									<div class="col-md-3">
										<div class="form-group">
											<span class="select-arrow"></span>
											<span class="form-label">Delivery Charge</span>
											<select class="form-control" required name="ad_deliverycharge">
												<option selected hidden>Delivery Charge</option>
												<option value="Not Selected">Not Selected</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
									</div>
					<!--Post Date-->
									<div class="col-md-3">
										<div class="form-group">
											<input class="form-control" type="date" name="ad_pd" required>
											<span class="form-label">BID In</span>
										</div>
									</div>
					<!--Exp Date-->
									<div class="col-md-3">
										<div class="form-group">
											<input class="form-control" type="date" name="ad_ed" required>
											<span class="form-label">BID out</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
					<!--City-->
										<div class="form-group">
											<input class="form-control" type="text" name="ad_city" placeholder="City" required>
											<span class="form-label">City</span>
										</div>
									</div>
									<div class="col-md-4">
					<!--Zipcode-->
										<div class="form-group">
											<span class="form-label">Zipcode</span>
											<input class="form-control" type="text" name="ad_zipcode" placeholder="Zipcode" required>
										</div>
									</div>
									<div class="col-md-4">
					<!--District-->
										<div class="form-group">
											<span class="select-arrow"></span>
											<span class="form-label">District</span>
											<select class="form-control" required name="ad_district">
												<option selected hidden>District</option>
												<option value="Jaffna">Jaffna</option>
												<option value="Kilinochchi">Kilinochchi</option>
												<option value="Mannar">Mannar</option>
												<option value="Mullaitivu">Mullaitivu</option>
												<option value="Vavuniya">Vavuniya</option>
												<option value="Puttalam">Puttalam</option>
												<option value="Kurunegala">Kurunegala</option>
												<option value="Gampaha">Gampaha</option>
												<option value="Colombo">Colombo</option>
												<option value="Kalutara">Kalutara</option>
												<option value="Anuradhapura">Anuradhapura</option>
												<option value="Polonnaruwa">Polonnaruwa</option>
												<option value="Matale">Matale</option>
												<option value="Kandy">Kandy</option>
												<option value="NuwaraEliya">NuwaraEliya</option>
												<option value="Kegalle">Kegalle</option>
												<option value="Ratnapura">Ratnapura</option>
												<option value="Trincomalee">Trincomalee</option>
												<option value="Batticaloa">Batticaloa</option>
												<option value="Ampara">Ampara</option>
												<option value="Badulla">Badulla</option>
												<option value="Monaragala">Monaragala</option>
												<option value="Hambantota">Hambantota</option>
												<option value="Matara">Matara</option>
												<option value="Galle">Galle</option>
											</select>
										</div>
									</div>
								</div>
					<!--Image Upload-->
								<div class="mb-3">
								  <span class="text-light">Upload my image  :  </span>
								  <input class="text-light" type="file" name="ad_image">
							    </div><br>
							</form>
							
					<!--Submit-->
							<div class="form-btn">
								<button class="submit-btn" name="submit">POST NOW</button>
							</div>
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>
	</form>
	<script src="assets/js/postad-jquery.min.js"></script>
	<script>
		$('.form-control').each(function() {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function() {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body>

</html>