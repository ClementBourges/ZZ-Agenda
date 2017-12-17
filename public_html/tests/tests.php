<?php

require_once("./fonctions.php");

use PHPUnit\Framework\TestCase;

class Tests extends TestCase
{
	
	public function debut()
	{
		$a=1;
		fwrite(STDERR, print_r("\n\n\n Tests d'authentification:", TRUE));
		$this->assertEquals(Test($a),1);
	}
	public function test_True_Auth_User() /* Auth() return 1 for a right login/pass combination using userpass.txt database */
	{
		$a="machin";
		$b="bidule";
		$this->assertEquals(Auth($a,$b,"../db/userpass.txt"),1);
	}
	public function test_False_Auth_User() /* Auth() return 0 for a false login/pass combination using userpass.txt database */
	{
		$c="pirate";
		$d="faux";
		$this->assertEquals(Auth($c,$d,"../db/userpass.txt"),0);
	}
	public function test_True_Auth_Admin() /* Auth() return 1 for a right login/pass combination using adminpass.txt database */
	{
		$a="admin";
		$b="admin";
		$this->assertEquals(Auth($a,$b,"../db/adminpass.txt"),1); 
	}
	public function test_False_Auth_Admin() /* Auth() return 0 for a false login/pass combination using adminpass.txt database */
	{
		$c="pirate";
		$d="faux";
		$this->assertEquals(Auth($c,$d,"../db/adminpass.txt"),0);
		fwrite(STDERR, print_r("\n\n\nTest du formatage de la date et de l'heure:", TRUE)); 
	}
	public function testFormatDate() /* format_date_heure() turn "AAAAMMDDHHHH" into an array: 1st item: "AAAA/MM/DD"  2nd item:  "HH:MM"  */
	{
		$a="199610221450";
		$b=format_date_heure($a);
		$this->assertEquals($b[0],"22/10/1996");
		$this->assertEquals($b[1],"14:50");
		fwrite(STDERR, print_r("\n\n\nTests d'ajout d'un événement:", TRUE)); 
		
	}

	
	public function test_new_event_fichier_vide() /* Add an event in an empty file */
	{
		AjoutEvenement("./db_test/events_vide.txt","1996-10-22","14:50","Conference","Clermont-Ferrand","Speaker","Sujet","#a82a2a");
		$fic=fopen("./db_test/events_vide.txt", "r");
		$ligne=fgets($fic);		
		$this->assertEquals($ligne,"199610221450;Conference;Clermont-Ferrand;Speaker;Sujet;#a82a2a;\n");
		fclose($fic);
	}	
	public function test_new_event_event_seul() /* Add an event in a file containing only an other event */
	{
		AjoutEvenement("./db_test/event seul.txt","1996-10-22","14:50","Conference","Clermont-Ferrand","Speaker","Sujet","#a82a2a");
		$fic=fopen("./db_test/event seul.txt", "r");
		$ligne=fgets($fic);		
		$this->assertEquals($ligne,"199610221450;Conference;Clermont-Ferrand;Speaker;Sujet;#a82a2a;\n");
		$ligne=fgets($fic);		
		$this->assertEquals($ligne,"199710221450;Conference;Clermont-Ferrand;Speaker;Sujet;#a82a2a;\n");
		fclose($fic);
	}
	public function test_new_event_grande_liste() /* Add an event in a large list of event, it allow us to verify that the sort goes well */
	{
		AjoutEvenement("./db_test/grande_liste_event.txt","1996-10-22","14:50","Conference","Clermont-Ferrand","Speaker","Sujet","#a82a2a");
		$fic=fopen("./db_test/grande_liste_event.txt", "r");
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
		fwrite(STDERR, print_r("\n\n\nTests de suppression d'un événement:", TRUE)); 
	}
	public function test_delete_event() /* Delete an event of a file in which there are 2 events */
	{
		Supprimer("./db_test/event seul.txt",199610221450);
		$fic=fopen("./db_test/event seul.txt", "r");
		$ligne=fgets($fic);				
		$this->assertEquals($ligne,"199710221450;Conference;Clermont-Ferrand;Speaker;Sujet;#a82a2a;\n");
		fclose($fic);
	}
	public function test_delete_puis_fichier_vide() /* Delete one event of a file in which there is only one event */
	{
		Supprimer("./db_test/event seul.txt",199710221450);
		$size=filesize("./db_test/event seul.txt");				
		$this->assertEquals($size,0);
	}

}

	
	
?>
