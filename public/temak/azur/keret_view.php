<?php include('tema_valtozok.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

	<!-- Primary Meta Tags -->
	<title><?= ws_seo('cim'); ?></title>
	<meta name="description" content="<?= ws_seo('leiras'); ?>">
	<meta name="title" content="<?= ws_seo('cim'); ?>">
	
	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?= base_url(); ?>">
	<meta property="og:title" content="<?= ws_seo('cim'); ?>">
	<meta property="og:description" content="<?= ws_seo('leiras'); ?>">
	<meta property="og:image" content="https://url/image.png">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;400;600;700&display=swap" rel="stylesheet">
	<!-- Fonts -->

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url().TEMAMAPPA;?>/azur/css/style.css">
	<!-- CSS -->

	<!-- jQuery -->
	<script src="//code.jquery.com/jquery-latest.min.js"></script>
	<!-- jQuery -->

	<!-- slick -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<!-- slick -->
        
        
        <?= globalisMemoria("fejlec-scriptek");?>
</head>

<body>
    <div class="loading"></div>
	
	
	<!-- start: added-to-favs -->
	<div class="added-to-favs">

		<!-- if product added to favorites, it will be shown for 5 seconds
		<div class="added-to-favs-inner">
			<div class="added-to-favs-title">
				Kedvencekhez adva
				<div class="added-to-favs-close"></div>
			</div>
			<div class="added-to-favs-content">
				<p>A következő termék: <a href="" title="" class="product-link">Lorem ipsum dolor sit</a> sikeresen a <a href="" title="">kedvencekhez</a> lett adva.</p>
			</div>
		</div>
		-->

		<!-- if another product added to favorites, it will be shown for 5 seconds etc.
		<div class="added-to-favs-inner">
			<div class="added-to-favs-title">
				Kedvencekhez adva
				<div class="added-to-favs-close"></div>
			</div>
			<div class="added-to-favs-content">
				<p>A következő termék: <a href="" title="" class="product-link">Lorem ipsum dolor sit amet lorem ipsum</a> sikeresen a <a href="" title="">kedvencekhez</a> lett adva.</p>
			</div>
		</div>
		-->

	</div>
	<!-- end: added-to-favs -->

	<!-- start: top-info -->
	<div class="top-info">
		<div class="wrap">

			<div class="usp"><span><?= $fejlec_felirat1;?></span></div>

			<div class="slogan"><?= $fejlec_felirat2; ?></div>

			<div class="controls">

				<!-- languages -->
				<ul class="control-block">
					<li><a href="" title="">EN</a></li>
					<li><a href="" title="">DE</a></li>
					<li><a href="" title="" class="active">FR</a></li>
				</ul>

				<!-- currencies -->
				<ul class="control-block">
					<li><a href="" title="">USD</a></li>
					<li><a href="" title="" class="active">EUR</a></li>
				</ul>

			</div>

		</div>
	</div>
	<!-- end: top-info -->

	<!-- start: header -->
	<header class="header">

		<div class="wrap">

			<div class="menu">
				<div class="menu-icon"><ins></ins></div>
				<div class="text"><?= __f('Catégories', 'base');?></div>
			</div>

			<a href="<?= base_url();?>" title="Bijoux Azur" class="logo"></a>

			<div class="icons">
				<div class="search-icon"><div class="icon"></div></div>
				<a href="" title="" class="favorites-icon"><div class="icon"><div class="counter">0</div></div></a>
				<a href="" title="" class="cart-icon"><div class="icon"><div class="counter">3</div></div><div class="total">€ 29.90</div></a>
			</div>

		</div>

		<!-- navigation -->
		<nav class="nav">
			<div class="close"></div>
			<div class="wrap">
				<div class="nav-container">

					<div class="nav-title-container">
						<div class="nav-title"><?= __f('Catégories', 'base'); ?></div>
						<a href="" title=""><?= __f('Minden termék', 'base'); ?></a>
					</div>

					<ul class="nav-categories">
                                                <?php ws_autoload('termek');$kategoriak = new Kategoriak_osztaly;
foreach ($kategoriak->kategoriaLista() as $kategoria):?>
						<li>
                                                    <a href="<?= base_url().beallitasOlvasas('termekek.oldal.url').'/'.$kategoria->slug ;?>" title="<?= $kat->nev;?>">
								<div class="thumbnail">
									<img src="<?= base_url().ws_image($kategoria->kep2, 'mediumboxed')?>" alt="Bagues">
								</div>
								<div class="text"><?= __f($kategoria->nev, 'basic'); ?></div>
							</a>
						</li>
						<?php endforeach;?>
                                                
					</ul>

					<div class="nav-title-container">
						<div class="nav-title"><?= __f('Menu','basic'); ?></div>
					</div>

					<ul class="nav-menu">
						<li><a href="" title=""><?= __f('Rólam &amp; elérhetőség', 'base'); ?></a></li>
						<li><a href="" title=""><?= __f('Showrooms', 'base'); ?></a></li>
						<li><a href="" title=""><?= __f('Hírek, vásárok', 'base'); ?></a></li>
					</ul>

				</div>
			</div>
		</nav>

		<!-- search dropdown -->
		<div class="search">
			<div class="close"></div>
			<div class="wrap">
				<div class="search-container">

					<div class="search-title-container">
						<input id="main-search" type="text" placeholder="Keresés...">
						<label for="main-search"></label>
						<a href="#" title="<?= __f('Törlés...', 'base'); ?>" class="delete"></a>
					</div>

					<div class="search-results">
						<ul>
							<li>Sajnos nincs találat.</li>
							<li>
								<a href="" title="" class="product-result">
									<div class="thumbnail"><img src="<?= base_url().TEMAMAPPA;?>/azur//pics/category-thumbnail-100x100-sample.jpg" alt="Bagues"></div>
									<div class="text">Terméknév találat lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor</div>
								</a>
							</li>
							<li>
								<a href="" title="" class="product-result">
									<div class="thumbnail"><img src="<?= base_url().TEMAMAPPA;?>/azur//pics/category-thumbnail-100x100-sample.jpg" alt="Bagues"></div>
									<div class="text">Terméknév találat lorem</div>
								</a>
							</li>
							<li>
								<a href="" title="" class="product-result">
									<div class="thumbnail"><img src="<?= base_url().TEMAMAPPA;?>/azur//pics/category-thumbnail-100x100-sample.jpg" alt="Bagues"></div>
									<div class="text">Terméknév találat lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor</div>
								</a>
							</li>
							<li>
								<a href="" title="" class="product-result">
									<div class="thumbnail"><img src="<?= base_url().TEMAMAPPA;?>/azur//pics/category-thumbnail-100x100-sample.jpg" alt="Bagues"></div>
									<div class="text">Terméknév találat lorem</div>
								</a>
							</li>
							<li>
								<a href="" title="" class="product-result">
									<div class="thumbnail"><img src="<?= base_url().TEMAMAPPA;?>/azur//pics/category-thumbnail-100x100-sample.jpg" alt="Bagues"></div>
									<div class="text">Terméknév találat lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor</div>
								</a>
							</li>
							<li><a href="" title=""><div class="text">Kategória találat</div></a></li>
							<li><a href="" title=""><div class="text">Kategória találat lorem</div></a></li>
							<li><a href="" title=""><div class="text">Kategória találat</div></a></li>
							<li><a href="" title=""><div class="text">Kategória találat lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem</div></a></li>
							<li><a href="" title=""><div class="text">Kategória találat</div></a></li>
							<li><a href="" title=""><div class="text">Kategória találat</div></a></li>
							<li><a href="" title=""><div class="text">Alapanyag találat</div></a></li>
							<li><a href="" title=""><div class="text">Alapanyag találat</div></a></li>
							<li><a href="" title=""><div class="text">Alapanyag találat</div></a></li>
							<li><a href="" title=""><div class="text">Alapanyag találat</div></a></li>
							<li><a href="" title=""><div class="text">Alapanyag találat</div></a></li>
							<li><a href="" title=""><div class="text">Alapanyag találat</div></a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>

	</header>
	<!-- end: header -->

	<!-- start: main -->
	<main class="main">

		<?= $modulKimenet; ?>

	</main>
	<!-- end: main -->

	<!-- start: footer -->
	<footer class="footer">
		<div class="wrap">

			<div class="footer-logo"></div>

			<ul class="footer-categories">
                            <?php foreach ($kategoriak->kategoriaLista() as $kategoria): ?>
                            <li><a href="<?= base_url().beallitasOlvasas('termekek.oldal.url').'/'.$kategoria->slug ;?>" title="<?= __f($kategoria->nev, 'basic'); ?>"><?= __f($kategoria->nev, 'basic'); ?></a></li>
                            <?php endforeach;?>
				
			</ul>

			<p class="footer-info">
                            
				Éva Huszár - Créatrice de bijoux<br>
				Téléphone: <a href="+3348328519" title="téléphone">+33 48 32 85 19</a>, E-mail: <a href="mailto:info@bijouxazur.fr" title="e-mail">info@bijouxazur.fr</a><br>
				Numéro siret: 522 281 088 00024<br>
				15 rue de Hirtzfelden, 68740 Rustenhart, France
			</p>

			<ul class="footer-links">
				<li><a href="" title=""><?= __f('Rólam &amp; Kapcsolat', 'base'); ?></a></li>
				<li><a href="" title=""><?= __f('Showrooms', 'base'); ?></a></li>
				<li><a href="" title=""><?= __f('Hírek, vásárok', 'base'); ?></a></li>
				<li><a href="" title=""><?= __f('Szállítás &amp; fizetés', 'base'); ?></a></li>
			</ul>

			<div class="credit-cards"></div>

		</div>
	</footer>
	<!-- end: footer -->

	<!-- script -->
	<script type="text/javascript" src="<?= base_url().TEMAMAPPA;?>/azur/js/bijouxazur.js"></script>
        <script>
function isEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function base_url() { return '<?= base_url(); ?>';}
	
	</script>
	<script>
var siteJs = {};


	siteJs.darabszamLapozo = function(irany, maximum) {
		db = parseInt($('.kosar_db').val());
		if(irany == -1 && db == 1) return;
		if(maximum!=0){
			if((irany+db)>maximum) return;
		} 
		db += irany;
		$('.kosar_db').val(db);
		this.arKalkulacio();
	};
	siteJs.kosarElokeszites = function(){
		$('.kosar_valtozat').change(function(){ siteJs.arKalkulacio();})
		$('.kosar_opcio').change(function(){ siteJs.arKalkulacio();})
		$('.kosar_elkuldes').click(function(){ siteJs.kosarMentes();})
		
		$('#termekvaltozat').change(function(){ siteJs.termekValtozatAtiranyitas(this);})
		$('.termekbelsovaltozat').change(function(){ siteJs.termekKosarFrissites();})
	
	};
	siteJs.termekValtozatAtiranyitas = function(o) {
		db = parseInt($('.kosar_db').val());
		link = ($(o.options[o.selectedIndex]).attr("data-link"));
		if (typeof link === 'undefined')  return;
		window.location.href=link+"?db="+db;
	}
	
	siteJs.arKalkulacio = function() {
		alapar = parseInt($('#kosar_alapar').val());
		// van valtozat?
		v = $('.kosar_valtozat');
		if(v[0]) {
			valtozatar =  parseInt($(v[0].options[v[0].selectedIndex]).attr('data-valtozatar'));
			if(valtozatar>0) alapar = valtozatar;
			
		}
		db = parseInt($('.kosar_db').val());
		ar = alapar*db;
		
		
		v = $('.kosar_opcio');
		if(v[0]) {
			for(i = 0; i < v.length; i++) {
				if($(v[i]).prop('checked')){
					ar += parseInt($(v[i]).attr('data-opcioar'))*db;
				}
			}
			
		}
		
		$('.kosar_osszar').html(this.formatMoney(ar));
	};
	siteJs.formatMoney = function(number) {
		
		if(typeof Intl.NumberFormat() !=="object") return number;
		
		const formatter = new Intl.NumberFormat('hu-HU', {
			style: 'currency',
			currency: 'HUF',
			minimumFractionDigits: 0
		})
		return formatter.format(number);
	}

	siteJs.kosarTermekTorles = function(kosarId) {
		$.post(base_url()+'/kosarajax', {'termektorles':kosarId} , function(e) {
			siteJs.kosarOldalTermeklistaFrissites();
		});
	}
	siteJs.kosarOldalTermeklistaFrissites = function() {
		$('.kosarOldalTermeklista').load('<?= base_url();?>kosar?ajax=1&termeklista=1');
	};
	siteJs.kosarMentes = function() {
		siteJs.fatyolStart();
		adat = {
			"termek_id" : $('.kosar_elkuldes').attr('data-termekid'),
			"db" : parseInt($('.kosar_db').val()),
			"opciok" : []
			
		}
		// van valtozat?
		v = $('.kosar_valtozat');
		if(v[0]) {
			adat.valtozat = parseInt($(v[0].options[v[0].selectedIndex]).val());
			
		}
		// van valtozat 2?
		v = $('.kosar_valtozat2');
		if(v[0]) {
			adat.valtozat2 = parseInt($(v[0].options[v[0].selectedIndex]).val());
			
		}
		v = $('.kosar_opcio');
		if(v[0]) {
			for(i = 0; i < v.length; i++) {
				if($(v[i]).prop('checked')){
					adat.opciok.push({ "termek_armodositok_id" : $(v[i]).val() })
					
				}
			}
			
		}
		$.post(base_url()+'/kosarajax?beepulofuttatas=1', {'kosarajax':adat} , function(e) {
                        
                        if(e.trim()=='-1'){
                            siteJs.fatyolStop();
                             
                            Swal.fire('Nincs készleten.');
                            return;
                        }
                        
			siteJs.kosarPanelFrissites() ;
			$([document.documentElement, document.body]).animate({
				scrollTop: $('.kosarwidget').offset().top
			}, 1000);
			
			$('.cart-btn').parent().toggleClass('cart-open');
		});
		
	}
	
	
	
	siteJs.termekKosarFrissites = function() {
		siteJs.fatyolStart();
		adat = {
			"termek_id" : $('.kosardivkeret').attr('data-termekid'),
			"db" : parseInt($('.kosar_db').val()),
			"opciok" : []
			
		}
		// van valtozat?
		v = $('.kosar_valtozat');
		if(v[0]) {
			adat.valtozat = parseInt($(v[0].options[v[0].selectedIndex]).val());
			
		}
		// van valtozat 2?
		v = $('.kosar_valtozat2');
		if(v[0]) {
			adat.valtozat2 = parseInt($(v[0].options[v[0].selectedIndex]).val());
			
		}
		v = $('.kosar_opcio');
		if(v[0]) {
			for(i = 0; i < v.length; i++) {
				if($(v[i]).prop('checked')){
					adat.opciok.push({ "termek_armodositok_id" : $(v[i]).val() })
					
				}
			}
			
		}
		$.post(base_url()+'/kosarajax?beepulofuttatas=1&termeklapkosarfrissites=1', {'kosarajax':adat} , function(e) {
			$('.termeklap_kosar_div').html(e);
			siteJs.fatyolStop();
		});
		
	}
	
	
	siteJs.kosarPanelFrissites = function() {
		$.post(base_url()+'/kosarwidget?beepulofuttatas=1', {} , function(html) {
			if(html!='') {
				$('.kosarwidget').html(html);
				siteJs.kosarWidgetStart();
				siteJs.fatyolStop();
			}
		});
	}
	siteJs.kosarWidgetStart = function() {
		$('.cart-btn').click(function() {
			$(this).parent().toggleClass('cart-open');
			return false;
		});
	}
	
	siteJs.kosarDarabModositas = function(id, mod , max) {
		siteJs.fatyolStart();
		$.post(base_url()+'/kosardarabmod?beepulofuttatas=1', { id: id, mod: mod } , function(e) {
                            if(e.trim()=='-1'){
                            siteJs.fatyolStop();  
                             Swal.fire('Nincs készleten.');
                            return;
                            
                            
                        }
        
                        siteJs.kosarPanelFrissites();
			o = $('#nagykosar');
			if(o.length>0) {
				$('#nagykosar').load(base_url()+'/nagykosarfrissites?beepulofuttatas=1', function() { siteJs.fatyolStop(); } );
				siteJs.nagykosarOsszarFrissites();
				
			} else {
				siteJs.fatyolStop();
			}
			$('.szallitasmodar').load(base_url()+'/armodositoar?beepulofuttatas=1', { mod:'szallitasmod'});
			$('.fizetesmodar').load(base_url()+'/armodositoar?beepulofuttatas=1', { mod:'fizetesmod'});
			
		});
	}
	
	siteJs.nagykosarOsszarFrissites = function () {
		$('.price-summ').load(base_url()+'/nagykosarosszar?beepulofuttatas=1' , function() {
			siteJs.fatyolStop();
		});
	}
	siteJs.szallmodValasztas = function () {
            fmod = $('#fizetesmod').val("0");
            szmod = $('#szallitasmod').val();
            $.post(base_url()+'kosarfizmodfrissites?beepulofuttatas=1',{szmodid:szmod}, function(e){
                $('#fizetesmod').empty().append('<option value="0">Kérem, válasszon!</option>');
                e = JSON.parse(e);
                for(i = 0;i < e.length; i++ ) $('#fizetesmod').append('<option value="'+e[i].id+'">'+e[i].nev+'</option>');
                
                siteJs.kosarOsszarKalkulacio();
            });
        }
	siteJs.kosarOsszarKalkulacio = function () {
		// szállítás, fizetés mód állításkor hívjuk
		szmod = $('#szallitasmod').val();
		fmod = $('#fizetesmod').val();
		siteJs.fatyolStart();
		
		$.post(base_url()+'/kosarosszarfrissites?beepulofuttatas=1', { szmod: szmod, fmod: fmod } , function(e) {
			siteJs.nagykosarOsszarFrissites();
			$('.szallitasmodar').load(base_url()+'/armodositoar?beepulofuttatas=1', { mod:'szallitasmod'});
			$('.fizetesmodar').load(base_url()+'/armodositoar?beepulofuttatas=1', { mod:'fizetesmod'});
			
		});
		
	}
	siteJs.kuponvizsgalat = function () {
		// szállítás, fizetés mód állításkor hívjuk
		kuponkod = $('#kuponkod').val();
		siteJs.fatyolStart();
		
		$.post(base_url()+'/kuponkod?beepulofuttatas=1', { kuponkod: kuponkod } , function(e) {
			
			json = JSON.parse(e);
			console.log(json);
			
			siteJs.nagykosarOsszarFrissites();
			siteJs.fatyolStop();
			if(json.result=='ok') {
				$('.kuponkedvezmenyosszeg').load(base_url()+'/armodositoar?beepulofuttatas=1', { mod:'kuponkod'});
			
			} else {
				$('.kuponkedvezmenyosszeg').html(json.hiba);
			}
			
		});
		
	}
	siteJs.fatyolStop = function() {
		$('.loading').fadeOut(400);
	}
	siteJs.fatyolStart = function() {
		$('.loading').show();
	}
	siteJs.validateEmail = function(email) {
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(String(email).toLowerCase());
	}
	siteJs.rendelesEllenorzes = function() {
		$('.error').removeClass('error');
		inp = $('.req');
		for(i = 0; i < inp.length; i++ ) {
			o = inp[i];
			
			hiba = false;
			
			if($(o).hasClass('checkemail')) {
				console.log(o);
				if(!siteJs.validateEmail($(o).val() )) {
					hiba = true;
				}
			} else if($(o).hasClass('checkbox')) {
				
				if(!o.checked) {
					hiba = true;
				}
			} else if($(o).val()=='') {
				hiba = true;
			}
			if(hiba) {
				$(o).parent().addClass('error');
			}
		}
		am = $('.armodositok');
		
		for(i = 0; i < am.length; i++) {
			console.log($(am[i]).val());
			if($(am[i]).val()=='0') {
				
				$(am[i]).parent().addClass('error');
				hiba = true;
			} 
		}
		if(hiba) {
			el = $('.error');
			 $([document.documentElement, document.body]).animate({
				scrollTop: $(el[0]).offset().top
			}, 1000);
		} else {
			$('#rendelesForm').submit();
		}
	}
	
	siteJs.kosarPanelFrissites();
	$().ready(function(){ siteJs.fatyolStop(); window.onbeforeunload = function(event) {  siteJs.fatyolStart(); };});
	</script>
	<?= globalisMemoria('lablec-scriptek'); ?>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/cookie-bar/cookiebar-latest.min.js?forceLang=fr&tracking=1&always=1"></script>
</body>
</html>
