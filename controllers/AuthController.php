<?php
 /**
  * This Controller contains the functions 
  *  - For the registration to the database 
  *  - And or the sign in communication
  */
  class AuthController extends SignupModel
  {
  	public $fullname;
  	public $email;
  	public $password;
  	public $course;

  	//Function for the signing up configurations
  	public function SignUp($mysqli,$fullname,$email,$password,$course){
  		$query = "INSERT INTO ldb_signup_tb(fullname,email,password,course,profile,created_at,updated_at) VALUES('$fullname','$email','$password','$course','student',NOW(),NOW())";
  		$results = $mysqli->query($query);
  		if ($results) {
  			?>
  			<script type="text/javascript">
  				var $toast = $('<span>Data Saved Successfully</span>').add($('<button class="btn-flat toast-action">Ok</button>'));
  				Materialize.toast($toast,5000);
  			</script>
  			<?php
  		}
  		else{
  			?>
  			<script type="text/javascript">
  				var $toast = $('<span>An Error Occurred</span>').add($('<button class="btn-flat toast-action">Ok</button>'));
  				Materialize.toast($toast,5000);
  			</script>
  			<?php
  		}
  	}

    //Function for the login configurations
    public function LogIn($mysqli,$username){
      $query = "SELECT * FROM admin WHERE username = '$username'";
      $results = $mysqli->query($query);
      return $results;
    }

  } 
 ?>