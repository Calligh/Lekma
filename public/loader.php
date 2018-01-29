<?php 
 $dirpath = realpath(dirname(__DIR__));
 $base    = 'public/base.php';


 //Helper Classes for the entire project
 $_helpers     = $dirpath . '/app/' . 'helpers.php';
 //Models for the entire project
 $_signup      = $dirpath . '/models/'.'SignupModel.php';
 //Controllers for the entire project
 $__connection = $dirpath . '/controllers/'.'ConnectionController.php';
 $auth_controller = $dirpath . '/controllers/'.'AuthController.php';

if (file_exists($base) && file_exists($__connection) && file_exists($auth_controller) && file_exists($_signup) && file_exists($_helpers)) {
	include $base;
	require_once $__connection;

	require $_helpers;
	$queryBuilder  = new Helpers();
	//Instantiating the connection to the database
	$systemConnect = new DBConnect();
	$mysqli        = $systemConnect::__init();

	//Making all the instantiation here
	require_once $_signup;
	require_once $auth_controller;
	$auth = new AuthController();


}	
 ?>