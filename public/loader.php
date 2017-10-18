<?php 
 $dirpath = realpath(dirname(__DIR__));
 $base    = 'public/base.php';
 $navbar  = 'public/navbar.php';

 //Models for the entire project
 $_signup      = $dirpath . '/models/'.'SignupModel.php';
 //Controllers for the entire project
 $__connection = $dirpath . '/controllers/'.'ConnectionController.php';
 $auth_controller = $dirpath . '/controllers/'.'AuthController.php';

if (file_exists($base) && file_exists($navbar) && file_exists($__connection) && file_exists($auth_controller) && file_exists($_signup)) {
	include $base;
	include $navbar;
	require_once $__connection;

	//Instantiating the connection to the database
	$systemConnect = new DBConnect();
	$mysqli        = $systemConnect::__init();

	//Making all the instantiation here
	require_once $_signup;
	require_once $auth_controller;
	$auth = new AuthController();
	$signup_model = new SignupModel();
}	
 ?>