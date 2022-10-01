<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="<?= base_url() ?>"><img src="<?= base_url() ?>public/assets/images/logo-full.png" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Access Account</h4>
									<div class="mb-3">
										<span>NOTE: Login is restricted for <strong>Vendors</strong> and <strong>Riders</strong> only. If you are an existing customer use this link to access your accounts <a href="<?= site_url('customer_login') ?>" style="color:#ff6a59">Customer Login Here</a></span>
									</div>
                                    <form action="<?= site_url() ?>" method="post" id="userLoginForm">
										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                        <div class="mb-3">
                                            <label><strong>Password or Phone-Number</strong></label>
                                            <input type="password" class="form-control" value="Password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block blinking-button">Unlock</button>
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
