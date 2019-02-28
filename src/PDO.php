<?php
namespace Pds\Skeleton;

class PDO {

	function __construct(String $dsn, String $username, $password) {
	}

	function query(String $statmen){

		return new Result();
	}
}

class Result {
	function fetch(){
		return ['count'=> '412'];
	}
}