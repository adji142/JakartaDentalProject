<!-- footer -->
<?php
$alamat = "";
$noTlp ="";
$emailto = "";
$OH1 = "";
$OH2 = "";
$OH3 = "";
$twitter="";
$facebook="";
$instagram="";
	foreach ($about as $ab) {
		$alamat = $ab->alamt;
		$noTlp = $ab->notlp;
		$emailto = $ab->email;
		if($ab->officehours== '')
		{
			$OH1 = 'Libur';
		}
		else{
			$OH1 = $ab->officehours;
		}
		if ($ab->officehours2=='') {
			$OH2 = 'Libur';
		}
		else{
			$OH2 = $ab->officehours2;
		}
		if ($ab->officehours3=='') {
			$OH3 = 'Libur';
		}
		else{
			$OH3 = $ab->officehours3;
		}
		$twitter = $ab->twitter;
		$facebook = $ab->facebook;
		$instagram = $ab->instagram;
	}
?>
	<footer class="py-sm-5">
		<div class="container">
			<div class="row py-5">
				<!-- footer grid1 -->
				<div class="col-lg-3 col-sm-6 fv5-contact">
					<h2 class="mb-4">Contact Us</h2>
					<div class="fv3-contact mt-3">
					
						<span class="fas fa-home mr-2"></span>
						<p><?php echo $alamat;?></p>
					</div>
					<div class="fv3-contact mt-3">
						<span class="fas fa-phone-volume mr-2"></span>
						<p><?php echo $noTlp;?></p>
					</div>
					<div class="fv3-contact mt-3">
						<span class="fas fa-envelope-open mr-2"></span>
						<a href="<?php echo $emailto;?>" class="text-secondary"><?php echo substr($emailto, 7);?></a>
					</div>
				</div>
				<!-- //footer grid1 -->
				<!-- footer grid2 -->
				<div class="col-lg-3  col-sm-6 footv3-left text-lg-center my-sm-0 mt-5">
					<h3 class="mb-4">Opening Hours</h3>
					<ul class="list-agileits">
						<li>
							Mon – Fri ------- <?php echo $OH1;?>
						</li>
						<li class="my-3">
							Saturday -------- <?php echo $OH2;?>
						</li>
						<li class="mb-3">
							Sunday ---------- <?php echo $OH3;?>
						</li>
						
					</ul>
				</div>
				<!-- //footer grid2 -->
				<!-- footer grid3 -->
				<div class="col-lg-3  col-sm-6 footv3-left text-lg-center my-lg-0 mt-sm-5 mt-5">
					<h3 class="mb-4">Navigation</h3>
					<ul class="list-agileits">
						<li>
							<a href="index.html">
								Home
							</a>
						</li>
						<li class="my-3">
							<a href="about.html">
								About Us
							</a>
						</li>
						<li class="mb-3">
							<a href="services.html">
								Services
							</a>
						</li>
						<li>
							<a href="contact.html">
								Contact Us
							</a>
						</li>
					</ul>
				</div>
				<!-- //footer grid3 -->
				<!-- footer grid4  -->
				<!-- <div class="col-lg-3  col-sm-6 footv3-left my-lg-0 mt-5">
					<h3 class="mb-4">subscribe to newsletter</h3>
					<form action="#" method="post">
						<div class="form-group">
							<input type="email" class="form-control  bg-dark border-0" id="email" placeholder="Enter email" name="email" required>
						</div>
						<div class="form-group">
							<input type="Submit" class="form-control bg-secondary text-white border-0" id="sub" value="submit" name="sub">
						</div>
					</form>
				</div> -->
				<!-- //footer grid4 -->
			</div>
			<div class="cpy-right text-center  pt-3">
				
				<div class="copyrightbottom">
					<p class="text-secondary">© 2018 Alleviating. All rights reserved | Design by
						<a href="http://w3layouts.com" class="text-white"> W3layouts.</a> | Modified by AIS-System
					</p>
				</div>
				<div class="copyrighttop">
					<ul>
						<li>
							<h4>Follow us on:</h4>
						</li>
						<li>
							<a class="facebook" href="<?php echo $facebook;?>">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li>
							<a class="facebook" href="<?php echo $twitter;?>">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
						<li>
							<a class="facebook" href="<?php echo $instagram;?>">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //footer container -->
	</footer>
	<!-- //footer -->

	<!-- login  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Password" id="password" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-agile">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-secondary">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right">
                                <a href="#" class="text-secondary">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center dont-do">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter2" class="text-dark font-weight-bold">
                                Register Now</a>
								
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
	 <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="modal-title text-center text-dark mb-4">REGISTER NOW</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="col-form-label">First name</label>

                                <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2 col-form-label">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="" required="">
                            </div>
							<div class="reg-w3l">
								<button type="submit" class="form-control submit mb-4">Register</button>
                           </div>
						   <p class="text-center pb-4">
                                <a href="#" class="text-secondary">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->

    <!-- //footer -->
    <!-- js -->
    <script src="<?php echo base_url();?>front/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
	<script src="<?php echo base_url();?>front/js/minimal-slider.js"></script>
<!-- flexSlider (for testimonials) -->
		<!-- Calendar -->
				<link rel="stylesheet" href="<?php echo base_url();?>front/css/jquery-ui.css" />
				<script src="<?php echo base_url();?>front/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker" ).datepicker();
						  });
				  </script>
				<!-- //Calendar -->

	<script defer src="<?php echo base_url();?>front/js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->

    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- start-smooth-scrolling -->
    <script src="<?php echo base_url();?>front/js/move-top.js"></script>
    <script src="<?php echo base_url();?>front/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="<?php echo base_url();?>front/js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>front/js/bootstrap.js"></script>
</body>
</html>