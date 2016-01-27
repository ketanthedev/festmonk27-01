<?php include('header.php');?>
<br/><br/><br/><br/>
<div class="container event-form">
	<div class="row">	
		<div class="col-md-8 col-centered">
			<h2><span>1.</span> Event Details</h2>
			
			<div class="form-group">
		    	<label>EVENT TITLE : </label>
		    	<input type="text" class="form-control" id="event_title" placeholder="Give it a short disinct name">
		  	</div>
			
			<div class="form-group">
		    	<label>LOCATION : </label>
		    	<input type="text" class="form-control" id="" placeholder="Specify where it's held.">
				<a href="javascript:void(0);" class="online_event">Online Event</a>&nbsp;&nbsp;&nbsp;
				<a href="javascript:void(0);" class="show_address">Enter Address</a>
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
						
						<select class="form-control" placeholder="Select type of event">
							<option value="selected">Select the type of event</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
				    </div>
					
				    <div class="col-md-6">
						//put the map here 
				    </div>
				</div>
		  	</div>
		
		  	<div class="form-group">
			  	<div class="row">
					<div class="col-md-3">
						<label>Starts</label>
						<input type="text" class="form-control" id="starts">
					</div>
					
					<div class="col-md-3">
						<label class="vis_this">Starts</label>
						<input type="text" class="form-control" id="starts1">
					</div>
			  	
					<div class="col-md-3">
						<label>Ends</label>
						<input type="text" class="form-control" id="starts">
					</div>
					
					<div class="col-md-3">
						<label class="vis_this">Ends</label>
						<input type="text" class="form-control" id="starts1">
					</div>
			  	</div>
			</div>  	
  		
			<div class="form-group">
				<label>EVENT IMAGE : </label>
				<input id="attach_logo" name="event_image" type="file" class="file-loading" accept="image/*" style="display:none;">
				<div class="attach_logo">
					<h4>ADD EVENT IMAGE</h4>
					<p>Choose an image that captures your event.</p>
				</div>
			</div>
  	
			<div class="form-group">
		    	<label>EVENT DESCRIPTION : </label>
		    	<textarea class="form-control" rows="10"></textarea>
		  	</div>
		
			<div class="form-group">
		    	<label>ORGANISER NAME : </label>
		    	<input type="text" class="form-control" placeholder="Who's organizing this event?">
		  	</div>
		
			<div class="form-group">
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
				<p>What type of ticket would you like to start with?</p>
				<button type="button" class="btn btn-default ticket_type" alt="free">FREE TICKET</button>
				<button type="button" class="btn btn-default ticket_type" alt="paid">PAID TICKET</button>
				<br/><br/>
				
				<table class="table order-list" id="myTable">
					<thead>
						<tr>
							<th width="40%" class="bg-info">Ticket Name<span class="required">*</span></th>
							<th width="15%" class="bg-info">Quantity<span class="required">*</span></th>
							<th width="25%" class="bg-info">Price</th>
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
				</table>
			</div>
			<br/><br/>
			
			<h2><span>3.</span> Additional Settings</h2>
			<div class="form-group">
				<label>Listing Privacy</label>
				<div class="radio">
					<label><input type="radio" name="optradio" checked>Public Page</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" name="optradio">Private Page</label>
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