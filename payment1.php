<?php include('header.php'); ?> 
 
<style>   
.panel-default>.panel-heading { 
  color: #F9F9F9; 
  background-color: #696974; 
  border-color: #ddd; 
  height:50px; 
  padding:15px;  
} 
 
 
.credit 
{  
 
 border: 2px solid;  
 border-color: black;  
 padding:5px; 
 
} 
 
.net 
{  
 
 border: 2px solid;  
 /*border-color: red;*/  
 padding:5px; 
 
} 
.card 
{ 
 background-color:#D0D0E0;  
 padding:15px; 
 width: auto; 
border-radius:15px; 
 
} 
 
.card-container  
{  
 width:50%; 
}  
 
.sideul 
{  
 
  border:2px solid #333; 
  height: 100%; 
  width:auto; 
 
}  
 
.booking-info 
{  
   border:2px solid #696974; 
  height:100%; 
  width:100%;  
}  
 
.proceed  
{  
border:0; 
border-radius:0; 
background-color: #e04f67; 
 
} 
 
.proceed:hover  
{background-color: #fff; 
 color:#e04f67; 
 border:2px solid #e04f67;; 
} 
 
</style> 
 
 
 
<br><br><br><br><br><br> 
<div class="clearfix"></div> 
 
<div class="container"> <!--main --> 
  <div class="row"> 
    <div class="col-md-9"><!-- Semi 1 --> 
 
      <!--collapse panel --> 
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
        <div class="panel panel-default"> 
          <div class="panel-heading" role="tab" id="headingOne"> 
            <h4 class="panel-title"> 
              <a role="button" data-toggle="false" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 
               <span class="glyphicon glyphicon-chevron-down"> </span> Ticket Information 
             </a> 
           </h4> 
         </div> 
         <div id="collapseOne" class="panel-collapse" role="tabpanel" aria-labelledby="headingOne"> 
          <div class="panel-body"> 
 
            <div class="row">  
              <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12"> 
                <div class="table-responsive">  
                  <table class="table table-hover"> 
                    <thead> 
                     <tr> 
                      <th>TICKET TYPE</th> 
                      <th>SALES END</th> 
                      <th>PRICE</th> 
                      <th>FEE</th> 
                      <th>QUANTITY</th> 
                    </tr> 
                  </thead> 
                  <tbody> 
                   <tr> 
                    <td>Mak Slave (Platinum)</td> 
                    <td>Jun 5, 2016</td> 
                    <td>$15.00</td> 
                    <td>$1.37</td> 
                    <td>  
                    <select> 
                      <option vaule="0">0</option> 
                      <option vaule="1">1</option> 
                      <option value="2">2</option> 
                      <option value="3">3</option> 
                      <option value="4">4</option> 
                      <option value="5">5</option> 
                      <option value="6">6</option> 
                      <option value="7">7</option> 
                      <option value="8">8</option> 
                      <option value="9">9</option> 
                      <option value="10">10</option> 
                    </select> 
                  </td> 
                  </tr> 
                  <tr> 
                    <td>Mak (Gold)</td> 
                    <td>Jun 5, 2016</td> 
                    <td>$12.00</td> 
                    <td>$1.29</td> 
                    <td> 
                      <select> 
                      <option vaule="0">0</option> 
                      <option vaule="1">1</option> 
                      <option value="2">2</option> 
                      <option value="3">3</option> 
                      <option value="4">4</option> 
                      <option value="5">5</option> 
                      <option value="6">6</option> 
                      <option value="7">7</option> 
                      <option value="8">8</option> 
                      <option value="9">9</option> 
                      <option value="10">10</option> 
                    </select> 
 
                    </td> 
                  </tr> 
                  <tr> 
                    <td>Mak (Silver)</td> 
                    <td>Jun 5, 2016</td> 
                    <td>$10.00</td> 
                    <td>$1.24</td> 
                    <td> 
                      <select> 
                      <option vaule="0">0</option> 
                      <option vaule="1">1</option> 
                      <option value="2">2</option> 
                      <option value="3">3</option> 
                      <option value="4">4</option> 
                      <option value="5">5</option> 
                      <option value="6">6</option> 
                      <option value="7">7</option> 
                      <option value="8">8</option> 
                      <option value="9">9</option> 
                      <option value="10">10</option> 
                    </select> 
                    </td> 
                  </tr> 
                  <tr> 
                    <td>Mak Slaves</td> 
                    <td>Jun 5, 2016</td> 
                    <td>Free</td> 
                    <td>$0.00</td> 
                    <td> 
                      <select> 
                      <option vaule="0">0</option> 
                      <option vaule="1">1</option> 
                      <option value="2">2</option> 
                      <option value="3">3</option> 
                      <option value="4">4</option> 
                      <option value="5">5</option> 
                      <option value="6">6</option> 
                      <option value="7">7</option> 
                      <option value="8">8</option> 
                      <option value="9">9</option> 
                      <option value="10">10</option> 
                    </select> 
                    </td> 
                  </tr> 
                </tbody> 
              </table> 
            </div> 
          </div> 
        </div> 
 
 
      </div> 
    </div> 
  </div> 
  <div class="panel panel-default"> 
    <div class="panel-heading" role="tab" id="headingTwo"> 
      <h4 class="panel-title"> 
        <a id="r2" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> 
         <span class="glyphicon glyphicon-chevron-down"> </span> Login Option 
       </a> 
     </h4> 
   </div> 
   <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo"> 
    <div class="panel-body"> 
      <form class="form-inline"> 
       <div class="form-group"> 
 
         <input type="text" class="form-control" id="email id" placeholder="EMAIL ADDRESS" width="80%;"> 
       </div> 
       <div class="form-group"> 
 
        <input type="email" class="form-control" id="mobile" placeholder="MOBILE NUMBER"> 
      </div> 
      <button type="submit" class="btn btn-danger">Send invitation</button> 
    </form> 
  </div> 
