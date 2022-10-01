<body class="body  h-100 front-body"> 
	<div class="container h-100">
		<div class="row h-100 align-items-center justify-contain-center">
			<div class="col-xl-12 mt-3">
				<div class="card">
					<div class="card-body p-0">

						<div class="row m-0">
							<div class="col-xl-6 col-md-6 sign text-center">
								<div>
									<div class="text-center my-5">
										<a href="<?= base_url() ?>"><img width="200" src="<?= base_url() ?>public/assets/images/logo-full.png" alt=""></a>
									</div>
									<img src="<?= base_url() ?>public/images/landing.svg" class="education-img"></img>
								</div>	
							</div>
							
							<div class="col-xl-6 col-md-6">
								<div class="sign-in-your">
									<div class="mb-5">
										<a href="" class="float-end">
											More <i class="fa fa-arrow-right me-2 fa-lg text-warning"></i>
										</a>
									</div>

									<h4 class="fs-20 font-w800 text-black">Welcome to <span class="text-warning">DeliV</span>isha Logistics</h4>
									<span>We take care of your delivery need instantly without you having to moving an inch from what you are doing, this way you do not have to worry about the safety of your package we got you covered. <br><br>
									 Just let us know what you want us to collect and the place you want it delivered and we shall take care of the rest.</span>
									<div class="login-social">
										<a href="javascript:void(0);" id="requestADelivery" class="btn font-w800 d-block my-4"><i class="fa fa-truck-front me-2 fa-lg"></i>Request a Delivery</a>
										<a href="javascript:void(0);" class="btn font-w800 d-block my-4"><i class="fa fa-location-dot me-2 fa-lg"></i>Track your Order</a>
										<a href="<?= site_url('contact') ?>" class="btn font-w800 d-block my-4"><i class="fa fa-phone me-2 fa-lg"></i> Contact us Now</a>
									</div>

									<div class="socials mb-4">
										<button type="button" class="btn btn-sm btn-facebook mb-3">
											Facebook
											<span class="btn-icon-end"><i class="fab fa-facebook-f"></i></span>
										</button>

										<button type="button" class="btn btn-sm btn-danger mb-3">
											Instagram
											<span class="btn-icon-end"><i class="fab fa-instagram"></i></span>
										</button>

										<button type="button" class="btn btn-sm btn-whatsapp mb-3">
											Whatsapp
											<span class="btn-icon-end"><i class="fab fa-whatsapp"></i></span>
										</button>
									</div>

									<div class="text-center">
										<button id="goToLogin" type="submit" login_url="<?= base_url('login') ?>" class="btn btn-primary btn-block blinking-button">Sign Me In</button>
									</div>
								</div>
							</div>
							
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Phone Number Verification Modal -->
	<div class="modal fade" id="requestDeliveryModal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="fs-20 font-w800 text-black">Authentication</h5>
					<button type="button" class="btn-close text-danger" data-bs-dismiss="modal">
					</button>
				</div>
				<div class="modal-body">
					<div class="row mb-3" align="center">
						<div class="col-md-12">
							<img src="<?= site_url("public/images/unlock.svg") ?>" class="" alt="" height="300">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-12">
							<h4 class="text-center" style="color: #c6164f !important;">Please Login to continue</h4>
						</div>
						<div class="">
							<form action="<?= site_url() ?>" method="post" id="validateCustomerPhoneNumber">
								<div class="mb-3">
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Please enter your phone number 07XXXXXXXX">
								</div>
								<div class="row">
									<div class="col-6 col-md-6">
										<div class="mb-3">
											<button type="button" id="goToRegistrationPage" class="btn btn-primary btn-block">Register</button>
										</div>
									</div>
									<div class="col-6 col-md-6">
										<div class="mb-3">
											<button type="button" class="btn btn-danger btn-block blinking-button btn-block" id="placeOrder" order_url="<?= site_url('order') ?>">Place Order</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Registration Modal -->
	<div class="modal fade" id="registrationModal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="fs-20 font-w800 text-black">Registration</h5>
					<button type="button" class="btn-close text-danger" data-bs-dismiss="modal">
					</button>
				</div>
				<div class="modal-body">
					<div class="row mb-3">
						<div class="col-md-12">
							<p style="color: #c6164f !important;"><i class="fa fa-info-circle"></i> Another cool reason for choosing <span class="fs-20 font-w800">DeliVish</span> as your logistic agent is that you don't require a password to start using it, only your phone number is your key to access your account.</p>
						</div>
						<div class="">
							<form action="<?= site_url() ?>" method="post" id="registerNewClient">
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<div class="mb-3">
												<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<input type="text" class="form-control" id="emailAddress" name="emailAddress" placeholder="Enter email address">
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter phone number">
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<button class="btn btn-primary blinking-button btn-block">Submit Details</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Alerts -->
	<!-- <div class="alert alert-primary left-icon-big alert-dismissible fade show">
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="mdi mdi-btn-close"></i></span>
		</button>
		<div class="media">
			<div class="alert-left-icon-big">
				<span><i class="mdi mdi-email-alert"></i></span>
			</div>
			<div class="media-body">
				<h6 class="mt-1 mb-2">Welcome to your account, Dear user!</h6>
				<p class="mb-0">Please confirm your email address: email@example.com</p>
			</div>
		</div>
	</div>

	<div class="alert alert-warning left-icon-big alert-dismissible fade show">
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="mdi mdi-btn-close"></i></span>
		</button>
		<div class="media">
			<div class="alert-left-icon-big">
				<span><i class="mdi mdi-help-circle-outline"></i></span>
			</div>
			<div class="media-body">
				<h5 class="mt-1 mb-2">Pending!</h5>
				<p class="mb-0">You message sending failed.</p>
			</div>
		</div>
	</div>

	<div class="alert alert-success left-icon-big alert-dismissible fade show">
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="mdi mdi-btn-close"></i></span>
		</button>
		<div class="media">
			<div class="alert-left-icon-big">
				<span><i class="mdi mdi-check-circle-outline"></i></span>
			</div>
			<div class="media-body">
				<h5 class="mt-1 mb-2">Congratulations!</h5>
				<p class="mb-0">You have successfully created a account.</p>
			</div>
		</div>
	</div>

	<div class="alert alert-danger left-icon-big alert-dismissible fade show">
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="mdi mdi-btn-close"></i></span>
		</button>
		<div class="media">
			<div class="alert-left-icon-big">
				<span><i class="mdi mdi-alert"></i></span>
			</div>
			<div class="media-body">
				<h5 class="mt-1 mb-2">Loading failed!</h5>
				<p class="mb-0">Again upload your server</p>
			</div>
		</div>
	</div> -->
