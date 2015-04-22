<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>My Promus</title>
		<link rel="stylesheet" href="assets/stylesheets/styles.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	</head>

	<body id="login-page">
                                
                <div class="logo">
                        <img src="assets/images/logo.png" alt="MyPromus logo">
                         <br/>
                        <h2>Make Your Event Possible.</h2>
                </div>

                <br/>
		
		<div class="login-box">
			<form action="/myPromus/controller/login.php" method="post">
	
				<fieldset class="login-data">
			
					<input type="text" name="username" autocomplete="off" placeholder="Username" required>
	
					<input type="password" name="password"  autocomplete="off" placeholder="Password" required>


			        
                                </fieldset>
                                
                                <fieldset class="login-action">
        
                                        <input class="btn-login" style="cursor:pointer" type="submit" name="submit" value="SIGN IN">
			                <br>
                                        <small>
                                             <a href="http://localhost/myPromus/view/register.php" style="font-weight: bold !important;">Create an account now !</a>
                                        </small>

				</fieldset>
			</form>


		</div>

	
	<footer class="index-footer">
			<div class="index-navbar">
				<div class="index-navbar-links">
											<a class="evt-click" href="/en/offers" data-redirect="1" data-tracking="1" data-tracking-tag="loggedout_click" data-tracking-params="{'type': 'footer_offers'}">
							Subscription Plans						</a>
										<a class="evt-click" href="/en/features" data-redirect="1" data-tracking="1" data-tracking-tag="loggedout_click" data-tracking-params="{'type': 'footer_features'}">
						Features					</a>
					<a class="evt-click" href="/en/devices/mobile" data-redirect="1" data-tracking="1" data-tracking-tag="loggedout_click" data-tracking-params="{'type': 'footer_mobile'}">
						Mobile					</a>
					<a class="evt-click" href="/en/legal/press" data-redirect="1" data-tracking="1" data-tracking-tag="loggedout_click" data-tracking-params="{'type': 'footer_press'}">
						Press					</a>
					<a class="evt-click" href="/en/jobs" data-redirect="1" data-tracking="1" data-tracking-tag="loggedout_click" data-tracking-params="{'type': 'footer_jobs'}">
						Jobs					</a>
					<a class="evt-click" href="/en/support/index.php" data-redirect="1" data-tracking="1" data-tracking-tag="loggedout_click" data-tracking-params="{'type': 'footer_helpandcontact'}">
						Help &amp; Contact					</a>
											<a class="evt-click" href="/en/legal/cgu" data-redirect="1" data-tracking="1" data-tracking-tag="loggedout_click" data-tracking-params="{'type': 'footer_cgu'}">
							Terms & conditions						</a>
						
					</div>
				<div class="index-copyright">
					<p id="copyright" >&copy;&nbsp;2015 MyPromus</p>
				</div>
				<div class="index-navbar-lang">
					<span class="lang-label">English</span>
					<span class="lang-carret icon icon-chevron-down"></span>
					<select class="lang-select" id="language_select">
																					<option value="en" selected="selected">
									English								</option>
																												<option value="us" >
									English (us)								</option>
																												<option value="ar" >
									Arabe								</option>
																												<option value="cs" >
									Čeština								</option>
																												<option value="da" >
									Dansk								</option>
																												<option value="de" >
									Deutsch								</option>
																												<option value="es" >
									Español								</option>
																												<option value="mx" >
									Español (mx)								</option>
																												<option value="fr" >
									Français								</option>
																												<option value="id" >
									Indonesia								</option>
																												<option value="it" >
									Italiano								</option>
																												<option value="hu" >
									Magyar								</option>
																												<option value="ms" >
									Melayu								</option>
																												<option value="nl" >
									Nederlands								</option>
																												<option value="no" >
									Norsk								</option>
																												<option value="pl" >
									Polski								</option>
																												<option value="br" >
									Português (br)								</option>
																												<option value="pt" >
									Português (pt)								</option>
																												<option value="ru" >
									Pусский								</option>
																												<option value="ro" >
									Română								</option>
																												<option value="rs" >
									Srpski								</option>
																												<option value="fi" >
									Suomi								</option>
																												<option value="se" >
									Svenska								</option>
																												<option value="sq" >
									Shqip								</option>
																												<option value="sk" >
									Slovenčina								</option>
																												<option value="sl" >
									Slovenščina								</option>
																												<option value="tr" >
									Türkçe								</option>
																												<option value="me" >
									Crnogorski								</option>
																												<option value="th" >
									ภาษาไทย								</option>
																												<option value="cn" >
									中文								</option>
																												<option value="hr" >
									Hrvatski								</option>
																												<option value="ko" >
									한국어								</option>
																		</select>


				</div>
				</div>

	</footer>


	</body>

</html>
