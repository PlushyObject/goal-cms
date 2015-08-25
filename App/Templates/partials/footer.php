
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="bower_components/jquery-validate/dist/jquery-validate.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <!--<script src="js/register-form.js"></script>-->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

				<script>


				$(document).ready(function () {

						$('#registration-form').validate({ // initialize the plugin
							
							rules: {
								username: {
										required: true,
										minlength: 6
								},
								password: {
										required: true,
										minlength: 6
								},
								verify: {
										required:true,
										equalTo: '#new-user-password'
								}
							},
							messages: {
								username: "Please specify your username.",
								password: {
									required: "We need your email address to contact you",
									minlength: "Your password must have at least 6 characters."
								},
								verify: {
									required: 'Please verify your password.',
									equalTo: 'Your passwords do not match.'									
								}
							}
						});

				});


				</script>

    </body>
</html>