<script src="<?= base_url() ?>public/assets/vendor/global/global.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>public/assets/vendor/jquery-steps/build/jquery.steps.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>public/assets/vendor/jquery-validation/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>public/assets/js/plugins-init/jquery.validate-init.js" type="text/javascript"></script>
<script src="<?= base_url() ?>public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>public/assets/js/custom.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>public/assets/js/dlabnav-init.js" type="text/javascript"></script>
<script src="<?= base_url() ?>public/assets/js/demo.js" type="text/javascript"></script>
<script src="<?= base_url() ?>public/assets/js/styleSwitcher.js" type="text/javascript"></script>

<!-- Added -->
<script src="<?= base_url() ?>public/assets/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js" type="text/javascript"></script>

<!-- main file Scripts for JavaScript -->
<script>
	$(document).ready(function(){
		// SmartWizard initialize
		$('#smartwizard').smartWizard(); 
	});

	// Go to login
	$(document).on('click', '#goToLogin', function() {
		window.location.href = $(this).attr('login_url');
	})
</script>

</body>
