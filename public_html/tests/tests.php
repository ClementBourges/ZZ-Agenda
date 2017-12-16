<?php

require_once("./fonctions.php");

use PHPUnit\Framework\TestCase;

class identification_user extends TestCase
{
	public function debut()
	{
		echo "Début du test \n";
	}
	public function testAuth()
	{
		$a="machin";
		$b="bidule";
		$this->assertTrue(Auth($a,$b,"../db/userpass.txt")==1);
	}
	public function testAuth2()
	{
		$a="admin";
		$b="admin";
		$this->assertTrue(Auth($a,$b,"../db/adminpass.txt")==1);
	}
	public function fin()
        {
		echo "Fin du test \n";
        }

}

?>
