<?php

class Aruhazak_admin extends MY_Modul {
	
	
	
	public function lista () {
		globalisMemoria('utvonal', array(array('felirat' => 'Áruházak listája')));
		$ALG = new Adminlapgenerator;
		
		$ALG->adatBeallitas('lapCim', "Áruházak");
		$ALG->adatBeallitas('szelessegOsztaly', "full-width");
		$ALG->adatBeallitas('fejlecGomb', array('url' => ADMINURL.'aruhazak/szerkesztes/0', 'felirat' => 'Új áruház'));
		
		$ALG->tartalomDobozStart();
		
		// táblázat adatok összeállítása
		$adatlista = array();
		$start = 0;
		$w = '';
		$tablak = $this->sqlSorok("SHOW TABLES");
		$lista = $this->sqlSorok('SELECT * FROM aruhazak '.$w.' ORDER BY nev ASC LIMIT '.$start.', 30');
		foreach($lista as $k => $sor) {
			// módosítás
		}
		// táblázat beállítás
		$tablazat = $ALG->ujTablazat();
		
		
		$keresoMezok = false;
		$tablazat->adatBeallitas('keresoMezok', $keresoMezok);
		$tablazat->adatBeallitas('szerkeszto_url', 'aruhazak/szerkesztes/');
		$tablazat->adatBeallitas('torles_url', 'aruhazak/torles/');
		$tablazat->adatBeallitas('megjelenitettMezok', array('nev' => 'Név', 'prefix' => 'Prefix', 'letrehozas' => 'Adatbázis kialakítása','aktivalas' => 'Aktiválás', 'szerkesztes' => 'Szerkesztés',  'torles' => 'Törlés' ));
		$tablazat->adatBeallitas('lista', $lista);
		
		
		$ALG->tartalomDobozVege();
		return $ALG->kimenet();
		
	}
	
	public function szerkesztes() {
		$ci = getCI();
		$id = (int)$ci->uri->segment(4);
		globalisMemoria('utvonal', array(array('url' => 'aruhazak/lista', 'felirat' => 'Áruházak') , array('felirat'=> 'Áruház szerkesztése')));
		
		if($ci->input->post('a')) {
			$a = $ci->input->post('a') ;
			if($id == 0) {
				$this->Sql->sqlSave($a, 'aruhazak');
			} else {
				$a['id'] = $id;
				$this->Sql->sqlUpdate($a, 'aruhazak');
					
			}
			redirect(ADMINURL.'aruhazak/lista?m='.urlencode("A módosítások rögzítésre kerültek."));
		}
		
		$sor = $this->Sql->get($id, 'aruhazak', 'id');
		
		$ALG = new Adminlapgenerator;
		
		$ALG->adatBeallitas('lapCim', "Áruház adatok");
		$ALG->adatBeallitas('fejlecGomb', array('url' => ADMINURL.'aruhazak/lista', 'felirat' => 'Vissza a áruházakhoz') );
		
		$ALG->urlapStart(array('attr'=> ' action="" enctype="multipart/form-data" method="post" '));
		
		$ALG->tartalomDobozStart();
		$doboz = $ALG->ujDoboz();
		$doboz->dobozCim( 'Áruház jellemzői', 2);
		
		$input1 = new Szovegmezo(array('nevtomb' => 'a', 'mezonev' => 'nev', 'felirat' => 'Megnevezés', 'ertek'=> @$sor->nev));
		$input2 = new Szovegmezo(array('nevtomb' => 'a', 'mezonev' => 'prefix', 'felirat' => 'Prefix', 'ertek'=> @$sor->prefix));
		
		$doboz->duplaInput($input1, $input2);
		
		$ALG->tartalomDobozVege();
		$ALG->urlapGombok(array(
			0 => array(
				'tipus' => 'hivatkozas',
				'felirat' => 'Mégse',
				'link' => ADMINURL.'aruhazak/lista',
				'onclick' => "if(confirm('Biztos vagy benne?')==false) return false;"
			),
			1 => array(
				'tipus' => 'submit',
				'felirat' => 'Mentés',
				'link' => '',
				'osztaly' => 'btn-ok',
				
			),
		));
		$ALG->urlapVege();
		return $ALG->kimenet();
		
		
	}
	public function torles() {
		$ci = getCI();
		$id = (int)$ci->uri->segment(4);
		if($aruhaz->prefix=='') {
		$this->db->query("DELETE FROM aruhazak WHERE id =  ".$id);
		redirect(ADMINURL.'aruhazak/lista?m='.urlencode('Sikeres törlés!'));
		return;
	}
		$ci = getCI();
		$id = (int)$ci->uri->segment(4);
		$DBP = $aruhaz->prefix;
		redirect(ADMINURL.'aruhazak/lista?m='.urlencode('Aktiválás sikeres!'));
		return;
	}
}