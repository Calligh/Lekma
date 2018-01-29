<?php
  session_start();
  include 'public/loader.php';
  unset($_SESSION['data_id']);
  if (isset($_POST['signIn'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $entypepass = md5($password);
    //create a table if not exists
    $query_create = $auth->createAdminIfNotExist($mysqli);
    $query_fetch = $auth->LogIn($mysqli,$username);
    $fetch_results = $query_fetch->fetch_array(MYSQLI_BOTH);

    $uid   = $fetch_results['id'];
    $comp_username = $fetch_results['username'];
    $comp_password = $fetch_results['password'];
    if ($comp_username == $username && $comp_password == $entypepass) {
       session_regenerate_id(true);
       $_SESSION['data_id'] = $uid;
       session_commit();
       ?>
       <script>
          setTimeout(function() {
            $("div#preloader").css({"visibility":"visible","opacity":"1","transition":"all 0.5s ease-in-out"});
            $("#logInForm").css({"opacity":"0.5","transition":"all 0.6s ease-in-out"});
            $("button[type='submit']").prop("disabled",true);
             }, 10);
             setTimeout(function() {
              window.location = "dashboard";
             }, 3800);
       </script>
       <?php
    }else if($comp_username != $username && $comp_password != $password){
      ?>
      <script>
        setTimeout(function() {
            $("div#preloader").css({"visibility":"visible","opacity":"1","transition":"all 0.5s ease-in-out"});
            $("#logInForm").css({"opacity":"0.5","transition":"all 0.6s ease-in-out"});
            $("button[type='submit']").prop("disabled",true);
             }, 10);
        setTimeout(function() {
          var $toast = $('<span>Invalid Username Or Password</span>').add($('<button class="btn-flat toast-action"><i class="material-icons">close</i></button>'));
          Materialize.toast($toast,4000);
        }, 3500);
        setTimeout(function() {
          $("div#preloader").css({"visibility":"hidden","opacity":"0","transition":"all 0.5s ease-in-out"});
            $("#logInForm").css({"opacity":"1","transition":"all 0.6s ease-in-out"});
            $("button[type='submit']").prop("disabled",false);
         },4200);
      </script>
      <?php
    }
  }
 ?>
<div class="login">
  <div class="row">
    <div class="container" id="cont_body123">
      <div class="col s12 m8 l8 offset-m2 offset-l2 card-panel z-depth-3" style="top: 150px;position: relative;padding-bottom: 20px;padding-top: 10px;">
        <!-- preloader display here -->
          <div class="progress" id="preloader" style="background-color:#fff3e0; ">
            <div class="indeterminate indigo accent-4"></div>
          </div>
        <form method="post" id="logInForm">
          <div class="input-field col s12" id="pad-10">
            <i class="material-icons prefix">supervisor_account</i>
            <input type="text" class="user" name="username" id="username" required="required" />
            <label for="username">Username</label>
          </div>
          <div class="input-field col s12" id="pad-10">
            <i class="material-icons prefix">lock</i>
            <input type="password" class="password" name="password" id="password" required="required" />
            <label for="password">Passcode</label>
          </div>
         <!--  <div class="input-field col s12">
            <input type="checkbox" name="remember_me" value="remember-me" class="checkbox-indigo filled-in" id="remember_me"/>
            <label for="remember_me">Remember Me</label>
          </div> -->
          <div class="input-field col s12" id="pad-10">
            <button type="submit" name="signIn" class="btn indigo accent-4 waves-effect waves-light darken-4" id="signIn" style="text-transform: capitalize;width: 100%;">Log In</button>
          </div>
        </form>
      </div>
    </div>
  </div>
 </div>
 <div class="overlay">
 </div>
<script type="text/javascript">
  $(document).ready(function(){
    // if (localStorage.usr && localStorage.usr != '' && localStorage.pass && localStorage.pass != ''){
    //     $('input#username').val(localStorage.usr);
    //     $("input#password").val(localStorage.pass);
    //   }
    //   else{
    //     $('input#username').val('');
    //     $('input#password').val('');
    //   }
    // $("button#signIn").click(function(){
    //    //Using session storage for some effects
    //   localStorage.usr = $("input#username").val();
    //   localStorage.pass = $("input#password").val();
    // });
   
    //Using LocalStorage for remember me
     if (localStorage.chkbx && localStorage.chkbx != '') {
            $('input#remember_me').attr('checked', 'checked');
            $('input#username').val(localStorage.username);
            $('input#password').val(localStorage.password);
        } else {
            $('input#remember_me').removeAttr('checked');
            $('input#username').val('');
            $('input#password').val('');
        }
    $("input#remember_me").click(function(){
      if ($("input#remember_me").is(":checked")) {
        localStorage.username = $("input#username").val();
        localStorage.password = $("input#password").val();
        localStorage.chkbx     = $("input#remember_me").val();
      }else{
        localStorage.username = '';
        localStorage.password = '';
        localStorage.chkbx = '';
      }
    });

  });
</script>