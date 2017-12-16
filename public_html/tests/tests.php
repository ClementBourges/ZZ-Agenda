<?php

require_once("./fonctions.php");

use PHPUnit\Framework\TestCase;

class Authentification extends TestCase
{
	public function debut()
	{
		echo "Début des tests d'authentification \n";
	}
	public function test_True_Auth_User()
	{
		$a="machin";
		$b="bidule";
		$this->assertEquals(Auth($a,$b,"../db/userpass.txt"),1);
	}
	public function test_False_Auth_User()
	{
		$c="pirate";
		$d="faux";
		$this->assertEquals(Auth($c,$d,"../db/userpass.txt"),0);
	}
	public function test_True_Auth_Admin()
	{
		$a="admin";
		$b="admin";
		$this->assertTrue(Auth($a,$b,"../db/adminpass.txt")==1);
	}
	public function test_False_Auth_Admin()
	{
		$c="pirate";
		$d="faux";
		$this->assertTrue(Auth($c,$d,"../db/adminpass.txt")==0);
	}
	public function testFormatDate()
	{
		$a="199610221450";
		$b=format_date_heure($a);
		$this->assertTrue($b[0]=="22/10/1996" && $b[1]=="14:50");
		
	}
	public function fin()
        {
		echo "Fin du test \n";
        }

}

?>
