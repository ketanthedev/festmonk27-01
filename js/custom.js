// When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  
    $('#quote-carousel').carousel({
	    pause: true,
	    interval: 2000,
    });
	

    $('input.time-pick').timepicker({
		minuteStep: 15,
		showInpunts: false
	});
	$('input.date-pick').datepicker('setDate', 'today');
	
	
  	$("#contentSlider1").lightSlider({ 
		autoWidth : false,
		auto:true,
        loop:true,
        pager : false,
        verticalHeight : '150px'
    });
	
	$("#contentSlider2").lightSlider({
		item: 1,
		autoWidth : true,
		auto:true,
        loop:true,
        pager : false,
        verticalHeight : '150px'                
    });

	$(".attach_review").click(function() {    			
    	$("input[id='attach_file']").click();    	   
	});
	
	
    //$('#container').sliphover();	



  var counter = 0;
  $(document).on("click", ".add-ticket", function (e) { 
    e.preventDefault();
    counter++;
    var ticket_html = $("#type-input").html();
    var _this = $(this);
    _this.parents('.ticket-group').find('.add-ticket').addClass("hidden");
    _this.parents('.ticket-group').find('.remove-ticket').removeClass("hidden");
   
    $('.ticket-collection').append(ticket_html);
    // if( counter > 0 )
    // {
    //   $('.remove-ticket').removeClass("hidden")
    // }
        
  });

  $(document).on("click", ".remove-ticket", function (e) {  
    e.preventDefault();
    counter--;
    var _this = $(this);
    _this.parents('.ticket-group').remove();

    if( counter == 0 )
    {
      $('.remove-ticket').addClass("hidden")
    }
      
  });

  $("#createEventForm").simpleform({
    speed : 500,
    transition : 'slide',
    progressBar : false,
    showProgressText : false,
    validate: false
  });

    //  $('.header-video').each(function(i, elem) {
    //     headerVideo = new HeaderVideo({
    //       element: elem,
    //       media: '.header-video__media',
    //       playTrigger: '.header-video__play-trigger',
    //       closeTrigger: '.header-video__close-trigger'
    //     });
    // });
 
     // $("a.youtube").YouTubePopup({ autoplay: 0 });
    
  
    $('.container').stickem();
    $('.booking-details').stickem();

	/*
	var stickyHeaderTop = $('#position').offset().top;
	var stickybookingTop = $('#booking-info').offset().top;
	$(window).scroll(function(){
		if( $(window).scrollTop() > stickyHeaderTop )
		{
			$('#position').css({'position': 'fixed', 'top': '0px'});
			$('#stickyalias').css('display', 'block');
		}
		else
		{
			$('#stickyheader').css({'position': 'relative', top: 'auto'});
			$('#stickyalias').css('display', 'none');
		}
	});

	
	function fixDiv() 
	{
		var $cache = $('#position');
		var $width = $('#position').width();
		if ($(window).scrollTop() > stickyHeaderTop) {
		  $cache.css({
			'position': 'fixed',
			'top': '0px',
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
		console.log($('#booking-info').width());
		var $width = $('#booking-info').width();
		if ($(window).scrollTop() > stickybookingTop) {
		  $cache.css({
			'position': 'fixed',
			'top': '120px',
			'width': '337px'
		  });
		} else {
		  $cache.css({
			'position': 'relative',
			'top': 'auto',
			'margin-top':'0px'
		  });
		}
	}
  
	$(window).scroll(function() {
		fixDiv();
		fixDiv1();
	});  
	*/

	$('#show_register_pop').click(function() {
		$('#login_pop').modal('hide');
	});
	
	$('#show_login_pop').click(function() {
		$('#register_pop').modal('hide');
	});
	
	$('#show_forgot_pop').click(function() {
		$('#login_pop').modal('hide');
	});
	
	$('#checkfbtwitter').click(function() {
		if($("#checkfbtwitter").prop('checked') == true)
		{
			$('.checkfbtwitter').show();
		}
		else
		{
			$('.checkfbtwitter').hide();
		}
	});
	
	$('.online_event').click(function() {
		$('#location_box').attr('placeholder','This is an online event ');
		$('#location_box').attr('disabled','disabled');
		$('.online_event').hide();
	});
	
	$('.reset_location').click(function() {
		$('.hide_address').hide();
		$('.online_event').show();
		$('.loc_box').show();
		$('#location_box').attr('placeholder','Specify where its held');
		$('#location_box').removeAttr('disabled');
	});
	
	$('.show_address').click(function() {
		$('.hide_address').show();
		$('.loc_box').hide();
	});
	
	$('.organizer_add').click(function() {
		$('.organizer').hide();
		$('.organizer_cancel').show();
		$('.organizer_field').show();
	});
	
	$('.organizer_cancel').click(function() {
		$('.organizer').show();
		$('.organizer_cancel').hide();
		$('.organizer_field').hide();
	});
	
	$(".attach_logo").click(function() {
		var alt = $(this).attr('alt');
    	$("input[id='attach_logo_"+alt+"']").click();
	});
	
	var counter = 0;
	$("body").on("click", ".ticket_type", function (event) {
	//$(".ticket_type").on("click", function () {
		$('.order-list').show();
		$('.create_ticket_slab').hide();
		counter = $('#myTable tr').length - 2;
		var alt = $(this).attr('alt');
		var newRow = $("<tr>");
		var cols = "";

		cols += '<td><input type="text" name="name' + counter + '" class="form-control" placeholder="Early Bird,RSVP.." /></td>';
		cols += '<td><input type="text" name="quantity' + counter + '" class="form-control" placeholder="100"/></td>';
		
		if(alt == 'paid')
		{
			cols += '<td><input type="text" name="price' + counter + '" class="form-control cost_change" placeholder="INR 5000"/></td>';
		}
		else
		{
			cols += '<td><div class="l-block-2">FREE</div></td>';
		}
		
		cols += '<td><div class="l-block-2"><a href="javascript:void(0);" class="ibtnDel"><i class="fa fa-trash-o" style="font-size:20px;"></i>&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" class="ibtnSettings"><i class="fa fa-tasks" style="font-size:20px;"></i></div></td>';
		newRow.append(cols);
		
		var settings = '';
		
		settings += '<tr style="display:none;"><td colspan="4"><h5>Settings</h5><div class="form-group"><label>Ticket Description</label><textarea class="form-control" placeholder="Tell your attendees more about this ticket type."></textarea><br/><label><input type="checkbox" />&nbsp;  Show ticket description on event page</label></div>';
		
		if(alt == 'paid')
		{
			settings += '<div class="form-group"><label>Fees</label><select class="form-control"><option value="">Fee Settings</option><option>Absorb full fee</option><option>Transfer full fee</option><option>Split the fee 50-50</option></select><p class="stats"></p></div>';
		}
		
		settings += '<div class="form-group"><div class="row"><div class="col-md-6"><label>Sales Start Date</label><input type="text" class="form-control" placeholder="Ticket Sales Start"></div><div class="col-md-6"><label>Sales Start Time</label><input type="text" class="form-control" placeholder="Ticket Sales End"></div></div></div>';
		
		settings += '<div class="form-group"><div class="row"><div class="col-md-6"><label>Sales End Date</label><input type="text" class="form-control" placeholder="Ticket Sales End Date"></div><div class="col-md-6"><label>Sales End Time</label><input type="text" class="form-control" placeholder="Ticket Sales End Time"></div></div></div><div class="form-group"><input type="text" class="form-control" placeholder="Tickets allowed per order"></div></td></tr>';
		
		var tfoot = '';
		tfoot += '<tr><td colspan="4"><button type="button" class="btn btn-default ticket_type" alt="free"><i class="fa fa-plus-circle"></i>&nbsp;FREE TICKET</button>&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default ticket_type" alt="paid"><i class="fa fa-plus-circle"></i>&nbsp;PAID TICKET</button></td></tr>';
		
		$('table.order-list tfoot').html(tfoot);
		
		//if (counter == 4) $('.ticket_type').attr('disabled', true).prop('value', "You've reached the limit");
		$("table.order-list").append(newRow);
		$("table.order-list").append(settings);
		
		counter++;
	});

	$("table.order-list").on("click", ".ibtnDel", function (event) {
		var cnt = $('#myTable tr').length;
		
		$(this).closest("tr").next().remove();
		$(this).closest("tr").remove();
		
		counter -= 1
		
		if(cnt == 4)
		{
			$('.order-list').hide();
			$('.create_ticket_slab').show();
		}
		
		//$('.ticket_type').attr('disabled', false).prop('value', "Add Row");
	});
	
	$("table.order-list").on("click", ".ibtnSettings", function (event) {
		$(this).closest("tr").next().toggle();
	});
	
	$("table.order-list").on("keyup", ".cost_change", function (event) {
		var val = $(this).val();
		if(val != '')
		{
			$(".stats").html('Fees INR '+val);
		}
	});
});