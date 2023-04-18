<style>
	body {
		background-image: url("assets/img/dss.webp");
		background-size: cover;
	}

	#cover {
		position: absolute;
		background: rgba(0, 0, 0, 0.5);
		width: 100vw;
		height: 100vh;
		z-index: 1;
	}

	h3 {
		margin-top: 50px;
	}

	.cssanimation,
	.cssanimation span {
		animation-duration: 2s;
		animation-fill-mode: both;
	}

	.cssanimation span {
		display: inline-block
	}

	.fadeInBottom {
		animation-name: fadeInBottom
	}

	@keyframes fadeInBottom {
		from {
			opacity: 0;
			transform: translateY(100%);
		}

		to {
			opacity: 1
		}
	}
</style>
<div style="padding: 15px;">
	<div class="container pb-2 my-3" style="z-index: 10; background: #fff; border-radius: 15px;">
		<div class="row">
			<div class="col-10 offset-1 col-md-10 offset-md-1 col-lg-10 offset-lg-1 content-text" style="text-align: center;">
				<h3 class="cssanimation sequence fadeInBottom">WELCOME TO THE GLOBAL GOALS JAM RESEARCH TEAM WEBSITE</h3>

			</div>
			<div class="col-10 offset-1 col-md-10 offset-md-1 col-lg-10 offset-lg-1 content-text" style="text-align: left">
				<p class="cssanimation sequence fadeInBottom mt-2">
					The urgency to provide real sustainable solutions for the sustainable Development Goals (SDG’s) is upon us as a planet and we believe that big solutions are lying waste at different local communities due to implementation only at the local level. These solutions can be useful to tackle similar challenges at different locations in the globe only if we can tap into the power of Collaboration which is the fastest medium for these solutions to travel across different locations of the globe efficiently and effectively for global scale implementation.
					It is time to
				</p>
				<p class="cssanimation sequence fadeInBottom">CONNECT</p>
				<p class="cssanimation sequence fadeInBottom">SHARE.</p>
				<p class="cssanimation sequence fadeInBottom">AND,</p>
				<p class="cssanimation sequence fadeInBottom">MAKE A GLOBAL CHANGE….</p>
			</div>
			<div class="col-10 offset-1 col-md-10 offset-md-1 col-lg-10 offset-lg-1 mt-2">
				<form method="post">
					<div class="col-6">
						<div class="mb-3">
							<label for="year" class="form-label">What year did you join the Global Goals Jam?</label>
							<?php
							$years = ['2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'];
							?>
							<select class="form-select" name="year" id="year" required>
								<option selected value="">--- Years list ---</option>
								<?php for ($i = 0; $i < count($years); $i++) : ?>
									<option value="<?= $years[$i] ?>"><?= $years[$i] ?></option>
								<?php endfor; ?>
							</select>
						</div>
					</div>

					<div class="col-6">
						<div class="mb-3">
							<label for="country" class="form-label">Please select your country:</label>
							<?php
							$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
							?>
							<select class="form-select" name="country" id="country" required>
								<option selected value="">--- Countries list ---</option>
								<?php for ($i = 0; $i < count($countries); $i++) : ?>
									<option value="<?= $countries[$i] ?>"><?= $countries[$i] ?></option>
								<?php endfor; ?>
							</select>
						</div>
					</div>

					<div class="col-12" style="text-align: center; margin-top: 10px">
						<button type="submit" class="btn main-btn">Continue</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>