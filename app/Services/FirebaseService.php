<?php 

namespace App\Services;

require './vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseService
{
	private $firebase;
	private $db;

	public function __construct()
	{
		$this->firebase = (new Factory)->withServiceAccount('./app/Http/Controllers/key/Firebase.json');
		$this->db = $this->firebase->createDatabase();
	}
	public function get_usuarios()
	{
		$reference = $this->db->getReference('/usuario');
		$registros = $reference->getValue();
		return $registros;
	}
}