</div> 
</div> 
<div class="panel panel-default"> 
  <div class="panel-heading" role="tab" id="headingThree"> 
    <h4 class="panel-title"> 
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> 
       <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"> </span> Payment Option 
     </a> 
   </h4> 
 </div> 
 <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree"> 
  <div class="panel-body"> 
 
    <div class="row"> 
      <div class="col-xs-12 col-md-4 col-lg-3"> 
        <ul class="nav nav-pills nav-stacked sideul"> 
          <li role="payment"><a id="cred" href="#credit">CREDIT/DEBIT CARD</a></li> 
          <li role="payment"><a id="nett" href="#net">NET BANKING</a></li> 
        </ul>  
      </div> 
      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9"> 
 
        <div  id="credit" class="credit">   
          Enter your Card details  
          <br>  
          <div class="card">  
            <div class="row"> 
              <div class="col-sm-12 col-xs-12 col-md-8 "> 
                Card Number<br>    
                <input type="text" class="form-control " id="cardnumber" placeholder="ENTER YOUR CARD NUMBER" /><br> 
                <input type="text" class="form-control" id="nameon" placeholder="NAME ON THE CARD" /> 
              </div> 
            </div> 
            <br>  
 
            <div class="row"> 
              <div class="col-lg-6 col-xs-8 col-sm-6"> 
                Expiry<br>  
 
                <input type="text" class="col-xs-4 col-md-4 form-control" id="mm" placeholder="MM" style="width:100px;" /> 
 
 
 
                <input style="width:100px;" type="text" class="col-xs-4 col-md-4 form-control" id="yy" placeholder="YY">          
              </div> 
 
              <div class="col-lg-6 col-xs-4 col-sm-6 col-md-4"> 
                Cvv <br> 
                <input type="text" class="col-xs-4 form-control" id="yy" placeholder="Cvv">  
              </div> 
            </div> 
 
 
          </div>  
 
          <br> 
          <div class="clearfix row">   
            <div class="col-xs-12">  
              <input type="checkbox"/> QUIKPAY<br>  
              <i>&nbsp;&nbsp;Save this card information to my BookMyShow account and make faster payments.</i> 
            </div>  
          </div> 
 
          <div class="row">  
            <div class="col-xs-12 clearfix">  
              <br> 
              <input type="submit" class="btn btn-danger" value="MAKE PAYMENT" /> 
              <br> 
              By clicking "Make Payment" you agree to the terms and conditions 
            </div>  
          </div> 
 
        </div>  
 
        <!-- Net Div --> 
        <div  id="net" class="net">  
         <b> <h4>Pay using Net Banking </h4> <b><br>  
 
          <div class="row">   
            <div class="col-lg-12">   
              <div class="col-lg-4 col-xs-6 col-sm-4"> 
 
                <label class="radio-inline"><input type="radio" name="optradio">  
                  <img src="img/bank/axis.png" class="img-responsive" /> </label> 
                </div> 
 
                <div class="col-lg-4 col-xs-6 col-sm-4"> 
                  <label class="radio-inline"><input type="radio" name="optradio">  
                    <img src="img/bank/cit-na.png" class="img-responsive" /> </label> 
 
                  </div> 
 
 
                  <div class="col-lg-4 col-xs-6 col-sm-4"> 
                    <label class="radio-inline"><input type="radio" name="optradio">  
                      <img src="img/bank/hdf-na.png" class="img-responsive" /> </label> 
                    </div> 
 
                    <br> <br> 
 
                    <div class="col-lg-4 col-xs-6 col-sm-4"> 
                      <label class="radio-inline"><input type="radio" name="optradio">  
                        <img src="img/bank/ici-na.png" class="img-responsive" /> </label> 
                      </div> 
 
                      <div class="col-lg-4 col-xs-6 col-sm-4"> 
                        <label class="radio-inline"><input type="radio" name="optradio">  
                          <img src="img/bank/idb-na.png" class="img-responsive" /> </label> 
                        </div> 
 
                        <div class="col-lg-4 col-xs-6 col-sm-4"> 
                          <label class="radio-inline"><input type="radio" name="optradio">  
                            <img src="img/bank/pnb-na.png" class="img-responsive" /> </label> 
                          </div> 
 
                          <br><br> 
 
                          <div class="col-lg-4 col-xs-6 col-sm-4"> 
                            <label class="radio-inline"><input type="radio" name="optradio">  
                              <img src="img/bank/sbi-na.png" class="img-responsive" /> </label> 
                            </div> 
 
                            <div class="col-lg-4 col-xs-6 col-sm-4"> 
                              <label class="radio-inline"><input type="radio" name="optradio">  
                                <img src="img/bank/swb-na.png" class="img-responsive" /> </label> 
                              </div> 
 
                              <div class="col-lg-4 col-xs-6 col-sm-4"> 
                                <label class="radio-inline"><input type="radio" name="optradio">  
                                  <img src="img/bank/axis.png" class="img-responsive" /> </label> 
                                </div> 
 
                              </div> 
                            </div>   
 
 
 
                            <br> <div class="clearfix"></div>  
                            <div class="row">  
                              <div class="col-lg-12">  
                               <h5>All BANKS</h5> <br> 
                             </div> 
                           </div>  
                           <div class="row">  
                            <div class="col-lg-8">  
                              <select class="form-control"> 
                                <option value="">Select Bank</option> 
                                <option value="UTI-NA">AXIS Bank</option> 
                                <option value="CIT-NA">Citibank</option> 
                                <option value="HDF-NA">HDFC Bank</option> 
                                <option value="ICI-NA">ICICI Bank</option> 
                                <option value="IDB-NA">IDBI Bank</option> 
                              </select> 
                            </div>  
                          </div>  
                          <br> 
                          <div class="row">  
                           <div class="col-lg-12">  
                            <label class="checkbox-inline"><input type="checkbox" value="">QUIKPAY</label><br>  
                            <i>&nbsp;&nbsp;Save this card information to my BookMyShow account and make faster payments.</i> 
                          </div>  
                        </div> 
 
                        <div class="row">  
                          <div class="col-xs-12 clearfix">  
                            <br> 
                            <input type="submit" class="btn btn-danger" value="MAKE PAYMENT" /> 
                            <br> 
                            By clicking "Make Payment" you agree to the terms and conditions 
                          </div>  
                        </div> 
 
 
                      </div>  
                      <!-- Net Div --> 
 
                    </div> 
                  </div> 
 
 
 
 
                </div> 
              </div> 
            </div> 
          </div> 
 
          <!--collapse panel --> 
        </div> <!-- Semi 1 --> 
 
 
 
 
        <div class="col-md-3">  
 
          <div class="row">  
          <div class="booking-info col-lg-12">  
 
          <h5> TICKET SUMMARY </h5>  
            
           <hr> 
            <div>  
              <p> TICKET TYPE:  _____________ </P>  
               
              <p> DATE        : _______    </P>  
               
              <p> PRICE       : _______    </P>  
               
              <p>  QUANTITY   : <select> 
                      <option vaule="0">0</option> 
                      <option vaule="1">1</option> 
                      <option value="2">2</option> 
                      <option value="3">3</option> 
                      <option value="4">4</option> 
                      <option value="5">5</option> 
                      <option value="6">6</option> 
                      <option value="7">7</option> 
                      <option value="8">8</option> 
                      <option value="9">9</option> 
                      <option value="10">10</option> 
                    </select></P> <HR>   
               
              <p> SUB TOTAL        : _______    </P>  
 
 
 
            </div> 
              
           
 
          </div> 
          </div> 
