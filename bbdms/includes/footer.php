<footer>
	<div class="w3ls-footer-grids pt-sm-4 pt-3">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-md-4 w3l-footer mb-md-0 mb-4">
					<h2 class="mb-sm-3 mb-2">
						<a href="index.php" class="text-white font-weight-bold" style="text-decoration: none; font-size: 1.6rem; letter-spacing: -0.5px;">
							<span>Blood Bank & </span><span style="color: #ea4335;">Donor</span> Management System 
							<i class="fas fa-syringe ml-2" style="color: #ea4335;"></i>
						</a>
					</h2>
					<p style="line-height: 1.8; color: #cbd5e1; font-size: 0.95rem; margin-top: 15px;">
						Our primary mission is to bridge the gap between blood donors and those in urgent clinical need. Every drop counts. By providing an efficient, real-time donor network, we help save lives across communities, one safe transfusion at a time.
					</p>
					<div class="mt-3">
						<span style="background: rgba(234, 67, 53, 0.2); color: #ff8a80; border: 1px solid rgba(234, 67, 53, 0.4); padding: 6px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-block;">
							<i class="fas fa-heartbeat mr-1"></i> 24/7 Emergency Support
						</span>
					</div>
				</div>

				<div class="col-md-4 w3l-footer my-md-0 my-4">
					<h3 class="mb-sm-3 mb-2 text-white font-weight-bold" style="font-size: 1.3rem; border-bottom: 2px solid #ea4335; display: inline-block; padding-bottom: 5px;">Address</h3>
					<ul class="list-unstyled mt-3" style="color: #cbd5e1;">
						<?php 
						$pagetype="contactus";
						$sql = "SELECT * from tblcontactusinfo";
						$query = $dbh -> prepare($sql);
						$query->execute();
						$results=$query->fetchAll(PDO::FETCH_OBJ);
						if($query->rowCount() > 0) {
							foreach($results as $result) { 
						?>
						<li class="mb-3 d-flex align-items-start">
							<i class="fas fa-location-arrow mt-1 mr-3" style="color: #ea4335; font-size: 1.1rem; width: 20px;"></i>
							<p class="m-0" style="color: #e2e8f0; line-height: 1.5;">
								<span><?php echo htmlentities($result->Address); ?></span>
							</p>
						</li>
						<li class="my-3 d-flex align-items-center">
							<i class="fas fa-phone mr-3" style="color: #ea4335; font-size: 1.1rem; width: 20px;"></i>
							<p class="m-0"><a href="tel:<?php echo $result->ContactNo; ?>" style="color: #e2e8f0; font-weight: 600; text-decoration: none;"><?php echo htmlentities($result->ContactNo); ?></a></p>
						</li>
						<li class="d-flex align-items-center">
							<i class="far fa-envelope-open mr-3" style="color: #ea4335; font-size: 1.1rem; width: 20px;"></i>
							<a href="mailto:<?php echo $result->EmailId; ?>" style="color: #e2e8f0; text-decoration: none;"><?php echo htmlentities($result->EmailId); ?></a>
						</li>
						<?php 
							} 
						} 
						?>
					</ul>
				</div>

				<div class="col-md-4 w3l-footer">
					<h3 class="mb-sm-3 mb-2 text-white font-weight-bold" style="font-size: 1.3rem; border-bottom: 2px solid #ea4335; display: inline-block; padding-bottom: 5px;">Quick Links</h3>
					<div class="nav-w3-l mt-3">
						<ul class="list-unstyled footer-custom-links">
							<li class="mb-2">
								<a href="index.php" style="color: #cbd5e1; text-decoration: none; transition: 0.3s;"><i class="fas fa-chevron-right mr-2" style="font-size: 0.75rem; color: #ea4335;"></i> Home</a>
							</li>
							<li class="mt-2 mb-2">
								<a href="about.php" style="color: #cbd5e1; text-decoration: none; transition: 0.3s;"><i class="fas fa-chevron-right mr-2" style="font-size: 0.75rem; color: #ea4335;"></i> About Us</a>
							</li>
							<li class="mt-2 mb-2">
								<a href="contact.php" style="color: #cbd5e1; text-decoration: none; transition: 0.3s;"><i class="fas fa-chevron-right mr-2" style="font-size: 0.75rem; color: #ea4335;"></i> Contact Us</a>
							</li>
							<li class="mt-2 mb-2">
								<a href="donor-list.php" style="color: #cbd5e1; text-decoration: none; transition: 0.3s;"><i class="fas fa-chevron-right mr-2" style="font-size: 0.75rem; color: #ea4335;"></i> Donor List</a>
							</li>
							<li class="mt-2">
								<a href="search-donor.php" style="color: #cbd5e1; text-decoration: none; transition: 0.3s;"><i class="fas fa-chevron-right mr-2" style="font-size: 0.75rem; color: #ea4335;"></i> Search Donor</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="border-top mt-5 pt-lg-4 pt-3 text-center" style="border-top: 1px solid rgba(255, 255, 255, 0.15) !important;">
				<p class="copy-right-grids mt-lg-1" style="color: #94a3b8; font-size: 0.9rem;">
					&copy; <?php echo date('Y'); ?> Blood Bank Donor Management System. All Rights Reserved.
				</p>
			</div>
		</div>
	</div>
</footer>