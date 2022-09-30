<body class="body  h-100 front-body"> 
	<div class="container h-100">
		<div class="row h-100 align-items-center justify-contain-center">
			<div class="col-xl-12 mt-3">

				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Hello Dennis, Here is your package progress</h4>
					</div>
					<div class="card-body">
						<div id="smartwizard" class="form-wizard order-create">
							<ul class="nav nav-wizard">
								<li><a class="nav-link" href="#wizard_Service"> 
									<span>1</span> 
									<small>Package Recieved</small>
								</a></li>
								<li><a class="nav-link" href="#wizard_Time">
									<span>2</span>
									<small>Dispatched to Rider</small>
								</a></li>
								<li><a class="nav-link" href="#wizard_Details">
									<span>3</span>
									<small>On Transit (0725134449)</small>
								</a></li>
								<li><a class="nav-link" href="#wizard_Payment">
									<span>4</span>
									<small>Deliverd</small>
								</a></li>
							</ul>

							<div class="tab-content">
								<div id="wizard_Service" class="tab-pane" role="tabpanel">
									<div class="row">
										<div class="col-md-12 mb-2 mx-auto">
											<div class="mb-3" align="center">
												<img src="<?= site_url("public/images/recieved.svg") ?>" class="img-fluid" alt="" width="200">
											</div>
										</div>
									</div>
								</div>

								<div id="wizard_Time" class="tab-pane" role="tabpanel">
									<div class="row">
										<div class="col-md-12 mb-2 mx-auto">
											<div class="mb-3" align="center">
												<img src="<?= site_url("public/images/dispatched.svg") ?>" class="img-fluid" alt="" width="300">
											</div>
										</div>
									</div>
								</div>

								<div id="wizard_Details" class="tab-pane" role="tabpanel">
									<div class="row">
										<div class="col-md-12 mb-2 mx-auto">
											<div class="mb-3" align="center">
												<img src="<?= site_url("public/images/on-transit.svg") ?>" class="img-fluid" alt="" width="300">
											</div>
										</div>
									</div>
								</div>

								<div id="wizard_Payment" class="tab-pane" role="tabpanel">
									<div class="row">
										<div class="col-md-12 mb-2">
											<div class="mb-3" align="center">
												<img src="<?= site_url("public/images/completed.svg") ?>" class="img-fluid" alt="" width="100">
											</div>
										</div>
									</div>

									<!-- <div class="row emial-setup">
										<div class="col-lg-3 col-sm-6 col-6">
											<div class="mb-3">
												<label for="mailclient11" class="mailclinet mailclinet-gmail">
													<input type="radio" name="emailclient" id="mailclient11">
													<span class="mail-icon">
														<i class="mdi mdi-google-plus" aria-hidden="true"></i>
													</span>
													<span class="mail-text">I'm using Gmail</span>
												</label>
											</div>
										</div>
										<div class="col-lg-3 col-sm-6 col-6">
											<div class="mb-3">
												<label for="mailclient12" class="mailclinet mailclinet-office">
													<input type="radio" name="emailclient" id="mailclient12">
													<span class="mail-icon">
														<i class="mdi mdi-office" aria-hidden="true"></i>
													</span>
													<span class="mail-text">I'm using Office</span>
												</label>
											</div>
										</div>
										<div class="col-lg-3 col-sm-6 col-6">
											<div class="mb-3">
												<label for="mailclient13" class="mailclinet mailclinet-drive">
													<input type="radio" name="emailclient" id="mailclient13">
													<span class="mail-icon">
														<i class="mdi mdi-google-drive" aria-hidden="true"></i>
													</span>
													<span class="mail-text">I'm using Drive</span>
												</label>
											</div>
										</div>
										<div class="col-lg-3 col-sm-6 col-6">
											<div class="mb-3">
												<label for="mailclient14" class="mailclinet mailclinet-another">
													<input type="radio" name="emailclient" id="mailclient14">
													<span class="mail-icon">
														<i class="fa fa-question-circle"
															aria-hidden="true"></i>
													</span>
													<span class="mail-text">Another Service</span>
												</label>
											</div>
										</div>
									</div> -->

									<div class="row">
										<div class="col-12">
											<div class="skip-email text-center">
												<p>Your Package was delivered to <b>Westlands Mall</b> by <b>Dennis Otieno</b>.</p>
												<a href="javascript:void(0)"><b>Delivery Date:</b> 23rd September 2022.</a>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
