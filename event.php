<?php include('header.php');?>
<br/><br/><br/><br/>

<div class="container event-form">
	<div class="row">
		<div class="col-md-9 col-centered">
			<h2><span>1.</span> Event Details</h2>
			
			<div class="form-group">
		    	<label>EVENT TITLE : </label>
		    	<input type="text" class="form-control" id="event_title" placeholder="Give it a short disinct name">
		  	</div>
			
			<div class="form-group">
		    	<label>EVENT URL : </label>
		    	<input type="text" class="form-control" id="event_title" placeholder="url if any">
		  	</div>
			
			<div class="form-group loc_box">
		    	<label>LOCATION : </label>
		    	<input type="text" class="form-control" id="location_box" placeholder="Specify where it's held.">
				<p style="margin-top:10px;">
					<a href="javascript:void(0);" class="online_event"><i class="fa fa-laptop"></i>&nbsp;Online Event</a>&nbsp;&nbsp;&nbsp;
					<a href="javascript:void(0);" class="show_address"><i class="fa fa-map-marker"></i>&nbsp;Enter Address</a>
				</p>
		  	</div>
			
		  	<div class="form-group hide_this hide_address">
			    <div class="row">
			    	<div class="col-md-6">
				    	<label>LOCATION : </label>
						<input type="text" class="form-control" id="location" placeholder="Enter the venue's name">
						<input type="text" class="form-control" id="location" placeholder="Address">
						<input type="text" class="form-control" id="location" placeholder="Address2">
						<input type="text" class="form-control" id="location" placeholder="City">
						<div class="row">
							<div class="col-md-6">
								<input type="text" class="form-control" id="location" placeholder="State">
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" id="location" placeholder="Zip/Postal">
							</div>	
						</div>
						
						<select class="form-control">
							<option value="selected">Please select a country</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
						
						<div class="row">
							<div class="col-md-6">
								<a href="javascript:void(0);" class="reset_location"><i class="fa fa-refresh"></i>&nbsp;Reset Location</a>
							</div>
							<div class="col-md-6">
								<input type="checkbox" >&nbsp;Show map
							</div>
						</div>
				    </div>
					
				    <div class="col-md-6">
						//put the map here 
				    </div>
				</div>
		  	</div>
		
		  	<div class="form-group">
			  	<div class="row">
					<div class="col-md-3">
						<label>Start Date</label>
						<input type="text" class="form-control" id="starts">
					</div>
					
					<div class="col-md-3">
						<label class="vis_thiss">Start Time</label>
						<input type="text" class="form-control" id="starts1">
					</div>
			  	
					<div class="col-md-3">
						<label>End Date</label>
						<input type="text" class="form-control" id="starts">
					</div>
					
					<div class="col-md-3">
						<label class="vis_thiss">End Time</label>
						<input type="text" class="form-control" id="starts1">
					</div>
			  	</div>
			</div>  	
  		
			<div class="form-group">
				<label>EVENT Cover IMAGE : </label>
				<input id="attach_logo_cover" name="event_image" type="file" class="file-loading" accept="image/*" style="display:none;">
				<div class="attach_logo" alt="cover">
					<h4>ADD EVENT IMAGE</h4>
					<p>Choose an image that captures your event.</p>
				</div>
			</div>
			
			<div class="form-group">
				<label>Logo : </label>
				<input id="attach_logo_logo" name="event_image" type="file" class="file-loading" accept="image/*" style="display:none;">
				<div class="attach_logo" alt="logo">
					<h4>ADD Logo</h4>
					<p>Logo of the Event.</p>
				</div>
			</div>
			
			<div class="form-group">
				<label>Event Gallery : </label>
				<input id="attach_logo_gallery" name="event_image" type="file" class="file-loading" accept="image/*" style="display:none;">
				<div class="attach_logo" alt="gallery">
					<h4>ADD Event Photos</h4>
					<p>Upload images of the Event (Max 5).</p>
				</div>
			</div>
			
			<div class="form-group">
				<label for="sel1">EVENT Category : </label>
				<select class="form-control event_category" id="sel1">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</div>
  	
			<div class="form-group">
		    	<label>EVENT DESCRIPTION : </label>
		    	<textarea class="form-control" rows="10"></textarea>
		  	</div>
		
			<div class="form-group">
		    	<label>ORGANISER NAME : </label>
				<p style="margin-top:5px;">
					<a href="javascript:void(0);" class="organizer organizer_add">Edit this organizer</a>
					<a href="javascript:void(0);" class="organizer organizer_add">&nbsp;&nbsp;&nbsp;Add New</a>
					<a href="javascript:void(0);" class="organizer organizer_cancel" style="display:none;">Cancel ?</a>
				</p>
				
				<div class="organizer_field" style="display:none;">
					<input type="text" class="form-control" placeholder="Who's organizing this event?">
				</div>
		  	</div>
		
			<div class="form-group organizer_field" style="display:none;">
		    	<label>ORGANISER DESCRIPTION : </label>
		    	<textarea class="form-control"></textarea>
		  	</div>
		
			<div class="form-group">
		    	<label class="checkbox-inline"><input type="checkbox" id="checkfbtwitter">Include links to facebook and twitter</label>
			</div>
			
			<div class="form-group">
				<input type="text" class="form-control checkfbtwitter" id="facebook" placeholder="Facebook Link">
			</div>
			
			<div class="form-group">
				<input type="text" class="form-control checkfbtwitter" id="twitter" placeholder="Twitter Link">	
			</div>
			<br/><br/>
			
			<h2><span>2.</span> Create Tickets</h2>
			<div class="form-group">
				<div class="text-center create_ticket_slab">
					<br/><br/>
					<h5>What type of ticket would you like to start with?</h5>
					<button type="button" class="btn btn-default ticket_type" alt="free"><i class="fa fa-plus-circle"></i>&nbsp;FREE TICKET</button>&nbsp;&nbsp;&nbsp;
					<button type="button" class="btn btn-default ticket_type" alt="paid"><i class="fa fa-plus-circle"></i>&nbsp;PAID TICKET</button>
					<br/><br/>
				</div>
				
				<table class="table order-list" id="myTable">
					<thead>
						<tr>
							<th width="40%" class="bg-info">Ticket Name<span class="required">*</span></th>
							<th width="20%" class="bg-info">Quantity<span class="required">*</span></th>
							<th width="20%" class="bg-info">Price</th>
							<th width="20%" class="bg-info">Actions</th>
						</tr>
					</thead>
					<tbody>
						<!--
						<tr class="free_ticket">
							<td><input type="text" class="form-control" placeholder="Early Bird,RSVP.."></td>
							<td><input type="text" class="form-control" placeholder="100"></td>
							<td>FREE</td>
							<td></td>
						</tr>
						<tr class="paid_ticket">
							<td><input type="text" class="form-control" placeholder="Early Bird,RSVP.."></td>
							<td><input type="text" class="form-control" placeholder="100"></td>
							<td><input type="text" class="form-control" placeholder="INR"></td>
							<td>
								<a href="javascript:void(0);">Settings</a>&nbsp;&nbsp;&nbsp;
								<a href="javascript:void(0);">Delete</a>
							</td>
						</tr>
						-->
					</tbody>
					<tfoot>
					</tfoot>
				</table>
			</div>
			<br/><br/>
			
			<h2><span>3.</span> Additional Settings</h2>
			<div class="form-group">
				<label>Listing Privacy</label>
				<div class="radio">
					<label><input type="radio" checked>Public Page</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" name="optradio">Private Page</label>
				</div>
			</div>
			
			<h3>Event Facility</h3>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Accommodation</label><br/>
						<div class="onoffswitch">
							<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" >
							<label class="onoffswitch-label" for="myonoffswitch">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</div>
					</div>
				</div>
			
				<div class="col-md-4">
					<div class="form-group">
						<label>College ID required</label><br/>
						<div class="onoffswitch">
							<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
							<label class="onoffswitch-label" for="myonoffswitch1">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label>ATM</label><br/>
						<div class="onoffswitch">
							<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
							<label class="onoffswitch-label" for="myonoffswitch3">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Parking</label><br/>
						<div class="onoffswitch">
							<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch4" checked>
							<label class="onoffswitch-label" for="myonoffswitch4">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</div>
					</div>
				</div>
			
				<div class="col-md-4">
					<div class="form-group">
						<label>WiFi</label><br/>
						<div class="onoffswitch">
							<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch5" checked>
							<label class="onoffswitch-label" for="myonoffswitch5">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</div>
					</div>
				</div>
			
				<div class="col-md-4">
					<div class="form-group">
						<label>Food</label><br/>
						<div class="onoffswitch">
							<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch6" checked>
							<label class="onoffswitch-label" for="myonoffswitch6">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</div>
					</div>
				</div>
			</div>
		
			<div class="form-group">
				<label for="sel1">EVENT TYPE : </label>
				<select class="form-control" id="sel1">
					<option value="selected">Select the type of event</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</div>
		
			<div class="form-group">
				<label for="sel1">EVENT TOPIC<span class="required">*</span></label>
				<select class="form-control" id="sel1">
					<option value="selected">Select a topic</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</div>
			
			<div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" value="">Show number of tickets on registration page</label>
			</div>
		</div>
	</div>
