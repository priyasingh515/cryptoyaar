@extends('frontend.layouts.main')

@section('content')
    <main id="primary" class="site-main">
		<section class="ms-main-page-container">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="ms-page-columns">
							<article id="post-1143" class="post-1143 page type-page status-publish hentry">
								<div class="ms-details-wrapper">
									<div class="entry-content ms-single-data">
										<div class="wpb-content-wrapper">
											<div data-vc-full-width="true" data-vc-full-width-init="false"
												data-vc-stretch-content="true"
												class="vc_row wpb_row vc_row-fluid vc_custom_1663832536943 vc_row-no-padding">
												<div class="wpb_column vc_column_container vc_col-sm-12">
													<div class="vc_column-inner" style="height:90vh">
														<div class="wpb_wrapper">
															<div class="ms-banner-wrapper ">
																<div class="ms-banner-bg-img-1"
																	style="background-image:url(https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/wp-content/uploads/sites/5/2022/05/bannerbg1-1.jpg)">
																</div>
																<div class="ms-banner-bg-img-2"
																	style="background-image:url(https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/wp-content/uploads/sites/5/2022/05/bannerbg2-1.jpg)">
																</div>
																<div class="ms-banner-inner">
																	<div class="ms-banner-heading">
																		<h1>DISCOVER UNLIMITED CRYPTO VIDEOS, COURSES ONLY ON CRYPTOYAAR</h1>

																		<div class="ms-banner-btn">
																			<a href="javascript:;" 
																			class="ms-btn"
																			data-bs-toggle="modal"
																			data-bs-target="#loginModal">
																				<i class="fa fa-download me-2"></i> Download App
																			</a>
																		</div>

																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="vc_row-full-width vc_clearfix"></div>
											<div data-vc-full-width="true" data-vc-full-width-init="false"
												data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid">
												<div class="wpb_column vc_column_container vc_col-sm-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="vc_empty_space" style="height: 79px"><span
																	class="vc_empty_space_inner"></span></div>
															<div class="ms-language-wrapper ">
																<div class="container">
																	<div class="ms-language-heading">
																		<h2 class="heading">BROWSE BY CATEGORY</h2>
																	</div>
																	<div class="row gy-4">
																		@foreach ($categories as $index => $item)
																			<div class="col-lg-2 col-md-4 col-sm-6 col-6">
																				<div class="ms-language-box color-{{ $index % 4 }}">
																					<a href="">
																						<h2>{{ $item->name }}</h2>
																					</a>
																					<p>{{ $item->name }}</p>
																				</div>
																			</div>
																		@endforeach
																		{{-- <div class="col-lg-2 col-md-4 col-sm-6 col-6">
																			<div class="ms-language-box lang-english">
																				<a
																					href="">
																					<h2>English</h2>
																				</a>
																				<p>English</p>
																			</div>
																		</div>
																		<div class="col-lg-2 col-md-4 col-sm-6 col-6">
																			<div class="ms-language-box lang-chinese">
																				<a
																					href="">
																					<h2>Coding</h2>
																				</a>
																				<p>Coading</p>
																			</div>
																		</div>
																		<div class="col-lg-2 col-md-4 col-sm-6 col-6">
																			<div class="ms-language-box lang-spanish">
																				<a
																					href="">
																					<h2>CRYPTO</h2>
																				</a>
																				<p>Crypto</p>
																			</div>
																		</div>
																		<div class="col-lg-2 col-md-4 col-sm-6 col-6">
																			<div class="ms-language-box lang-french">
																				<a
																					href="">
																					<h2>Marketing</h2>
																				</a>
																				<p>Marketing</p>
																			</div>
																		</div>
																		<div class="col-lg-2 col-md-4 col-sm-6 col-6">
																			<div class="ms-language-box lang-arabic">
																				<a
																					href="">
																					<h2>Buisness</h2>
																				</a>
																				<p>Buisness</p>
																			</div>
																		</div> --}}
																		
																	</div>
																</div>
															</div>
															<div class="vc_empty_space" style="height: 74px"><span
																	class="vc_empty_space_inner"></span></div>
														</div>
													</div>
												</div>
											</div>
											<div class="vc_row-full-width vc_clearfix"></div>
											<div data-vc-full-width="true" data-vc-full-width-init="false"
												data-vc-stretch-content="true"
												class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
												<div class="wpb_column vc_column_container vc_col-sm-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="ms-top-rated-wrapper">
																<div class="container-fluid">
																	<div class="ms-top-rated-heading">
																		<h2 class="heading">TOP-RATED VIDEOS</h2>
																	</div>
																	<div class="ms-top-rated-slider">
																		<div class="swiper mySwiper">
																			<div class="swiper-wrapper">
																				<div class="swiper-slide">
																					<div class="ms-top-rated-img">
																						<a
																							href=""><img
																								decoding="async"
																								src="assets/img/1-1-1.jpg"
																								alt="webseries">
																							<div
																								class="ms-exclusive-rating ms-rating">
																								<span>
																									<svg xmlns="http://www.w3.org/2000/svg"
																										width="12"
																										height="12"
																										viewBox="0 0 12 12">
																										<path
																											class="cls-1"
																											d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																											transform="translate(-550 -1172)">
																										</path>
																									</svg>
																									5
																								</span>
																							</div>
																						</a>
																						<div class="ms-prmum-tag">
																							<span>
																								<svg xmlns="http://www.w3.org/2000/svg"
																									viewBox="0 0 32 32">
																									<g>
																										<path
																											d="M27.488 23l-.513 2.225A1 1 0 0126 26H6a1 1 0 01-.975-.775L4.512 23zM29.975 12.225L27.95 21H4.05l-2.025-8.775a1.001 1.001 0 011.471-1.093l6.189 3.537 5.482-8.223c.179-.268.475-.434.796-.446a.99.99 0 01.826.386l6.429 8.266 5.227-3.484a1.002 1.002 0 011.53 1.057z">
																										</path>
																									</g>
																								</svg>
																							</span>
																							<p>Premium</p>
																						</div>
																					</div>
																				</div>
																				<div class="swiper-slide">
																					<div class="ms-top-rated-img">
																						<a
																							href=""><img
																								decoding="async"
																								src="assets/img/2-3-1.jpg"
																								alt="webseries">
																							<div
																								class="ms-exclusive-rating ms-rating">
																								<span>
																									<svg xmlns="http://www.w3.org/2000/svg"
																										width="12"
																										height="12"
																										viewBox="0 0 12 12">
																										<path
																											class="cls-1"
																											d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																											transform="translate(-550 -1172)">
																										</path>
																									</svg>
																									5
																								</span>
																							</div>
																						</a>
																					</div>
																				</div>
																				<div class="swiper-slide">
																					<div class="ms-top-rated-img">
																						<a
																							href=""><img
																								decoding="async"
																								src="assets/img/6-1.jpg"
																								alt="webseries">
																							<div
																								class="ms-exclusive-rating ms-rating">
																								<span>
																									<svg xmlns="http://www.w3.org/2000/svg"
																										width="12"
																										height="12"
																										viewBox="0 0 12 12">
																										<path
																											class="cls-1"
																											d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																											transform="translate(-550 -1172)">
																										</path>
																									</svg>
																									5
																								</span>
																							</div>
																						</a>
																						<div class="ms-prmum-tag">
																							<span>
																								<svg xmlns="http://www.w3.org/2000/svg"
																									viewBox="0 0 32 32">
																									<g>
																										<path
																											d="M27.488 23l-.513 2.225A1 1 0 0126 26H6a1 1 0 01-.975-.775L4.512 23zM29.975 12.225L27.95 21H4.05l-2.025-8.775a1.001 1.001 0 011.471-1.093l6.189 3.537 5.482-8.223c.179-.268.475-.434.796-.446a.99.99 0 01.826.386l6.429 8.266 5.227-3.484a1.002 1.002 0 011.53 1.057z">
																										</path>
																									</g>
																								</svg>
																							</span>
																							<p>Premium</p>
																						</div>
																					</div>
																				</div>
																				<div class="swiper-slide">
																					<div class="ms-top-rated-img">
																						<a
																							href=""><img
																								decoding="async"
																								src="assets/img/1-2.jpg"
																								alt="webseries">
																							<div
																								class="ms-exclusive-rating ms-rating">
																								<span>
																									<svg xmlns="http://www.w3.org/2000/svg"
																										width="12"
																										height="12"
																										viewBox="0 0 12 12">
																										<path
																											class="cls-1"
																											d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																											transform="translate(-550 -1172)">
																										</path>
																									</svg>
																									5
																								</span>
																							</div>
																						</a>
																						<div class="ms-prmum-tag">
																							<span>
																								<svg xmlns="http://www.w3.org/2000/svg"
																									viewBox="0 0 32 32">
																									<g>
																										<path
																											d="M27.488 23l-.513 2.225A1 1 0 0126 26H6a1 1 0 01-.975-.775L4.512 23zM29.975 12.225L27.95 21H4.05l-2.025-8.775a1.001 1.001 0 011.471-1.093l6.189 3.537 5.482-8.223c.179-.268.475-.434.796-.446a.99.99 0 01.826.386l6.429 8.266 5.227-3.484a1.002 1.002 0 011.53 1.057z">
																										</path>
																									</g>
																								</svg>
																							</span>
																							<p>Premium</p>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="swiper-pagination"></div>
																		</div>
																	</div>
																</div>
																<div class="ms-letest-top-navigation">
																	<div class="swiper-button-next">
																		<span>
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="7" height="12"
																				viewBox="0 0 7 12">
																				<path class="cls-1"
																					d="M1909.81,2028.53l-5.3-5.34a0.66,0.66,0,0,0-.46-0.19,0.642,0.642,0,0,0-.46.19l-0.39.39a0.652,0.652,0,0,0,0,.93l4.45,4.49-4.46,4.49a0.652,0.652,0,0,0,0,.92l0.39,0.4a0.66,0.66,0,0,0,.46.19,0.642,0.642,0,0,0,.46-0.19l5.31-5.35a0.66,0.66,0,0,0,.19-0.46A0.683,0.683,0,0,0,1909.81,2028.53Z"
																					transform="translate(-1903 -2023)">
																				</path>
																			</svg>
																		</span>
																	</div>
																	<div class="swiper-button-prev">
																		<span>
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="7" height="12"
																				viewBox="0 0 7 12">
																				<path class="cls-1"
																					d="M1909.81,2028.53l-5.3-5.34a0.66,0.66,0,0,0-.46-0.19,0.642,0.642,0,0,0-.46.19l-0.39.39a0.652,0.652,0,0,0,0,.93l4.45,4.49-4.46,4.49a0.652,0.652,0,0,0,0,.92l0.39,0.4a0.66,0.66,0,0,0,.46.19,0.642,0.642,0,0,0,.46-0.19l5.31-5.35a0.66,0.66,0,0,0,.19-0.46A0.683,0.683,0,0,0,1909.81,2028.53Z"
																					transform="translate(-1903 -2023)">
																				</path>
																			</svg>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="vc_row-full-width vc_clearfix"></div>
											<div data-vc-full-width="true" data-vc-full-width-init="false"
												data-vc-stretch-content="true"
												class="vc_row wpb_row vc_row-fluid ms-light-bg-wrapper vc_row-no-padding">
												<div class="wpb_column vc_column_container vc_col-sm-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="vc_empty_space" style="height: 80px"><span
																	class="vc_empty_space_inner"></span></div>
															<div
																class="ms-top-movies-wrapper ms-popular-main-wrapper ms-wrapper ms-top-movie-spacer">
																<div class="container-fluid">
																	<div class="ms-top-movies-heading">
																		<h2 class="heading">Upcoming Videos</h2><a
																			href="https://demo.kamleshyadav.com/themeforest/videospire/upcoming-movies/"
																			class="view-all">View All <i
																				class="fa-solid fa-chevron-right"></i></a>
																	</div>
																	<div class="ms-latest-top-movies-slider">
																		<div class="swiper mySwiper">
																			<div class="swiper-wrapper ">
																				<div class="swiper-slide">
																					<div class="ms-exclusive-movie-box">
																						<div
																							class="ms-exclusive-movie-box-inner">
																							<div
																								class="ms-exclusive-movie-img">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/the-friends/"><img
																										decoding="async"
																										src="assets/img/E-Freinds-1.jpg"
																										alt="movie"></a>
																							</div>
																							<div
																								class="ms-exclusive-movie-content">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/the-friends/">
																									<h4>The Friends</h4>
																								</a>
																								<p>2020/ Action,
																									Adventure, Drama,
																									Comedy.</p>
																								<div
																									class="ms-exclusive-rating">
																									<span>
																										<svg xmlns="http://www.w3.org/2000/svg"
																											width="12"
																											height="12"
																											viewBox="0 0 12 12">
																											<path
																												class="cls-1"
																												d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																												transform="translate(-550 -1172)">
																											</path>
																										</svg>
																										0
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="ms-prmum-tag">
																							<span>
																								<svg xmlns="http://www.w3.org/2000/svg"
																									viewBox="0 0 32 32">
																									<g>
																										<path
																											d="M27.488 23l-.513 2.225A1 1 0 0126 26H6a1 1 0 01-.975-.775L4.512 23zM29.975 12.225L27.95 21H4.05l-2.025-8.775a1.001 1.001 0 011.471-1.093l6.189 3.537 5.482-8.223c.179-.268.475-.434.796-.446a.99.99 0 01.826.386l6.429 8.266 5.227-3.484a1.002 1.002 0 011.53 1.057z">
																										</path>
																									</g>
																								</svg>
																							</span>
																							<p>Premium</p>
																						</div>
																					</div>
																				</div>
																				<div class="swiper-slide">
																					<div class="ms-exclusive-movie-box">
																						<div
																							class="ms-exclusive-movie-box-inner">
																							<div
																								class="ms-exclusive-movie-img">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/skateboard/"><img
																										decoding="async"
																										src="assets/img/5-2-1.jpg"
																										alt="movie"></a>
																							</div>
																							<div
																								class="ms-exclusive-movie-content">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/skateboard/">
																									<h4>Skateboard</h4>
																								</a>
																								<p>2020/ Action,
																									Adventure, Drama,
																									Comedy.</p>
																								<div
																									class="ms-exclusive-rating">
																									<span>
																										<svg xmlns="http://www.w3.org/2000/svg"
																											width="12"
																											height="12"
																											viewBox="0 0 12 12">
																											<path
																												class="cls-1"
																												d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																												transform="translate(-550 -1172)">
																											</path>
																										</svg>
																										0
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="ms-prmum-tag">
																							<span>
																								<svg xmlns="http://www.w3.org/2000/svg"
																									viewBox="0 0 32 32">
																									<g>
																										<path
																											d="M27.488 23l-.513 2.225A1 1 0 0126 26H6a1 1 0 01-.975-.775L4.512 23zM29.975 12.225L27.95 21H4.05l-2.025-8.775a1.001 1.001 0 011.471-1.093l6.189 3.537 5.482-8.223c.179-.268.475-.434.796-.446a.99.99 0 01.826.386l6.429 8.266 5.227-3.484a1.002 1.002 0 011.53 1.057z">
																										</path>
																									</g>
																								</svg>
																							</span>
																							<p>Premium</p>
																						</div>
																					</div>
																				</div>
																				<div class="swiper-slide">
																					<div class="ms-exclusive-movie-box">
																						<div
																							class="ms-exclusive-movie-box-inner">
																							<div
																								class="ms-exclusive-movie-img">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/doctor-stream/"><img
																										decoding="async"
																										src="assets/img/4-2-1.jpg"
																										alt="movie"></a>
																							</div>
																							<div
																								class="ms-exclusive-movie-content">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/doctor-stream/">
																									<h4>Doctor Stream
																									</h4>
																								</a>
																								<p>2020/ Action,
																									Adventure, Drama,
																									Comedy.</p>
																								<div
																									class="ms-exclusive-rating">
																									<span>
																										<svg xmlns="http://www.w3.org/2000/svg"
																											width="12"
																											height="12"
																											viewBox="0 0 12 12">
																											<path
																												class="cls-1"
																												d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																												transform="translate(-550 -1172)">
																											</path>
																										</svg>
																										4
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="ms-prmum-tag">
																							<span>
																								<svg xmlns="http://www.w3.org/2000/svg"
																									viewBox="0 0 32 32">
																									<g>
																										<path
																											d="M27.488 23l-.513 2.225A1 1 0 0126 26H6a1 1 0 01-.975-.775L4.512 23zM29.975 12.225L27.95 21H4.05l-2.025-8.775a1.001 1.001 0 011.471-1.093l6.189 3.537 5.482-8.223c.179-.268.475-.434.796-.446a.99.99 0 01.826.386l6.429 8.266 5.227-3.484a1.002 1.002 0 011.53 1.057z">
																										</path>
																									</g>
																								</svg>
																							</span>
																							<p>Premium</p>
																						</div>
																					</div>
																				</div>
																				<div class="swiper-slide">
																					<div class="ms-exclusive-movie-box">
																						<div
																							class="ms-exclusive-movie-box-inner">
																							<div
																								class="ms-exclusive-movie-img">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/prince/"><img
																										decoding="async"
																										src="assets/img/3-2-1.jpg"
																										alt="movie"></a>
																							</div>
																							<div
																								class="ms-exclusive-movie-content">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/prince/">
																									<h4>Prince</h4>
																								</a>
																								<p>2020/ Action,
																									Adventure, Drama,
																									Comedy.</p>
																								<div
																									class="ms-exclusive-rating">
																									<span>
																										<svg xmlns="http://www.w3.org/2000/svg"
																											width="12"
																											height="12"
																											viewBox="0 0 12 12">
																											<path
																												class="cls-1"
																												d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																												transform="translate(-550 -1172)">
																											</path>
																										</svg>
																										0
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="swiper-slide">
																					<div class="ms-exclusive-movie-box">
																						<div
																							class="ms-exclusive-movie-box-inner">
																							<div
																								class="ms-exclusive-movie-img">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/caral/"><img
																										decoding="async"
																										src="assets/img/2-2-1.jpg"
																										alt="movie"></a>
																							</div>
																							<div
																								class="ms-exclusive-movie-content">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/caral/">
																									<h4>Caral</h4>
																								</a>
																								<p>2020/ Action,
																									Adventure, Drama,
																									Comedy.</p>
																								<div
																									class="ms-exclusive-rating">
																									<span>
																										<svg xmlns="http://www.w3.org/2000/svg"
																											width="12"
																											height="12"
																											viewBox="0 0 12 12">
																											<path
																												class="cls-1"
																												d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																												transform="translate(-550 -1172)">
																											</path>
																										</svg>
																										0
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="ms-prmum-tag">
																							<span>
																								<svg xmlns="http://www.w3.org/2000/svg"
																									viewBox="0 0 32 32">
																									<g>
																										<path
																											d="M27.488 23l-.513 2.225A1 1 0 0126 26H6a1 1 0 01-.975-.775L4.512 23zM29.975 12.225L27.95 21H4.05l-2.025-8.775a1.001 1.001 0 011.471-1.093l6.189 3.537 5.482-8.223c.179-.268.475-.434.796-.446a.99.99 0 01.826.386l6.429 8.266 5.227-3.484a1.002 1.002 0 011.53 1.057z">
																										</path>
																									</g>
																								</svg>
																							</span>
																							<p>Premium</p>
																						</div>
																					</div>
																				</div>
																				<div class="swiper-slide">
																					<div class="ms-exclusive-movie-box">
																						<div
																							class="ms-exclusive-movie-box-inner">
																							<div
																								class="ms-exclusive-movie-img">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/city-of-taxi/"><img
																										decoding="async"
																										src="assets/img/1-1-1.jpg"
																										alt="movie"></a>
																							</div>
																							<div
																								class="ms-exclusive-movie-content">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/city-of-taxi/">
																									<h4>City Of Taxi
																									</h4>
																								</a>
																								<p>2020/ Action,
																									Adventure, Drama,
																									Comedy.</p>
																								<div
																									class="ms-exclusive-rating">
																									<span>
																										<svg xmlns="http://www.w3.org/2000/svg"
																											width="12"
																											height="12"
																											viewBox="0 0 12 12">
																											<path
																												class="cls-1"
																												d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																												transform="translate(-550 -1172)">
																											</path>
																										</svg>
																										4
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="swiper-slide">
																					<div class="ms-exclusive-movie-box">
																						<div
																							class="ms-exclusive-movie-box-inner">
																							<div
																								class="ms-exclusive-movie-img">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/god-2/"><img
																										decoding="async"
																										src="assets/img/3-3.jpg"
																										alt="movie"></a>
																							</div>
																							<div
																								class="ms-exclusive-movie-content">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/god-2/">
																									<h4>God</h4>
																								</a>
																								<p>2020/ Action,
																									Adventure, Drama,
																									Comedy.</p>
																								<div
																									class="ms-exclusive-rating">
																									<span>
																										<svg xmlns="http://www.w3.org/2000/svg"
																											width="12"
																											height="12"
																											viewBox="0 0 12 12">
																											<path
																												class="cls-1"
																												d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																												transform="translate(-550 -1172)">
																											</path>
																										</svg>
																										0
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="ms-prmum-tag">
																							<span>
																								<svg xmlns="http://www.w3.org/2000/svg"
																									viewBox="0 0 32 32">
																									<g>
																										<path
																											d="M27.488 23l-.513 2.225A1 1 0 0126 26H6a1 1 0 01-.975-.775L4.512 23zM29.975 12.225L27.95 21H4.05l-2.025-8.775a1.001 1.001 0 011.471-1.093l6.189 3.537 5.482-8.223c.179-.268.475-.434.796-.446a.99.99 0 01.826.386l6.429 8.266 5.227-3.484a1.002 1.002 0 011.53 1.057z">
																										</path>
																									</g>
																								</svg>
																							</span>
																							<p>Premium</p>
																						</div>
																					</div>
																				</div>
																				<div class="swiper-slide">
																					<div class="ms-exclusive-movie-box">
																						<div
																							class="ms-exclusive-movie-box-inner">
																							<div
																								class="ms-exclusive-movie-img">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/epidemic/"><img
																										decoding="async"
																										src="assets/img/4-3.jpg"
																										alt="movie"></a>
																							</div>
																							<div
																								class="ms-exclusive-movie-content">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/epidemic/">
																									<h4>Epidemic</h4>
																								</a>
																								<p>2020/ Action,
																									Adventure, Drama,
																									Comedy.</p>
																								<div
																									class="ms-exclusive-rating">
																									<span>
																										<svg xmlns="http://www.w3.org/2000/svg"
																											width="12"
																											height="12"
																											viewBox="0 0 12 12">
																											<path
																												class="cls-1"
																												d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																												transform="translate(-550 -1172)">
																											</path>
																										</svg>
																										0
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="swiper-slide">
																					<div class="ms-exclusive-movie-box">
																						<div
																							class="ms-exclusive-movie-box-inner">
																							<div
																								class="ms-exclusive-movie-img">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/february-week/"><img
																										decoding="async"
																										src="assets/img/1-3.jpg"
																										alt="movie"></a>
																							</div>
																							<div
																								class="ms-exclusive-movie-content">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/february-week/">
																									<h4>February Week
																									</h4>
																								</a>
																								<p>2020/ Action,
																									Adventure, Drama,
																									Comedy.</p>
																								<div
																									class="ms-exclusive-rating">
																									<span>
																										<svg xmlns="http://www.w3.org/2000/svg"
																											width="12"
																											height="12"
																											viewBox="0 0 12 12">
																											<path
																												class="cls-1"
																												d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																												transform="translate(-550 -1172)">
																											</path>
																										</svg>
																										0
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="swiper-slide">
																					<div class="ms-exclusive-movie-box">
																						<div
																							class="ms-exclusive-movie-box-inner">
																							<div
																								class="ms-exclusive-movie-img">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/season-first/"><img
																										decoding="async"
																										src="assets/img/2-4.jpg"
																										alt="movie"></a>
																							</div>
																							<div
																								class="ms-exclusive-movie-content">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/season-first/">
																									<h4>Season First
																									</h4>
																								</a>
																								<p>2020/ Action,
																									Adventure, Drama,
																									Comedy.</p>
																								<div
																									class="ms-exclusive-rating">
																									<span>
																										<svg xmlns="http://www.w3.org/2000/svg"
																											width="12"
																											height="12"
																											viewBox="0 0 12 12">
																											<path
																												class="cls-1"
																												d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																												transform="translate(-550 -1172)">
																											</path>
																										</svg>
																										0
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="ms-letest-top-navigation">
																				<div class="swiper-button-next">
																					<span>
																						<svg xmlns="http://www.w3.org/2000/svg"
																							width="7" height="12"
																							viewBox="0 0 7 12">
																							<path class="cls-1"
																								d="M1909.81,2028.53l-5.3-5.34a0.66,0.66,0,0,0-.46-0.19,0.642,0.642,0,0,0-.46.19l-0.39.39a0.652,0.652,0,0,0,0,.93l4.45,4.49-4.46,4.49a0.652,0.652,0,0,0,0,.92l0.39,0.4a0.66,0.66,0,0,0,.46.19,0.642,0.642,0,0,0,.46-0.19l5.31-5.35a0.66,0.66,0,0,0,.19-0.46A0.683,0.683,0,0,0,1909.81,2028.53Z"
																								transform="translate(-1903 -2023)">
																							</path>
																						</svg>
																					</span>
																				</div>
																				<div class="swiper-button-prev">
																					<span>
																						<svg xmlns="http://www.w3.org/2000/svg"
																							width="7" height="12"
																							viewBox="0 0 7 12">
																							<path class="cls-1"
																								d="M1909.81,2028.53l-5.3-5.34a0.66,0.66,0,0,0-.46-0.19,0.642,0.642,0,0,0-.46.19l-0.39.39a0.652,0.652,0,0,0,0,.93l4.45,4.49-4.46,4.49a0.652,0.652,0,0,0,0,.92l0.39,0.4a0.66,0.66,0,0,0,.46.19,0.642,0.642,0,0,0,.46-0.19l5.31-5.35a0.66,0.66,0,0,0,.19-0.46A0.683,0.683,0,0,0,1909.81,2028.53Z"
																								transform="translate(-1903 -2023)">
																							</path>
																						</svg>
																					</span>
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
											<div class="vc_row-full-width vc_clearfix"></div>
											<div data-vc-full-width="true" data-vc-full-width-init="false"
												data-vc-stretch-content="true"
												class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
												<div class="wpb_column vc_column_container vc_col-sm-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="ms-overview-wrapper ms-ovrview-sapcer">
																<div class="container">
																	<div class="ms-overview-top-heading">
																		<h2 class="heading">CRYPTO OVERVIEW</h2>
																	</div>
																	<div class="swiper mySwiper">
																		<div class="swiper-wrapper">
																			<div class="swiper-slide">
																				<div class="row align-items-center">
																					<div class="col-lg-7">
																						<div class="ms-overview-left">
																							<a
																								href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/wonder-2-fadius/"><img
																									decoding="async"
																									src="assets/img/1-2-1.jpg"
																									alt="movie"></a>
																							<div class="ms-prmum-tag">
																								<span>
																									<svg xmlns="http://www.w3.org/2000/svg"
																										viewBox="0 0 32 32">
																										<g>
																											<path
																												d="M27.488 23l-.513 2.225A1 1 0 0126 26H6a1 1 0 01-.975-.775L4.512 23zM29.975 12.225L27.95 21H4.05l-2.025-8.775a1.001 1.001 0 011.471-1.093l6.189 3.537 5.482-8.223c.179-.268.475-.434.796-.446a.99.99 0 01.826.386l6.429 8.266 5.227-3.484a1.002 1.002 0 011.53 1.057z">
																											</path>
																										</g>
																									</svg>
																								</span>
																								<p>Premium</p>
																							</div>
																						</div>
																					</div>
																					<div class="col-lg-5">
																						<div class="ms-overview-right">
																							<div
																								class="ms-overview-heading">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/wonder-2-fadius/">
																									<h4>Wonder 2 Fadius
																									</h4>
																								</a>
																								<span
																									class="overviewIcon">
																									<svg xmlns="http://www.w3.org/2000/svg"
																										width="12"
																										height="12"
																										viewBox="0 0 12 12">
																										<path
																											class="cls-1"
																											d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																											transform="translate(-550 -1172)">
																										</path>
																									</svg>
																									3
																								</span>
																								<h5>2020/ Action,
																									Adventure, Drama,
																									Comedy.</h5>
																								<p>Consectetur
																									adipiscing elit.
																									Mauris eu gravida
																									augue. Ut tincidunt,
																									leo ut bibendum
																									convallis, dolor
																									arcu faucibus dolor,
																									a faucibus dui dolor
																									ac orci. Nam diam
																									felis molestie in
																									lacus quis fringilla
																									placerat sem. Proin
																									blandit sagittis
																									diam sed congue. In
																									porta vitae nunc
																									quis pharetra. Etiam
																									luctus ante vitae
																									egestas eleifend.
																								</p>
																							</div>
																							<div
																								class="ms-overview-right-content">
																								<h4>Directors: Denis
																									Panieo</h4>
																								<h4>Starring :<a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/kassah-napwer/">
																										kassah
																										napwer</a>, <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/sazieo-caperr/">
																										Sazieo
																										caperr</a></h4>
																								<h4>Genres : <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/genre/drama/">
																										Drama</a></h4>
																								<h4>Subtitles :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/hindi/">Hindi</a>,
																									<a class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/urdu/">Urdu</a>
																								</h4>
																								<h4>Audio :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/hindi/">
																										Hindi</a></h4>
																							</div>
																							<div
																								class="ms-overview-right-footer">
																								<ul>
																									<li
																										class="viewTrailer">
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/movies-overview/">View
																											All</a></li>
																									<li>
																										<a href="javascript:;"
																											class="ms-share"
																											data-shareuri="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/wonder-2-fadius/"
																											data-sharename="Wonder 2 Fadius">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="14"
																													height="16"
																													viewBox="0 0 14 16">
																													<path
																														class="cls-1"
																														d="M1233.45,6355.67a2.5,2.5,0,0,0-1.87.86l-4.6-2.75a2.82,2.82,0,0,0,0-1.56l4.6-2.75a2.5,2.5,0,0,0,1.87.86,2.668,2.668,0,1,0-2.54-2.66,2.646,2.646,0,0,0,.07.63l-4.66,2.79a2.482,2.482,0,0,0-1.77-.76,2.673,2.673,0,0,0,0,5.34,2.482,2.482,0,0,0,1.77-.76l4.66,2.79a2.646,2.646,0,0,0-.07.63A2.547,2.547,0,1,0,1233.45,6355.67Z"
																														transform="translate(-1222 -6345)">
																													</path>
																												</svg>
																											</span>
																											Share
																										</a>
																									</li>
																									<li>
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/wonder-2-fadius//?#respond">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="17"
																													height="16"
																													viewBox="0 0 17 16">
																													<path
																														class="cls-1"
																														d="M1336.36,6351.45a0.324,0.324,0,0,0-.38.08l-2.19,2.24a1.039,1.039,0,0,1-.54.3l-1.77.36a1.037,1.037,0,0,1-.96-0.29,1.121,1.121,0,0,1-.29-0.99l0.31-1.6h-5.64a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h5.94c0.01-.02.02-0.03,0.03-0.05l1.38-1.41h-7.35a0.36,0.36,0,0,1,0-.72h7.79a0.372,0.372,0,0,1,.2.07l2.29-2.36a2.1,2.1,0,0,1,.7-0.47,0.371,0.371,0,0,0,.07-0.64,1.4,1.4,0,0,0-.78-0.24h-12.75a1.438,1.438,0,0,0-1.42,1.45v14.19a0.361,0.361,0,0,0,.22.33,0.308,0.308,0,0,0,.13.03,0.325,0.325,0,0,0,.25-0.11l3.44-3.53h10.13a1.43,1.43,0,0,0,1.41-1.45v-4.13A0.346,0.346,0,0,0,1336.36,6351.45Zm-7.21,2.28h-4.25a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h4.25a0.356,0.356,0,0,1,.35.36A0.365,0.365,0,0,1,1329.15,6353.73Zm7.49-7.28a1.334,1.334,0,0,0-.95.41l-4.32,4.43a0.31,0.31,0,0,0-.09.18l-0.36,1.82a0.4,0.4,0,0,0,.1.33,0.358,0.358,0,0,0,.25.11c0.02,0,.05-0.01.07-0.01l1.77-.36a0.4,0.4,0,0,0,.18-0.1l4.31-4.43h0A1.4,1.4,0,0,0,1336.64,6346.45Zm-0.56,2.91-0.91-.94,0.5-.51,0.91,0.94Z"
																														transform="translate(-1321 -6345)">
																													</path>
																												</svg>
																											</span>
																											Feedback
																										</a>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="swiper-slide">
																				<div class="row align-items-center">
																					<div class="col-lg-7">
																						<div class="ms-overview-left">
																							<a
																								href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/the-friends/"><img
																									decoding="async"
																									src="assets/img/E-Freinds-1.jpg"
																									alt="movie"></a>
																							<div class="ms-prmum-tag">
																								<span>
																									<svg xmlns="http://www.w3.org/2000/svg"
																										viewBox="0 0 32 32">
																										<g>
																											<path
																												d="M27.488 23l-.513 2.225A1 1 0 0126 26H6a1 1 0 01-.975-.775L4.512 23zM29.975 12.225L27.95 21H4.05l-2.025-8.775a1.001 1.001 0 011.471-1.093l6.189 3.537 5.482-8.223c.179-.268.475-.434.796-.446a.99.99 0 01.826.386l6.429 8.266 5.227-3.484a1.002 1.002 0 011.53 1.057z">
																											</path>
																										</g>
																									</svg>
																								</span>
																								<p>Premium</p>
																							</div>
																						</div>
																					</div>
																					<div class="col-lg-5">
																						<div class="ms-overview-right">
																							<div
																								class="ms-overview-heading">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/the-friends/">
																									<h4>The Friends</h4>
																								</a>
																								<span
																									class="overviewIcon">
																									<svg xmlns="http://www.w3.org/2000/svg"
																										width="12"
																										height="12"
																										viewBox="0 0 12 12">
																										<path
																											class="cls-1"
																											d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																											transform="translate(-550 -1172)">
																										</path>
																									</svg>
																									0
																								</span>
																								<h5>2020/ Action,
																									Adventure, Drama,
																									Comedy.</h5>
																								<p>Consectetur
																									adipiscing elit.
																									Mauris eu gravida
																									augue. Ut tincidunt,
																									leo ut bibendum
																									convallis, dolor
																									arcu faucibus dolor,
																									a faucibus dui dolor
																									ac orci. Nam diam
																									felis molestie in
																									lacus quis fringilla
																									placerat sem. Proin
																									blandit sagittis
																									diam sed congue. In
																									porta vitae nunc
																									quis pharetra. Etiam
																									luctus ante vitae
																									egestas eleifend.
																								</p>
																							</div>
																							<div
																								class="ms-overview-right-content">
																								<h4>Directors: Denis
																									Panieo</h4>
																								<h4>Starring :<a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/alies-vhaess/">
																										Alies
																										vhaess</a>, <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/kassah-napwer/">
																										kassah
																										napwer</a></h4>
																								<h4>Genres : <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/genre/drama/">
																										Drama</a></h4>
																								<h4>Subtitles :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/hindi/">Hindi</a>,
																									<a class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/urdu/">Urdu</a>
																								</h4>
																								<h4>Audio :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/hindi/">
																										Hindi</a></h4>
																							</div>
																							<div
																								class="ms-overview-right-footer">
																								<ul>
																									<li
																										class="viewTrailer">
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/movies-overview/">View
																											All</a></li>
																									<li>
																										<a href="javascript:;"
																											class="ms-share"
																											data-shareuri="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/the-friends/"
																											data-sharename="The Friends">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="14"
																													height="16"
																													viewBox="0 0 14 16">
																													<path
																														class="cls-1"
																														d="M1233.45,6355.67a2.5,2.5,0,0,0-1.87.86l-4.6-2.75a2.82,2.82,0,0,0,0-1.56l4.6-2.75a2.5,2.5,0,0,0,1.87.86,2.668,2.668,0,1,0-2.54-2.66,2.646,2.646,0,0,0,.07.63l-4.66,2.79a2.482,2.482,0,0,0-1.77-.76,2.673,2.673,0,0,0,0,5.34,2.482,2.482,0,0,0,1.77-.76l4.66,2.79a2.646,2.646,0,0,0-.07.63A2.547,2.547,0,1,0,1233.45,6355.67Z"
																														transform="translate(-1222 -6345)">
																													</path>
																												</svg>
																											</span>
																											Share
																										</a>
																									</li>
																									<li>
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/the-friends//?#respond">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="17"
																													height="16"
																													viewBox="0 0 17 16">
																													<path
																														class="cls-1"
																														d="M1336.36,6351.45a0.324,0.324,0,0,0-.38.08l-2.19,2.24a1.039,1.039,0,0,1-.54.3l-1.77.36a1.037,1.037,0,0,1-.96-0.29,1.121,1.121,0,0,1-.29-0.99l0.31-1.6h-5.64a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h5.94c0.01-.02.02-0.03,0.03-0.05l1.38-1.41h-7.35a0.36,0.36,0,0,1,0-.72h7.79a0.372,0.372,0,0,1,.2.07l2.29-2.36a2.1,2.1,0,0,1,.7-0.47,0.371,0.371,0,0,0,.07-0.64,1.4,1.4,0,0,0-.78-0.24h-12.75a1.438,1.438,0,0,0-1.42,1.45v14.19a0.361,0.361,0,0,0,.22.33,0.308,0.308,0,0,0,.13.03,0.325,0.325,0,0,0,.25-0.11l3.44-3.53h10.13a1.43,1.43,0,0,0,1.41-1.45v-4.13A0.346,0.346,0,0,0,1336.36,6351.45Zm-7.21,2.28h-4.25a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h4.25a0.356,0.356,0,0,1,.35.36A0.365,0.365,0,0,1,1329.15,6353.73Zm7.49-7.28a1.334,1.334,0,0,0-.95.41l-4.32,4.43a0.31,0.31,0,0,0-.09.18l-0.36,1.82a0.4,0.4,0,0,0,.1.33,0.358,0.358,0,0,0,.25.11c0.02,0,.05-0.01.07-0.01l1.77-.36a0.4,0.4,0,0,0,.18-0.1l4.31-4.43h0A1.4,1.4,0,0,0,1336.64,6346.45Zm-0.56,2.91-0.91-.94,0.5-.51,0.91,0.94Z"
																														transform="translate(-1321 -6345)">
																													</path>
																												</svg>
																											</span>
																											Feedback
																										</a>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="swiper-slide">
																				<div class="row align-items-center">
																					<div class="col-lg-7">
																						<div class="ms-overview-left">
																							<a
																								href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/doctor-stream/"><img
																									decoding="async"
																									src="assets/img/4-2-1.jpg"
																									alt="movie"></a>
																							<div class="ms-prmum-tag">
																								<span>
																									<svg xmlns="http://www.w3.org/2000/svg"
																										viewBox="0 0 32 32">
																										<g>
																											<path
																												d="M27.488 23l-.513 2.225A1 1 0 0126 26H6a1 1 0 01-.975-.775L4.512 23zM29.975 12.225L27.95 21H4.05l-2.025-8.775a1.001 1.001 0 011.471-1.093l6.189 3.537 5.482-8.223c.179-.268.475-.434.796-.446a.99.99 0 01.826.386l6.429 8.266 5.227-3.484a1.002 1.002 0 011.53 1.057z">
																											</path>
																										</g>
																									</svg>
																								</span>
																								<p>Premium</p>
																							</div>
																						</div>
																					</div>
																					<div class="col-lg-5">
																						<div class="ms-overview-right">
																							<div
																								class="ms-overview-heading">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/doctor-stream/">
																									<h4>Doctor Stream
																									</h4>
																								</a>
																								<span
																									class="overviewIcon">
																									<svg xmlns="http://www.w3.org/2000/svg"
																										width="12"
																										height="12"
																										viewBox="0 0 12 12">
																										<path
																											class="cls-1"
																											d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																											transform="translate(-550 -1172)">
																										</path>
																									</svg>
																									4
																								</span>
																								<h5>2020/ Action,
																									Adventure, Drama,
																									Comedy.</h5>
																								<p>Consectetur
																									adipiscing elit.
																									Mauris eu gravida
																									augue. Ut tincidunt,
																									leo ut bibendum
																									convallis, dolor
																									arcu faucibus dolor,
																									a faucibus dui dolor
																									ac orci. Nam diam
																									felis molestie in
																									lacus quis fringilla
																									placerat sem. Proin
																									blandit sagittis
																									diam sed congue. In
																									porta vitae nunc
																									quis pharetra. Etiam
																									luctus ante vitae
																									egestas eleifend.
																								</p>
																							</div>
																							<div
																								class="ms-overview-right-content">
																								<h4>Directors: Denis
																									Panieo</h4>
																								<h4>Starring :<a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/kassah-napwer/">
																										kassah
																										napwer</a></h4>
																								<h4>Genres : <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/genre/romance/">
																										Romance</a></h4>
																								<h4>Subtitles :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/hindi/">Hindi</a>
																								</h4>
																								<h4>Audio :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/english/">
																										English</a></h4>
																							</div>
																							<div
																								class="ms-overview-right-footer">
																								<ul>
																									<li
																										class="viewTrailer">
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/movies-overview/">View
																											All</a></li>
																									<li>
																										<a href="javascript:;"
																											class="ms-share"
																											data-shareuri="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/doctor-stream/"
																											data-sharename="Doctor Stream">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="14"
																													height="16"
																													viewBox="0 0 14 16">
																													<path
																														class="cls-1"
																														d="M1233.45,6355.67a2.5,2.5,0,0,0-1.87.86l-4.6-2.75a2.82,2.82,0,0,0,0-1.56l4.6-2.75a2.5,2.5,0,0,0,1.87.86,2.668,2.668,0,1,0-2.54-2.66,2.646,2.646,0,0,0,.07.63l-4.66,2.79a2.482,2.482,0,0,0-1.77-.76,2.673,2.673,0,0,0,0,5.34,2.482,2.482,0,0,0,1.77-.76l4.66,2.79a2.646,2.646,0,0,0-.07.63A2.547,2.547,0,1,0,1233.45,6355.67Z"
																														transform="translate(-1222 -6345)">
																													</path>
																												</svg>
																											</span>
																											Share
																										</a>
																									</li>
																									<li>
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/doctor-stream//?#respond">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="17"
																													height="16"
																													viewBox="0 0 17 16">
																													<path
																														class="cls-1"
																														d="M1336.36,6351.45a0.324,0.324,0,0,0-.38.08l-2.19,2.24a1.039,1.039,0,0,1-.54.3l-1.77.36a1.037,1.037,0,0,1-.96-0.29,1.121,1.121,0,0,1-.29-0.99l0.31-1.6h-5.64a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h5.94c0.01-.02.02-0.03,0.03-0.05l1.38-1.41h-7.35a0.36,0.36,0,0,1,0-.72h7.79a0.372,0.372,0,0,1,.2.07l2.29-2.36a2.1,2.1,0,0,1,.7-0.47,0.371,0.371,0,0,0,.07-0.64,1.4,1.4,0,0,0-.78-0.24h-12.75a1.438,1.438,0,0,0-1.42,1.45v14.19a0.361,0.361,0,0,0,.22.33,0.308,0.308,0,0,0,.13.03,0.325,0.325,0,0,0,.25-0.11l3.44-3.53h10.13a1.43,1.43,0,0,0,1.41-1.45v-4.13A0.346,0.346,0,0,0,1336.36,6351.45Zm-7.21,2.28h-4.25a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h4.25a0.356,0.356,0,0,1,.35.36A0.365,0.365,0,0,1,1329.15,6353.73Zm7.49-7.28a1.334,1.334,0,0,0-.95.41l-4.32,4.43a0.31,0.31,0,0,0-.09.18l-0.36,1.82a0.4,0.4,0,0,0,.1.33,0.358,0.358,0,0,0,.25.11c0.02,0,.05-0.01.07-0.01l1.77-.36a0.4,0.4,0,0,0,.18-0.1l4.31-4.43h0A1.4,1.4,0,0,0,1336.64,6346.45Zm-0.56,2.91-0.91-.94,0.5-.51,0.91,0.94Z"
																														transform="translate(-1321 -6345)">
																													</path>
																												</svg>
																											</span>
																											Feedback
																										</a>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="swiper-slide">
																				<div class="row align-items-center">
																					<div class="col-lg-7">
																						<div class="ms-overview-left">
																							<a
																								href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/prince/"><img
																									decoding="async"
																									src="assets/img/3-2-1.jpg"
																									alt="movie"></a>
																						</div>
																					</div>
																					<div class="col-lg-5">
																						<div class="ms-overview-right">
																							<div
																								class="ms-overview-heading">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/prince/">
																									<h4>Prince</h4>
																								</a>
																								<span
																									class="overviewIcon">
																									<svg xmlns="http://www.w3.org/2000/svg"
																										width="12"
																										height="12"
																										viewBox="0 0 12 12">
																										<path
																											class="cls-1"
																											d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																											transform="translate(-550 -1172)">
																										</path>
																									</svg>
																									0
																								</span>
																								<h5>2020/ Action,
																									Adventure, Drama,
																									Comedy.</h5>
																								<p>Consectetur
																									adipiscing elit.
																									Mauris eu gravida
																									augue. Ut tincidunt,
																									leo ut bibendum
																									convallis, dolor
																									arcu faucibus dolor,
																									a faucibus dui dolor
																									ac orci. Nam diam
																									felis molestie in
																									lacus quis fringilla
																									placerat sem. Proin
																									blandit sagittis
																									diam sed congue. In
																									porta vitae nunc
																									quis pharetra. Etiam
																									luctus ante vitae
																									egestas eleifend.
																								</p>
																							</div>
																							<div
																								class="ms-overview-right-content">
																								<h4>Directors: Denis
																									Panieo</h4>
																								<h4>Starring :<a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/alies-vhaess/">
																										Alies
																										vhaess</a>, <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/kassah-napwer/">
																										kassah
																										napwer</a></h4>
																								<h4>Genres : <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/genre/romance/">
																										Romance</a></h4>
																								<h4>Subtitles :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/english/">English</a>,
																									<a class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/hindi/">Hindi</a>
																								</h4>
																								<h4>Audio :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/chinese/">
																										Chinese</a>, <a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/russian/">
																										Russian</a>, <a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/urdu/">
																										Urdu</a></h4>
																							</div>
																							<div
																								class="ms-overview-right-footer">
																								<ul>
																									<li
																										class="viewTrailer">
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/movies-overview/">View
																											All</a></li>
																									<li>
																										<a href="javascript:;"
																											class="ms-share"
																											data-shareuri="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/prince/"
																											data-sharename="Prince">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="14"
																													height="16"
																													viewBox="0 0 14 16">
																													<path
																														class="cls-1"
																														d="M1233.45,6355.67a2.5,2.5,0,0,0-1.87.86l-4.6-2.75a2.82,2.82,0,0,0,0-1.56l4.6-2.75a2.5,2.5,0,0,0,1.87.86,2.668,2.668,0,1,0-2.54-2.66,2.646,2.646,0,0,0,.07.63l-4.66,2.79a2.482,2.482,0,0,0-1.77-.76,2.673,2.673,0,0,0,0,5.34,2.482,2.482,0,0,0,1.77-.76l4.66,2.79a2.646,2.646,0,0,0-.07.63A2.547,2.547,0,1,0,1233.45,6355.67Z"
																														transform="translate(-1222 -6345)">
																													</path>
																												</svg>
																											</span>
																											Share
																										</a>
																									</li>
																									<li>
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/prince//?#respond">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="17"
																													height="16"
																													viewBox="0 0 17 16">
																													<path
																														class="cls-1"
																														d="M1336.36,6351.45a0.324,0.324,0,0,0-.38.08l-2.19,2.24a1.039,1.039,0,0,1-.54.3l-1.77.36a1.037,1.037,0,0,1-.96-0.29,1.121,1.121,0,0,1-.29-0.99l0.31-1.6h-5.64a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h5.94c0.01-.02.02-0.03,0.03-0.05l1.38-1.41h-7.35a0.36,0.36,0,0,1,0-.72h7.79a0.372,0.372,0,0,1,.2.07l2.29-2.36a2.1,2.1,0,0,1,.7-0.47,0.371,0.371,0,0,0,.07-0.64,1.4,1.4,0,0,0-.78-0.24h-12.75a1.438,1.438,0,0,0-1.42,1.45v14.19a0.361,0.361,0,0,0,.22.33,0.308,0.308,0,0,0,.13.03,0.325,0.325,0,0,0,.25-0.11l3.44-3.53h10.13a1.43,1.43,0,0,0,1.41-1.45v-4.13A0.346,0.346,0,0,0,1336.36,6351.45Zm-7.21,2.28h-4.25a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h4.25a0.356,0.356,0,0,1,.35.36A0.365,0.365,0,0,1,1329.15,6353.73Zm7.49-7.28a1.334,1.334,0,0,0-.95.41l-4.32,4.43a0.31,0.31,0,0,0-.09.18l-0.36,1.82a0.4,0.4,0,0,0,.1.33,0.358,0.358,0,0,0,.25.11c0.02,0,.05-0.01.07-0.01l1.77-.36a0.4,0.4,0,0,0,.18-0.1l4.31-4.43h0A1.4,1.4,0,0,0,1336.64,6346.45Zm-0.56,2.91-0.91-.94,0.5-.51,0.91,0.94Z"
																														transform="translate(-1321 -6345)">
																													</path>
																												</svg>
																											</span>
																											Feedback
																										</a>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="swiper-slide">
																				<div class="row align-items-center">
																					<div class="col-lg-7">
																						<div class="ms-overview-left">
																							<a
																								href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/caral/"><img
																									decoding="async"
																									src="assets/img/2-2-1.jpg"
																									alt="movie"></a>
																							<div class="ms-prmum-tag">
																								<span>
																									<svg xmlns="http://www.w3.org/2000/svg"
																										viewBox="0 0 32 32">
																										<g>
																											<path
																												d="M27.488 23l-.513 2.225A1 1 0 0126 26H6a1 1 0 01-.975-.775L4.512 23zM29.975 12.225L27.95 21H4.05l-2.025-8.775a1.001 1.001 0 011.471-1.093l6.189 3.537 5.482-8.223c.179-.268.475-.434.796-.446a.99.99 0 01.826.386l6.429 8.266 5.227-3.484a1.002 1.002 0 011.53 1.057z">
																											</path>
																										</g>
																									</svg>
																								</span>
																								<p>Premium</p>
																							</div>
																						</div>
																					</div>
																					<div class="col-lg-5">
																						<div class="ms-overview-right">
																							<div
																								class="ms-overview-heading">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/caral/">
																									<h4>Caral</h4>
																								</a>
																								<span
																									class="overviewIcon">
																									<svg xmlns="http://www.w3.org/2000/svg"
																										width="12"
																										height="12"
																										viewBox="0 0 12 12">
																										<path
																											class="cls-1"
																											d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																											transform="translate(-550 -1172)">
																										</path>
																									</svg>
																									0
																								</span>
																								<h5>2020/ Action,
																									Adventure, Drama,
																									Comedy.</h5>
																								<p>Consectetur
																									adipiscing elit.
																									Mauris eu gravida
																									augue. Ut tincidunt,
																									leo ut bibendum
																									convallis, dolor
																									arcu faucibus dolor,
																									a faucibus dui dolor
																									ac orci. Nam diam
																									felis molestie in
																									lacus quis fringilla
																									placerat sem. Proin
																									blandit sagittis
																									diam sed congue. In
																									porta vitae nunc
																									quis pharetra. Etiam
																									luctus ante vitae
																									egestas eleifend.
																								</p>
																							</div>
																							<div
																								class="ms-overview-right-content">
																								<h4>Directors: Denis
																									Panieo</h4>
																								<h4>Starring :<a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/kassah-napwer/">
																										kassah
																										napwer</a></h4>
																								<h4>Genres : <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/genre/drama/">
																										Drama</a>, <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/genre/international/">
																										International</a>
																								</h4>
																								<h4>Subtitles :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/urdu/">Urdu</a>
																								</h4>
																								<h4>Audio :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/chinese/">
																										Chinese</a>, <a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/russian/">
																										Russian</a>, <a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/urdu/">
																										Urdu</a></h4>
																							</div>
																							<div
																								class="ms-overview-right-footer">
																								<ul>
																									<li
																										class="viewTrailer">
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/movies-overview/">View
																											All</a></li>
																									<li>
																										<a href="javascript:;"
																											class="ms-share"
																											data-shareuri="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/caral/"
																											data-sharename="Caral">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="14"
																													height="16"
																													viewBox="0 0 14 16">
																													<path
																														class="cls-1"
																														d="M1233.45,6355.67a2.5,2.5,0,0,0-1.87.86l-4.6-2.75a2.82,2.82,0,0,0,0-1.56l4.6-2.75a2.5,2.5,0,0,0,1.87.86,2.668,2.668,0,1,0-2.54-2.66,2.646,2.646,0,0,0,.07.63l-4.66,2.79a2.482,2.482,0,0,0-1.77-.76,2.673,2.673,0,0,0,0,5.34,2.482,2.482,0,0,0,1.77-.76l4.66,2.79a2.646,2.646,0,0,0-.07.63A2.547,2.547,0,1,0,1233.45,6355.67Z"
																														transform="translate(-1222 -6345)">
																													</path>
																												</svg>
																											</span>
																											Share
																										</a>
																									</li>
																									<li>
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/caral//?#respond">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="17"
																													height="16"
																													viewBox="0 0 17 16">
																													<path
																														class="cls-1"
																														d="M1336.36,6351.45a0.324,0.324,0,0,0-.38.08l-2.19,2.24a1.039,1.039,0,0,1-.54.3l-1.77.36a1.037,1.037,0,0,1-.96-0.29,1.121,1.121,0,0,1-.29-0.99l0.31-1.6h-5.64a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h5.94c0.01-.02.02-0.03,0.03-0.05l1.38-1.41h-7.35a0.36,0.36,0,0,1,0-.72h7.79a0.372,0.372,0,0,1,.2.07l2.29-2.36a2.1,2.1,0,0,1,.7-0.47,0.371,0.371,0,0,0,.07-0.64,1.4,1.4,0,0,0-.78-0.24h-12.75a1.438,1.438,0,0,0-1.42,1.45v14.19a0.361,0.361,0,0,0,.22.33,0.308,0.308,0,0,0,.13.03,0.325,0.325,0,0,0,.25-0.11l3.44-3.53h10.13a1.43,1.43,0,0,0,1.41-1.45v-4.13A0.346,0.346,0,0,0,1336.36,6351.45Zm-7.21,2.28h-4.25a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h4.25a0.356,0.356,0,0,1,.35.36A0.365,0.365,0,0,1,1329.15,6353.73Zm7.49-7.28a1.334,1.334,0,0,0-.95.41l-4.32,4.43a0.31,0.31,0,0,0-.09.18l-0.36,1.82a0.4,0.4,0,0,0,.1.33,0.358,0.358,0,0,0,.25.11c0.02,0,.05-0.01.07-0.01l1.77-.36a0.4,0.4,0,0,0,.18-0.1l4.31-4.43h0A1.4,1.4,0,0,0,1336.64,6346.45Zm-0.56,2.91-0.91-.94,0.5-.51,0.91,0.94Z"
																														transform="translate(-1321 -6345)">
																													</path>
																												</svg>
																											</span>
																											Feedback
																										</a>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="swiper-slide">
																				<div class="row align-items-center">
																					<div class="col-lg-7">
																						<div class="ms-overview-left">
																							<a
																								href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/city-of-taxi/"><img
																									decoding="async"
																									src="assets/img/1-1-1.jpg"
																									alt="movie"></a>
																						</div>
																					</div>
																					<div class="col-lg-5">
																						<div class="ms-overview-right">
																							<div
																								class="ms-overview-heading">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/city-of-taxi/">
																									<h4>City Of Taxi
																									</h4>
																								</a>
																								<span
																									class="overviewIcon">
																									<svg xmlns="http://www.w3.org/2000/svg"
																										width="12"
																										height="12"
																										viewBox="0 0 12 12">
																										<path
																											class="cls-1"
																											d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																											transform="translate(-550 -1172)">
																										</path>
																									</svg>
																									4
																								</span>
																								<h5>2020/ Action,
																									Adventure, Drama,
																									Comedy.</h5>
																								<p>Consectetur
																									adipiscing elit.
																									Mauris eu gravida
																									augue. Ut tincidunt,
																									leo ut bibendum
																									convallis, dolor
																									arcu faucibus dolor,
																									a faucibus dui dolor
																									ac orci. Nam diam
																									felis molestie in
																									lacus quis fringilla
																									placerat sem. Proin
																									blandit sagittis
																									diam sed congue. In
																									porta vitae nunc
																									quis pharetra. Etiam
																									luctus ante vitae
																									egestas eleifend.
																								</p>
																							</div>
																							<div
																								class="ms-overview-right-content">
																								<h4>Directors: Denis
																									Panieo</h4>
																								<h4>Starring :<a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/sazieo-caperr/">
																										Sazieo
																										caperr</a></h4>
																								<h4>Genres : <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/genre/romance/">
																										Romance</a></h4>
																								<h4>Subtitles :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/urdu/">Urdu</a>
																								</h4>
																								<h4>Audio :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/german/">
																										German</a>, <a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/spanish/">
																										Spanish</a></h4>
																							</div>
																							<div
																								class="ms-overview-right-footer">
																								<ul>
																									<li
																										class="viewTrailer">
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/movies-overview/">View
																											All</a></li>
																									<li>
																										<a href="javascript:;"
																											class="ms-share"
																											data-shareuri="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/city-of-taxi/"
																											data-sharename="City Of Taxi">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="14"
																													height="16"
																													viewBox="0 0 14 16">
																													<path
																														class="cls-1"
																														d="M1233.45,6355.67a2.5,2.5,0,0,0-1.87.86l-4.6-2.75a2.82,2.82,0,0,0,0-1.56l4.6-2.75a2.5,2.5,0,0,0,1.87.86,2.668,2.668,0,1,0-2.54-2.66,2.646,2.646,0,0,0,.07.63l-4.66,2.79a2.482,2.482,0,0,0-1.77-.76,2.673,2.673,0,0,0,0,5.34,2.482,2.482,0,0,0,1.77-.76l4.66,2.79a2.646,2.646,0,0,0-.07.63A2.547,2.547,0,1,0,1233.45,6355.67Z"
																														transform="translate(-1222 -6345)">
																													</path>
																												</svg>
																											</span>
																											Share
																										</a>
																									</li>
																									<li>
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/city-of-taxi//?#respond">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="17"
																													height="16"
																													viewBox="0 0 17 16">
																													<path
																														class="cls-1"
																														d="M1336.36,6351.45a0.324,0.324,0,0,0-.38.08l-2.19,2.24a1.039,1.039,0,0,1-.54.3l-1.77.36a1.037,1.037,0,0,1-.96-0.29,1.121,1.121,0,0,1-.29-0.99l0.31-1.6h-5.64a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h5.94c0.01-.02.02-0.03,0.03-0.05l1.38-1.41h-7.35a0.36,0.36,0,0,1,0-.72h7.79a0.372,0.372,0,0,1,.2.07l2.29-2.36a2.1,2.1,0,0,1,.7-0.47,0.371,0.371,0,0,0,.07-0.64,1.4,1.4,0,0,0-.78-0.24h-12.75a1.438,1.438,0,0,0-1.42,1.45v14.19a0.361,0.361,0,0,0,.22.33,0.308,0.308,0,0,0,.13.03,0.325,0.325,0,0,0,.25-0.11l3.44-3.53h10.13a1.43,1.43,0,0,0,1.41-1.45v-4.13A0.346,0.346,0,0,0,1336.36,6351.45Zm-7.21,2.28h-4.25a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h4.25a0.356,0.356,0,0,1,.35.36A0.365,0.365,0,0,1,1329.15,6353.73Zm7.49-7.28a1.334,1.334,0,0,0-.95.41l-4.32,4.43a0.31,0.31,0,0,0-.09.18l-0.36,1.82a0.4,0.4,0,0,0,.1.33,0.358,0.358,0,0,0,.25.11c0.02,0,.05-0.01.07-0.01l1.77-.36a0.4,0.4,0,0,0,.18-0.1l4.31-4.43h0A1.4,1.4,0,0,0,1336.64,6346.45Zm-0.56,2.91-0.91-.94,0.5-.51,0.91,0.94Z"
																														transform="translate(-1321 -6345)">
																													</path>
																												</svg>
																											</span>
																											Feedback
																										</a>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="swiper-slide">
																				<div class="row align-items-center">
																					<div class="col-lg-7">
																						<div class="ms-overview-left">
																							<a
																								href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/god-2/"><img
																									decoding="async"
																									src="assets/img/3-3.jpg"
																									alt="movie"></a>
																							<div class="ms-prmum-tag">
																								<span>
																									<svg xmlns="http://www.w3.org/2000/svg"
																										viewBox="0 0 32 32">
																										<g>
																											<path
																												d="M27.488 23l-.513 2.225A1 1 0 0126 26H6a1 1 0 01-.975-.775L4.512 23zM29.975 12.225L27.95 21H4.05l-2.025-8.775a1.001 1.001 0 011.471-1.093l6.189 3.537 5.482-8.223c.179-.268.475-.434.796-.446a.99.99 0 01.826.386l6.429 8.266 5.227-3.484a1.002 1.002 0 011.53 1.057z">
																											</path>
																										</g>
																									</svg>
																								</span>
																								<p>Premium</p>
																							</div>
																						</div>
																					</div>
																					<div class="col-lg-5">
																						<div class="ms-overview-right">
																							<div
																								class="ms-overview-heading">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/god-2/">
																									<h4>God</h4>
																								</a>
																								<span
																									class="overviewIcon">
																									<svg xmlns="http://www.w3.org/2000/svg"
																										width="12"
																										height="12"
																										viewBox="0 0 12 12">
																										<path
																											class="cls-1"
																											d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																											transform="translate(-550 -1172)">
																										</path>
																									</svg>
																									0
																								</span>
																								<h5>2020/ Action,
																									Adventure, Drama,
																									Comedy.</h5>
																								<p>Consectetur
																									adipiscing elit.
																									Mauris eu gravida
																									augue. Ut tincidunt,
																									leo ut bibendum
																									convallis, dolor
																									arcu faucibus dolor,
																									a faucibus dui dolor
																									ac orci. Nam diam
																									felis molestie in
																									lacus quis fringilla
																									placerat sem. Proin
																									blandit sagittis
																									diam sed congue. In
																									porta vitae nunc
																									quis pharetra. Etiam
																									luctus ante vitae
																									egestas eleifend.
																								</p>
																							</div>
																							<div
																								class="ms-overview-right-content">
																								<h4>Directors: Denis
																									Panieo</h4>
																								<h4>Starring :<a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/alies-vhaess/">
																										Alies
																										vhaess</a>, <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/kassah-napwer/">
																										kassah
																										napwer</a></h4>
																								<h4>Genres : <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/genre/drama/">
																										Drama</a>, <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/genre/international/">
																										International</a>
																								</h4>
																								<h4>Subtitles :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/hindi/">Hindi</a>,
																									<a class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/urdu/">Urdu</a>
																								</h4>
																								<h4>Audio :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/german/">
																										German</a>, <a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/spanish/">
																										Spanish</a></h4>
																							</div>
																							<div
																								class="ms-overview-right-footer">
																								<ul>
																									<li
																										class="viewTrailer">
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/movies-overview/">View
																											All</a></li>
																									<li>
																										<a href="javascript:;"
																											class="ms-share"
																											data-shareuri="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/god-2/"
																											data-sharename="God">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="14"
																													height="16"
																													viewBox="0 0 14 16">
																													<path
																														class="cls-1"
																														d="M1233.45,6355.67a2.5,2.5,0,0,0-1.87.86l-4.6-2.75a2.82,2.82,0,0,0,0-1.56l4.6-2.75a2.5,2.5,0,0,0,1.87.86,2.668,2.668,0,1,0-2.54-2.66,2.646,2.646,0,0,0,.07.63l-4.66,2.79a2.482,2.482,0,0,0-1.77-.76,2.673,2.673,0,0,0,0,5.34,2.482,2.482,0,0,0,1.77-.76l4.66,2.79a2.646,2.646,0,0,0-.07.63A2.547,2.547,0,1,0,1233.45,6355.67Z"
																														transform="translate(-1222 -6345)">
																													</path>
																												</svg>
																											</span>
																											Share
																										</a>
																									</li>
																									<li>
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/god-2//?#respond">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="17"
																													height="16"
																													viewBox="0 0 17 16">
																													<path
																														class="cls-1"
																														d="M1336.36,6351.45a0.324,0.324,0,0,0-.38.08l-2.19,2.24a1.039,1.039,0,0,1-.54.3l-1.77.36a1.037,1.037,0,0,1-.96-0.29,1.121,1.121,0,0,1-.29-0.99l0.31-1.6h-5.64a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h5.94c0.01-.02.02-0.03,0.03-0.05l1.38-1.41h-7.35a0.36,0.36,0,0,1,0-.72h7.79a0.372,0.372,0,0,1,.2.07l2.29-2.36a2.1,2.1,0,0,1,.7-0.47,0.371,0.371,0,0,0,.07-0.64,1.4,1.4,0,0,0-.78-0.24h-12.75a1.438,1.438,0,0,0-1.42,1.45v14.19a0.361,0.361,0,0,0,.22.33,0.308,0.308,0,0,0,.13.03,0.325,0.325,0,0,0,.25-0.11l3.44-3.53h10.13a1.43,1.43,0,0,0,1.41-1.45v-4.13A0.346,0.346,0,0,0,1336.36,6351.45Zm-7.21,2.28h-4.25a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h4.25a0.356,0.356,0,0,1,.35.36A0.365,0.365,0,0,1,1329.15,6353.73Zm7.49-7.28a1.334,1.334,0,0,0-.95.41l-4.32,4.43a0.31,0.31,0,0,0-.09.18l-0.36,1.82a0.4,0.4,0,0,0,.1.33,0.358,0.358,0,0,0,.25.11c0.02,0,.05-0.01.07-0.01l1.77-.36a0.4,0.4,0,0,0,.18-0.1l4.31-4.43h0A1.4,1.4,0,0,0,1336.64,6346.45Zm-0.56,2.91-0.91-.94,0.5-.51,0.91,0.94Z"
																														transform="translate(-1321 -6345)">
																													</path>
																												</svg>
																											</span>
																											Feedback
																										</a>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="swiper-slide">
																				<div class="row align-items-center">
																					<div class="col-lg-7">
																						<div class="ms-overview-left">
																							<a
																								href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/epidemic/"><img
																									decoding="async"
																									src="assets/img/4-3.jpg"
																									alt="movie"></a>
																						</div>
																					</div>
																					<div class="col-lg-5">
																						<div class="ms-overview-right">
																							<div
																								class="ms-overview-heading">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/epidemic/">
																									<h4>Epidemic</h4>
																								</a>
																								<span
																									class="overviewIcon">
																									<svg xmlns="http://www.w3.org/2000/svg"
																										width="12"
																										height="12"
																										viewBox="0 0 12 12">
																										<path
																											class="cls-1"
																											d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																											transform="translate(-550 -1172)">
																										</path>
																									</svg>
																									0
																								</span>
																								<h5>2020/ Action,
																									Adventure, Drama,
																									Comedy.</h5>
																								<p>Consectetur
																									adipiscing elit.
																									Mauris eu gravida
																									augue. Ut tincidunt,
																									leo ut bibendum
																									convallis, dolor
																									arcu faucibus dolor,
																									a faucibus dui dolor
																									ac orci. Nam diam
																									felis molestie in
																									lacus quis fringilla
																									placerat sem. Proin
																									blandit sagittis
																									diam sed congue. In
																									porta vitae nunc
																									quis pharetra. Etiam
																									luctus ante vitae
																									egestas eleifend.
																								</p>
																							</div>
																							<div
																								class="ms-overview-right-content">
																								<h4>Directors: Denis
																									Panieo</h4>
																								<h4>Starring :<a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/kassah-napwer/">
																										kassah
																										napwer</a>, <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/sazieo-caperr/">
																										Sazieo
																										caperr</a></h4>
																								<h4>Genres : <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/genre/international/">
																										International</a>,
																									<a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/genre/romance/">
																										Romance</a></h4>
																								<h4>Subtitles :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/hindi/">Hindi</a>,
																									<a class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/urdu/">Urdu</a>
																								</h4>
																								<h4>Audio :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/french/">
																										French</a>, <a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/indonesian/">
																										Indonesian</a>
																								</h4>
																							</div>
																							<div
																								class="ms-overview-right-footer">
																								<ul>
																									<li
																										class="viewTrailer">
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/movies-overview/">View
																											All</a></li>
																									<li>
																										<a href="javascript:;"
																											class="ms-share"
																											data-shareuri="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/epidemic/"
																											data-sharename="Epidemic">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="14"
																													height="16"
																													viewBox="0 0 14 16">
																													<path
																														class="cls-1"
																														d="M1233.45,6355.67a2.5,2.5,0,0,0-1.87.86l-4.6-2.75a2.82,2.82,0,0,0,0-1.56l4.6-2.75a2.5,2.5,0,0,0,1.87.86,2.668,2.668,0,1,0-2.54-2.66,2.646,2.646,0,0,0,.07.63l-4.66,2.79a2.482,2.482,0,0,0-1.77-.76,2.673,2.673,0,0,0,0,5.34,2.482,2.482,0,0,0,1.77-.76l4.66,2.79a2.646,2.646,0,0,0-.07.63A2.547,2.547,0,1,0,1233.45,6355.67Z"
																														transform="translate(-1222 -6345)">
																													</path>
																												</svg>
																											</span>
																											Share
																										</a>
																									</li>
																									<li>
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/epidemic//?#respond">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="17"
																													height="16"
																													viewBox="0 0 17 16">
																													<path
																														class="cls-1"
																														d="M1336.36,6351.45a0.324,0.324,0,0,0-.38.08l-2.19,2.24a1.039,1.039,0,0,1-.54.3l-1.77.36a1.037,1.037,0,0,1-.96-0.29,1.121,1.121,0,0,1-.29-0.99l0.31-1.6h-5.64a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h5.94c0.01-.02.02-0.03,0.03-0.05l1.38-1.41h-7.35a0.36,0.36,0,0,1,0-.72h7.79a0.372,0.372,0,0,1,.2.07l2.29-2.36a2.1,2.1,0,0,1,.7-0.47,0.371,0.371,0,0,0,.07-0.64,1.4,1.4,0,0,0-.78-0.24h-12.75a1.438,1.438,0,0,0-1.42,1.45v14.19a0.361,0.361,0,0,0,.22.33,0.308,0.308,0,0,0,.13.03,0.325,0.325,0,0,0,.25-0.11l3.44-3.53h10.13a1.43,1.43,0,0,0,1.41-1.45v-4.13A0.346,0.346,0,0,0,1336.36,6351.45Zm-7.21,2.28h-4.25a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h4.25a0.356,0.356,0,0,1,.35.36A0.365,0.365,0,0,1,1329.15,6353.73Zm7.49-7.28a1.334,1.334,0,0,0-.95.41l-4.32,4.43a0.31,0.31,0,0,0-.09.18l-0.36,1.82a0.4,0.4,0,0,0,.1.33,0.358,0.358,0,0,0,.25.11c0.02,0,.05-0.01.07-0.01l1.77-.36a0.4,0.4,0,0,0,.18-0.1l4.31-4.43h0A1.4,1.4,0,0,0,1336.64,6346.45Zm-0.56,2.91-0.91-.94,0.5-.51,0.91,0.94Z"
																														transform="translate(-1321 -6345)">
																													</path>
																												</svg>
																											</span>
																											Feedback
																										</a>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="swiper-slide">
																				<div class="row align-items-center">
																					<div class="col-lg-7">
																						<div class="ms-overview-left">
																							<a
																								href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/february-week/"><img
																									decoding="async"
																									src="assets/img/1-3.jpg"
																									alt="movie"></a>
																						</div>
																					</div>
																					<div class="col-lg-5">
																						<div class="ms-overview-right">
																							<div
																								class="ms-overview-heading">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/february-week/">
																									<h4>February Week
																									</h4>
																								</a>
																								<span
																									class="overviewIcon">
																									<svg xmlns="http://www.w3.org/2000/svg"
																										width="12"
																										height="12"
																										viewBox="0 0 12 12">
																										<path
																											class="cls-1"
																											d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																											transform="translate(-550 -1172)">
																										</path>
																									</svg>
																									0
																								</span>
																								<h5>2020/ Action,
																									Adventure, Drama,
																									Comedy.</h5>
																								<p>Consectetur
																									adipiscing elit.
																									Mauris eu gravida
																									augue. Ut tincidunt,
																									leo ut bibendum
																									convallis, dolor
																									arcu faucibus dolor,
																									a faucibus dui dolor
																									ac orci. Nam diam
																									felis molestie in
																									lacus quis fringilla
																									placerat sem. Proin
																									blandit sagittis
																									diam sed congue. In
																									porta vitae nunc
																									quis pharetra. Etiam
																									luctus ante vitae
																									egestas eleifend.
																								</p>
																							</div>
																							<div
																								class="ms-overview-right-content">
																								<h4>Directors: Denis
																									Panieo</h4>
																								<h4>Starring :<a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/alies-vhaess/">
																										Alies vhaess</a>
																								</h4>
																								<h4>Genres : <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/genre/international/">
																										International</a>,
																									<a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/genre/romance/">
																										Romance</a></h4>
																								<h4>Subtitles :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/english/">English</a>,
																									<a class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/hindi/">Hindi</a>
																								</h4>
																								<h4>Audio :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/french/">
																										French</a>, <a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/indonesian/">
																										Indonesian</a>
																								</h4>
																							</div>
																							<div
																								class="ms-overview-right-footer">
																								<ul>
																									<li
																										class="viewTrailer">
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/movies-overview/">View
																											All</a></li>
																									<li>
																										<a href="javascript:;"
																											class="ms-share"
																											data-shareuri="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/february-week/"
																											data-sharename="February Week">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="14"
																													height="16"
																													viewBox="0 0 14 16">
																													<path
																														class="cls-1"
																														d="M1233.45,6355.67a2.5,2.5,0,0,0-1.87.86l-4.6-2.75a2.82,2.82,0,0,0,0-1.56l4.6-2.75a2.5,2.5,0,0,0,1.87.86,2.668,2.668,0,1,0-2.54-2.66,2.646,2.646,0,0,0,.07.63l-4.66,2.79a2.482,2.482,0,0,0-1.77-.76,2.673,2.673,0,0,0,0,5.34,2.482,2.482,0,0,0,1.77-.76l4.66,2.79a2.646,2.646,0,0,0-.07.63A2.547,2.547,0,1,0,1233.45,6355.67Z"
																														transform="translate(-1222 -6345)">
																													</path>
																												</svg>
																											</span>
																											Share
																										</a>
																									</li>
																									<li>
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/february-week//?#respond">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="17"
																													height="16"
																													viewBox="0 0 17 16">
																													<path
																														class="cls-1"
																														d="M1336.36,6351.45a0.324,0.324,0,0,0-.38.08l-2.19,2.24a1.039,1.039,0,0,1-.54.3l-1.77.36a1.037,1.037,0,0,1-.96-0.29,1.121,1.121,0,0,1-.29-0.99l0.31-1.6h-5.64a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h5.94c0.01-.02.02-0.03,0.03-0.05l1.38-1.41h-7.35a0.36,0.36,0,0,1,0-.72h7.79a0.372,0.372,0,0,1,.2.07l2.29-2.36a2.1,2.1,0,0,1,.7-0.47,0.371,0.371,0,0,0,.07-0.64,1.4,1.4,0,0,0-.78-0.24h-12.75a1.438,1.438,0,0,0-1.42,1.45v14.19a0.361,0.361,0,0,0,.22.33,0.308,0.308,0,0,0,.13.03,0.325,0.325,0,0,0,.25-0.11l3.44-3.53h10.13a1.43,1.43,0,0,0,1.41-1.45v-4.13A0.346,0.346,0,0,0,1336.36,6351.45Zm-7.21,2.28h-4.25a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h4.25a0.356,0.356,0,0,1,.35.36A0.365,0.365,0,0,1,1329.15,6353.73Zm7.49-7.28a1.334,1.334,0,0,0-.95.41l-4.32,4.43a0.31,0.31,0,0,0-.09.18l-0.36,1.82a0.4,0.4,0,0,0,.1.33,0.358,0.358,0,0,0,.25.11c0.02,0,.05-0.01.07-0.01l1.77-.36a0.4,0.4,0,0,0,.18-0.1l4.31-4.43h0A1.4,1.4,0,0,0,1336.64,6346.45Zm-0.56,2.91-0.91-.94,0.5-.51,0.91,0.94Z"
																														transform="translate(-1321 -6345)">
																													</path>
																												</svg>
																											</span>
																											Feedback
																										</a>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="swiper-slide">
																				<div class="row align-items-center">
																					<div class="col-lg-7">
																						<div class="ms-overview-left">
																							<a
																								href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/season-first/"><img
																									decoding="async"
																									src="assets/img/2-4.jpg"
																									alt="movie"></a>
																						</div>
																					</div>
																					<div class="col-lg-5">
																						<div class="ms-overview-right">
																							<div
																								class="ms-overview-heading">
																								<a
																									href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/season-first/">
																									<h4>Season First
																									</h4>
																								</a>
																								<span
																									class="overviewIcon">
																									<svg xmlns="http://www.w3.org/2000/svg"
																										width="12"
																										height="12"
																										viewBox="0 0 12 12">
																										<path
																											class="cls-1"
																											d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
																											transform="translate(-550 -1172)">
																										</path>
																									</svg>
																									0
																								</span>
																								<h5>2020/ Action,
																									Adventure, Drama,
																									Comedy.</h5>
																								<p>Consectetur
																									adipiscing elit.
																									Mauris eu gravida
																									augue. Ut tincidunt,
																									leo ut bibendum
																									convallis, dolor
																									arcu faucibus dolor,
																									a faucibus dui dolor
																									ac orci. Nam diam
																									felis molestie in
																									lacus quis fringilla
																									placerat sem. Proin
																									blandit sagittis
																									diam sed congue. In
																									porta vitae nunc
																									quis pharetra. Etiam
																									luctus ante vitae
																									egestas eleifend.
																								</p>
																							</div>
																							<div
																								class="ms-overview-right-content">
																								<h4>Directors: Denis
																									Panieo</h4>
																								<h4>Starring :<a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/kassah-napwer/">
																										kassah
																										napwer</a>, <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/starring/sazieo-caperr/">
																										Sazieo
																										caperr</a></h4>
																								<h4>Genres : <a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/genre/international/">
																										International</a>,
																									<a
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/genre/romance/">
																										Romance</a></h4>
																								<h4>Subtitles :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/hindi/">Hindi</a>,
																									<a class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/subtitle/urdu/">Urdu</a>
																								</h4>
																								<h4>Audio :<a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/arabic/">
																										Arabic</a>, <a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/hindi/">
																										Hindi</a>, <a
																										class="bh-category-button"
																										href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/language/portuguese/">
																										Portuguese</a>
																								</h4>
																							</div>
																							<div
																								class="ms-overview-right-footer">
																								<ul>
																									<li
																										class="viewTrailer">
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/movies-overview/">View
																											All</a></li>
																									<li>
																										<a href="javascript:;"
																											class="ms-share"
																											data-shareuri="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/season-first/"
																											data-sharename="Season First">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="14"
																													height="16"
																													viewBox="0 0 14 16">
																													<path
																														class="cls-1"
																														d="M1233.45,6355.67a2.5,2.5,0,0,0-1.87.86l-4.6-2.75a2.82,2.82,0,0,0,0-1.56l4.6-2.75a2.5,2.5,0,0,0,1.87.86,2.668,2.668,0,1,0-2.54-2.66,2.646,2.646,0,0,0,.07.63l-4.66,2.79a2.482,2.482,0,0,0-1.77-.76,2.673,2.673,0,0,0,0,5.34,2.482,2.482,0,0,0,1.77-.76l4.66,2.79a2.646,2.646,0,0,0-.07.63A2.547,2.547,0,1,0,1233.45,6355.67Z"
																														transform="translate(-1222 -6345)">
																													</path>
																												</svg>
																											</span>
																											Share
																										</a>
																									</li>
																									<li>
																										<a
																											href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl/movie/season-first//?#respond">
																											<span>
																												<svg xmlns="http://www.w3.org/2000/svg"
																													width="17"
																													height="16"
																													viewBox="0 0 17 16">
																													<path
																														class="cls-1"
																														d="M1336.36,6351.45a0.324,0.324,0,0,0-.38.08l-2.19,2.24a1.039,1.039,0,0,1-.54.3l-1.77.36a1.037,1.037,0,0,1-.96-0.29,1.121,1.121,0,0,1-.29-0.99l0.31-1.6h-5.64a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h5.94c0.01-.02.02-0.03,0.03-0.05l1.38-1.41h-7.35a0.36,0.36,0,0,1,0-.72h7.79a0.372,0.372,0,0,1,.2.07l2.29-2.36a2.1,2.1,0,0,1,.7-0.47,0.371,0.371,0,0,0,.07-0.64,1.4,1.4,0,0,0-.78-0.24h-12.75a1.438,1.438,0,0,0-1.42,1.45v14.19a0.361,0.361,0,0,0,.22.33,0.308,0.308,0,0,0,.13.03,0.325,0.325,0,0,0,.25-0.11l3.44-3.53h10.13a1.43,1.43,0,0,0,1.41-1.45v-4.13A0.346,0.346,0,0,0,1336.36,6351.45Zm-7.21,2.28h-4.25a0.367,0.367,0,0,1-.36-0.37,0.359,0.359,0,0,1,.36-0.36h4.25a0.356,0.356,0,0,1,.35.36A0.365,0.365,0,0,1,1329.15,6353.73Zm7.49-7.28a1.334,1.334,0,0,0-.95.41l-4.32,4.43a0.31,0.31,0,0,0-.09.18l-0.36,1.82a0.4,0.4,0,0,0,.1.33,0.358,0.358,0,0,0,.25.11c0.02,0,.05-0.01.07-0.01l1.77-.36a0.4,0.4,0,0,0,.18-0.1l4.31-4.43h0A1.4,1.4,0,0,0,1336.64,6346.45Zm-0.56,2.91-0.91-.94,0.5-.51,0.91,0.94Z"
																														transform="translate(-1321 -6345)">
																													</path>
																												</svg>
																											</span>
																											Feedback
																										</a>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="ms-overview-slider-btn">
																		<div class="swiper-button-next">
																			<span>
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="7" height="12"
																					viewBox="0 0 7 12">
																					<path class="cls-1"
																						d="M1909.81,2028.53l-5.3-5.34a0.66,0.66,0,0,0-.46-0.19,0.642,0.642,0,0,0-.46.19l-0.39.39a0.652,0.652,0,0,0,0,.93l4.45,4.49-4.46,4.49a0.652,0.652,0,0,0,0,.92l0.39,0.4a0.66,0.66,0,0,0,.46.19,0.642,0.642,0,0,0,.46-0.19l5.31-5.35a0.66,0.66,0,0,0,.19-0.46A0.683,0.683,0,0,0,1909.81,2028.53Z"
																						transform="translate(-1903 -2023)">
																					</path>
																				</svg>
																			</span>
																		</div>
																		<div class="swiper-button-prev">
																			<span>
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="7" height="12"
																					viewBox="0 0 7 12">
																					<path class="cls-1"
																						d="M1909.81,2028.53l-5.3-5.34a0.66,0.66,0,0,0-.46-0.19,0.642,0.642,0,0,0-.46.19l-0.39.39a0.652,0.652,0,0,0,0,.93l4.45,4.49-4.46,4.49a0.652,0.652,0,0,0,0,.92l0.39,0.4a0.66,0.66,0,0,0,.46.19,0.642,0.642,0,0,0,.46-0.19l5.31-5.35a0.66,0.66,0,0,0,.19-0.46A0.683,0.683,0,0,0,1909.81,2028.53Z"
																						transform="translate(-1903 -2023)">
																					</path>
																				</svg>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="vc_row-full-width vc_clearfix"></div>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection
