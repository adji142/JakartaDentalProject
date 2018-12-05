<?php
require_once(APPPATH."views/front/part/header.php");

$about = $this->m_controllroom->Getabout_detaiil()->result();
$team = $this->m_controllroom->GetStaff_Detail()->result();
?>
<!-- 	<div class="about">
	<div class="abt-layer">
		<div class="container">
			<div class="about-main">
				<div class="about-right">
					<h3 class="subheading-w3-agile">Make an Appointment</h3>
					
					<div class="stats">
						<div class="stats_inner">
							<form action="#" method="post">
								<select class="form-control mb-3">
									<option value="2">Neurology</option>
									<option value="3">Dentistry</option>
									<option value="4">Cardiology</option>
									<option value="5">Pediatrics</option>
									<option value="6">Pulmonology</option>
									<option value="7">Ophthalmology</option>
									<option value="8">Diagnostics</option>
								 </select>
								 <input class="form-control mb-3" type="text" placeholder="Name" name="name" required="">
								<select class="form-control mb-3">
									<option value="2">Gender</option>
									<option value="3">Male</option>
									<option value="4">Female</option>
								</select>
								<input class="form-control mb-3" type="text" placeholder="Phone" name="phone" required="">
								<input class="form-control mb-3" type="email" placeholder="E-mail" name="email" required="">
								<input class="form-control date mb-3" id="datepicker" name="Text" placeholder="Select Date"  type="text" required="">
								<button type="submit" class="btn btn-agile btn-block w-100">Make An Appointment</button>
							</form>
						</div>
					</div>

				</div>
			</div>
			
		</div>
		</div>
	</div> -->
	<!-- <section class="departments">
		<div class="departments-1 py-lg-5">
			<div class="container py-5">
				<div class="text-center wthree-title pb-sm-5 pb-3">
					<h3 class="w3l-sub text-white">Departments</h4>
					<h4 class="sub-title py-3 text-white">Donec consequat sapien ut leo cursus rhoncus.</h5>
				</div>
					<div class="row py-lg-5">
								<div class="col-sm-4 w3-ab">
									<div class="w3-ab-grid text-center">
										<div class="w3-aicon p-4">
											<i class="fa fa-stethoscope" aria-hidden="true"></i>
											<h4 class="my-3 text-capitalize text-white">Neurology</h4>
										</div>
									</div>
								</div>
								<div class="col-sm-4 w3-ab">
									<div class="w3-ab-grid text-center">
										<div class="w3-aicon p-4">
											<i class="fa fa-wheelchair" aria-hidden="true"></i>
											<h4 class="my-3 text-capitalize text-white">Traumatology</h4>
										</div>
									</div>
								</div>
								<div class="col-sm-4 w3-ab">
									<div class="w3-ab-grid text-center">
										<div class="w3-aicon p-4">
											<i class="fa fa-plus-square" aria-hidden="true"></i>
											<h4 class="my-3 text-capitalize text-white">dentistry</h4>
										</div>
									</div>
								</div>
								<div class="col-sm-4 mt-4 w3-ab">
									<div class="w3-ab-grid text-center">
										<div class="w3-aicon  p-4">
											<i class="fa fa-heartbeat" aria-hidden="true"></i>
											<h4 class="my-3 text-capitalize text-white">Cardiology</h4>
										</div>
									</div>
								</div>
								<div class="col-sm-4 mt-4 w3-ab">
									<div class="w3-ab-grid text-center">
										<div class="w3-aicon p-4">
											<i class="fa fa-medkit" aria-hidden="true"></i>
											<h4 class="my-3 text-capitalize text-white">pulmonary</h4>
										</div>
									</div>
								</div>
								<div class="col-sm-4 mt-4 w3-ab">
									<div class="w3-ab-grid text-center">
										<div class="w3-aicon p-4">
											<i class="fa fa-ambulance" aria-hidden="true"></i>
											<h4 class="my-3 text-capitalize text-white">pediatrics</h4>
										</div>
									</div>
								</div>
					</div>
			</div>
		</div>
	</section> -->

	<!-- testimonials -->
	<div class="testimonials py-lg-5">
		<div class="container py-5">
			<div class="text-center wthree-title pb-sm-5 pb-3">
				<h3 class="w3l-sub">OUR TEAM</h4>
				<h4 class="sub-title py-3">Jakarta Dental Project.</h5>
			</div>
			<div class="w3_testimonials_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<?php
							foreach ($team as $key) {
							echo '
								<li>
									<div class="w3_testimonials_grid">
										<div class="row person-w3ls-testi mt-5">
											<div class="col-6 agile-left-test text-right">
												<img src="'.base_url().'front/images/Staff/'.$key->file_name.'" alt=" " class="img-fluid rounded-circle" />
											</div>
											<div class="col-6 agile-right-test text-left mt-4">
												<h5>'.$key->name.'</h5>
												<p>'.$key->position.'</p>
												<p><a href ="mailto:'.$key->email.'">'.$key->email.'</a></p>
											</div>
										</div>
									</div>
								</li>';
							}
							?>
							<!-- <li>
								<div class="w3_testimonials_grid">
									<p>"Nam Cumque nihil impedit quo minuslibero tempore, nihil impedit quo minus id quod possimus, Nam Cumque nihil impedit
										quo minuslibero tempore, cum soluta nobis est eligendi optio cumque nihil impedit omnis voluptas".</p>
									<ul class="testi-w3ls-rate mt-4">
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
									</ul>
									<div class="row person-w3ls-testi mt-5">
										<div class="col-6 agile-left-test text-right">
											<img src="images/te2.jpg" alt=" " class="img-fluid rounded-circle" />
										</div>
										<div class="col-6 agile-right-test text-left mt-4">
											<h5>John Lara</h5>
											<p>Tempore Quo</p>
										</div>
									</div>
								</div>
							</li> -->
							<!-- <li>
								<div class="w3_testimonials_grid">
									<p>"Nam Cumque nihil impedit quo minuslibero tempore, nihil impedit quo minus id quod possimus, Nam Cumque nihil impedit
										quo minuslibero tempore, cum soluta nobis est eligendi optio cumque nihil impedit omnis voluptas".</p>
									<ul class="testi-w3ls-rate mt-4">
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
									</ul>
									<div class="row person-w3ls-testi mt-5">
										<div class="col-6 agile-left-test text-right">
											<img src="images/te3.jpg" alt=" " class="img-fluid rounded-circle" />
										</div>
										<div class="col-6 agile-right-test text-left mt-4">
											<h5>Frank John </h5>
											<p>Tempore Quo</p>
										</div>
									</div>
								</div>
							</li> -->
						</ul>
					</div>
				</section>

			</div>
		</div>
	</div>
	<!-- //testimonials -->

