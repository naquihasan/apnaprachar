<!DOCTYPE html>
<html>
<head>
	<title>Web/App Development</title>
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

	<link rel="stylesheet" type="text/css" href="css/Webdevelopment.css">
</head>
<body>

	<?php include_once 'inc/header.php'; ?>
	<?php include_once 'inc/navbar.php'; ?>

	<section class="garphics_banner">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<h2>Web/App Development.</h2>
					<p>We Develope The Best Websites and Apps For You In Reasonable Price.</p>
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
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Web Development</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">App Development</a>
						</li>
						
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="card mb-3" id="bulk_message">
								<div class="card-header">
									<h5 class="mb-0">Web Development</h5>

								</div>
								<div class="card-body">

									<form>
										<h6 class="mb-3">Fill Below Form To Book Services</h6>
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
												<input type="email" class="form-control " placeholder="Email">
											</div>
										</div>


										<!-- <div class="form-row">
											<div class="col-md mb-3">
												<label>Number of Messages you want*</label>
												<select class="form-control" id="exampleFormControlSelect1">
													<option>Select Number of Messages</option>
													<option>1000</option>
													<option>5000</option>
													<option>30000</option>
													<option>50000</option>
													<option>80000</option>
													<option>100000</option>
												</select>
											</div>

											<div class="col-md mb-3">
												<label>Message Characters you wnat*</label>
												<select class="form-control" id="exampleFormControlSelect1">
													<option>Select Number of Characters</option>
													<option>300</option>
													<option>500</option>

												</select>
											</div>
										</div> -->

										<div class="form-row">
											<div class="col-md mb-4">
												<label>Write Description</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-2">
												<a href="" class="btn btn-dark float-right">SUBMIT</a>
											</div>
										</div>
									</form>
								</div>
							</div>

							<div class="card mb-3">
								<div class="card-header">
									<h5>Web Development Packeges</h5>
								</div>
								<div class="card-body p-4">
									<div class="row">
										<div class="col-md-6 mb-3 ">
											<div class="card text-center m-3">
												<div class="card-header">
													<h3 class="text-center">1999/-</h3>
												</div>

												<div class="card-body ">
													<p>4 pages</p>
													<p>Mobile Responsive</p>
													<p>Slider</p>
													<p>Contact Us Form</p>
													<p>Social Media Integration</p>
													<p>5 Revision</p>
													<a href="" class="btn btn-dark mt-2">BUY NOW</a>
												</div>
											</div>
										</div>

										<div class="col-md-6 mb-3 ">
											<div class="card text-center m-3">
												<div class="card-header">
													<h3 class="text-center">2999/-</h3>
												</div>

												<div class="card-body ">
													<p>7 pages</p>
													<p>Mobile Responsive</p>
													<p>Slider</p>
													<p>Contact Us Form</p>
													<p>Social Media Integration</p>
													<p>5 Revision</p>
													<a href="" class="btn btn-dark mt-2">BUY NOW</a>
												</div>
											</div>
										</div>

										<div class="col-md-6 mb-3 ">
											<div class="card text-center m-3">
												<div class="card-header">
													<h3 class="text-center">4999/-</h3>
												</div>

												<div class="card-body ">
													<p>10 pages</p>
													<p>Mobile Responsive</p>
													<p>Slider</p>
													<p>Contact Us Form</p>
													<p>Social Media Integration</p>
													<p>5 Revision</p>
													<a href="" class="btn btn-dark mt-2">BUY NOW</a>
												</div>
											</div>
										</div>

										<div class="col-md-6 mb-3 ">
											<div class="card text-center m-3">
												<div class="card-header">
													<h3 class="text-center">9999/-</h3>
												</div>

												<div class="card-body ">
													<p>15 pages</p>
													<p>Mobile Responsive</p>
													<p>Slider</p>
													<p>Basic Admin Panel</p>
													<p>Contact Us Form</p>
													<p>Social Media Integration</p>
													<p>7 Revision</p>
													<a href="" class="btn btn-dark mt-2">BUY NOW</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="card mb-3" id="bulk_whatsapp_message">
								<div class="card-header">
									<h5 class="mb-0">App Development</h5>

								</div>
								<div class="card-body">
									<form>
										<h6 class="mb-3">Fill Below Form To Book Services</h6>
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
												<input type="email" class="form-control " placeholder="Email">
											</div>
										</div>


										<!-- <div class="form-row">
											<div class="col-md mb-3">
												<label>Number of Messages you want*</label>
												<select class="form-control" id="exampleFormControlSelect1">
													<option>Select Number of Messages</option>
													<option>1000</option>
													<option>5000</option>
													<option>30000</option>
													<option>50000</option>
													<option>80000</option>
													<option>100000</option>
												</select>
											</div>

											<div class="col-md mb-3">
												<label>Message Characters you wnat*</label>
												<select class="form-control" id="exampleFormControlSelect1">
													<option>Select Number of Characters</option>
													<option>300</option>
													<option>500</option>

												</select>
											</div>
										</div> -->

										<div class="form-row">
											<div class="col-md mb-4">
												<label>Write Description</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-2">
												<a href="" class="btn btn-dark float-right">SUBMIT</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><div class="card mb-3" id="Bulk_voice_call">
							<div class="card-header">
								<h5 class="mb-0">Bulk Voice Call</h5>

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
											<label>Number of Messages you want*</label>
											<select class="form-control" id="exampleFormControlSelect1">
												<option>Select Number of Messages</option>
												<option>1000</option>
												<option>5000</option>
												<option>30000</option>
												<option>50000</option>
												<option>80000</option>
												<option>100000</option>
											</select>
										</div>

										<div class="col-md mb-3">
											<label>Message Characters you wnat*</label>
											<select class="form-control" id="exampleFormControlSelect1">
												<option>Select Number of Characters</option>
												<option>300</option>
												<option>500</option>

											</select>
										</div>
									</div>

									<div class="form-row">
										<div class="col-md mb-4">
											<label>Write Description</label>
											<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										</div>
									</div>

									<div class="form-row">
										<div class="col-md mb-2">
											<a href="" class="btn btn-dark float-right">SUBMIT</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<?php include_once 'inc/footer.php'; ?>


<script type="text/javascript">

	function myfunction(){
		x=document.getElementById('message');

		if (x.style.display==="none") {

			x.style.display = "block";
		}

		else
		{
			x.style.display = "none";
		}
	}


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

</body>
</html>