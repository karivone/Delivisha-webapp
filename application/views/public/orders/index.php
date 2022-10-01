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
									<div class="mb-3 p-5" align="left" style="border: 1px solid #c6164f;border-radius: 10px;">
										<h5 class="fs-20 font-w800 text-black text-center mb-4"><i class="fa fa-info-circle fa-lg" style="color:#c6164f;cursor:pointer;" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="You can pay for your package upon delivery or after placing the order you are free to descide what works for you." title="" data-bs-original-title="Quick Note" aria-describedby="popover634508"></i> Important</h5>
										
										<p class=""> Place your order and get it delivered to your door step. Orders with top level of agency will cost you extra cash, enter your order details to see the difference.</p>
										<p>The flat rate for deliveries within Nairobi is <span class="fs-10 font-w800 text-black">Ksh. 350/=</span> this might increase depending on the package weight</p>
										<p>Flexible payments done after placing your order or upon delivery of the package.</p>
									</div>
									<img src="<?= base_url() ?>public/images/logistics.svg" class="education-img"></img>
								</div>	
							</div>
							
							<div class="col-xl-6 col-md-6">
								<div class="sign-in-your">
									<div class="mb-5">
										<a href="<?= site_url() ?>" class="float-start">
										 	<i class="fa fa-arrow-left me-2 fa-lg text-warning"></i> Back
										</a>
										<a href="javascript:;" class="float-end">
											<i class="fa fa-lock me-2 fa-lg" style="color:#c6164f;" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Lorem ipsum dolor sit amet, \n consectetur adipisicing elit, sed do eiusmod tempor." title="" data-bs-original-title="Hello Dennis Otieno!" aria-describedby="popover634508"></i>
											<!-- <i class="fa fa-unlock-left me-2 fa-lg" style="color:#c6164f;"></i> -->
										</a>
									</div>

									<h4 class="fs-20 font-w800 text-black">Place <span class="text-warning">Your</span> Order</h4>

									<form action="<?= site_url() ?>" method="post" id="placeOrderForm">
										<div class="row">
											<div class="form-group">
												<!-- Hidden Fields -->
												<div class="row">
													<!-- Sender Name -->
													<div class="col-xl-6 col-md-6">
														<input type="hidden" class="form-control" name="sender_name" placeholder="Sender Name">
													</div>
													<!-- Sender Phone Number -->
													<div class="col-xl-6 col-md-6">
														<input type="hidden" class="form-control" name="sender_phone" placeholder="Sender Phone">
													</div>
													<!-- Sender Email Address -->
													<div class="col-xl-6 col-md-6">
														<input type="hidden" class="form-control" name="sender_email" placeholder="Sender Email">
													</div>
													<!-- Delivery Rates -->
													<div class="col-xl-6 col-md-6">
														<input type="hidden" class="form-control" name="delivery_rates" value="350">
													</div>
												</div>

												<!-- Sender Address -->
												<div class="row mt-3">
													<div class="col-xl-12 col-md-12">
														<label><strong>Sender Address</strong></label>
														<input type="text" class="form-control" name="sender_address" placeholder="Sender Address">
													</div>
												</div>

												<div class="row mt-3">
													<!-- Reciever Name -->
													<div class="col-xl-6 col-md-6 mb-3">
														<label><strong>Receiver Name</strong></label>
														<input type="text" class="form-control" name="receiver_name" placeholder="Receiver Name">
													</div>
													<!-- Reciever Phone -->
													<div class="col-xl-6 col-md-6">
														<label><strong>Receiver Phone</strong></label>
														<input type="number" class="form-control" name="receiver_phone" placeholder="Receiver Phone">
													</div>
												</div>

												<div class="row mt-3">
													<!-- Reciever Address -->
													<div class="col-xl-12 col-md-12">
														<label><strong>Receiver Address</strong></label>
														<input type="text" class="form-control" name="receiver_address" placeholder="Receiver Address">
													</div>
												</div>

												<div class="row mt-3">
													<!-- Package Type -->
													<div class="col-xl-6 col-md-6 mb-3">
														<label><strong>Package Type</strong></label>
														<select class="form-control" name="package_type">
															<option value="0">Select Package Type</option>
															<option value="1">Document</option>
															<option value="2">Parcel</option>
															<option value="3">Box</option>
															<option value="4">Bag</option>
															<option value="5">Carton</option>
															<option value="6">Envelope</option>
															<option value="7">Pouch</option>
															<option value="8">Other</option>
														</select>
													</div>
													<!-- Package Weight in Grams and Kgs -->
													<div class="col-xl-6 col-md-6">
														<label><strong>Package Weight</strong> (kgs/gms)</label>
														<input type="number" class="form-control" name="package_weight" placeholder="Package Weight">
													</div>
												</div>

												<div class="row mt-3">
													<!-- Package Value in Ksh. -->
													<div class="col-xl-6 col-md-6 mb-3">
														<label><strong>Package Value</strong> (Ksh)</label>
														<input type="number" class="form-control" name="package_value" placeholder="Package Value">
													</div>
													<!-- Package Quantity/Number -->
													<div class="col-xl-6 col-md-6">
														<label><strong>Package Quantity</strong> (Pcs)</label>
														<input type="number" class="form-control" name="package_quantity" placeholder="Package Quantity">
													</div>
												</div>

												<div class="row mt-3">
													<!-- Package Image -->
													<div class="col-xl-12 col-md-12">
														<label><strong>Package Image</strong></label>
														<input type="file" class="form-control" name="package_image" placeholder="Package Image">
													</div>
												</div>

												<div class="row my-3">
													<!-- Package Urgency -->
													<div class="col-xl-12 col-md-12">
														<label><strong>Package urgency</strong></label>
														<select class="form-control" name="package_status">
															<option value="0">Select Package Urgency</option>
															<option value="1">Normal</option>
															<option value="2">Urgent</option>
														</select>
													</div>
												</div>

												<div class="row my-3">
													<!-- Package Pickup Time -->
													<div class="col-xl-12 col-md-12">
														<label><strong>Package Pickup Time</strong> (Optional)</label>
														<input type="time" class="form-control" name="package_pickup_time" placeholder="Package Pickup Time">
													</div>
												</div>

												<div class="row my-3">
													<!-- Package Description -->
													<div class="col-xl-12 col-md-12">
														<label><strong>Package Description</strong></label>
														<textarea class="form-control" name="package_description" placeholder="Package Description"></textarea>
													</div>
												</div>
												
												<div class="col-md-12">
													<div class="mb-3">
														<button class="btn btn-primary blinking-button btn-block" id="placeOrderBtn">Place Order</button>
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
		</div>
	</div>
