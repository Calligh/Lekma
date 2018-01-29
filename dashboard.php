<?php 
session_start();
include 'public/loader.php';
include 'public/navbar.php';

//Getting the user id for the activated session
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
          <div class="col s12 m6 l6">
          <div class="card-panel col s12 waves-effect waves-block waves-light" id="total_companies">
                 <!--  <i class="material-icons total_img">supervisor_account</i> -->
                 <span class="total_img"><img src="public/images/store.svg" alt="Registered Users" class="responsive-img show"></span>
                  <span class="indicator">Registered Companies</span>
                  <div class="divider"></div>
                  <h5 class="grey-text text-darken-2 small-text">Total Number Of Companies<span class="chip right"><?php echo "0";?></span></h5>
              </div>
          </div>
           <div class="col s12 m6 l6">
              <div class="card-panel col s12 waves-effect waves-block waves-light" id="total_companies">
                 <!--  <i class="material-icons total_img">supervisor_account</i> -->
                 <span class="total_img"><img src="public/images/finances.svg" alt="Registered Users" class="responsive-img show"></span>
                  <span class="indicator">Businesses</span>
                  <div class="divider"></div>
                  <h5 class="grey-text text-darken-2 small-text">Number Of Businesses<span class="chip right"><?php echo "0";?></span></h5>
              </div>
          </div>
          <div class="col s12 m6 l6">
              <div class="card-panel col s12 waves-effect waves-block waves-light" id="total_companies">
                 <!--  <i class="material-icons total_img">supervisor_account</i> -->
                 <span class="total_img"><img src="public/images/molecule.svg" alt="Registered Users" class="responsive-img show"></span>
                  <span class="indicator">Property Rates</span>
                  <div class="divider"></div>
                  <h5 class="grey-text text-darken-2 small-text">Number of Property Rates<span class="chip right"><?php echo "0";?></span></h5>
              </div>
          </div>
           <div class="col s12 m6 l6">
              <div class="card-panel col s12 waves-effect waves-block waves-light" id="total_companies">
                 <!--  <i class="material-icons total_img">supervisor_account</i> -->
                 <span class="total_img"><img src="public/images/transaction.svg" alt="Registered Users" class="responsive-img show"></span>
                  <span class="indicator">Transactions</span>
                  <div class="divider"></div>
                  <h5 class="grey-text text-darken-2 small-text">Daily Transactions<span class="chip right"><?php echo "GHS1000";?></span></h5>
              </div>
          </div>
       </div>
 		</div>
 <!--    <style>
      #overlay{
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 999;
        background-color: rgba(255,255,255,0.85);
        overflow: hidden;
      }
      #preload{
        position: absolute;
        left: 50%;
        top: 50%;
      }
    </style>
    <div id="overlay">
      <div class="preloader-wrapper small active" id="preload">
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
    </div> -->

 	</div>
 </div>