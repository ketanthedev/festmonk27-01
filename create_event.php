<?php include('header.php'); ?>

<section id="hero" class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
                <div id="login">
                    <div class="text-center"><h3> Create Event</h3></div>
                    <hr/>
                    <form id="createEventForm" action='' method="post">   
                        <fieldset>
                        <h4>Event Details</h4>    
                            <div class="form-group">
                                <label for="event_name">Event Name</label>                                    
                                <input id="event_name" name="event_name" placeholder="Enter here ....." class="form-control input-md" type="text">                                
                            </div>                      
                            <div class="form-group">
                                <label for="event_name">Event Title</label>                                    
                                <input id="event_name" name="event_title" placeholder="Enter here ....." class="form-control input-md" type="text">                                
                            </div>                             

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label><i class="icon-calendar-7"></i> Select a date</label>
                                        <input class="form-control date-pick" data-date-format="M d, D" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label><i class=" icon-clock"></i> Time</label>
                                        <input class="time-pick form-control" value="12:00 AM" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">                                   
                                <label >Description:</label>                                           
                                <textarea rows="5" cols="5" class=" form-control"  name="description" placeholder="Description..." ></textarea>                                             
                            </div>
                        </fieldset>

                        <fieldset>
                            <h4>Ticket Details</h4>
                            <div class="row">
                                <div class="form-group">
                                    <label  class="col-md-4" for="event_type">Paid/Free Event</label>
                                    
                                    <label class="radio-inline col-md-2" for="event_type-0">
                                    <input type="radio" name="event_type" id="event_type-0" value="1">
                                    Paid
                                    </label> 
                                    <label class="radio-inline col-md-2" for="event_type-1">
                                    <input type="radio" name="event_type" id="event_type-1" value="2">
                                    Free
                                    </label>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-4" for="event_type">Private/Public Event</label>
                                    
                                    <label class="radio-inline col-md-2" for="event_type-0">
                                    <input type="radio" name="event_type1" id="event_type-0" value="1">
                                    Private
                                    </label> 
                                    <label class="radio-inline col-md-2" for="event_type-1">
                                    <input type="radio" name="event_type1" id="event_type-1" value="2">
                                    Public
                                    </label>                                   
                                 
                                </div>
                            </div>
                            <div class="ticket-collection">
                                <div class="ticket-group">
                                    <div class="form-group">
                                        <label for="ticket_name">Ticket Name</label>                                    
                                        <input id="ticket_name" name="ticket_name" placeholder="Enter here ....." class="form-control input-md" type="text">                                
                                    </div> 

                                    <div class="form-group row">
                                        <div class="col-md-4 col-sm-4">
                                            <label for="price">Price</label>
                                            <input id="ticket_name" name="ticket_name" placeholder="Price" class="form-control input-md" type="text">
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label for="quantity">Quantity</label>
                                            <select id="quantity" name="quantity" class="form-control" >
                                                <option value="1">quantity1</option>
                                                <option value="2">quantity2</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label for="currency">Currency</label>
                                            <select id="currency" name="currency" class="form-control" >
                                                <option value="1">currency1</option>
                                                <option value="2">currency2</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label><i class="icon-calendar-7"></i> Booking Starts</label>
                                                <input class="date-pick form-control" data-date-format="M d, D" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label style="visibility: hidden;" ><i class="icon-calendar-7"></i> </label>
                                            <div class="row">                                            
                                                    <button class="btn_1 pull-left col-sm-6  medium add-ticket">Add Ticket</button>
                                                    <button class="btn_1 pull-left col-sm-6 medium hidden remove-ticket">Remove </button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>                     
                       
                        <div id="pass-info" class="clearfix"></div>
                        <!-- <button class="btn_full">Create Event</button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div style="display:none;margin-top:3px"  id="type-input">
    <div class="ticket-group">
        <div class="form-group">
            <label for="ticket_name">Ticket Name</label>                                    
            <input id="ticket_name" name="ticket_name" placeholder="Enter here ....." class="form-control input-md" type="text">                                
        </div> 

        <div class="form-group row">
            <div class="col-md-4 col-sm-4">
                <label for="price">Price</label>
                <input id="ticket_name" name="ticket_name" placeholder="Price" class="form-control input-md" type="text">
            </div>
            <div class="col-md-4 col-sm-4">
                <label for="quantity">Quantity</label>
                <select id="quantity" name="quantity" class="form-control" >
                    <option value="1">quantity1</option>
                    <option value="2">quantity2</option>
                </select>
            </div>
            <div class="col-md-4 col-sm-4">
                <label for="currency">Currency</label>
                <select id="currency" name="currency" class="form-control" >
                    <option value="1">currency1</option>
                    <option value="2">currency2</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 ">
                <div class="form-group">
                    <label><i class="icon-calendar-7"></i> Booking Starts</label>
                    <input class="date-pick form-control" data-date-format="M d, D" type="text">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label  style="visibility: hidden;"><i class="icon-calendar-7"></i> </label>
                    <div class="row">                       
                            <button class="btn_1 pull-left col-sm-6 medium  add-ticket">Add Ticket</button>
                            <button class="btn_1 pull-left col-sm-6 medium hidden remove-ticket">Remove </button>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>