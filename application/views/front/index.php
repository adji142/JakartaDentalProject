<?php
require_once(APPPATH."views/front/part/header.php");

$about = $this->M_controllroom->Getabout_detaiil()->result();
$team = $this->M_controllroom->GetStaff_Detail()->result();
$galery = $this->M_controllroom->Getgaleri()->result();
?>

	<!-- testimonials -->
	<div class="testimonials py-lg-5">
		<div class="container py-5">
			<div class="text-center wthree-title pb-sm-5 pb-3" id="team">
				<h3 class="w3l-sub"  id="team">OUR TEAM</h4>
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
				<div class="text-center wthree-title pb-sm-5 pb-3">
					<h3 class="w3l-sub text-white" id="about">About Us</h4>
					<h4 class="sub-title py-3 text-white">Jakarta Dental Project</h5>
				</div>
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
						<img src="<?php echo base_url().'front/images/Capture222.PNG'?>">
					</div>
				</div>
			</div> 
		</div>
</section>
<!-- //choose -->

<section class="gallery py-lg-5">
	<div class="container py-4">
		<div class="text-center wthree-title pb-sm-5 pb-3">
			<h3 class="w3l-sub" id="galeri">Galery Medic</h4>
			<h4 class="sub-title py-3">Jakarta Dental Project</h5>
		</div>
	
	<div class="row agile_gallery_grids w3-agile demo py-lg-3">
		<?php
			foreach ($galery as $gal) {
				echo '
					<div class="col-md-4 gal-sec">
						<div class="gallery-grid1">
							<a title="'.$gal->desc.'." href="./front/images/'.$gal->image.'">
							<img src="./front/images/'.$gal->image.'" alt=" " class="img-fluid2" />
							<div class="p-mask img_text_w3ls">
								<h4>'.$gal->tag.'</h4>
								<span> </span>
								<p>'.$gal->desc.'</p>
							</div>
							</a>
						</div>
					</div>
				';
			}
		
		?>
	</div>
	</div>
</section>

	<section class="departments">
		<div class="departments-1 py-lg-5">
			<div class="container py-5">
				<div class="text-center wthree-title pb-sm-5 pb-3">
					<h3 class="w3l-sub text-white" id="promo">Promo</h4>
					<h4 class="sub-title py-3 text-white">Jakarta Dental Project.</h5>
				</div>
					<div class="row py-lg-12">
					<div class="col-lg-12 w3layouts_choose_right_grid1">
						<center><img src="<?php echo base_url().'front/images/promo.jpeg'?>"></center>
					</div>
					</div>
			</div>
		</div>
	</section>
<?php
require_once(APPPATH."views/front/part/footer.php");
?>