<!-- Header Start -->
<?php include 'header.php'; ?>
<!-- Header End -->
<div class="container text-center p-5">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 mx-auto mt-5">
        <h1 class="text-white">
          <span class="font-weight-semi-bold text-dark">Contact Us</span>
        </h1>
      </div>
      <!-- End Title -->
    </div>
 <div class="container">
<hr>

<div class="auth-wrapper aut-bg-img-side cotainer-fiuid align-items-stretch m-5">
        <div class="row align-items-center w-100 align-items-stretch bg-white">
            <div class="d-none d-lg-flex col-md-6 aut-bg-img d-md-flex justify-content-center content content--side mt-5">
    		    <!--<div class="poster" style="background-image:url(background.jpg)"></div>-->
    		    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.757481897355!2d85.1331414150179!3d25.61297378370446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed584491f47363%3A0xc07e7406ff80c028!2sBihar%20Industries%20Association!5e0!3m2!1sen!2sin!4v1602156803401!5m2!1sen!2sin"  frameborder="0" style="border:0 ; width: 100%;height: 70%" ></iframe>

    			</div>

                <div class="col-md-6 align-items-stret h-100 ad-flex justify-content-center content content--side">
                    <div class="head-block">
                        <!--<center>
                        	<img src="https://www.vereda.co.in/img/logo.png" alt="" class="img-fluid mb-4 col-8"></center>-->
                        <h5 class="mb-3 f-w-400">Let us know what are you looking for?</h5>
                    </div>
        				<form class="form m-0" action="" method="POST">
        					<div class="form__item">
        						<label class="form__label" for="email">Full Name*</label>
        						<input class="form__input form-control" type="text" name="name" id="name" required>
        					</div>
        					<div class="form__item">
        						<label class="form__label" for="Phone">Phone</label>
        						<input class="form__input form-control" type="Phone" name="Phone" id="Phone" required>
        					</div>
        					<div class="form__item">
        						<label class="form__label" for="email">Email Address*</label>
        						<input class="form__input form-control" type="email" name="email" id="email" required>
        					</div>
                            
                            <div class="form__item">
                            <label for="exampleFormControlTextarea2">Message</label>
                            <textarea class="form-control rounded" id="exampleFormControlTextarea2" rows="5"></textarea>
                            </div>

        					<!--<div class="form__item">
        						<label class="form__label" for="password">Password*</label>
        						<div class="form__input-wrap">
        							<input class="form__input form-control" type="password" name="password" id="password" required>
        							<p class="form__password-strength" id="strength-output"></p>
        						</div>
        					</div>-->
        					<div class="form__item form__item--actions">
        						
        						<button class="form__button btn btn-primary shadow-2 text-center" type="button" name="send" id="send" >Send Message</button>
        					</div>
        				</form>

							<div id="snackbar" class='alert alert-danger' hidden>Please fill the details</div>
                </div>
            </div>
            <div class="row">
            	
            </div>
        </div>
</div>




<!-- Footer Section Start -->
<?php include 'Footer.php'; ?>
<!--Footer End  -->