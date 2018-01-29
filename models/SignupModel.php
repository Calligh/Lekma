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

 	public function createAdminIfNotExist($mysqli){
 		$_query = "CREATE TABLE IF NOT EXISTS admin(
 			id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 			username VARCHAR(20) NOT NULL,
 			password VARCHAR(60) NOT NULL,
 			status INT NOT NULL,
 			last_seen date NOT NULL,
 			created_at datetime NOT NULL, 
 			updated_at datetime NOT NULL
 		)";
 		$_results = $mysqli->query($_query);
 		return $_results;
 	}
 } 
 ?>