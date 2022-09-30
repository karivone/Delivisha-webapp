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
									<img src="<?= base_url() ?>public/images/contact.svg" class="education-img"></img>
								</div>	
							</div>
							
							<div class="col-xl-6 col-md-6">
								<div class="sign-in-your">
									<div class="mb-5">
										<a href="<?= site_url() ?>" class="float-start">
										 	<i class="fa fa-arrow-left me-2 fa-lg text-warning"></i> Back
										</a>
									</div>

									<h4 class="fs-20 font-w800 text-black">Live us <span class="text-warning">a</span> Message</h4>
									<div class="mb-3">
										<span class="">Live a message and we will get back to you in 24 hours time.</span>
									</div>

									 <form action="<?= site_url("customer/message") ?>" class="comment-form" id="contact_form" method="post">
										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">									
										<div class="row"> 
											<div class="col-lg-12">
												<div class="mb-3 input-group-sm">
													<label for="author" class="text-black font-w600 form-label">Full Name <span class="required">*</span></label>
													<input type="text" class="form-control" value="" name="customer_name" placeholder="Please provide your full name here" id="author">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="mb-3 input-group-sm">
													<label for="email" class="text-black font-w600 form-label">Email <span class="required">*</span></label>
													<input type="text" class="form-control" value="" placeholder="Enter your email" name="email" id="email">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="mb-3 input-group-sm">
													<label for="email" class="text-black font-w600 form-label">Phone Number <span class="required">*</span></label>
													<input type="text" class="form-control" value="" placeholder="Enter your phone number" name="phone" id="email">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="mb-3 input-group-sm">
													<label for="author" class="text-black font-w600 form-label">Subject <span class="required">*</span></label>
													<input type="text" class="form-control" value="" name="subject" placeholder="provide a subject" id="author">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="mb-3 input-group-sm">
													<label for="comment" class="text-black font-w600 form-label">Message</label>
													<textarea rows="5" class="form-control" name="comment" placeholder="Enter your message here" id="comment"></textarea>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="mb-3">
													<input type="submit" value="Send Message" class="submit btn btn-primary btn-sm btn-block" id="submit" name="submit">
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
		</div>
	</div>
