<?php

require_once("./fonctions.php");

use PHPUnit\Framework\TestCase;

class identification_user extends TestCase
{
	public function debut()
	{
		echo "Début du test \n";
	}
	public function testAuth_User()
	{
		$a="machin";
		$b="bidule";
		$this->assertTrue(Auth($a,$b,"../db/userpass.txt")==1);
	}
	public function testAuth_admin()
	{
		$a="admin";
		$b="admin";
		$this->assertTrue(Auth($a,$b,"../db/adminpass.txt")==1);
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
