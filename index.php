<title>Home</title>
<?php 
ini_set( 'error_reporting', E_ALL);
ini_set( 'display_errors', true );
include 'public/loader.php';
//Configuration for the images to be displayed at the home page
 $homeImages = array('1' => 'public/images/21.jpg','public/images/mario_mushroom.jpg','public/images/minimal.jpg','public/images/pencils.jpg','public/images/board_books.jpg','public/images/school_winter.jpg','public/images/girl_brunette.jpg');
 $randNumber = mt_rand(1,7);

 ?>
 <div class="main-container">
 	<div class="row">
 		<div class="col s12 m12 l12" id="home_bg_1" style="background-image: url('<?php echo "$homeImages[$randNumber]"; ?>');height: 530px;background-size: cover;background-position: all;">
 			
 		</div>
 		<div class="col s12 m10 l10 offset-m1 offset-l1">
 			<div class="card-panel col s12" id="home_desc_1">
 				<div class="col s4 m4 l4">
 					<img src="public/images/searcher.svg" class="responsive-img explorer">
 					<h5 style="font-size: 14px;padding-left: 5px;padding-top: 5px;">
 						Explore over 1000+ tutorials to enhance your knowledge
 					</h5>
 				</div>
 				<div class="col s4 m4 l4">
 					<img src="public/images/phone-call.svg" class="responsive-img explorer">
 					<h5 style="font-size: 14px;padding-left: 5px;padding-top: 5px;">
 						Access Tutorials from any device anywhere at anytime
 					</h5>
 				</div>
 				<div class="col s4 m4 l4">
 					<img src="public/images/presentation.svg" class="responsive-img explorer">
 					<h5 style="font-size: 14px;padding-left: 5px;padding-top: 5px;">
 						Register for courses and have a lifetime access to videos
 					</h5>
 				</div>
 			</div>
 		</div>
 		<div class="col s12 m10 l10 offset-l1 offset-m1">
 			<h5 class="left-align">Latest Courses</h5>
 			<div class="col s12 m3 l3">
 				<div class="card-panel"></div> 
 			</div>
 			<div class="col s12 m3 l3">
 				<div class="card-panel"></div>
 			</div>
 			<div class="col s12 m3 l3">
 				<div class="card-panel"></div>
 			</div>
 			<div class="col s12 m3 l3">
 				<div class="card-panel"></div>
 			</div>
 		</div>
 	</div>
 </div>

<!-- Modal for login page -->
 <!-- Modal Structure -->
  <div id="login" class="modal" style="width: 35%;">
    <div class="modal-content">
      <form>
      	<div class="input-field col s12">
      		<i class="material-icons prefix">email</i>
      		<input type="email" name="email" id="email"/>
      		<label for="email">Email</label>
      	</div>
      	<div class="input-field col s12">
      		<i class="material-icons prefix">email</i>
      		<input type="password" name="password" id="password"/>
      		<label for="password">Password</label>
      	</div>
      	<div class="input-field col s12">
      		<button type="submit" name="submit" class="btn indigo accent-4" style="width: 100%;text-transform: capitalize;">Login</button>
      	</div>
      	<h5 style="margin-top: 10px;font-size: 13px;margin-left: 2px;text-align: center;" class="indigo-text text-accent-2">
      	    or <a href="" style="font-size: 15px;">Forgot Password </a>
      	</h5>
      	<h5 style="margin-top: 10px;font-size: 13px;margin-left: 2px;" class="indigo-text text-accent-2">
      		By Signing up, you agree to our <a href="" style="text-decoration: underline;">Terms Of Use</a> and <a href="" style="text-decoration: underline;"> Privacy Policy</a>
      	</h5>
      </form>
    </div>
    <div class="modal-footer" style="text-align: center;padding: 5px 0 15px 0;">
       Don't Have an accounts? <a href="#signup" id="hasSignup" class="modal-trigger btn indigo accent-4 waves-effect waves-light" style="text-transform: capitalize;">Sign Up</a>
    </div>
  </div>

 <!-- Modal for login page -->
 <!-- Modal Structure -->
  <div id="signup" class="modal" style="max-width:32%;width: 32%;max-height: 98%;">
    <div class="modal-content">
      <form method="post" action="index.php">
    <!--   	<h5 class="center-align">Sign Up</h5>
      	<div class="divider"></div> -->
        <div class="input-field col s12" style="margin-top: 20px;">
        	<i class="material-icons prefix">supervisor_account</i>
        	<input type="text" name="fullname" class="fullname" id="fullname" required="required"/>
        	<label for="fullname">Full Name</label>
        </div>
      	<div class="input-field col s12">
      		<i class="material-icons prefix">email</i>
      		<input type="email" name="email" id="email" required="required"/>
      		<label for="email">Email</label>
      	</div>
      	<div class="input-field col s12">
      		<i class="material-icons prefix">email</i>
      		<input type="password" name="password" id="password" required="required"/>
      		<label for="password">Password</label>
      	</div>
      	<div class="input-field col s12">
      		<i class="material-icons prefix">book</i>
      		<input type="text" name="course" id="course" required="required"/>
      		<label for="course">Course Of Study</label>
      	</div>
      	<div class="input-field col s12">
      		<button type="submit" name="signup" class="btn indigo accent-4 waves-effect waves-light" style="width: 100%;text-transform: capitalize;">Sign Up</button>
      	</div>
      	<h5 style="margin-top: 10px;font-size: 13px;" class="indigo-text text-accent-2">
      		By Signing up, you agree to our <a href="" style="text-decoration: underline;">Terms Of Use</a> and <a href="" style="text-decoration: underline;"> Privacy Policy</a>
      	</h5>
      </form>
    </div>
    <div class="modal-footer" style="text-align: center;padding: 5px 0 15px 0;">
     Already Have an accounts? <a href="#login" id="hasLogin" class="modal-trigger btn indigo accent-4 waves-effect waves-light" style="text-transform: capitalize;">Login</a>
    </div>
  </div>
  <?php

if (isset($_POST['signup'])) {
	$fullname = $_POST['fullname'];
	$email    = $_POST['email'];
	$password = md5($_POST['password']);
	$course   = $_POST['course'];

  $checker = $auth->createIfNotExist($mysqli);
	$signup = $auth->SignUp($mysqli,$fullname,$email,$password,$course);
} 
 ?>