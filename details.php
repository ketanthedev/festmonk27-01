<?php include('header.php'); ?>
<link href="css/slider-pro.min.css" rel="stylesheet">

<style>
/* Gets rid of the extra white space that follows an inline element*/
.image img {
    vertical-align: bottom;
}

/* Creates the play arrow motif */
.image .play {position:absolute; width:50px; height:50px; top:50%; right:50%; margin:-28px; border-radius:30px;}
.image .play span {position:absolute; width:64px; height:64px; background:url(img/play.png) no-repeat;}

</style>

<body data-spy="scroll" data-target="#booking-info">
<section class="parallax-window image"  data-parallax="scroll" data-image-src="img/single_tour_bg_1.jpg" data-natural-width="1400" data-natural-height="470" >
	<span class="play">
		<a href="" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/rg_aGcIl4qk?autoplay=1"><span></span></a>
	</span>

    <div class="parallax-content-2">
		<div id="getFixed">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8">
						<h1>Aspiring Minds</h1>
						<span>368, Powai Plaza, IIT Bombay, Mumbai - 4000076.</span>
					</div>
					<div class="col-md-4 col-sm-4">
						<div id="price_single_main">
							from/per person <span><sup>Rs.</sup>650</span>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>
    
<div class="collapse" id="collapseMap">
	<div id="map" class="map"></div>
</div>

<div class="container margin_60">
	<div class="row">
		<div class="col-md-8" id="single_tour_desc">
        
			<div id="single_tour_feat">
				<ul>
					<li><i class="icon_set_1_icon-4"></i>Museum</li>
					<li class="active_feat"><i class="icon_set_1_icon-83"></i>3 Hours</li>
					<li class="active_feat"><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
					<li><i class="icon_set_1_icon-82"></i>144 Likes</li>
					<li class="active_feat"><i class="icon_set_1_icon-22"></i>Pet allowed</li>
					<li><i class="icon_set_1_icon-97"></i>Audio guide</li>
					<li class="active_feat"><i class="icon_set_1_icon-29"></i>Tour guide</li>
				</ul>
			</div>
            
            <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a></p>
			
            <hr>
			
            
			<div class="row">
				<div class="col-md-3" style="padding-right:0;">
					<ul class="nav nav-tabs tabs-left">
					    <li class="active"><a data-toggle="tab" href="#home"><h5>Description</h5></a></li>
					    <li><a data-toggle="tab" href="#schedule"><h5>Schedule</h5></a></li>
					    <li><a data-toggle="tab" href="#reviews"><h5>Reviews </h5></a></li>	
					    <li><a data-toggle="tab" href="#tickets"><h5>Tickets </h5></a></li>	
					</ul>
					
				</div>
				<div class="col-md-9" style="padding-left:0;">
					<div class="tab-content">
					    <div id="home" class="tab-pane fade in active">					     	
							<h4>Paris in love</h4>
							<p>
								Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.
							</p>
							<h4>What's include</h4>
							<p>
								Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
							</p>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<ul class="list_ok">
										<li>Lorem ipsum dolor sit amet</li>
										<li>No scripta electram necessitatibus sit</li>
										<li>Quidam percipitur instructior an eum</li>
										<li>Ut est saepe munere ceteros</li>
										<li>No scripta electram necessitatibus sit</li>
										<li>Quidam percipitur instructior an eum</li>
									</ul>
								</div>
								<div class="col-md-6 col-sm-6">
									<ul class="list_ok">
										<li>Lorem ipsum dolor sit amet</li>
										<li>No scripta electram necessitatibus sit</li>
										<li>Quidam percipitur instructior an eum</li>
										<li>No scripta electram necessitatibus sit</li>
									</ul>
								</div>
							</div><!-- End row  -->
							
					    </div>
					    <div id="schedule" class="tab-pane fade">							
							<div class=" table-responsive">
								<table class="table table-striped">
								<thead>
								<tr>
									<th colspan="2">
										 1st March to 31st October
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										Monday
									</td>
									<td>
										10.00 - 17.30
									</td>
								</tr>
								<tr>
									<td>
										Tuesday
									</td>
									<td>
										09.00 - 17.30
									</td>
								</tr>
								<tr>
									<td>
										Wednesday
									</td>
									<td>
										09.00 - 17.30
									</td>
								</tr>
								<tr>
									<td>
										Thursday
									</td>
									<td>
										<span class="label label-danger">Closed</span>
									</td>
								</tr>
								<tr>
									<td>
										Friday
									</td>
									<td>
										09.00 - 17.30
									</td>
								</tr>
								<tr>
									<td>
										Saturday
									</td>
									<td>
										09.00 - 17.30
									</td>
								</tr>
								<tr>
									<td>
										Sunday
									</td>
									<td>
										10.00 - 17.30
									</td>
								</tr>
								<tr>
									<td>
										<strong><em>Last Admission</em></strong>
									</td>
									<td>
										<strong>17.00</strong>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
							<div class=" table-responsive">
								<table class="table table-striped">
								<thead>
								<tr>
									<th colspan="2">
										 1st November to 28th February
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										Monday
									</td>
									<td>
										10.00 - 17.30
									</td>
								</tr>
								<tr>
									<td>
										Tuesday
									</td>
									<td>
										09.00 - 17.30
									</td>
								</tr>
								<tr>
									<td>
										Wednesday
									</td>
									<td>
										09.00 - 17.30
									</td>
								</tr>
								<tr>
									<td>
										Thursday
									</td>
									<td>
										<span class="label label-danger">Closed</span>
									</td>
								</tr>
								<tr>
									<td>
										Friday
									</td>
									<td>
										09.00 - 17.30
									</td>
								</tr>
								<tr>
									<td>
										Saturday
									</td>
									<td>
										09.00 - 17.30
									</td>
								</tr>
								<tr>
									<td>
										Sunday
									</td>
									<td>
										10.00 - 17.30
									</td>
								</tr>
								<tr>
									<td>
										<strong><em>Last Admission</em></strong>
									</td>
									<td>
										<strong>17.00</strong>
									</td>
								</tr>
								</tbody>
								</table>
							</div>							
					    </div>
					    <div id="reviews" class="tab-pane fade">


