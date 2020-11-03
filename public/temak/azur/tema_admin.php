<?php
$ci = getCI();
if(isset($_POST['a'])) {
	
	
	
	foreach($_POST['a'] as $k => $v) {
		$van = $ci->Sql->sqlSor("SELECT * FROM temavaltozok WHERE tema = 'azur' AND kulcs = '$k' ");
		if(isset($van->id)) {
			$a = array('id' => $van->id, 'kulcs' => $k, 'ertek' => $v, 'tema' => 'azur');
			$ci->Sql->sqlUpdate($a, 'temavaltozok');
		} else {
			$a = array( 'kulcs' => $k, 'ertek' => $v, 'tema' => 'azur');
			$ci->Sql->sqlSave($a, 'temavaltozok');
		}
	}
	redirect(ADMINURL.'temak/beallitasok/azur?m='.urlencode('Módosítás sikeres!'));
}

include 'tema_valtozok.php';



globalisMemoria('utvonal', array(array('felirat' => 'Azur téma szerkesztése')));

$ALG = new Adminlapgenerator;

$ALG->adatBeallitas('lapCim', "Azur téma szerkesztése (témák/azur) ");

$ALG->urlapStart(array('attr'=> ' action="" enctype="multipart/form-data" method="post" '));
$ALG->tartalomDobozStart();

$doboz = $ALG->ujDoboz();
$doboz->dobozCim( 'Nincs beállítási lehetőség', 2);

$doboz->dobozCim( 'Alapadatok', 2);

/*
$file = new Filefeltolto(array('nevtomb' => '', 'mezonev' => 'logokep', 'felirat' => 'Logó feltöltése (PNG, JPG, GIF, SVG)'));
$doboz->szimplaInput($file);

if(@$logokep!="") {
	$doboz->HTMLHozzaadas('<p style="padding:10px;background: #ddd;">Jelenlegi logókép:<br><br><img src="'.base_url().$logokep.'" style="border: 1px solid #aaa;max-height:200px;" /></p>');

}
*/

$input1 = new Szovegmezo(array('nevtomb' => 'a', 'mezonev' => 'fejlec_felirat1', 'felirat' => 'Fejléc bal felirata', 'ertek'=> @$fejlec_felirat1));
$input2 = new Szovegmezo(array('nevtomb' => 'a', 'mezonev' => 'fejlec_felirat2', 'felirat' => 'Fejléc középső felirata', 'ertek'=> @$fejlec_felirat2));

$doboz->szimplaInput($input1);
$doboz->szimplaInput($input2);


$ALG->tartalomDobozVege();
$ALG->urlapGombok(array(


0 => array(

	'tipus' => 'submit',

	'felirat' => 'Mentés',

	'link' => '',

	'osztaly' => 'btn-ok',

	

),

));


$ALG->urlapVege();

$kimenet = $ALG->kimenet();
