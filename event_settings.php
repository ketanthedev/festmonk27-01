<?php include('header.php'); ?>

<div class="container ">
<div class="row">

    

    <div id="left_panel"  >       
        <ul>
            <li>Event Info </li>
            <li>Location Info  </li>
            <li>Ticket Info  </li>
            <li>Discount Info  </li>
        </ul>      
    </div>
    
    <div class="col-md-8"  >
       <!--  <section id="hero" class="login"> -->
            <div class="container">
                <div class="row">
                    <form id="create_event" enctype="multipart/form-data" method="post" action="">
                        <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
                            
                            <div class="text-center"><p>Event Settings</p></div>
                            <hr>
                            <div id="event_info" >
                                <div class="row">
                                    <label for="location">Event Info:</label>
                                </div> 
                                <div class="form-group">
                                    <label for="event_name">Event Name</label>                                    
                                    <input id="event_name" name="event_name" placeholder="Enter here ....." class="form-control input-md" type="text">                                
                                </div>                      
                                <div class="form-group">
                                    <label for="event_name">Event Title</label>                                    
                                    <input id="event_name" name="event_title" placeholder="Enter here ....." class="form-control input-md" type="text">                                
                                </div>  
                                <div class="form-group">
                                    <label for="event_url">Event Url</label>                                    
                                    <input id="event_url" name="event_url" placeholder="Enter here ....." class="form-control input-md" type="text">                                
                                </div>                            
                                <div class="row">
                                    <label for="event_name">Start Date & Time</label>
                                </div>
                                <div class="row">                                  
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label><i class="icon-calendar-7"></i> Select a date</label>
                                            <input class="date-pick form-control" data-date-format="M d, D" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label><i class=" icon-clock"></i> Time</label>
                                            <input class="time-pick form-control" value="12:00 AM" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="event_name">End Date & Time</label>
                                </div>
                                <div class="row">                                  
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label><i class="icon-calendar-7"></i> Select a date</label>
                                            <input class="date-pick form-control" data-date-format="M d, D" type="text">
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

                                <div class="form-group">
                                    <label for="event_type">Private/Public Event</label>                              
                                    <select id="event_type" name="event_type" class="form-control" >
                                        <option value="1">Private</option>
                                        <option value="2">Public</option>
                                    </select>                             
                                </div>

                                <div class="form-group">
                                    <label for="event_type">Paid/Free Event</label>                              
                                    <select id="event_type" name="event_type" class="form-control" >
                                        <option value="1">Paid</option>
                                        <option value="2">Free</option>
                                    </select>                             
                                </div>

                                <div class="form-group">
                                    <label for="tag">Category/Subcategory/Tags</label>                                
                                    <select id="tag" name="tag" class="form-control" multiple="multiple">
                                        <option value="1">Option1</option>
                                        <option value="2">Option2</option>
                                        <option value="3">Option3</option>
                                        <option value="4">Option4</option>
                                        <option value="5">Option5</option>
                                    </select>                                
                                </div>

                                <div class="form-group">
                                    <label for="logo_pic">Logo Pic/Cover Pic</label>    
                                    <input type="file" name="cover_image"  >    
                                </div> 

                                <div class="form-group">
                                    <label for="gallery_video">Gallery images/Videos</label>    
                                    <input type="file" name="gallery_video" multiple>    
                                </div>
                            </div>
							
                            <div id="location">
                                <div class="row">
                                    <label for="location">Location:</label>
                                </div>                               

                                <div class="form-group">
                                    <label for="online">Online</label>                          
                                    <div class="radio">
                                        <label for="online-0">
                                        <input name="online" id="online-0" value="1" checked="checked" type="radio">
                                          yes
                                        </label>
                                        <label for="online-1">
                                        <input name="online" id="online-1" value="2" type="radio">
                                          no
                                        </label>
                                    </div>       
                                </div>       

                                <div class="form-group">
                                    <label for="address">Address</label>                                    
                                    <input id="address" name="address" placeholder="Enter here ....." class="form-control input-md" type="text">                                
                                </div>  
                            </div>              
                            <div id="ticket_info">
                                <div class="row">
                                    <label for="ticket_info">Ticket Info:</label>
                                </div> 

                                <div class="form-group">
                                    <label for="ticket_name">Ticket Name</label>                                    
                                    <input id="ticket_name" name="ticket_name" placeholder="Enter here ....." class="form-control input-md" type="text">                                
                                </div> 

                                <div class="form-group">                                   
                                    <label >Ticket Description:</label>                                           
                                    <textarea rows="5" cols="5" class=" form-control"  name="ticket_description" placeholder="Description..." ></textarea>                                             
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
                                    <label for="event_name">Sale Start Date & Time</label>
                                </div>
                                <div class="row">                                  
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label><i class="icon-calendar-7"></i> Select a date</label>
                                            <input class="date-pick form-control" data-date-format="M d, D" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label><i class=" icon-clock"></i> Time</label>
                                            <input class="time-pick form-control" value="12:00 AM" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="event_name">Sale End Date & Time</label>
                                </div>
                                <div class="row">                                  
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label><i class="icon-calendar-7"></i> Select a date</label>
                                            <input class="date-pick form-control" data-date-format="M d, D" type="text">
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
                                    <label for="status">Status</label>                              
                                    <select id="status" name="status" class="form-control" >
                                        <option value="1">available</option>
                                        <option value="2">filling fast</option>
                                        <option value="3">soldout</option>
                                    </select>                             
                                </div>

                                <div class="form-group">
                                    <label for="fee_settings">Fee Settings</label>                              
                                    <select id="fee_settings" name="fee_settings" class="form-control" >
                                        <option value="1">Absorb full</option>
                                        <option value="2">Transfer full</option>
                                        <option value="3">transfer partial</option>
                                    </select>                             
                                </div>

                                <div class="form-group">
                                    <label for="final_price">Show Final Price</label>                                    
                                    <input id="final_price" name="final_price" placeholder="Enter here ....." class="form-control input-md" type="text">                                
                                </div>
                            </div>

                            <div id="discount_info">
                                <div class="row">                                   
                                    <label >Discount Info:</label>                
                                </div>

                                <div class="form-group">
                                    <label for="discount_type">Discount Type</label>                              
                                    <select id="discount_type" name="discount_type" class="form-control" >
                                        <option value="1">Flat</option>
                                        <option value="2">Code</option>
                                        <option value="3">Group</option>
                                    </select>                             
                                </div>
                                
                                <div class="row">
                                    <label for="event_name">Discount Start Date & Time</label>
                                </div>
                                <div class="row">                                  
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label><i class="icon-calendar-7"></i> Select a date</label>
                                            <input class="date-pick form-control" data-date-format="M d, D" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label><i class=" icon-clock"></i> Time</label>
                                            <input class="time-pick form-control" value="12:00 AM" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="event_name">Discount End Date & Time</label>
                                </div>
                                <div class="row">                                  
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label><i class="icon-calendar-7"></i> Select a date</label>
                                            <input class="date-pick form-control" data-date-format="M d, D" type="text">
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
                                    <label for="code">Code</label>                                    
                                    <input id="code" name="code" placeholder="Enter here ....." class="form-control input-md" type="text">                                
                                </div> 

                                <div class="form-group">
                                    <label for="no_of_discounts"># of discounts</label>                                    
                                    <input id="no_of_discounts" name="no_of_discounts" placeholder="Enter here ....." class="form-control input-md" type="text">                                
                                </div> 

                                <div class="form-group">
                                    <label for="select_ticket">Select Tickets</label>                              
                                    <select id="select_ticket" name="select_ticket" class="form-control" >
                                        <option value="1">Ticket1</option>
                                        <option value="2">Ticket2</option>
                                        <option value="3">Ticket3</option>
                                    </select>                             
                                </div>
                            </div>
                                
                               
                            <div id="pass-info" class="clearfix"></div>
                            <button class="btn_full">Create Event</button>                           
                          
                        </div>
                    </form>
                </div>
            </div>
       <!--  </section> -->
    </div>


</div>

</div>



<?php include('footer.php'); ?>