<div class="row" id="rating_summary">
		                    	<div class="col-md-6">
		                        	<ul>
		                            	<li>Position
		                                    <div class="rating">
		                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
		                                    </div>
		                                </li>
		                                <li>Tourist guide
		                                <div class="rating">
		                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
		                                    </div>
		                                </li>
		                            </ul>
		                        </div>
		                        <div class="col-md-6">
		                        	<ul>
		                            	<li>Price
		                                <div class="rating">
		                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
		                                    </div>
		                                </li>
		                                <li>Quality
		                                <div class="rating">
		                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
		                                    </div>
		                                </li>
		                            </ul>
		                        </div>
		                    </div><!-- End row -->
		                    <hr>
							<div >
								<div class="row form-group">
								<div class="col-md-3">
									<h5>Your Review:</h5>
								</div>
								<div class="col-md-9">
									<textarea class="form-control" rows="4" cols="30">
									
									</textarea>
								</div>
								
								</div>
								
							    <input type="file" id="attach_file" name="file"  style="display: none;" />
							    <button type="button" class="btn btn-xs btn-info attach_review">Attach File</button>							   
								<button id="button1id" type="submit" class="pull-right btn btn-default">Post it</button>  
							</div><!-- End review strip -->						
							<br/><br/><br/>
							
		                	<div id="general_rating">11 Reviews 
		                    <div class="rating">
									<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
								</div>
		                    </div><!-- End general_rating -->
		                    <div class="row" id="rating_summary">
		                    	<div class="col-md-6">
		                        	<ul>
		                            	<li>Position
		                                    <div class="rating">
		                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
		                                    </div>
		                                </li>
		                                <li>Tourist guide
		                                <div class="rating">
		                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
		                                    </div>
		                                </li>
		                            </ul>
		                        </div>
		                        <div class="col-md-6">
		                        	<ul>
		                            	<li>Price
		                                <div class="rating">
		                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
		                                    </div>
		                                </li>
		                                <li>Quality
		                                <div class="rating">
		                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
		                                    </div>
		                                </li>
		                            </ul>
		                        </div>
		                    </div><!-- End row -->
		                    <hr>
							<div class="review_strip_single">
								<img src="img/avatar1.jpg" alt="" class="img-circle">
								<small> - 10 March 2015 -</small>
								<h4>Jhon Doe</h4>
								<p>
									 "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
								</p>
								<div class="rating">
									<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
								</div>
							</div><!-- End review strip -->
		                    
							<div class="review_strip_single">
								<img src="img/avatar3.jpg" alt="" class="img-circle">
								<small> - 10 March 2015 -</small>
								<h4>Jhon Doe</h4>
								<p>
									 "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
								</p>
								<div class="rating">
									<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
								</div>
							</div><!-- End review strip -->
		                    
							<div class="review_strip_single last">
								<img src="img/avatar2.jpg" alt="" class="img-circle">
								<small> - 10 March 2015 -</small>
								<h4>Jhon Doe</h4>
								<p>
									 "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
								</p>
								<div class="rating">
									<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
								</div>
							</div><!-- End review strip -->
							
					    </div>	
						
					</div>
			    </div>
				
			</div>
			
		</div><!--End  single_tour_desc-->
        
		<aside class="col-md-4">
			<div id="booking-info" class="panel-affix">
			<p class="hidden-sm hidden-xs">
				<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a>
			</p>
			<div class="box_style_1 expose">
				<h3 class="inner">- Booking -</h3>

				<br>
				
				<a class="btn_full" href="cart.html">Book now</a>
				<a class="btn_full_outline" href="#"><i class=" icon-heart"></i> Add to whislist</a>
			</div>
			
			</div>
		</aside>
	</div>
