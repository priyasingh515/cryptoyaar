@extends('frontend.layouts.main')
@section('content')

<div class="ms-breadcrumb-wrapper text-center ">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="ms-breadcrumb-container">
					<h1>&nbsp;Contact</h1> 
					<ul> 
						<li><a href="/">Home</a></li><li>&nbsp;Contact</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div> 
 <main id="primary" class="site-main">

	<section class="ms-main-page-container">
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-lg-12 col-md-12">
					<div class="ms-login-box ms-register-modal-box"style="max-width:100%;">
						<div class="ms-login-inner">

							<!-- Header -->
							<div class="ms-login-header text-center">
								<h4>Contact Us</h4>
								<p>We’d love to hear from you</p>
							</div>

							<div class="row">

								<!-- LEFT : Contact Info -->
								<div class="col-lg-5 col-md-12 d-flex align-items-center justify-content-center">

									<div class="ms-login-input-field" style="max-width:320px;">

										<!-- Address -->
										<div class="d-flex align-items-start mb-5">
											<span class="me-4 mt-1">
												<i class="fa fa-map-marker"
												style="color:#ff2c75;font-size:22px;"></i>
											</span>
											<div>
												<h5 class="mb-1 text-white fw-bold">
													RAYS IT & DESIGN WORLD
												</h5>
												<p class="mb-0 text-white-50" style="font-size:15px;">
													Raipur (Chhattisgarh), India
												</p>
											</div>
										</div>

										<!-- Phone -->
										<div class="d-flex align-items-center mb-5">
											<span class="me-4">
												<i class="fa fa-phone"
												style="color:#ff2c75;font-size:20px;"></i>
											</span>
											<p class="mb-0 text-white fw-bold" style="font-size:17px;">
												+91 99999 99999
											</p>
										</div>

										<!-- Email -->
										<div class="d-flex align-items-center">
											<span class="me-4">
												<i class="fa fa-envelope"
												style="color:#ff2c75;font-size:20px;"></i>
											</span>
											<p class="mb-0 text-white fw-bold" style="font-size:17px;">
												info@raysitworld.com
											</p>
										</div>

									</div>
								</div>





								<!-- RIGHT : Contact Form -->
								<div class="col-lg-7 col-md-12">

									<form method="POST" action="">
										@csrf

										<div class="ms-login-input-field">

											<div class="ms-login-input ms-register-icon">
												<input type="text" name="name"
													placeholder="Your Name *" required>
												<span><i class="fa fa-user"></i></span>
											</div>

											<div class="ms-login-input ms-register-icon">
												<input type="email" name="email"
													placeholder="Your Email *" required>
												<span><i class="fa fa-envelope"></i></span>
											</div>

											<div class="ms-login-input ms-register-icon">
												<input type="text" name="phone"
													placeholder="Phone Number *" required>
												<span><i class="fa fa-phone"></i></span>
											</div>

											<div class="ms-login-input ms-register-icon">
												<textarea name="message"
													placeholder="Your Message *"
													rows="4" required style="background-color: #1b1f25;border:#2d323a"></textarea>
											</div>

										</div>

										<div class="ms-login-btn">
											<button type="submit" class="ms-btn">
												Send Message
											</button>
										</div>

									</form>

								</div>

							</div><!-- row -->

						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="ms-main-page-container" style="padding-top:0;">
		<div class="container-fluid px-0">

			<iframe
				src="https://www.google.com/maps?q=Raipur%20Chhattisgarh&output=embed"
				width="100%"
				height="450"
				style="border:0;"
				loading="lazy">
			</iframe>

		</div>
	</section>


</main>

@endsection
