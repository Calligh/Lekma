<?php
/**
 * This Function is to help minimize the CRUD operations
 * configurations so that things will be made easy for this project 
 * to be done with ease.
 */
 class Helpers
 {
 	/*
 	* Creating the constant variables here
 	*/
 	public $columns;

 	public $select;

 	public $insert;

 	public $update;

 	public $delete;

 	public $where;

 	public $from;

 	public $orderBy;

 	public $desc;

 	/* Local Queries 
 	*@ var
 	*/
 	public $query;
 	/*
 	@var Describing the table name configs
 	*/
 	public $table = NULL;
 	/*
 	@var  This will be used at a later time
 	*/
 	public $connectors;

 	public $interrogators = ['=','<','>','<=','>=','!=','=='];

 	public $mergers = [
 		'JOIN',
 		'INNERJOIN',
 		'UNION',
 		'GROUP BY',
 		'DESC',
 		'ASC',
 		'DISTINCT',
 		'ORDER BY'
 	];


 	// function __construct(argument)
 	// {
 	// 	# code...
 	// }

 	public function insert($table = NULL){
 		$this->columns = 
 	}

 	public function select($table = NULL){

 	}
 } 
 ?>