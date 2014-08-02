<?php
use Illuminate\Database\Capsule\Manager as Capsule;  
class ConnectionTest extends PHPUnit_Framework_TestCase{

	public function testConnection(){
	$capsule = new Capsule; 
		$capsule->addConnection(array(
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'test',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
));
 
$capsule->bootEloquent();
		$this->assertTrue(TRUE);
	}
}