<div class="row">  
          
          <input type="submit" value="PROCEED" class="col-lg-12 btn btn-danger proceed" />  
            </div> 
           
 
 
        </div><!-- Semi 2 --> 
      </div> 
 
    </div> <!--main --> 
 
 
 
 
    <?php include('footer.php'); ?> 
 
 
    <script> 
    $(document).ready(function(){ 
    
    $("#headingOne").click(function(e) 
    { 
      $('#collapseOne').collapse({'toggle': false}); 
      e.preventDefault(); 
     });  
     
      $("#headingTwo").click(function(e) 
      { 
        e.preventDefault(); 
        $('#collapseTwo').collapse({'toggle': false});  
 
 
      }); <?php include('header.php'); ?> 
 
<style>   
.panel-default>.panel-heading { 
  color: #F9F9F9; 
  background-color: #696974; 
  border-color: #ddd; 
  height:50px; 
  padding:15px;  
} 
 
 
.credit 
{  
 
 border: 2px solid;  
 border-color: black;  
 padding:5px; 
 
} 
 
.net 
{  
 
 border: 2px solid;  
 /*border-color: red;*/  
 padding:5px; 
 
} 
.card 
{ 
 background-color:#D0D0E0;  
 padding:15px; 
 width: auto; 
border-radius:15px; 
 
} 
 
.card-container  
{  
 width:50%; 
}  
 
.sideul 
{  
 
  border:2px solid #333; 
  height: 100%; 
  width:auto; 
 
}  
 
.booking-info 
{  
   border:2px solid #696974; 
  height:100%; 
  width:100%;  
}  
 
.proceed  
{  
border:0; 
border-radius:0; 
background-color: #e04f67; 
 
} 
 
.proceed:hover  
{background-color: #fff; 
 color:#e04f67; 
 border:2px solid #e04f67;; 
} 
 
</style> 
 
 
 
<br><br><br><br><br><br> 
<div class="clearfix"></div> 
 
<div class="container"> <!--main --> 
  <div class="row"> 
    <div class="col-md-9"><!-- Semi 1 --> 
 
      <!--collapse panel --> 
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
        <div class="panel panel-default"> 
          <div class="panel-heading" role="tab" id="headingOne"> 
            <h4 class="panel-title"> 
              <a role="button" data-toggle="false" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 
               <span class="glyphicon glyphicon-chevron-down"> </span> Ticket Information 
             </a> 
           </h4> 
         </div> 
         <div id="collapseOne" class="panel-collapse" role="tabpanel" aria-labelledby="headingOne"> 
          <div class="panel-body"> 
 
            <div class="row">  
              <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12"> 
                <div class="table-responsive">  
                  <table class="table table-hover"> 
                    <thead> 
                     <tr> 
                      <th>TICKET TYPE</th> 
                      <th>SALES END</th> 
                      <th>PRICE</th> 
                      <th>FEE</th> 
                      <th>QUANTITY</th> 
                    </tr> 
                  </thead> 
                  <tbody> 
                   <tr> 
                    <td>Mak Slave (Platinum)</td> 
                    <td>Jun 5, 2016</td> 
                    <td>$15.00</td> 
                    <td>$1.37</td> 
                    <td>  
                    <select> 
                      <option vaule="0">0</option> 
                      <option vaule="1">1</option> 
                      <option value="2">2</option> 
                      <option value="3">3</option> 
                      <option value="4">4</option> 
                      <option value="5">5</option> 
                      <option value="6">6</option> 
                      <option value="7">7</option> 
                      <option value="8">8</option> 
                      <option value="9">9</option> 
                      <option value="10">10</option> 
                    </select> 
                  </td> 
                  </tr> 
                  <tr> 
                    <td>Mak (Gold)</td> 
                    <td>Jun 5, 2016</td> 
                    <td>$12.00</td> 
                    <td>$1.29</td> 
                    <td> 
                      <select> 
                      <option vaule="0">0</option> 
                      <option vaule="1">1</option> 
                      <option value="2">2</option> 
                      <option value="3">3</option> 
                      <option value="4">4</option> 
                      <option value="5">5</option> 
                      <option value="6">6</option> 
                      <option value="7">7</option> 
                      <option value="8">8</option> 
                      <option value="9">9</option> 
                      <option value="10">10</option> 
                    </select> 
 
                    </td> 
                  </tr> 
                  <tr> 
                    <td>Mak (Silver)</td> 
                    <td>Jun 5, 2016</td> 
                    <td>$10.00</td> 
                    <td>$1.24</td> 
                    <td> 
                      <select> 
                      <option vaule="0">0</option> 
                      <option vaule="1">1</option> 
                      <option value="2">2</option> 
                      <option value="3">3</option> 
                      <option value="4">4</option> 
                      <option value="5">5</option> 
                      <option value="6">6</option> 
                      <option value="7">7</option> 
                      <option value="8">8</option> 
                      <option value="9">9</option> 
                      <option value="10">10</option> 
                    </select> 
                    </td> 
                  </tr> 
                  <tr> 
                    <td>Mak Slaves</td> 
                    <td>Jun 5, 2016</td> 
                    <td>Free</td> 
                    <td>$0.00</td> 
                    <td> 
                      <select> 
                      <option vaule="0">0</option> 
                      <option vaule="1">1</option> 
                      <option value="2">2</option> 
                      <option value="3">3</option> 
                      <option value="4">4</option> 
                      <option value="5">5</option> 
                      <option value="6">6</option> 
                      <option value="7">7</option> 
                      <option value="8">8</option> 
                      <option value="9">9</option> 
                      <option value="10">10</option> 
                    </select> 
                    </td> 
                  </tr> 
                </tbody> 
              </table> 
            </div> 
          </div> 
        </div> 
 
 
      </div> 
    </div> 
  </div> 
  <div class="panel panel-default"> 
    <div class="panel-heading" role="tab" id="headingTwo"> 
      <h4 class="panel-title"> 
        <a id="r2" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> 
         <span class="glyphicon glyphicon-chevron-down"> </span> Login Option 
       </a> 
     </h4> 
   </div> 
   <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo"> 
    <div class="panel-body"> 
      <form class="form-inline"> 
       <div class="form-group"> 
 
         <input type="text" class="form-control" id="email id" placeholder="EMAIL ADDRESS" width="80%;"> 
       </div> 
       <div class="form-group"> 
 
        <input type="email" class="form-control" id="mobile" placeholder="MOBILE NUMBER"> 
      </div> 
      <button type="submit" class="btn btn-danger">Send invitation</button> 
    </form> 
  </div> 
</div> 
</div> 
<div class="panel panel-default"> 
  <div class="panel-heading" role="tab" id="headingThree"> 
    <h4 class="panel-title"> 
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> 
       <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"> </span> Payment Option 
     </a> 
   </h4> 
 </div> 
 <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree"> 
  <div class="panel-body"> 
 
    <div class="row"> 
      <div class="col-xs-12 col-md-4 col-lg-3"> 
        <ul class="nav nav-pills nav-stacked sideul"> 
          <li role="payment"><a id="cred" href="#credit">CREDIT/DEBIT CARD</a></li> 
          <li role="payment"><a id="nett" href="#net">NET BANKING</a></li> 
        </ul>  
      </div> 
      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9"> 
 
        <div  id="credit" class="credit">   
          Enter your Card details  
          <br>  
          <div class="card">  
            <div class="row"> 
              <div class="col-sm-12 col-xs-12 col-md-8 "> 
                Card Number<br>    
                <input type="text" class="form-control " id="cardnumber" placeholder="ENTER YOUR CARD NUMBER" /><br> 
                <input type="text" class="form-control" id="nameon" placeholder="NAME ON THE CARD" /> 
              </div> 
            </div> 
            <br>  
 
            <div class="row"> 
              <div class="col-lg-6 col-xs-8 col-sm-6"> 
                Expiry<br>  
 
                <input type="text" class="col-xs-4 col-md-4 form-control" id="mm" placeholder="MM" style="width:100px;" /> 
 
 
 
                <input style="width:100px;" type="text" class="col-xs-4 col-md-4 form-control" id="yy" placeholder="YY">          
              </div> 
 
              <div class="col-lg-6 col-xs-4 col-sm-6 col-md-4"> 
                Cvv <br> 
                <input type="text" class="col-xs-4 form-control" id="yy" placeholder="Cvv">  
              </div> 
            </div> 
 
 
          </div>  
 
          <br> 
          <div class="clearfix row">   
            <div class="col-xs-12">  
              <input type="checkbox"/> QUIKPAY<br>  
              <i>&nbsp;&nbsp;Save this card information to my BookMyShow account and make faster payments.</i> 
            </div>  
          </div> 
 
          <div class="row">  
            <div class="col-xs-12 clearfix">  
              <br> 
              <input type="submit" class="btn btn-danger" value="MAKE PAYMENT" /> 
              <br> 
              By clicking "Make Payment" you agree to the terms and conditions 
            </div>  
          </div> 
 
        </div>  
 
        <!-- Net Div --> 
        <div  id="net" class="net">  
         <b> <h4>Pay using Net Banking </h4> <b><br>  
 
          <div class="row">   
            <div class="col-lg-12">   
              <div class="col-lg-4 col-xs-6 col-sm-4"> 
 
                <label class="radio-inline"><input type="radio" name="optradio">  
                  <img src="img/bank/axis.png" class="img-responsive" /> </label> 
                </div> 
 
                <div class="col-lg-4 col-xs-6 col-sm-4"> 
                  <label class="radio-inline"><input type="radio" name="optradio">  
                    <img src="img/bank/cit-na.png" class="img-responsive" /> </label> 
 
                  </div> 
 
 
                  <div class="col-lg-4 col-xs-6 col-sm-4"> 
                    <label class="radio-inline"><input type="radio" name="optradio">  
                      <img src="img/bank/hdf-na.png" class="img-responsive" /> </label> 
                    </div> 
 
                    <br> <br> 
 
                    <div class="col-lg-4 col-xs-6 col-sm-4"> 
                      <label class="radio-inline"><input type="radio" name="optradio">  
                        <img src="img/bank/ici-na.png" class="img-responsive" /> </label> 
                      </div> 
 
                      <div class="col-lg-4 col-xs-6 col-sm-4"> 
                        <label class="radio-inline"><input type="radio" name="optradio">  
                          <img src="img/bank/idb-na.png" class="img-responsive" /> </label> 
                        </div> 
 
                        <div class="col-lg-4 col-xs-6 col-sm-4"> 
                          <label class="radio-inline"><input type="radio" name="optradio">  
                            <img src="img/bank/pnb-na.png" class="img-responsive" /> </label> 
                          </div> 
 
                          <br><br> 
 
                          <div class="col-lg-4 col-xs-6 col-sm-4"> 
                            <label class="radio-inline"><input type="radio" name="optradio">  
                              <img src="img/bank/sbi-na.png" class="img-responsive" /> </label> 
                            </div> 
 
                            <div class="col-lg-4 col-xs-6 col-sm-4"> 
                              <label class="radio-inline"><input type="radio" name="optradio">  
                                <img src="img/bank/swb-na.png" class="img-responsive" /> </label> 
                              </div> 
 
                              <div class="col-lg-4 col-xs-6 col-sm-4"> 
                                <label class="radio-inline"><input type="radio" name="optradio">  
                                  <img src="img/bank/axis.png" class="img-responsive" /> </label> 
                                </div> 
 
                              </div> 
                            </div>   
 
 
 
                            <br> <div class="clearfix"></div>  
                            <div class="row">  
                              <div class="col-lg-12">  
                               <h5>All BANKS</h5> <br> 
                             </div> 
                           </div>  
                           <div class="row">  
                            <div class="col-lg-8">  
                              <select class="form-control"> 
                                <option value="">Select Bank</option> 
                                <option value="UTI-NA">AXIS Bank</option> 
                                <option value="CIT-NA">Citibank</option> 
                                <option value="HDF-NA">HDFC Bank</option> 
                                <option value="ICI-NA">ICICI Bank</option> 
                                <option value="IDB-NA">IDBI Bank</option> 
                              </select> 
                            </div>  
                          </div>  
                          <br> 
                          <div class="row">  
                           <div class="col-lg-12">  
                            <label class="checkbox-inline"><input type="checkbox" value="">QUIKPAY</label><br>  
                            <i>&nbsp;&nbsp;Save this card information to my BookMyShow account and make faster payments.</i> 
                          </div>  
                        </div> 
 
                        <div class="row">  
                          <div class="col-xs-12 clearfix">  
                            <br> 
                            <input type="submit" class="btn btn-danger" value="MAKE PAYMENT" /> 
                            <br> 
                            By clicking "Make Payment" you agree to the terms and conditions 
                          </div>  
                        </div> 
 
 
                      </div>  
                      <!-- Net Div --> 
 
                    </div> 
                  </div> 
 
 
 
 
                </div> 
              </div> 
            </div> 
          </div> 
 
          <!--collapse panel --> 
        </div> <!-- Semi 1 --> 
 
 
 
 
        <div class="col-md-3">  
 
          <div class="row">  
          <div class="booking-info col-lg-12">  
 
          <h5> TICKET SUMMARY </h5>  
            
           <hr> 
            <div>  
              <p> TICKET TYPE:  _____________ </P>  
               
              <p> DATE        : _______    </P>  
               
              <p> PRICE       : _______    </P>  
               
              <p>  QUANTITY   : <select> 
                      <option vaule="0">0</option> 
                      <option vaule="1">1</option> 
                      <option value="2">2</option> 
                      <option value="3">3</option> 
                      <option value="4">4</option> 
                      <option value="5">5</option> 
                      <option value="6">6</option> 
                      <option value="7">7</option> 
                      <option value="8">8</option> 
                      <option value="9">9</option> 
                      <option value="10">10</option> 
                    </select></P> <HR>   
               
              <p> SUB TOTAL        : _______    </P>  
 
 
 
            </div> 
              
           
 
          </div> 
          </div> 
<div class="row">  
          
          <input type="submit" value="PROCEED" class="col-lg-12 btn btn-danger proceed" />  
            </div> 
           
 
 
        </div><!-- Semi 2 --> 
      </div> 
 
    </div> <!--main --> 
 
 
 
 
    <?php include('footer.php'); ?> 
 
 
    <script> 
    $(document).ready(function(){ 
    
    $("#headingOne").click(function(e) 
    { 
      $('#collapseOne').collapse({'toggle': false}); 
      e.preventDefault(); 
     });  
     
      $("#headingTwo").click(function(e) 
      { 
        e.preventDefault(); 
        $('#collapseTwo').collapse({'toggle': false});  
 
 
      }); 
 
      $("#headingTwo").click(function(){ 
        $("#r2").addAttr({'data-toggle':'collapsing'}); 
    }); 
 
    $('#collapseThree').collapse({'toggle': false}); 
 
 
 
 
         $('#credit').show(); 
      $('#net').hide(); 
      $("#cred").click(function(e){ 
        e.preventDefault(); 
        $('#credit').show(); 
        $('#net').hide(100); 
      }); 
      $("#nett").click(function(e){ 
        e.preventDefault(); 
        $('#net').show(); 
 
        $('#credit').hide(); 
      }); 
    }); 
    </script>
 
      $("#headingTwo").click(function(){ 
        $("#r2").addAttr({'data-toggle':'collapsing'}); 
    }); 
 
    $('#collapseThree').collapse({'toggle': false}); 
 
 
 
 
         $('#credit').show(); 
      $('#net').hide(); 
      $("#cred").click(function(e){ 
        e.preventDefault(); 
        $('#credit').show(); 
        $('#net').hide(100); 
      }); 
      $("#nett").click(function(e){ 
        e.preventDefault(); 
        $('#net').show(); 
 
        $('#credit').hide(); 
      }); 
    }); 
    </script>
