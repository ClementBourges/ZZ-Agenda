<?php

require_once("./fonctions.php");

use PHPUnit\Framework\TestCase;

class Tests extends TestCase
{
	public function debut()
	{
		print "Début des tests d'authentification \n";
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
		$this->assertEquals(Auth($a,$b,"../db/adminpass.txt"),1);
	}
	public function test_False_Auth_Admin()
	{
		$c="pirate";
		$d="faux";
		$this->assertEquals(Auth($c,$d,"../db/adminpass.txt"),0);
	}
	public function testFormatDate()
	{
		$a="199610221450";
		$b=format_date_heure($a);
		$this->assertEquals($b[0],"22/10/1996");
		$this->assertEquals($b[1],"14:50");
		
	}
	public function fin()
        {
		echo "Fin des tests d'authentification \n";
        }
	
	public function test_new_event_fichier_vide()
	{
		AjoutEvenement("./db_tests/events_vide.txt","1996-10-22","14:50","Conference","Clermont-Ferrand","Speaker","Sujet","#a82a2a");
		$fic=fopen("./events.txt", "r");
		$ligne=fgets($fic);		
		$this->assertEquals($ligne,"199610221450;Conference;Clermont-Ferrand;Speaker;Sujet;#a82a2a;\n");
		fclose($fic);
	}	
	public function test_new_event_event_seul()
	{
		AjoutEvenement("./db_tests/event_seul.txt","1996-10-22","14:50","Conference","Clermont-Ferrand","Speaker","Sujet","#a82a2a");
		$fic=fopen("./db_tests/event_seul.txt", "r");
		$ligne=fgets($fic);		
		$this->assertEquals($ligne,"199610221450;Conference;Clermont-Ferrand;Speaker;Sujet;#a82a2a;\n");
		$ligne=fgets($fic);		
		$this->assertEquals($ligne,"199710221450;Conference;Clermont-Ferrand;Speaker;Sujet;#a82a2a;\n");
		fclose($fic);
	}
	public function test_new_event_grande_liste()
	{
		AjoutEvenement("./db_tests/grande_liste_event.txt","1996-10-22","14:50","Conference","Clermont-Ferrand","Speaker","Sujet","#a82a2a");
		$fic=fopen("./db_tests/grande_liste_event.txt", "r");
		$ligne=fgets($fic);		
		$this->assertEquals($ligne,"199410221450;Conference;Clermont-Ferrand;Speaker;Sujet;#a82a2a;\n");
		$ligne=fgets($fic);		
		$this->assertEquals($ligne,"199510221450;Conference;Clermont-Ferrand;Speaker;Sujet;#a82a2a;\n");
		$ligne=fgets($fic);
		$this->assertEquals($ligne,"199610221450;Conference;Clermont-Ferrand;Speaker;Sujet;#a82a2a;\n");	
		$ligne=fgets($fic);		
		$this->assertEquals($ligne,"199710221450;Conference;Clermont-Ferrand;Speaker;Sujet;#a82a2a;\n");
		$ligne=fgets($fic);		
		$this->assertEquals($ligne,"199810221450;Conference;Clermont-Ferrand;Speaker;Sujet;#a82a2a;\n");
		fclose($fic);
	}
	public function test_delete_event()
	{
		echo "Coucou";
	}

}

	
	
?>
