<?php include('header.php'); ?>
<div id="preloader">
	<div class="sk-spinner sk-spinner-wave">
		<div class="sk-rect1"></div>
		<div class="sk-rect2"></div>
		<div class="sk-rect3"></div>
		<div class="sk-rect4"></div>
		<div class="sk-rect5"></div>
	</div>
</div>

<div class="tp-banner-container">
	<div class="tp-banner">
		<ul>
			<!-- SLIDE  -->
			<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
				<!-- MAIN IMAGE -->
				<img src="http://ansonika.com/citytours/img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide_1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
				<!-- LAYER NR. 1 -->
				<div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">CREATE EVENTS AND START SELLING TICKETS
				</div>
				<!-- LAYER NR. 2 -->
				<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
					<div style="color:#ffffff; font-size:16px; text-transform:uppercase">
						in less than a minute with FestMonk</div>
				</div>
				<!-- LAYER NR. 3 -->
				<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='create_event.php' class="button_intro">Create Event - It's Free</a>
				</div>
			</li>

		</ul>
		<div class="tp-bannertimer tp-bottom"></div>
	</div>
</div>

<div class="container container_width_increase margin_60">
	<!--
	<div class="main_title">
		<h2>Upcoming Events In <span>Mumbai</span></h2>
		<p>Discover events, handpicked by us, just for you!</p>
	</div>

	<div class="row">
		<?php for($i=1; $i<=8; $i++){ ?>
		<div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
			<div class="tour_container">
				<div class="img_container">
					<a href="timeline.php">
					<img src="img/grid.jpg" alt="">
					<div class="ribbon top_rated"></div>
					<div class="short_info">
						<i class="icon_set_1_icon-28"></i>Startup Events<span class="price"><span>Rs. </span>1200</span>
					</div>
					</a>
				</div>
				
				<div class="tour_title">
					<h3>Brands and Private Labels 2016</h3>
					<time>TUE, JAN 19 9:00 AM</time>
					<p>Cuff Parade, Mumbai</p>
				</div>
				
				<ul class="tour_tags">
					<li><a href="">#startup</a></li>
					<li><a href="">#event</a></li>
				</ul>
			</div>
		</div>
		<?php } ?>
	</div>
	
	<p class="text-center add_bottom_30">
		<a href="timeline.php" class="btn_1 medium"><i class="icon-eye-7"></i>View all Events (144) </a>
	</p>

	<hr><br/>
	-->
	
	<div class="main_title">
		<h2>Upcoming College Events In <span>Mumbai</span></h2>
		<p>Discover college events happening all over India</p>
	</div>

	<div class="row">
		<?php for($i=1; $i<=8; $i++){ ?>
		<div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
			<div class="tour_container">
				<div class="img_container">
					<a href="details.php">
					<img src="img/grid.jpg" alt="">
					<div class="ribbon popular"></div>
					<div class="short_info">
						<i class="icon_set_1_icon-28"></i>Startup Events<span class="price"><sup>Rs. </sup>1200</span>
					</div>
					</a>
				</div>
				
				<div class="tour_title">
					<h3>Aspiring Minds</h3>
					<div class="wishlist">
						<a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to Favorites</span></span></a>
					</div>
					<time>TUE, JAN 19 9:00 AM</time>
					<p>Lala Lajpatrai College</p>
					<p>Haji Ali, Mumbai</p>
				</div>
				
				<ul class="tour_tags">
					<li><a href="">#motivation</a></li>
					<li><a href="">#innovation</a></li>
				</ul>
			</div>
		</div>
		<?php } ?>
	</div>
	
	<p class="text-center add_bottom_30">
		<a href="timeline.php" class="btn_1 medium"><i class="icon-eye-7"></i>View all College Events (178) </a>
	</p>
</div>