<!-- choose -->
	<section class="choose">
		<div class="choose-1 py-5">
			<div class="container py-md-4 mt-md-3"> 
				<div class="row inner_w3l_agile_grids-1 ">
					<div class="col-lg-6 w3layouts_choose_left_grid1">
						<div class="choose_top">
							<h3 class="w3l_header text-white">Jakarta Dental Project</h3>
							<!-- start hire -->
							<?php
								foreach ($about as $key) {
									echo "
										<p class='text-white'>".$key->about."</p>
									";
								}
							?>
							<a href="about.html" class="btn btn-primary mt-3">Read More</a>
						</div>
					</div>
					<div class="col-lg-6 w3layouts_choose_right_grid1">
						<img src="<?php echo base_url().'front/images/Capture222.png'?>">
					</div>
				</div>
			</div> 
		</div>
</section>
<!-- //choose -->

<!-- case studies -->
	<section class="case_w3ls  py-lg-5">
		<div class="container py-5">
			<div class="text-center wthree-title pb-sm-5 pb-3">
				<h3 class="w3l-sub">GIGI PEDIA</h4>
				<h4 class="sub-title py-3">Jakarta Dental Project</h5>
			</div>
			<!-- case studies row -->
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="img1 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls">
							<h4>Emergency Help</h4>
							<span> </span>
							<p>Sed porttitor lectus nibh ras ultricies ligula sed magna dictum porta. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 my-md-0 mt-4">
					<div class="img1 img2 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls">
							<h4>Heart Surgery</h4>
							<span> </span>
							<p>Sed porttitor lectus nibh ras ultricies ligula sed magna dictum porta. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 my-lg-0 mt-4">
					<div class="img1 img3 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls">
							<h4>Emergency Care</h4>
							<span> </span>
							<p>Sed porttitor lectus nibh ras ultricies ligula sed magna dictum porta. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mt-4">
					<div class="img1 img5 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls">
							<h4>Dental Care</h4>
							<span> </span>
							<p>Sed porttitor lectus nibh ras ultricies ligula sed magna dictum porta. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6  mt-4">
					<div class="img1 img4 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls">
							<h4>Individual Approach</h4>
							<span> </span>
							<p>Sed porttitor lectus nibh ras ultricies ligula sed magna dictum porta. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mt-4">
					<div class="img1 img6 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls">
							<h4>Qualified Doctors</h4>
							<span> </span>
							<p>Sed porttitor lectus nibh ras ultricies ligula sed magna dictum porta. </p>
						</div>
					</div>
				</div>
			</div>
			<!-- //case studies row -->
		</div>
	</section>
<?php
require_once(APPPATH."views/front/part/footer.php");
?>