<?php
include 'include/header.php';
?>


			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="text-uppercase">Contacts</h2>
							<ol class="breadcrumb">
								<li>
									<a href="index.html">
							Home
						</a>
								</li>
								<li>
									<a href="#">Pages</a>
								</li>
								<li class="active">Contacts</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls page_map" data-address="Terracina, LT, Italia">
				<!-- marker description and marker icon goes here -->
				<div class="map_marker_description">
					<h3>Map Title</h3>
					<p>Map description text</p>
					<img class="map_marker_icon" src="images/map_marker_icon.png" alt="">
				</div>
			</section>

			<section class="ls columns_padding_25 section_padding_top_75 section_padding_bottom_130">
				<div class="container">
					<div class="row">

						<div class="col-sm-8 to_animate" data-animation="scaleAppear">

							<h3 class="text-uppercase">Contact Form</h3>

							<form class="contact-form row columns_padding_10" method="post" action="http://webdesign-finder.com/html/cashgo/">
								<div class="col-sm-6">
									<div class="contact-form-name">
										<label for="name">Full Name
											<span class="required">*</span>
										</label>
										<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="contact-form-subject">
										<label for="subject">Subject
											<span class="required">*</span>
										</label>
										<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="contact-form-phone">
										<label for="phone">Phone
											<span class="required">*</span>
										</label>
										<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="contact-form-email">
										<label for="email">Email address
											<span class="required">*</span>
										</label>
										<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
									</div>
								</div>
								<div class="col-sm-12">

									<div class="contact-form-message">
										<label for="message">Message</label>
										<textarea aria-required="true" rows="5" cols="45" name="message" id="message" class="form-control" placeholder="Message..."></textarea>
									</div>
								</div>

								<div class="col-sm-12">

									<div class="contact-form-submit topmargin_10">
										<button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1 wide_button">Send now!</button>
									</div>
								</div>


							</form>
						</div>
						<!--.col-* -->

						<div class="col-sm-4 to_animate" data-animation="scaleAppear">

							<h3 class="text-uppercase">Contact Info</h3>

							<p>
					<i class="fa fa-map-marker fontsize_18 highlight rightpadding_10" aria-hidden="true"></i> 4518 Spirit Drive, Deland, FL 32720
				</p>
							<p>
					<i class="fa fa-phone fontsize_18 highlight rightpadding_10" aria-hidden="true"></i> 101 123 456 789
				</p>
							<p>
					<i class="fa fa-envelope fontsize_18 highlight rightpadding_10" aria-hidden="true"></i> cash_go@example.com
				</p>
							<p class="greylinks">
					<i class="fa fa-internet-explorer fontsize_18 highlight rightpadding_10" aria-hidden="true"></i> <a href="#0">www.cash_go.com</a>
				</p>

						</div>
						<!--.col-* -->

					</div>
					<!--.row -->

				</div>
				<!--.container -->

			</section>

			<?php
include 'include/footer.php';
?>