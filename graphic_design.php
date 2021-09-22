<!DOCTYPE html>
<html>
<head>
	<title>Graphic Design</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<!-- fontawesome cdn -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/graphic_design.css">
	<script src="js/buy_now.js"></script>
	<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

	<?php include_once 'inc/header.php'; ?>
	<?php include_once 'inc/navbar.php'; ?>

	<section class="garphics_banner">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<h2>Graphics Design</h2>
					<p>Welcome To The World Of Graphics Design</p>
				</div>
			</div>
		</div>
	</section>

	<section class="garphics_content">
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Facebook</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Instagram</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Youtube</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab1" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false">Twitter</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="Linked" data-toggle="tab" href="#linked" role="tab" aria-controls="linked" aria-selected="false">Linked In</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="mb-0">Facebook Graphic Design</h5>
									<a href="#form" class="btn btn-dark float-right">BOOK NOW</a>
								</div>
								<div class="card-body">
									<p>Service Provided In Facebook Graphics Design</p>
									<p><span><i class="far fa-check-circle"></i></span> Facebook Profile Picture</p>
									<p><span><i class="far fa-check-circle"></i></span> Facebook Cover Picture</p>
									<p><span><i class="far fa-check-circle"></i></span> Facebook Graphic Post</p>
								</div>
							</div>

							<div class="card mb-3">
								<div class="card-header">
									<h5>Facebook Packeges</h5>
								</div>
								<div class="card-body p-4">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>999/-</h5>
													<p class="mb-2">10 Facebook Posters <br>
														1 Free Profile Picture
													</p>
													<a class="btn btn-dark btn-sm" onclick="buy_now(999);">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>1999/-</h5>
													<p class="mb-2">20 Facebook Posters <br>
													1 Free Profile Picture</p>

													<a class="btn btn-dark btn-sm" onclick="buy_now(1999);">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>2999/-</h5>
													<p class="mb-2">30 Facebook Posters <br>1 Free Profile Picture</p>
													<a class="btn btn-dark btn-sm" onclick="buy_now(2999);">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>4999/-</h5>
													<p class="mb-2">40 Facebook Posters <br>1 Free Profile Picture</p>
													<a class="btn btn-dark btn-sm" onclick="buy_now(4999);">BUY NOW</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card" id="form">
								<div class="card-header">
									<h5 class="mb-0">Book Services</h5>
								</div>
								<div class="card-body">
									<form>
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Name*</label>
												<input type="text" class="form-control " placeholder="First name">
											</div>
											<div class="col-md mb-3">
												<label>Mobile*</label>
												<input type="text" class="form-control " placeholder="Last name">
											</div>
											<div class="col-md mb-3">
												<label>Email Id*</label>
												<input type="text" class="form-control " placeholder="Last name">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-3">
												<label>Which Party You Belong</label>
												<input type="text" class="form-control " placeholder="First name">
											</div>
											<div class="col-md mb-3">
												<label>Select Services</label>
												<select class="form-control " id="exampleFormControlSelect1">
													<option>Facebook Profile Picture</option>
													<option>Facebook Cover Picture</option>
													<option>Facebook Post</option>
													<option>All of the Above</option>

												</select>
											</div>
											<div class="col-md mb-3">
												<label>Occasion</label>
												<input type="text" class="form-control " placeholder="Last name">
											</div>
										</div>
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Upload Your Pictures*</label>
												<input type="file" class="form-control " placeholder="First name">
											</div>

											<div class="col-md mb-3">
												<label>Upload Beloning Pictures</label>
												<input type="file" placrholder="Upload Pictures" name="" class="form-control">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-4">
												<label>Write Description</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-3">
												<a href="" class="btn btn-dark float-right">SUBMIT</a>
											</div>
										</div>
									</form>

								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="mb-0">Instagram Graphic Design</h5>
									<a href="#form1" class="btn btn-dark float-right">BOOK NOW</a>
								</div>
								<div class="card-body">
									<p>Service Provided In Insatagram Graphics Design</p>
									<p><span><i class="far fa-check-circle"></i></span> Instagram Profile Picture</p>
									<p><span><i class="far fa-check-circle"></i></span> Instagram Cover Picture</p>
									<p><span><i class="far fa-check-circle"></i></span> Instagram Graphic Post</p>
								</div>
							</div>


							<div class="card mb-3">
								<div class="card-header">
									<h5>Instagram Packeges</h5>
								</div>
								<div class="card-body p-4">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>999/-</h5>
													<p class="mb-2">10 Facebook Posters <br>
														1 Free Profile Picture
													</p>
													<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>1999/-</h5>
													<p class="mb-2">20 Facebook Posters <br>
													1 Free Profile Picture</p>

													<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>2999/-</h5>
													<p class="mb-2">30 Facebook Posters <br>1 Free Profile Picture</p>
													<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>4999/-</h5>
													<p class="mb-2">40 Facebook Posters <br>1 Free Profile Picture</p>
													<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>



							<div class="card" id="form1">
								<div class="card-header">
									<h5 class="mb-0">Book Services</h5>

								</div>
								<div class="card-body">

									<form>
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Name*</label>
												<input type="text" class="form-control " placeholder="First name">
											</div>
											<div class="col-md mb-3">
												<label>Mobile*</label>
												<input type="text" class="form-control " placeholder="Last name">
											</div>
											<div class="col-md mb-3">
												<label>Email Id*</label>
												<input type="text" class="form-control " placeholder="Last name">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-3">
												<label>Which Party You Belong</label>
												<input type="text" class="form-control " placeholder="First name">
											</div>
											<div class="col-md mb-3">
												<label>Select Services</label>
												<select class="form-control " id="exampleFormControlSelect1">
													<option>Instagram Profile Picture</option>
													<option>Instagram Post</option>
													<option>Both</option>

												</select>
											</div>
											<div class="col-md mb-3">
												<label>Occasion</label>
												<input type="text" class="form-control " placeholder="Last name">
											</div>
										</div>
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Upload Pictures*</label>
												<input type="file" class="form-control " placeholder="First name">
											</div>

											<div class="col-md mb-3">
												<label>Upload Beloning Pictures</label>
												<input type="file" placrholder="Upload Pictures" name="" class="form-control">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-4">
												<label>Write Description</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-3">
												<a href="" class="btn btn-dark float-right">SUBMIT</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="mb-0">Youtube Graphic Design</h5>
									<a href="#form2" class="btn btn-dark float-right">BOOK NOW</a>
								</div>
								<div class="card-body">
									<p>Service Provided In Insatagram Graphics Design</p>
									<p><span><i class="far fa-check-circle"></i></span> Youtube Thumbnail</p>
									<p><span><i class="far fa-check-circle"></i></span> Youtube Profile Picture</p>
									<!-- <p><span><i class="far fa-check-circle"></i></span> Youtube Cover Picture</p>
									<p><span><i class="far fa-check-circle"></i></span> Youtube Graphic Post</p> -->
								</div>
							</div>


							<!-- <div class="card mb-3">
								<div class="card-header">
									<h5>Youtube Packeges</h5>
								</div>
								<div class="card-body p-4">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>999/-</h5>
													<p class="mb-2">10 Facebook Posters <br>
														1 Free Profile Picture
													</p>
													<a href="#form2" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>1999/-</h5>
													<p class="mb-2">20 Facebook Posters <br>
													1 Free Profile Picture</p>

													<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>2999/-</h5>
													<p class="mb-2">30 Facebook Posters <br>1 Free Profile Picture</p>
													<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>4999/-</h5>
													<p class="mb-2">40 Facebook Posters <br>1 Free Profile Picture</p>
													<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->



							<div class="card" id="form2">
								<div class="card-header">
									<h5 class="mb-0">Book Services</h5>

								</div>
								<div class="card-body">

									<form>
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Name*</label>
												<input type="text" class="form-control " placeholder="Name">
											</div>
											<div class="col-md mb-3">
												<label>Mobile*</label>
												<input type="tel" class="form-control " placeholder="Mobile Number">
											</div>
											<div class="col-md mb-3">
												<label>Email Id*</label>
												<input type="email" class="form-control " placeholder="Email">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-3">
												<label>Which Party You Belong</label>
												<input type="text" class="form-control " placeholder="First name">
											</div>
											<div class="col-md mb-3">
												<label>Select Services</label>
												<select class="form-control " id="exampleFormControlSelect1">
													<option>Youtube Profile Picture</option>
													<option>Youtube Thumbnail</option>
													<option>Both</option>

												</select>
											</div>
											<div class="col-md mb-3">
												<label>Occasion</label>
												<input type="text" class="form-control " placeholder="Last name">
											</div>
										</div>
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Upload Pictures*</label>
												<input type="file" class="form-control " placeholder="First name">
											</div>

											<div class="col-md mb-3">
												<label>Upload Beloning Pictures</label>
												<input type="file" placrholder="Upload Pictures" name="" class="form-control">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-4">
												<label>Write Description</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-3">
												<a href="" class="btn btn-dark float-right">SUBMIT</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab1">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="mb-0">Twitter Graphic Design</h5>
									<a href="#form3" class="btn btn-dark float-right">BOOK NOW</a>
								</div>
								<div class="card-body">
									<p>Service Provided In Insatagram Graphics Design</p>
									<p><span><i class="far fa-check-circle"></i></span> Twitter Profile Picture</p>
									<!-- <p><span><i class="far fa-check-circle"></i></span> Twitter Cover Picture</p> -->
									<p><span><i class="far fa-check-circle"></i></span> Twitter Graphic Post</p>
								</div>
							</div>


							<div class="card mb-3">
								<div class="card-header">
									<h5>Twitter Packeges</h5>
								</div>
								<div class="card-body p-4">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>999/-</h5>
													<p class="mb-2">10 Twitter Posters <br>
														1 Free Profile Picture
													</p>
													<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>1999/-</h5>
													<p class="mb-2">20 Twitter Posters <br>
													1 Free Profile Picture</p>

													<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>2999/-</h5>
													<p class="mb-2">30 Twitter Posters <br>1 Free Profile Picture</p>
													<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>4999/-</h5>
													<p class="mb-2">40 Twitter Posters <br>1 Free Profile Picture</p>
													<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>



							<div class="card" id="form3">
								<div class="card-header">
									<h5 class="mb-0">Book Services</h5>

								</div>
								<div class="card-body">

									<form>
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Name*</label>
												<input type="text" class="form-control " placeholder="First name">
											</div>
											<div class="col-md mb-3">
												<label>Mobile*</label>
												<input type="text" class="form-control " placeholder="Last name">
											</div>
											<div class="col-md mb-3">
												<label>Email Id*</label>
												<input type="text" class="form-control " placeholder="Last name">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-3">
												<label>Which Party You Belong</label>
												<input type="text" class="form-control " placeholder="First name">
											</div>
											<div class="col-md mb-3">
												<label>Select Services</label>
												<select class="form-control " id="exampleFormControlSelect1">
													<option>Twitter Profile Picture</option>
													<option>Twitter Post</option>
													<option>Both</option>

												</select>
											</div>
											<div class="col-md mb-3">
												<label>Occasion</label>
												<input type="text" class="form-control " placeholder="Last name">
											</div>
										</div>
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Upload Pictures*</label>
												<input type="file" class="form-control " placeholder="First name">
											</div>

											<div class="col-md mb-3">
												<label>Upload Beloning Pictures</label>
												<input type="file" placrholder="Upload Pictures" name="" class="form-control">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-4">
												<label>Write Description</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-3">
												<a href="" class="btn btn-dark float-right">SUBMIT</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="linked" role="tabpanel" aria-labelledby="linked-tab">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="mb-0">Linked In Graphic Design</h5>
									<a href="#form4" class="btn btn-dark float-right">BOOK NOW</a>
								</div>
								<div class="card-body">
									<p>Service Provided In Insatagram Graphics Design</p>
									<ul class="nav flex-column">
										<p><i class="far fa-check-circle"></i></span> LInked In Profile Picture</p>
									<p><i class="far fa-check-circle"></i></span> LInked In Cover Picture</p>
									<p><i class="far fa-check-circle"></i></span> LInked In Graphic Post</p>

									</ul>
								</div>
							</div>


							<div class="card mb-3">
								<div class="card-header">
									<h5>Linked In Packeges</h5>
								</div>
								<div class="card-body p-4">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>999/-</h5>
													<p class="mb-2">10 Linked in Posters <br>
														1 Free Profile Picture
													</p>
													<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>1999/-</h5>
													<p class="mb-2">20 Linked in Posters <br>
													1 Free Profile Picture</p>

													<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>2999/-</h5>
													<p class="mb-2">30 Linked in Posters <br>1 Free Profile Picture</p>
													<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>4999/-</h5>
													<p class="mb-2">40 Linked in Posters <br>1 Free Profile Picture</p>
													<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>



							<div class="card" id="form4">
								<div class="card-header">
									<h5 class="mb-0">Book Services</h5>

								</div>
								<div class="card-body">

									<form>
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Name*</label>
												<input type="text" class="form-control " placeholder="First name">
											</div>
											<div class="col-md mb-3">
												<label>Mobile*</label>
												<input type="text" class="form-control " placeholder="Last name">
											</div>
											<div class="col-md mb-3">
												<label>Email Id*</label>
												<input type="text" class="form-control " placeholder="Last name">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-3">
												<label>Which Party You Belong</label>
												<input type="text" class="form-control " placeholder="First name">
											</div>
											<div class="col-md mb-3">
												<label>Select Services</label>
												<select class="form-control " id="exampleFormControlSelect1">
													<option>Linked In Profile Picture</option>
													<option>Linked In Post</option>
													<option>Both</option>

												</select>
											</div>
											<div class="col-md mb-3">
												<label>Occasion</label>
												<input type="text" class="form-control " placeholder="Last name">
											</div>
										</div>
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Upload Pictures*</label>
												<input type="file" class="form-control " placeholder="First name">
											</div>

											<div class="col-md mb-3">
												<label>Upload Beloning Pictures</label>
												<input type="file" placrholder="Upload Pictures" name="" class="form-control">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-4">
												<label>Write Description</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-3">
												<a href="" class="btn btn-dark float-right">SUBMIT</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>		
					</div>
				</div>
			</div>
		</div>
	</section>

	
    <!-- Modal -->
    <div class="modal fade" id="edit_data" tabindex="-1" role="dialog" aria-labelledby="edit_dataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">User Form </h5>
                
            </div>
            <div class="modal-body">
            <form class="form-horizontal form-material">
            
            

            <div class="form-group mb-4">
                <label class="col-md-12 p-0">Full Name</label>
                <div class="col-md-12 border-bottom p-0">
                    <input type="text" class="form-control p-0 border-0" id="fname" name="fname" required>
                </div>
            </div>
            
            
            <div class="form-group mb-4">
                <label class="col-md-12 p-0">Your City</label>
                <div class="col-md-12 border-bottom p-0">
                    <input type="text" class="form-control p-0 border-0" name="city" id="address" required>
                </div>
            </div>
			<div class="form-group mb-4">
                <label class="col-md-12 p-0">Your Email</label>
                <div class="col-md-12 border-bottom p-0">
                    <input type="text" class="form-control p-0 border-0" name="email" id="email" required>
                </div>
            </div>
            
            
            
            <div class="form-group mb-4">
                <label class="col-md-12 p-0">Mobile Number</label>
                <div class="col-md-12 border-bottom p-0">
                    <input type="tel" class="form-control p-0 border-0" id="mobile" required>
                </div>
            </div>
			<div class="form-group mb-4">
                <label class="col-md-12 p-0">Package Price</label>
                <div class="col-md-12 border-bottom p-0">
                    <input type="number" class="form-control p-0 border-0" id="package_price" readonly>
                </div>
            </div>

            
            <div class="form-group mb-4">
            <div class="col-sm-12">
                <button class="btn btn-success" type="button" onclick="payment();">Submit</button>
            </div>
            </div>
            <p></p>
            </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="close_modal('edit_data')">Close</button>
                
            </div>
            </div>
        </div>
        </div>





	<?php include_once 'inc/footer.php'; ?>






	<script type="text/javascript">

		stickyElem =
		document.querySelector(".flex-column");

        /* Gets the amount of height
        of the element from the
        viewport and adds the
        pageYOffset to get the height
        relative to the page */
        currStickyPos = 
        stickyElem.getBoundingClientRect().top + window.pageYOffset;

        window.onscroll = function() {

            /* Check if the current Y offset
            is greater than the position of
            the element */
            if (window.pageYOffset > currStickyPos) {
            	stickyElem.style.position = "sticky";
            	stickyElem.style.top = "10px";

            } else {
            	stickyElem.style.position = "relative";
            	stickyElem.style.top = "initial";
            }
        }
    </script>
	<script src="js/payment.js"></script>
</body>
</html>