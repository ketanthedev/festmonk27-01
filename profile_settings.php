<?php include('header.php'); ?>

<section id="hero" class="login">
	<div class="container">
    	<div class="row">
        	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            	<div id="login">
            		<div class="text-center"><img src="img/logo_sticky.png" alt="" data-retina="true" ><p>My Profile</p></div>
                    <hr>
                    <form>
                        <div class="form-group">
                        	<label>Name</label>
                            <input type="text" class=" form-control"  placeholder="Name">
                        </div>
                        <div class="form-group">
                        	<label>Email</label>
                            <input type="email" class=" form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                        	<label>Mobile</label>
                            <input type="text" name="mobile" class=" form-control" placeholder="Mobile">
                        </div>
                        <div class="form-group">
                        	<label>City</label>
                            <select id="quantity" name="quantity" class="form-control" >
                                <option value="1">city1</option>
                                <option value="2">city2</option>
                                <option value="1">city3</option>
                                <option value="2">city4</option>
                            </select>
                        </div>
                        <div id="pass-info" class="clearfix"></div>
                        <button class="btn_full">Update profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>