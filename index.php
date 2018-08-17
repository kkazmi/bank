<?php
include 'include/header.php';
?><style type="text/css">
	.wrapping {
    width: 100%;
    padding-left: 0;
    padding-right: 0;}
    .border-grey {
	border: 1px solid #ddd !important;
}
#features{
	 background-image: url(img/parallax/features.jpg);
    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

			<section id="loan-app" class="ds color background_cover background_overlay page_contact section_padding_top_150 section_padding_bottom_150 followed_content_overlap">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header bottommargin_25">
								<span class="small">Start your</span>
								Loan Application
							</h2>

							<form class="loan-form row" method="post" action="http://webdesign-finder.com/html/cashgo/">
								<div class="col-sm-4">
									<div class="loan-form-name">
										<label for="name" class="sr-only">Full Name
											<span class="required">*</span>
										</label>
										<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="loan-form-birth-date">
										<label for="birth-date" class="sr-only">Birth Date
											<span class="required">*</span>
										</label>
										<input type="text" onfocus="(this.type='date')" aria-required="true" size="30" value="" name="birth-date" id="birth-date" class="form-control" placeholder="Birth Date">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="loan-form-ssn">
										<label for="ssn" class="sr-only">SSN
											<span class="required">*</span>
										</label>
										<input type="number" aria-required="true" size="30" value="" name="ssn" id="ssn" class="form-control" placeholder="SSN">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="loan-form-phone">
										<label for="phone" class="sr-only">Phone Number
											<span class="required">*</span>
										</label>
										<input type="tel" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="loan-form-email">
										<label for="email" class="sr-only">Email address
											<span class="required">*</span>
										</label>
										<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group select-group">
										<label for="state" class="sr-only">State</label>
										<select id="state" name="state" class="choice empty form-control">
											<option value="" disabled="" selected="" data-default="">State</option>
											<option value="state_1">State 1</option>
											<option value="state_2">State 2</option>
											<option value="state_3">State 3</option>
										</select>
										<i class="fa fa-angle-down theme_button" ></i>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="loan-form-city">
										<label for="city" class="sr-only">City
											<span class="required">*</span>
										</label>
										<input type="text" aria-required="true" size="30" value="" name="city" id="city" class="form-control" placeholder="City">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="loan-form-address">
										<label for="address" class="sr-only">Address
											<span class="required">*</span>
										</label>
										<input type="text" aria-required="true" size="30" value="" name="address" id="address" class="form-control" placeholder="Address">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="loan-form-zipcode">
										<label for="zipcode" class="sr-only">Zip code
											<span class="required">*</span>
										</label>
										<input type="number" aria-required="true" size="30" value="" name="zipcode" id="zipcode" class="form-control" placeholder="Zip code">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="loan-form-submit topmargin_20">
										<button type="submit" id="loan_form_submit" name="loan_submit" class="theme_button color1 wide_button">Submit</button>
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
			</section>

			<section id="about" class="ls section_padding_top_10 section_padding_bottom_20 top_offset_content columns_margin_top_20">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="teaser main_bg_color text-center rounded">
								<div class="teaser_icon size_small">
									<i class="fa fa-diamond" ></i>
								</div>
								<h3 class="numbered">
									<span class="number">
										01
									</span>
									<a href="#">
							Easy &amp; Secure
						</a>
								</h3>
								<p>Lorem ipsum dolor sit amet consetetur sadipscing elitr,  nonumy.</p>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="teaser main_bg_color2 text-center rounded">
								<div class="teaser_icon size_small">
									<i class="fa fa-tachometer" ></i>
								</div>
								<h3 class="numbered">
									<span class="number">
										02
									</span>
									<a href="#">
							Quick Money
						</a>
								</h3>
								<p>Eirmod tempor invidunt utlabore et dolhjore magna aliquyam erat.</p>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="teaser main_bg_color3 text-center rounded">
								<div class="teaser_icon size_small">
									<i class="fa fa-money" ></i>
								</div>
								<h3 class="numbered">
									<span class="number">
										03
									</span>
									<a href="#">
							Up to $100k
						</a>
								</h3>
								<p>Ded diam voluptua. At vero eos et accusam et justo duo dolores.</p>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="teaser main_bg_color4 text-center rounded">
								<div class="teaser_icon size_small">
									<i class="fa fa-clock-o" ></i>
								</div>
								<h3 class="numbered">
									<span class="number">
										04
									</span>
									<a href="#">
							Up to 5 Years
						</a>
								</h3>
								<p>Stet clita kasd gubergren, no sea takimata sanctus est lorem ipsum dolor.</p>
							</div>
						</div>
					</div>
				</div>
			</section>


				<section class="ls section_padding_top_130 section_padding_bottom_150 columns_padding_25 table_section table_section_md">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-6">
							<img src="img/progress.jpg" alt="">
						</div>
						<div class="col-lg-5 col-md-6">
							<h4 class="text-uppercase">Know your Credit Report</h4>
							<p>Your Credit Report is a critical part of the Bank’s decision making process. Understand what factors affect your Credit Score</p>
							<div class="col-lg-6 col-md-6">
							<ul class="list2 checklist color2 topmargin_30">
								<li>Payment History</li>
								<li>Age & Type of Credit</li>
								<li>% of Credit Utilization</li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6">
							<ul class="list2 checklist color2 topmargin_30">
								<li>Credit Searches</li>
								<li>Age of Account</li>
								<li>Errors</li>
							</ul>
						</div>
							<p class="topmargin_40">
					<a  class="theme_button color2">Check Credit Report </a>
				</p>
						</div>
					</div>

				
				</div>
			</section>

			<section id="features" class="cs light background_cover page_features section_padding_top_150 section_padding_bottom_30">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-6">
							<h2 class="section_header">
								<span class="small">Get your loan in 3</span>
								3 simple steps
							</h2>
							<p>A Personal loan is a form of credit offered by financial institutions for the borrower’s personal use. It is an unsecured loan and doesn’t require collateral as security or a guarantor to avail the loan.</p>
							<div class="teaser media">
								<div class="media-left media-middle">
									<div class="teaser_icon main_bg_color small_icon rounded">
										<i class="fa fa-calendar"></i>
									</div>
								</div>
								<div class="media-body media-middle">
									<p class="fontsize_20">
								<span>Register</span> :
									Apply online in less than 2 minutes
									</p>
								</div>
							</div>
							<div class="teaser media topmargin_10">
								<div class="media-left media-middle">
									<div class="teaser_icon main_bg_color2 small_icon rounded">
										<i class="fa fa-arrow-circle-o-up" ></i>
									</div>
								</div>
								<div class="media-body media-middle">
									<p class="fontsize_20">
								<span>Quick Verification</span> :
									We will review your application and give you a decision within minutes
									</p>
								</div>
							</div>
							<div class="teaser media topmargin_10">
								<div class="media-left media-middle">
									<div class="teaser_icon main_bg_color3 small_icon rounded">
										<i class="fa fa-star" ></i>
									</div>
								</div>
								<div class="media-body media-middle">
									<p class="fontsize_20">
									<span>	Receive Funds</span> :
									You will receive your cash within a few days
									</p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>

		
			<section class="ls section_padding_top_100 ">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header">
								<span class="small">Getting Cash is Easy</span>
								Apply Now
							</h2>
							
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-sm-6">
							<div class="teaser main_bg_color text-center rounded">
								<div class="teaser_icon size_small">
									<i class="fa fa-diamond" ></i>
								</div>
								<h3 class="numbered">
									<span class="number">
										Appyl Now
									</span>
									<a href="#">
							Personal Loan
						</a>
								</h3>
								<p class="font13 transition">
                      Apply for a personal loan
                    </p>
							</div>
						</div>


						<div class="col-lg-6 col-sm-6">
							<div class="teaser main_bg_color4 text-center rounded">
								<div class="teaser_icon size_small">
									<i class="fa fa-clock-o" ></i>
								</div>
								<h3 class="numbered">
									<span class="number">
										Appyl Now
									</span>
									<a href="#">
							Credit Card
						</a>
								</h3><p class="font13 transition">
                      Apply for a Credit Card
                    </p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_130  ">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="vertical-item content-padding with_border color_border text-center">
								<div class="item-media">
									<img src="img/icon/homeloan.png" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a >HOME LOAN</a>
									</h4>
									<p>There may be any number of reasons why you need some cash in hand quickly.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="vertical-item content-padding with_border color_border text-center">
								<div class="item-media">
									<img src="img/icon/insurance.png" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a >INSURANCE</a>
									</h4>
									<p>There may be any number of reasons why you need some cash in hand quickly.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="vertical-item content-padding with_border color_border text-center">
								<div class="item-media">
									<img src="img/icon/carinsurance.png" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a >CAR INSURANCE</a>
									</h4>
									<p>There may be any number of reasons why you need some cash in hand quickly.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="vertical-item content-padding with_border color_border text-center">
								<div class="item-media">
									<img src="img/icon/healthinsurance1.png" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a >HEALTH INSURANCE</a>
									</h4>
									<p>There may be any number of reasons why you need some cash in hand quickly.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="vertical-item content-padding with_border color_border text-center">
								<div class="item-media">
									<img src="img/icon/twowheelerloan.png" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a >TWO WHEELER LOAN</a>
									</h4>
									<p>There may be any number of reasons why quickly.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="vertical-item content-padding with_border color_border text-center">
								<div class="item-media">
									<img src="img/icon/carloan.png" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a >CAR LOAN</a>
									</h4>
									<p>There may be any number of reasons why you need some cash in hand quickly.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="vertical-item content-padding with_border color_border text-center">
								<div class="item-media">
									<img src="img/icon/usedcarloan.png" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a >USED CAR LOAN</a>
									</h4>
									<p>There may be any number of reasons why you need some cash in hand quickly.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="vertical-item content-padding with_border color_border text-center">
								<div class="item-media">
									<img src="img/icon/shorttimeloan.png" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a >SHORT TIME LOAN</a>
									</h4>
									<p>There may be any number of reasons why you need some cash in hand quickly.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="vertical-item content-padding with_border color_border text-center">
								<div class="item-media">
									<img src="img/icon/mutualfund.png" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a >MUTUAL FUND</a>
									</h4>
									<p>There may be any number of reasons why you need some cash in hand quickly.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="vertical-item content-padding with_border color_border text-center">
								<div class="item-media">
									<img src="img/icon/Creditcard.png" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a >CREDIT CARD</a>
									</h4>
									<p>There may be any number of reasons why you need some cash in hand quickly.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="vertical-item content-padding with_border color_border text-center">
								<div class="item-media">
									<img src="img/icon/debitcard.png" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a >DEBIT CARD</a>
									</h4>
									<p>There may be any number of reasons why you need some cash in hand quickly.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="vertical-item content-padding with_border color_border text-center">
								<div class="item-media">
									<img src="img/icon/personalloan.png" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a >PERSONAL LOAN</a>
									</h4>
									<p>There may be any number of reasons why you need some cash in hand quickly.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="vertical-item content-padding with_border color_border text-center">
								<div class="item-media">
									<img src="img/icon/fixdeposit.png" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a >FIX DEPOSIT</a>
									</h4>
									<p>There may be any number of reasons why you need some cash in hand quickly.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="vertical-item content-padding with_border color_border text-center">
								<div class="item-media">
									<img src="img/icon/savingaccount.png" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a >SAVING ACCOUNT </a>
									</h4>
									<p>There may be any number of reasons why you need some cash in hand quickly.</p>
								</div>
							</div>
						</div>

						
					</div>
				</div>
			</section>


			

			<section class="ls section_padding_top_130 section_padding_bottom_130 columns_padding_25 ">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-4 text-center">
							<img src="images/device-pic.png" alt="">
						</div>
						<div class="col-md-6 col-sm-8">
							<h4 class="text-uppercase">Everything to do with your finances, in one place</h4>

							<p>IndiaLends is a digital lending and borrowing marketplace. It offers different types of loans like personal loans, unsecured loans, installment loans and others where no guarantor is required. Our aim is to bring in innovative ideas and cutting edge technology to transform the Indian financial sector. </p>
							<p>Our basic motivation is to connect borrowers and lenders to form a network of financial marketing. We believe that loan origination and management can become much easier with an efficient and cheap lending process, which is what we’ve set out to do. </p>

						</div>
					</div>
				</div>
			</section>

		

			<section class="ls columns_margin_bottom_30">
				<div class="container line-border-top">
    <div class="container-fluid pad30t pad30b text-center">
      <div class="wrapping text-center pad20b">
        <h3 class="font-weight700 font24 font16-sm text-blue">
            Bank / NBFC Partners
          </h3>
        <div id="carouselk" class="carousel slide wrapping pad20t " data-ride="carousel">
          <div class="carousel-inner">
            <div class="item container-fluid slide">
              <div class="col-xs-4 col-md-2 text-center marg10b xs-pad5l xs-pad5r">
                <div class="wrapping border-grey pad5t pad5b bg-white"><img src="img/bank/hdfc.jpg" alt="hdfc bank" class="img-responsiveness"></div>
              </div>
              <div class="col-xs-4 col-md-2 text-center marg10b xs-pad5l xs-pad5r">
                <div class="wrapping border-grey pad5t pad5b bg-white"><img src="img/bank/icici.jpg" alt="icici bank" class="img-responsiveness"></div>
              </div>
              <div class="col-xs-4 col-md-2 text-center marg10b xs-pad5l xs-pad5r">
                <div class="wrapping border-grey pad5t pad5b bg-white"><img src="img/bank/idfc.jpg" alt="idfc bank" class="img-responsiveness"></div>
              </div>
              <div class="col-xs-4 col-md-2 text-center marg10b xs-pad5l xs-pad5r">
                <div class="wrapping border-grey pad5t pad5b bg-white"><img src="img/bank/sbi.jpg" alt="sbi" class="img-responsiveness"></div>
              </div>
              <div class="col-xs-4 col-md-2 text-center marg10b xs-pad5l xs-pad5r">
                <div class="wrapping border-grey pad5t pad5b bg-white"><img src="img/bank/indusind.jpg" alt="indusind bank" class="img-responsiveness"></div>
              </div>
              <div class="col-xs-4 col-md-2 text-center marg10b xs-pad5l xs-pad5r">
                <div class="wrapping border-grey pad5t pad5b bg-white"><img src="img/bank/amex.jpg" alt="amex" class="img-responsiveness"></div>
              </div>
            </div>
            <div class="item container-fluid slide active">
              <div class="col-xs-4 col-md-2 text-center marg10b xs-pad5l xs-pad5r">
                <div class="wrapping border-grey pad5t pad5b bg-white"><img src="img/bank/bajaj-fin.jpg" alt="bajaj finance" class="img-responsiveness"></div>
              </div>
              <div class="col-xs-4 col-md-2 text-center marg10b xs-pad5l xs-pad5r">
                <div class="wrapping border-grey pad5t pad5b bg-white"><img src="img/bank/capital-first.jpg" alt="capital first" class="img-responsiveness"></div>
              </div>
              <div class="col-xs-4 col-md-2 text-center marg10b xs-pad5l xs-pad5r">
                <div class="wrapping border-grey pad5t pad5b bg-white"><img src="img/bank/tata-capital.jpg" alt="tata capital" class="img-responsiveness"></div>
              </div>
              <div class="col-xs-4 col-md-2 text-center marg10b xs-pad5l xs-pad5r">
                <div class="wrapping border-grey pad5t pad5b bg-white"><img src="img/bank/dmi-finance.jpg" alt="dmi" class="img-responsiveness"></div>
              </div>
              <div class="col-xs-4 col-md-2 text-center marg10b xs-pad5l xs-pad5r">
                <div class="wrapping border-grey pad5t pad5b bg-white"><img src="img/bank/iifl-partner-logo.png" alt="iifl" class="img-responsiveness"></div>
              </div>
              <div class="col-xs-4 col-md-2 text-center marg10b xs-pad5l xs-pad5r">
                <div class="wrapping border-grey pad5t pad5b bg-white"><img src="img/bank/indostar.png" alt="indostar" class="img-responsiveness"></div>
              </div>
            </div>
            <div class="item container-fluid slide">
              <div class="col-xs-4 col-md-2 text-center marg10b xs-pad5l xs-pad5r">
                <div class="wrapping border-grey pad5t pad5b bg-white"><img src="img/bank/yes-bank.jpg" alt="yes bank" class="img-responsiveness"></div>
              </div>
            </div>
          </div><a class="left carousel-control transparent_carousel border-none GAnalytica_Link" href="#carouselk" role="button" data-slide="prev"><span class="fa fa-chevron-left text-grey-light leftposition" style="margin-top: -10px;font-size: 30px; margin-left: -65px;"></span><span class="sr-only">Previous</span></a><a class="right carousel-control transparent_carousel border-none GAnalytica_Link" href="#carouselk" role="button" data-slide="next"><span class="fa fa-chevron-right text-grey-light rightposition" style="margin-top: -10px;font-size: 30px; margin-right: -65px;"></span><span class="sr-only">Next</span></a></div>
      </div>
    </div>
  </div>
			</section>

			<section class="last_credit_card_section bold section_padding_top_130 columns_margin_bottom_30">
  	<div class="container">
      <div class="col-xs-12 text-center">
           <h2 class="get-home fnt_">Credit Card to help you realize bigger dreams</h2>
           <div class="line-bordr1"></div>
           <div class="last_sec_con">
           		<p>Credit cards are instruments that can be used by any individual to pay for goods and services on credit.</p>
                <p>These cards are issued by financial institutions and allow the card holder purchases up to a predefined credit limit. The individual’s credit history, income and source of income are factors which determine the credit limit of the card.</p>
           </div>
      </div>
      
    </div>
  </section>

			<?php
include 'include/footer.php';
?>