
                    
			<?= widget('slider/slidermegjelenites/index', array('slider_id' => 1));?>
			

                        <!-- separator -->
                        <div class="separator-container">
                            <div class="wrap">
                                <div class="separator"></div>
                            </div>
                        </div><!-- comment -->

			
			<?= widget('termek/termeklista/sliderlista', array('tipus' => 2, 'termek_db' => 50));?>
                        
                        
                        
                        <!-- separator -->
                        <div class="separator-container">
                            <div class="wrap">
                                <div class="separator"></div>
                            </div>
                        </div>

                        
			<?= widget('termek/termeklista/sliderlista', array('tipus' => 1, 'termek_db' => 50));?>

                        <!-- separator -->
                        <div class="separator-container">
                            <div class="wrap">
                                <div class="separator"></div>
                            </div>
                        </div>

                        <!-- categories -->
<div class="categories-container">
    <div class="wrap">

        <div class="heading">
            <h2><?= __f('Kategóriák'); ?></h2>
            <a href="" title="" class="show-all"><?= __f('Minden termék'); ?></a>
        </div>

        <div class="categories">
            
            
             <?php ws_autoload('termek');$kategoriak = new Kategoriak_osztaly;
            foreach ($kategoriak->kategoriaLista() as $kategoria):
            ?>
            
            <div class="category">
                <a href="<?= base_url().beallitasOlvasas('termekek.oldal.url').'/'.$kategoria->slug ;?>" title="<?= $kat->nev;?>">
                    <div class="img-container">
                        <img src="<?= base_url().ws_image($kategoria->kep, 'mediumboxed')?>" alt="<?= $kat->nev;?>">
                    </div>
                    <div class="text"><?= __f($kategoria->nev, 'basic'); ?></div>
                </a>
            </div>
            
            
            
            <?php endforeach;?>

          
        </div>

    </div>
</div>
  
           
<!-- bottom-info -->
<div class="bottom-info-container">
    <div class="wrap">

        <div class="bottom-info">

            <div class="news-box">
                <h3>Hírek, vásárok</h3>
                <div class="news-box-content">

                    <a href="" title="" class="news-box-item">
                        <div class="img-container" style="background-image:url('<?= base_url().TEMAMAPPA;?>/azur/pics/news-cover-sample-120x80.jpg');"></div>
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                        </div>
                    </a>

                    <a href="" title="" class="news-box-item">
                        <div class="img-container" style="background-image:url('<?= base_url().TEMAMAPPA;?>/azur/pics/news-cover-sample-120x80.jpg');"></div>
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing sit amet, consectetur
                        </div>
                    </a>

                    <a href="" title="" class="news-box-item">
                        <div class="img-container" style="background-image:url('<?= base_url().TEMAMAPPA;?>/azur/pics/news-cover-sample-120x80.jpg');"></div>
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                        </div>
                    </a>

                    <a href="" title="" class="news-box-item">
                        <div class="img-container" style="background-image:url('<?= base_url().TEMAMAPPA;?>/azur/pics/news-cover-sample-120x80.jpg');"></div>
                        <div class="text">
                            Dolor sit amet, consectetur adipiscing sit amet, consectetur adipiscing
                        </div>
                    </a>

                </div>
                <a href="" title="" class="more">További hírek</a>
            </div>

            <div class="showrooms-box">
                <h3>showrooms</h3>
                <div class="showrooms-box-content">

                    <div class="showrooms-box-item">
                        <div class="img-container" style="background-image:url('<?= base_url().TEMAMAPPA;?>/azur/pics/kaysersberg.jpg');"></div>
                        <div class="text">
                            <p class="title">
                                <strong>ZigZag</strong><br>
                                Boutique d'artisans et créateurs
                            </p>
                            <p>
                                85 rue du Général de Gauille,<br>
                                68240 Kaysersberg<br>
                                France
                            </p>
                        </div>
                    </div>

                    <div class="showrooms-box-item">
                        <div class="img-container" style="background-image:url('<?= base_url().TEMAMAPPA;?>/azur/pics/nancy.jpg');"></div>
                        <div class="text">
                            <p class="title">
                                <strong>Nos MondeS</strong><br>
                                Boutique d'art et d'artisanat
                            </p>
                            <p>
                                10 rue Montesquieu,<br>
                                54000 Nancy<br>
                                France
                            </p>
                        </div>
                    </div>

                </div>
                <a href="" title="" class="more">Bővebben</a>
            </div>

            <div class="about-box">
                <h3>Rólam</h3>
                <div class="about-box-content">
                    <div class="img-container" style="background-image:url('<?= base_url().TEMAMAPPA;?>/azur/pics/eva-huszar-bijouxazur.jpg');"></div>
                    <div class="text">
                        <p class="title">
                            <strong>Éva Huszár</strong><br>
                            Créatrice de bijoux en pierres fines et précieuses
                        </p>
                        <p>Sed varius dignissim arcu eget auctor. Vestibulum eget laoreet orci, eget imperdiet neque. Sed ac purus consectetur, cursus magna ut, lobortis justo.</p>
                        <p>Nulla quis rhoncus turpis. Proin maximus ultrices vehicula. Curabitur tincidunt sit amet massa vel pretium. Sed rhoncus mollis lectus.</p>
                    </div>
                </div>
                <a href="" title="" class="more">Elérhetőségek</a>
            </div>

        </div>

    </div>
</div>
 
            

                        
                        
                        
