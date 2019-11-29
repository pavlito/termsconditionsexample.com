<?php require '_global.php'; ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		
		<title>Disclaimer Generator: Generate Your Disclaimer</title>
		<meta name="description" content="World's Easiest Disclaimer Generator: Generate your Disclaimer in just 10 seconds" />
		
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/images/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="/assets/images/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/images/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="/assets/images/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/images/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="/assets/images/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="/assets/images/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="/assets/images/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="/assets/images/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="/assets/images/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="/assets/images/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="/assets/images/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="/assets/images/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="/assets/images/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="/assets/images/mstile-310x310.png" />
		
		<!-- styles -->
		<link href="/assets/css/main.css" rel="stylesheet" />
		<link href="/assets/css/style.css" rel="stylesheet" />
	</head>
	<body>
		<div class="wrapper">
			
			<!-- header -->
			<?php include('_header.php'); ?>
			
			<div class="page">
				<!-- hero start -->
				<section class="hero">
					<div class="container">
						<div class="row d-flex align-items-center">
							<div class="col-lg-7 text-white">
								<h1 class="text-white">Disclaimer Generator</h1>
								<p class="subtitle h4 text-white">Every website & app needs a Disclaimer.</p>
								<a href="#wizard" class="btn btn-primary mt-4">
									Start Generating Your Disclaimer
								</a>
							</div>
							<div class="col-lg-5 add-z mt-5 mt-lg-0">
								<div id="wizard" class="wizard">
									<?php
									$supported_countries = false;
									$fields = [
									'user_email=' . $_ENV['LCG_API_ACCESS_USER'],
									'access_token=' . $_ENV['LCG_API_ACCESS_TOKEN'],
									'agreement_name=disclaimer',
									'agreement_version=1.0',
									'country=',
									'wizard_lang=en',
									'supported_countries=' . $supported_countries,
									];
									$curl = curl_init($_ENV['LCG_API_URL_BASE'] . 'wizard_create?' . join('&', $fields));
									curl_setopt($curl, CURLOPT_HEADER, false);
									curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
									$resp = curl_exec($curl);
									curl_close($curl);
									if ($resp === false) {
									$s = 'Query error';
									} else {
									$resp = json_decode($resp, true);
									if($resp['result'] != 0) {
									$s = $resp['result_message'];
									} else {
									$s = $resp['wizard_html'];
									}
									}
									echo $s;
									?>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- hero end -->
				<!-- about start -->
				<section class="sect-about">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h2>About Our Disclaimer Generator</h2>
								<p>Disclaimers are useful for any website or app (be it a mobile app or a desktop app). Disclaimers are used to limit the responsibility of the website/app owner. One of the most popular disclaimer is the medical or fitness disclaimer. This type of disclaimer is used by many medical & fitness websites when they offer medical or health information. Through a medical or fitness disclaimer, the website owner tries to limit his liability.</p>
								<p>But medical or fitness disclaimers are not the only disclaimers. Here are some of the most popular disclaimers:</p>
								<ul>
									<li>External links disclaimer</li>
									<li>Affiliate links disclaimer</li>
									<li>Legal advice disclaimer</li>
									<li>Financial disclaimer</li>
									<li>Blog disclaimer</li>
								</ul>
								<p>That's where our <strong>Disclaimer Generator</strong> comes in. You can generate a disclaimer for your website or mobile app in 2 easy steps. We host the disclaimer for you for free. Or you can download the disclaimer and copy-paste it on your website or app.</p>
								<p>The accuracy of the generated disclaimer is not legally binding. Use at your own risk.</p>
							</div>
						</div>
					</div>
				</section>
				<!-- about end -->
				<!-- examples -->
				<section class="sect-examples">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="text-center">Privacy Policy Example</h2>
							</div>
						</div>
						<div class="row mt-5">
							<div class="col">
								<div class="card card-example bg-dark">
									<div class="card-body">
										<div class="row align-items-center">
											<div class="col-lg-4">
												<img src="https://via.placeholder.com/400x300/1e1a36/1a7882?Text=image-here" alt="" class="w-100">
											</div>
											<div class="col-lg-8">
												<h4 class="text-primary mt-5 mt-lg-0">Upverter</h4>
												<h6>Privacy Policy template from upverter</h6>
												<p>You can find the Privacy Policy of Upverter at the following URL: <a href="#">https://upverter.com/privacy</a><br>Their agreement has over 2198 wrods</p>
												<a href="#" class="btn btn-primary">Read More</a>
											</div>
										</div>
									</div>
									<hr>
									<div class="card-body">
										<div class="row align-items-center">
											<div class="col-lg-4">
												<img src="https://via.placeholder.com/400x300/1e1a36/1a7882?Text=image-here" alt="" class="w-100">
											</div>
											<div class="col-lg-8">
												<h4 class="text-primary mt-5 mt-lg-0">Upverter</h4>
												<h6>Privacy Policy template from upverter</h6>
												<p>You can find the Privacy Policy of Upverter at the following URL: <a href="#">https://upverter.com/privacy</a><br>Their agreement has over 2198 wrods</p>
												<a href="#" class="btn btn-primary">Read More</a>
											</div>
										</div>
									</div>
									<hr>
									<div class="card-body">
										<div class="row align-items-center">
											<div class="col-lg-4">
												<img src="https://via.placeholder.com/400x300/1e1a36/1a7882?Text=image-here" alt="" class="w-100">
											</div>
											<div class="col-lg-8">
												<h4 class="text-primary mt-5 mt-lg-0">Upverter</h4>
												<h6>Privacy Policy template from upverter</h6>
												<p>You can find the Privacy Policy of Upverter at the following URL: <a href="#">https://upverter.com/privacy</a><br>Their agreement has over 2198 wrods</p>
												<a href="#" class="btn btn-primary">Read More</a>
											</div>
										</div>
									</div>
									<hr>
									<div class="card-body">
										<div class="row align-items-center">
											<div class="col-lg-4">
												<img src="https://via.placeholder.com/400x300/1e1a36/1a7882?Text=image-here" alt="" class="w-100">
											</div>
											<div class="col-lg-8">
												<h4 class="text-primary mt-5 mt-lg-0">Upverter</h4>
												<h6>Privacy Policy template from upverter</h6>
												<p>You can find the Privacy Policy of Upverter at the following URL: <a href="#">https://upverter.com/privacy</a><br>Their agreement has over 2198 wrods</p>
												<a href="#" class="btn btn-primary">Read More</a>
											</div>
										</div>
									</div>
									<hr>
									<div class="card-body">
										<div class="row align-items-center">
											<div class="col-lg-4">
												<img src="https://via.placeholder.com/400x300/1e1a36/1a7882?Text=image-here" alt="" class="w-100">
											</div>
											<div class="col-lg-8">
												<h4 class="text-primary mt-5 mt-lg-0">Upverter</h4>
												<h6>Privacy Policy template from upverter</h6>
												<p>You can find the Privacy Policy of Upverter at the following URL: <a href="#">https://upverter.com/privacy</a><br>Their agreement has over 2198 wrods</p>
												<a href="#" class="btn btn-primary">Read More</a>
											</div>
										</div>
									</div>
									<hr>
									<div class="card-body">
										<div class="row align-items-center">
											<div class="col-lg-4">
												<img src="https://via.placeholder.com/400x300/1e1a36/1a7882?Text=image-here" alt="" class="w-100">
											</div>
											<div class="col-lg-8">
												<h4 class="text-primary mt-5 mt-lg-0">Upverter</h4>
												<h6>Privacy Policy template from upverter</h6>
												<p>You can find the Privacy Policy of Upverter at the following URL: <a href="#">https://upverter.com/privacy</a><br>Their agreement has over 2198 wrods</p>
												<a href="#" class="btn btn-primary">Read More</a>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</section>
				<!-- examples end -->
				<!-- generators start -->
				<section class="sect-generators">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<div class="card-outer mt-5 mt-lg-0 card-pp">
									<div class="card bg-dark">
										<div class="card-body text-center">
											<div class="g-box g-box-1">
												<span>PP</span>
											</div>
											<h5 class="mt-4">Privacy Policy Generator</h5>
											<p>Every website needs a Privacy Policy to comply with the GDPR, CCPA and CalOPPA laws.</p>
											<a href="https://www.generateprivacypolicy.com" class="btn btn-pp btn-block mt-4">Visit Privacy Policy Generator</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card-outer mt-5 mt-lg-0 card-tc">
									<div class="card bg-dark">
										<div class="card-body text-center">
											<div class="g-box g-box-2">
												<span>TC</span>
											</div>
											<h5 class="mt-4">Privacy Policy Generator</h5>
											<p>Every website needs a Privacy Policy to comply with the GDPR, CCPA and CalOPPA laws.</p>
											<a href="https://www.generateprivacypolicy.com" class="btn btn-tc btn-block mt-4">Visit Privacy Policy Generator</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card-outer mt-5 mt-lg-0 card-d">
									<div class="card bg-dark">
										<div class="card-body text-center">
											<div class="g-box g-box-3">
												<span>D</span>
											</div>
											<h5 class="mt-4">Privacy Policy Generator</h5>
											<p>Every website needs a Privacy Policy to comply with the GDPR, CCPA and CalOPPA laws.</p>
											<a href="https://www.generateprivacypolicy.com" class="btn btn-d btn-block mt-4">Visit Privacy Policy Generator</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- generators end -->
				<!-- Preview start -->
				<section class="sect-preview">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="text-center">Disclaimer Preview</h2>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="header d-flex align-items-center justify-content-between">
											<p class="h5 text-purple mb-0 font-weight-normal">Disclaimer Preview</p>
											<div class="icons">
												<svg xmlns="http://www.w3.org/2000/svg" width="105" height="23" viewBox="0 0 105 23">
													<g id="Group_37" data-name="Group 37" transform="translate(-1435.512 -1500)">
														<circle id="Ellipse_8" data-name="Ellipse 8" cx="11.5" cy="11.5" r="11.5" transform="translate(1517.512 1500)" fill="#056cfe"/>
														<circle id="Ellipse_9" data-name="Ellipse 9" cx="11.5" cy="11.5" r="11.5" transform="translate(1476.512 1500)" fill="#6734ff"/>
														<ellipse id="Ellipse_10" data-name="Ellipse 10" cx="12" cy="11.5" rx="12" ry="11.5" transform="translate(1435.512 1500)" fill="#05e4fc"/>
													</g>
												</svg>
											</div>
											
										</div>
									</div>
									<hr>
									<div class="card-body">
										<div class="preview">
											<div class="content">
												<h4 class="mt-0">Disclaimer for <span class="highlight preview_company_name">Company Name</span></h4>
												<p>If you require any more information or have any questions about our site's disclaimer, please feel free to contact us by email at <span class="highlight preview_email_address">Email@Website.com</span>.</p>
												<h5>Disclaimers for <span class="highlight preview_company_name">Company Name</span></h5>
												<p>All the information on this website is published in good faith and for general information purpose only. <span class="highlight preview_website_name">Website Name</span> does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (<span class="highlight preview_website_url">Website.com</span>), is strictly at your own risk.  will not be liable for any losses and/or damages in connection with the use of our website.</p>
												<p>From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone ‘bad'.</p>
												<p>Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.</p>
												<h5>Consent</h5>
												<p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p>
												<h5>Update</h5>
												<p>Should we update, amend or make any changes to this document, those changes will be prominently posted here.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<!-- footer -->
				<?php include('_footer.php'); ?>
			</div>
			<img src="/assets/images/1.png" class="bg bg-1" alt="">
			<img src="/assets/images/2.png" class="bg bg-2" alt="">
			<img src="/assets/images/3.png" class="bg bg-3" alt="">
			<img src="/assets/images/4.png" class="bg bg-4" alt="">
			<img src="/assets/images/5.png" class="bg bg-5" alt="">
			<img src="/assets/images/6.png" class="bg bg-6" alt="">
			<img src="/assets/images/7.png" class="bg bg-7" alt="">
		</div>
		<!-- wrapper end -->
		<script src="/assets/js/jquery.slim.min.js" type="text/javascript"></script>
		<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
	</body>
</html>