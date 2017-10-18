<?php
/**
 * This Model is to help create a table if not exists
 */
 class SignupModel
 {
 	/*
	* Defining the columns for the tables
 	*/
 	//Schema columns
 	protected $schema_query;
 	protected $schema_results;

 	//Table columns
 	protected $_query;
 	protected $_results;

 	public function createIfNotExist($mysqli){
 		$_query = "CREATE TABLE IF NOT EXISTS ldb_signup_tb(
 			id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 			fullname VARCHAR(120) NOT NULL,
 			email VARCHAR(60) NOT NULL,
 			password VARCHAR(60) NOT NULL,
 			course VARCHAR(60) NOT NULL,
 			profile VARCHAR(7) NOT NULL,
 			created_at datetime NOT NULL, 
 			updated_at datetime NOT NULL
 		)";
 		$_results = $mysqli->query($_query);
 		return $_results;
 	}
 } 
 ?>