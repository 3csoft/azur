<?phpfunction naplozo($naploElemNev, $kapcsolId = 0, $kapcsoltTabla = '', $uzenet = '') {	//exit;	if(beallitasOlvasas("log_kikapcsolva")=='1') return;	$tag = ws_belepesEllenorzes();	$ci = getCI();					if(!isset($_SESSION['logSessId'])){		$_SESSION['logSessId'] = uniqid(time()).rand(1000,9999);	}	$sessId = $_SESSION['logSessId'];				if(!$uzenet) $uzenet = '---';		$naploElemek = globalisMemoria('naploElemek');	if(!$naploElemek) {				$elemek = $ci->Sql->gets(DBP."naploelemek");		$naploElemek = array();		if($elemek) foreach($elemek as $sor) $naploElemek[strToUrl($sor->nev)] = $sor->id;	}		if(isset($naploElemek[strToUrl($naploElemNev)])) {		$a = array('naploelemid' => $naploElemek[strToUrl($naploElemNev)],'sessionid' => $sessId ,'mentetid' => $kapcsolId, 'felhasznaloid'=> (isset($tag->id)?$tag->id:0),'uzenet'=>$uzenet);		$ci->Sql->sqlSave($a, DBP.'naplobejegyzesek');	} else {		$a = array('nev' => $naploElemNev, 'tabla' => $kapcsoltTabla);		$naploElemek[strToUrl($naploElemNev)] = $elemid = $ci->Sql->sqlSave($a, DBP.'naploelemek');				$a = array('naploelemid' => $elemid, 'mentetid' => $kapcsolId,'sessionid' => $sessId,'felhasznaloid'=> (isset($tag->id)?$tag->id:0),'uzenet'=>$uzenet);		$ci->Sql->sqlSave($a,DBP. 'naplobejegyzesek');				globalisMemoria('naploElemek', $naploElemek);	}		return;		} 