</div>

<div id="videoModal" class="modal fade" role="dialog" aria-labelledby="videoModal" aria-hidden="true" tabindex='-1' style="background: url('img/single_tour_bg_1.jpg') no-repeat; background-size: cover;">
	<button type="button" class="close vclose" data-dismiss="modal" aria-hidden="true">×</button>
	<div class="modal-dialog" style="width:85%;">
		<div class="modal-content">
			<div class="modal-body" style="height:450px;">
				<iframe width="100%" height="100%" src=""></iframe>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>

<script>
autoPlayYouTubeModal();

function autoPlayYouTubeModal()
{
	var trigger = $("body").find('[data-toggle="modal"]');
	trigger.click(function (){
		var theModal = $(this).data("target"),
		videoSRC = $(this).attr("data-theVideo"),
		videoSRCauto = videoSRC + "?autoplay=1";
		$(theModal + ' iframe').attr('src', videoSRCauto);
		$(theModal + ' button.close').click(function () {
			$(theModal + ' iframe').attr('src', videoSRC);
		});
	});
}

function fixDiv() 
{
	var $cache = $('#getFixed');
	var $width = $('#getFixed').parent().width();
	
	if ($(window).scrollTop() > 300) {
		$cache.css({
			'position': 'fixed',
			'top': '60px',
			'width': $width
		});
	} else {
		$cache.css({
			'position': 'relative',
			'top': 'auto'
		});
	}
}

function fixDiv1()
{
    var $cache = $('#booking-info');
    var $width = $('#booking-info').width();
	
    if ($(window).scrollTop() > 300) {
      $cache.css({
        'position': 'fixed',
        'top': '175px',
        'width': $width
      });
    } else {
      $cache.css({
        'position': 'relative',
        'top': 'auto',
        'margin-top':'0px'
      });
    }
}
	
//$(window).scroll(function() { fixDiv(); fixDiv1(); });
$(window).scroll(function() { fixDiv(); });

//Function from Bluthemes, lets you add li elemants to affix object without having to alter and data attributes set out by bootstrap
$(function(){

	// name your elements here
	var stickyElement   = '.panel-affix',   // the element you want to make sticky
		bottomElement   = '#fake-footer'; // the bottom element where you want the sticky element to stop (usually the footer) 

	// make sure the element exists on the page before trying to initalize
	if($( stickyElement ).length){
		$( stickyElement ).each(function(){

			// let's save some messy code in clean variables
			// when should we start affixing? (the amount of pixels to the top from the element)
			var fromTop = $( this ).offset().top, 
				// where is the bottom of the element?
				fromBottom = $( document ).height()-($( this ).offset().top + $( this ).outerHeight()),
				// where should we stop? (the amount of pixels from the top where the bottom element is)
				// also add the outer height mismatch to the height of the element to account for padding and borders
				stopOn = $( document ).height()-( $( bottomElement ).offset().top)+($( this ).outerHeight() - $( this ).height()); 

			// if the element doesn't need to get sticky, then skip it so it won't mess up your layout
			if( (fromBottom-stopOn) > 200 ){
				// let's put a sticky width on the element and assign it to the top
				$( this ).css('width', $( this ).width()).css('top', 0).css('position', '');
				// assign the affix to the element
				$( this ).affix({
					offset: { 
						// make it stick where the top pixel of the element is
						top: fromTop - 180,  
						// make it stop where the top pixel of the bottom element is
						bottom: stopOn
					}
				// when the affix get's called then make sure the position is the default (fixed) and it's at the top
				}).on('affix.bs.affix', function(){ $( this ).css('top', '180px').css('position', ''); });
			}
			// trigger the scroll event so it always activates 
			$( window ).trigger('scroll'); 
		}); 
	}

});

$(document).ready(function(){
    $('.modal').each(function(){
		var src = $(this).find('iframe').attr('src');

        $(this).on('click', function(){
            $(this).find('iframe').attr('src', '');
            $(this).find('iframe').attr('src', src);
        });
    });
});

</script>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/map.js"></script>