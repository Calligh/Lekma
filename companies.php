<?php 
session_start();
include 'public/loader.php';
include 'public/navbar.php';
$user_session_id = $_SESSION['data_id'];
 ?>
 <div id="dashboard">
 	<div class="row">
 		<div class="col s2 m2 l2">
 			<?php include 'public/sidenav.php' ?>
 		</div>
 		<div class="col s8 m8 l8 offset-s1 offset-m1 offset-l1">
 			<!-- Main preloader -->
	        <div class="col s2 m2 l2 offset-s5 offset-m5 offset-l5" id="lazy-loader">
	          <div class="preloader-container" style="position: fixed;width: 100%;height: 100%;">
	                <div class="preloader-wrapper small active" id="preload" style="position: absolute;top: 35%;">
	                  <div class="spinner-layer spinner-blue-only">
	                    <div class="circle-clipper left">
	                      <div class="circle"></div>
	                    </div><div class="gap-patch">
	                      <div class="circle"></div>
	                    </div><div class="circle-clipper right">
	                      <div class="circle"></div>
	                    </div>
	                  </div>
	                </div>
	            </div>
	        </div>
 			<div id="main-container">
 				<!-- show if table is empty -->
				<a href="#registration" class="modal-trigger" data-target="registration">
					<div class="col s4 m4 l4 offset-s4 offset-m4 offset-l4  waves-effect waves-ripple" id="showEmpty">
						<div class="input-field col s12">
							<div class="image-panel">
								<img src="public/images/online-store.svg" class="img-show">
								<i class="material-icons vu">verified_user</i>
							</div>
							<div class="list">
								<h6 class="ts">Create A Company</h6>
							</div>
						</div>
						<div class="input-field col s12">
							<div class="divider"></div>
							<i class="material-icons st">playlist_add</i>
						</div>
					</div>
				</a>
				<div class="col s4 m4 l4 offset-s4 offset-m4 offset-l4">
					<div class="depict">
						<i class="material-icons">location_city</i>
						<p>
							<h5 class="center-align">You haven't created any company yet.</h5>
							<h6 class="center-align">Created companies will show up here.</h6>
						</p>
					</div>
				</div>
 			</div>
			
 		</div>
 		<!-- configuring the floating action button -->
			<a href="#registration" id="btn-float" class="btn-floating btn-large waves-effect waves-light indigo accent-4 z-depth-1 modal-trigger" data-target="registration">
				<i class="material-icons">playlist_add</i>
			</a>
 	</div>
 </div>
 <!-- Modal Configs -->
 <div id="registration" class="modal" style="box-shadow: 0 0 8px rgba(0,0,0,0.65);max-height: 90% !important;">
    <div class="modal-content">
      <div class="row">
      	<div class="col s12 m12 l12">
      		<form action="">
		      	  	<ul class="tabs tabs-fixed-width tab-demo">
					    <li class="tab"><a class="active fs" href="#test1">Company Information</a></li>
					    <li class="tab"><a href="#test2" class="fs">Location</a></li>
					 </ul>
					  <div id="test1" class="col s12 m12 l12">
					  	<div class="input-field col s12 m6 l6">
					  		<i class="material-icons prefix">view_carousel</i>
					  		<input type="text" name="division_number" id="division_number"/>
					  		<label for="division_number">Division Number</label>
					  	</div>
					  	<div class="input-field col s12 m6 l6">
					  		<i class="material-icons prefix">account_balance</i>
					  		<input type="text" name="block_number" id="block_number"/>
					  		<label for="block_number">Block Number</label>
					  	</div>
					  	<div class="input-field col s12 m6 l6">
					  		<i class="material-icons prefix">dialpad</i>
					  		<input type="text" name="number" id="number"/>
					  		<label for="number">Number</label>
					  	</div>
					  	<div class="input-field col s12 m6 l6">
					  		<i class="material-icons prefix">store</i>
					  		<input type="text" name="business_name" id="business_name"/>
					  		<label for="business_name">Business Name</label>
					  	</div>
					  	<div class="input-field col s12 m6 l6">
					  		<i class="material-icons prefix">location_on</i>
					  		<input type="text" name="address" id="address"/>
					  		<label for="address">Business Address</label>
					  	</div>
					  	<div class="input-field col s12 m6 l6">
					  		<i class="material-icons prefix">email</i>
					  		<input type="email" name="email" id="email"/>
					  		<label for="email">Email</label>
					  	</div>
					  	<div class="input-field col s12 m6 l6">
					  		<i class="material-icons prefix">phone_msg</i>
					  		<input type="number" name="phone_number" id="phone_number"/>
					  		<label for="phone_number">Phone Number</label>
					  	</div>
					  	<div class="input-field col s12 m6 l6">
					  		<i class="material-icons prefix">person_pin</i>
					  		<input type="text" name="firstname" id="firstname"/>
					  		<label for="firstname">First Name</label>
					  	</div>
					  	<div class="input-field col s12 m6 l6">
					  		<i class="material-icons prefix">person_pin</i>
					  		<input type="text" name="lastname" id="lastname"/>
					  		<label for="lastname">Last Name</label>
					  	</div>
					  	<div class="input-field col s12 m6 l6">
					  		<i class="material-icons prefix">person_pin</i>
					  		<input type="text" name="othername" id="othername"/>
					  		<label for="othername">Other Name</label>
					  	</div>
					  	<div class="input-field col s12 m6 l6">
					  		<i class="material-icons prefix">textsms</i>
					  		<input type="text" name="home_address" id="home_address"/>
					  		<label for="home_address">Home Address</label>
					  	</div>
					  	<div class="input-field col s12 m6 l6">
					  		<i class="material-icons prefix">textsms</i>
					  		<input type="text" name="zonal_council" id="zonal_council"/>
					  		<label for="zonal_council">Zonal Council</label>
					  	</div>
					  	<div class="input-field col s12 m6 l6">
					  		<i class="material-icons prefix">beenhere</i>
					  		<input type="text" name="house_number" id="house_number"/>
					  		<label for="house_number">House Number</label>
					  	</div>
					  	<div class="input-field col s12 m6 l6">
					  		<i class="material-icons prefix">directions_bus</i>
					  		<input type="text" name="street_name" id="street_name"/>
					  		<label for="street_name">Street Name</label>
					  	</div>

					  </div>
					  <div id="test2" class="col s12 m12 l12">
					  	 <h3>My Google Maps Demo</h3>
						    <div id="map" style="width: 400px;height: 400px;"></div>
						    <script>
						      function initMap() {
						        var uluru = {lat: -25.363, lng: 131.044};
						        var map = new google.maps.Map(document.getElementById('map'), {
						          zoom: 4,
						          center: uluru
						        });
						        var marker = new google.maps.Marker({
						          position: uluru,
						          map: map
						        });
						        google.maps.event.addListener(map, "rightclick", function(event) {
								    var lat = event.latLng.lat();
								    var lng = event.latLng.lng();
								    // populate yor box/field with lat, lng
								    alert("Lat=" + lat + "; Lng=" + lng);
								});

						      }
						    </script>
						    <script async defer
							  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYRLTmNuQtYQrbp7PSFQeEetlDFjl52GI&callback=initMap">
							</script>
					  </div>
		      	  </form>
      	</div>
      </div>
    </div>
    <div class="modal-footer">
      <a  class="modal-action modal-close waves-effect waves-ripple btn-flat fs indigo-text text-accent-4">Cancel</a>
      <button  class="waves-effect waves-light btn-flat fs" disabled="disabled">Save</button>
    </div>
  </div>
  <!-- 	<div class="input-field col s6 m6 l6">
		      		<i class="material-icons prefix">view_carousel</i>
		      		<input type="text" class="division_number" id="division_number"/>
		      		<label for="division_number">Division Number</label>
		      	</div>
		      	<div class="input-field col s6 m6 l6">
		      		<i class="material-icons prefix">view_carousel</i>
		      		<input type="text" class="division_number" id="division_number"/>
		      		<label for="division_number">Division Number</label>
		      	</div> -->