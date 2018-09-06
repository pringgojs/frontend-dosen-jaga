                <div class="vcard-area-content col-sm-5">
					<div class="left-menubar">
						<div class="navigation-bar box-shadow-code ul-li text-center">	
							<ul class="menu-item ul-li-block">
								<li><router-link to="/beranda"><span class="ti-receipt"></span>Beranda</router-link></li>
								<li><router-link to="/e-tugas"><span class="ti-pencil-alt"></span>E-tugas</router-link></li>
								<li><router-link to="/materi"><span class="ti-file"></span>Materi</router-link></li>
								<li><router-link to="/jadwal"><span class="ti-layout-grid2"></span>Jadwal</router-link></li>
								<li><router-link to="/faq"><span class="ti-comment-alt"></span>FAQ</router-link></li>
							</ul>
						</div>
					</div>
					<!-- //.left-menubar -->
					<div class="mobile-menu">
						<div class="mobile-logo text-center">vCard</div>
						<div class="mobile-menu-view">
							<div class="open"><span class="ti-menu"></span></div>
							<div class="left-menubar">
								<div class="navigation-bar box-shadow-code ul-li text-center">	
									<div class="menu-overlay"></div>
									<ul class="menu-item ul-li-block">
										<li class="selected"><a href="#"><span class="ti-receipt"></span>About Me</a></li>
										<li><a href="#"><span class="ti-briefcase"></span>Resume</a></li>
										<li><a href="#"><span class="ti-layout-grid2"></span>Portfolio</a></li>
										<li><a href="#"><span class="ti-pencil-alt"></span>Blog</a></li>
										<li><a href="#"><span class="ti-comment-alt"></span>Contact</a></li>
									</ul>
								</div>
							</div>
						</div>


						<div class="mobile-menu-view-profile admin-profile-mobile">
							<div class="open"><span class="ti-user"></span></div>
							<div class="profile-details">
								<div class="profile-img-details box-shadow-code text-center pt60">
									<div class="profile-img mb15">
										<img src="public/img/male.png" alt="pro-pic">
										<div class="download-cv">
											<a href="#"><span class="green ti-import"></span></a>	
										</div>
									</div>
									<!-- /img -->
									<div class="pro-name pb35">
										<span class=name>Lionel Ronaldo</span>
										<span class=designation>UX/UI Designer</span>
									</div>
									<!-- /pro-name -->
									<div class="pro-text mb50 scroll-out">
										<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt ebdmollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
									</div>
									<!-- /pro-text -->
									<div class="pro-social ul-li">
										<ul class="social-list ul-li">
											<li><a href="#"><span class="ti-facebook"></span></a></li>
											<li><a href="#"><span class="ti-twitter-alt"></span></a></li>
											<li><a href="#"><span class="ti-google"></span></a></li>
											<li><a href="#"><span class="ti-instagram"></span></a></li>
										</ul>
									</div>
								</div>
							</div><!--//profile-details -->
						</div>
					</div>



					<div class="vcard-pro-pic">
						<div class="profile-details">
							<div class="profile-img-details box-shadow-code text-center pt60">
								<div class="profile-img mb15">
									<img src="public/img/male.png" alt="pro-pic">
									<div class="download-cv">
										<a href="#"><span class="green ti-import"></span></a>	
									</div>
								</div>
								<!-- /img -->
								<div class="pro-name pb35">
									<span class=name>{{$lecturer->nama}}</span>
									<span class=designation>{{$lecturer->nip}}</span> <br>
									
								</div>
								<!-- /pro-name -->
								<div class="pro-text mb50  scroll-out">
									<span class="badge">{{$program_study->jurusan}}</span>
								</div>
								<!-- /pro-text -->
								<div class="pro-social ul-li">
									<ul class="social-list ul-li">
										<li><a href="#"><span class="ti-facebook"></span></a></li>
										<li><a href="#"><span class="ti-twitter-alt"></span></a></li>
										<li><a href="#"><span class="ti-google"></span></a></li>
										<li><a href="#"><span class="ti-instagram"></span></a></li>
									</ul>
								</div>
							</div>
						</div><!--//profile-details -->
					</div><!--//vcard-pro-pic-->
				</div><!--//vcard-area-content -->
                