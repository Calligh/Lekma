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
 			<div class="card-panel">
				 <table class="responsive-table bordered highlight">
			        <thead>
			          <tr>
			              <th>Permit No.</th>
			              <th>Business Name</th>
			              <th>Business Type</th>
			              <th>Category</th>
			              <th>Cur.Fee</th>
			              <th>Arrears</th>
			              <th>Payments</th>
			              <th>Out.Balance</th>
			          </tr>
			        </thead>

			        <tbody id="jetsContent">
			          <tr>
			            <td>TES19417004002</td>
			            <td>Yehowa Adom Cold ...</td>
			            <td>Cold Store</td>
			            <td>Cold Store</td>
			            <td>Cold Store</td>
		                <td>Cold Store</td>
		                <td>Cold Store</td>
		                <td>Cold Store</td>
			          </tr>
			          <tr>
			            <td>Alan</td>
			            <td>Jellybean</td>
			            <td>$3.76</td>
			          </tr>
			          <tr>
			            <td>Jonathan</td>
			            <td>Lollipop</td>
			            <td>$7.00</td>
			          </tr>
			        </tbody>
			      </table>
			      
 			</div>
 		</div>
 	</div>
 </div>
