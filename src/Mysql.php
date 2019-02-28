<?php
namespace Pds\Skeleton;

class Mysql
{
	public function execute()
	{
		$con = new \PDO('mysql:dbname=sys', 'root', 'root');
		$result = $con->query('SELECT count(*) count FROM metrics');
		var_dump($result->fetch()['count']);
		echo PHP_EOL;
	}
}