<div class="white_bg">
	<div class="container margin_60">
		<div class="main_title">
			<h2>Browse <span>Categories</span></h2>
		</div>
		<div class="row add_bottom_45">
			<div class="col-lg-8 col-md-12 col-sm-12 cat-box">
				<div class="discovery-card" style="background-image:url('img/category/Cultural.jpg');">
				
					<div class="va-container va-container-v va-container-h">
					  <div class="va-middle text-center text-contrast">
						  <div class="h2">
							<strong>
								Cultural Fest
							</strong>
						  </div>
					  </div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-12 cat-box">
				<div class="discovery-card" style="background-image:url('img/category/Technical.jpg')">
				
					<div class="va-container va-container-v va-container-h">
					  <div class="va-middle text-center text-contrast">
						  <div class="h2">
							<strong>
								Tech Fest
							</strong>
						  </div>
					  </div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-12 cat-box">
				<div class="discovery-card" style="background-image:url('img/category/management.jpg')">
					
					<div class="va-container va-container-v va-container-h">
					  <div class="va-middle text-center text-contrast">
						  <div class="h2">
							<strong>
								Management Fest
							</strong>
						  </div>
					  </div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-12 cat-box">
				<div class="discovery-card" style="background-image:url('img/category/conference.jpg');">
					
					<div class="va-container va-container-v va-container-h">
					  <div class="va-middle text-center text-contrast">
						  <div class="h2">
							<strong>
								Conference
							</strong>
						  </div>
					  </div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-12 cat-box">
				<div class="discovery-card" style="background-image:url('img/category/workshop.jpg')">
					
					<div class="va-container va-container-v va-container-h">
					  <div class="va-middle text-center text-contrast">
						  <div class="h2">
							<strong>
								Workshop
							</strong>
						  </div>
					  </div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-12 cat-box">
				<div class="discovery-card" style="background-image:url('img/category/entrepreneurship.jpg');">
					
					<div class="va-container va-container-v va-container-h">
					  <div class="va-middle text-center text-contrast">
						  <div class="h2">
							<strong>
								Entrepreneurship
							</strong>
						  </div>
					  </div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-8 col-md-12 col-sm-12 cat-box">
				<div class="discovery-card" style="background-image:url('img/category/TEDx 2.jpg');">
				
					<div class="va-container va-container-v va-container-h">
					  <div class="va-middle text-center text-contrast">
						  <div class="h2">
							<strong>
								TEDx
							</strong>
						  </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container margin_60">
		<div class="main_title">
			<h2>Browse <span>more Categories</span></h2>
		</div>
		
		<div class="row add_bottom_45">
			<div class="col-md-4 other_tours">
				<ul>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Literary</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Paper/Poster Presentation</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Sports</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Symposium</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Seminar</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Youth Summit</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Online Events</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Summit</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Career</a></li>
				</ul>
			</div>
			<div class="col-md-4 other_tours">
				<ul>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Conclave</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Convention</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Entrepreneurship/Startup Event</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Medical</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Pharma</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Bio Medical</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Online Event</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Alumni</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>B-plan</a></li>
				</ul>
			</div>
			<div class="col-md-4 other_tours">
				<ul>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Travel</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Concert</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Photography</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Short Movie</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Dance</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Music</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Dram/Play/Theatre</a></li>
					<li><a href="#"><i class="icon_set_1_icon-37"></i>Competition</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container banner colored">
		<h4>Create your event in just a <span>minute</span></h4>
		<p>
			Bring people together, or turn your passion into a business. FestMonk gives you everything you need to host your best event yet.
		</p>
		<a href="index.php" class="btn_1 white">Create Event</a>
	</div>

	<div class="container margin_60">
		<div class="main_title">
			<h2> <span>Organising events for some of the best names in the country</span></h2><br/>
		</div>

		<div class="row">
			<div class="col-md-2 text-center">
				<a href="" target="_blank" class="media-item">
				<img class="img-responsive" src="img/icons/organiser/iitb.png" width="95" >
				</a>
			</div>
			
			<div class="col-md-2 text-center">
				<a class="media-item">
					<img class="img-responsive" src="img/icons/organiser/tedx.png" width="95" >
				</a>
			</div>
			
			<div class="col-md-2 text-center">
				<a href="" target="_blank" class="media-item">
					<img class="img-responsive" src="img/icons/organiser/iitd.png" width="95" >
				</a>
			</div>
			
			<div class="col-md-2 text-center">
				<a href="" target="_blank" class="media-item">
					<img class="img-responsive" src="img/icons/organiser/iitr.png" width="95" >
				</a>
			</div>
			
			<div class="col-md-2 text-center">
				<a href="" target="_blank" class="media-item">
					<img class="img-responsive" src="img/icons/organiser/srcc.png" width="95" >
				</a>
			</div>
			
			<div class="col-md-2 text-center">
				<a href="" target="_blank" class="media-item">
					<img class="img-responsive" src="img/icons/organiser/du.png" width="95" >
				</a>
			</div>
		</div>
	</div>