</div>
<br/><br/><br/><br/>
<?php include('footer.php'); ?>

<link href="css/select2.css" rel="stylesheet"/>
<script src="js/select2.js"></script>

<link href="https://tarruda.github.io/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script src="https://tarruda.github.io/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://tarruda.github.io/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js"></script>

<style>
.mce-menubar{display:none;}
.select2-container{padding: 0; height: auto; border: none;}

.onoffswitch {position: relative; width: 90px; -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;}
.onoffswitch-checkbox {display: none;}
.onoffswitch-label {display: block; overflow: hidden; cursor: pointer; border: 2px solid #999999; border-radius: 20px;}
.onoffswitch-inner {display: block; width: 200%; margin-left: -100%;transition: margin 0.3s ease-in 0s;}
.onoffswitch-inner:before, .onoffswitch-inner:after {display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;box-sizing: border-box;}
.onoffswitch-inner:before {content: "YES";padding-left: 10px;background-color: #34A7C1; color: #FFFFFF;}
.onoffswitch-inner:after {content: "No";padding-right: 10px;background-color: #EEEEEE; color: #999999;text-align: right;}
.onoffswitch-switch {display: block; width: 18px; margin: 6px;background: #FFFFFF;position: absolute; top: 0; bottom: 0;right: 56px;border: 2px solid #999999; border-radius: 20px;transition: all 0.3s ease-in 0s; }
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {margin-left: 0;}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {right: 0px; }
</style>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<script type="text/javascript">
$(function() {
	$('#datetimepicker3').datetimepicker({
		pickDate: false
	});
	
	$("select").select2({
		allowClear: true
	}); 
});
</script>