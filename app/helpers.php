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

 	public $dictators = [
 		'INTO',
 		'FROM',
 		'SET'
 	];

 	// function __construct(argument)
 	// {
 	// 	# code...
 	// }

 	/**
 	**/
 	public function insert($columns = ['*']){
 		$this->columns = is_array($columns) ? $columns: func_get_args();
 		return $this;
 	}

 	public function take(int $number){
 		if (is_int($number) && !empty($number)) {
 			return $this->limit($number);
 		}else{
 			return;
 		}
 	}

 	public function limit(int $number){
 		return $this->number;
 	}

 	public function from(string $from = "FROM"){
 		return $this->from = $from;
 	}

 	public function where($column,$assignment,$value){
 		
 	}
 } 
 ?>