</div>

<div class="container margin_60">
  <div class="row">
    <div class='main_title'>
    <h2> <span>Testimonial</span></h2>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-offset-1 col-md-10'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="http://www.reactiongifs.com/r/overbite.gif" style="width: 100px;height:100px;">
                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                </div>
                <div class="col-sm-9">
                  <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
        </div>
        
        <!-- Carousel Buttons Next/Prev -->
        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
      </div>                          
    </div>
  </div>
</div>

<div class="white_bg">
	<div class="container margin_60">
		<div class="main_title">
			<h2>How It <span>Works</span></h2>
			<p>
				Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
			</p>
		</div>

		<div class="row">
			<div class="col-md-3 wow zoomIn" data-wow-delay="0.2s">
				<div class="feature_home">
					<i class="icon_set_1_icon-41"></i>
					<h3><span></span> Create</h3>
					<p>
						 Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
					</p>
				</div>
			</div>

			<div class="col-md-3 wow zoomIn" data-wow-delay="0.4s">
				<div class="feature_home">
					<i class="icon_set_1_icon-30"></i>
					<h3><span></span> Promote</h3>
					<p>
						 Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
					</p>
				</div>
			</div>

			<div class="col-md-3 wow zoomIn" data-wow-delay="0.6s">
				<div class="feature_home">
					<i class="icon_set_1_icon-57"></i>
					<h3><span></span> Sell</h3>
					<p>
						 Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
					</p>
				</div>
			</div>
			
			<div class="col-md-3 wow zoomIn" data-wow-delay="0.6s">
				<div class="feature_home">
					<i class="icon_set_1_icon-57"></i>
					<h3><span></span> Engage</h3>
					<p>
						 Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
					</p>
				</div>
			</div>
			
		</div>
	</div>
</div>


	<div class="container margin_60">
		<div class="main_title">
			<h2> <span>What Media Says</span></h2><br/><br/>
		</div>

		<div class="row">
			<div class="item">
				<ul id="contentSlider2" class="content-slider">
					<li>
						<a href="http://www.ibnlive.com/news/buzz/photos-these-9-posters-brilliantly-use-brand-taglines-to-showcase-the-social-issues-india-is-battling-722562.html" target="_blank" class="media-item">
						<img src="img/icons/media/ys.png" style="width:200px">
						</a>
					</li>
					<li>
						<a href="http://indiatoday.intoday.in/gallery/menstruation-period-sarcasm-wit-indian-women-the-minimalist/1/14890.html" target="_blank" class="media-item">
							<img src="img/icons/media/toi.png.jpg" style="width:200px">
						</a>
					</li>
					<li>						
						<a href="http://kyoorius.com/2014/09/the-marching-herd-of-red-elephants-kyoorius-student-awards" target="_blank" class="media-item">
							<img src="img/icons/media/nextbigwhat.png" style="width:200px">
						</a>
					</li>
					<li>						
						<a href="http://www.buzzfeed.com/shayanroy/these-guys-used-logos-to-highlight-indias-social-issues#.mumMKodzRn" target="_blank" class="media-item">
							<img src="img/icons/media/inc42.png" style="width:200px">
						</a>
					</li>
					<li>
						<a href="http://thelogicalindian.com/story-feed/get-inspired/these-extremely-creative-posters-pays-tribute-to-every-engineer-on-engineers-day" target="_blank" class="media-item">
							<img src="img/icons/media/et.png.jpg" style="width:200px">
						</a>
					</li>
					<li>
						<a class="media-item">
							<img src="img/icons/media/et.png.jpg" style="width:200px">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>