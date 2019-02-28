<?php
declare(strict_types=1);

namespace Pds\Skeleton;
use PHPUnit\Framework\TestCase;
use Pds\Skeleton\PDO;
class MysqlTest extends TestCase
{
	public function testConection()
	{
		$con = new PDO('mysql:dbname=sys', 'root', 'root');
		$result = $con->query('SELECT count(*) count FROM metrics');
		$this->assertEquals('412', $result->fetch()['count']);
	}
}