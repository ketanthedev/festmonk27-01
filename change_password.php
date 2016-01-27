<?php include('header.php'); ?>

<section id="hero" class="login">
	<div class="container">
    	<div class="row">
        	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            	<div id="login">
            		<div class="text-center"><img src="img/logo_sticky.png" alt="" data-retina="true" ><p>Change Password</p></div>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label>Old Password</label>
                            <input type="password" name="old_password" class=" form-control" id="old_password" placeholder="Old Password">
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="new_password" class=" form-control" id="password1" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" name="confirm_password" class=" form-control" id="password2" placeholder="Confirm password">
                        </div>
                        <div id="pass-info" class="clearfix"></div>
                        <button class="btn_full">Change password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>