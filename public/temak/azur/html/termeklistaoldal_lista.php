
		<?php $ci = getCI();?>
        
		
		<?php if($termekek): ?>

        

        <ul class="products">

			<?php foreach($termekek as $t):?>
            
            
            
            <li class="favorite">
                <div class="add-to-favs"></div>
                <a href="<?= $t->link();?>" title="<?= $t->jellemzo('Név');?>" class="">
                    <div class="img-container">
                        <img src="<?= base_url().ws_image($t->fokep(),'mediumboxed');?>" title="<?= $t->jellemzo('Név');?>" alt="<?= $t->jellemzo('Név');?>">

                    </div>
                    <div class="badges">
                        <span class="badge-new">Nouveau</span>
                        <span class="badge-sale">Vente</span>
                    </div>
                    <div class="product-name"><?= $t->jellemzo('Név');?></div>
                    
                    
                    <div class="price">
                        
                        <?php if($t->eredeti_ar!=0):?>
                            <span class="old-price"><?= PN_ELO.' '.ws_arformatum($t->eredetiAr($armod)).' '.PN_UTO;?></span>
			<?php endif;?>
                        <?= PN_ELO.' '.ws_arformatum($t->alapAr($armod)).' '.PN_UTO;?>
                    </div>
                </a>
            </li>
            
            
            
           <?php endforeach; ?>

        </ul>

		<?php else:?>
            <h3>Nem található termék, folytasd az <a href="<?= base_url();?>termekek">Összes terméknél</a>.</h3>
         <?php endif;?>

		<?php if(isset($termekdb)): ?>
		
		
	
		
        <div class="pagination">
            <div class="styled-select">
                <select  value="0"  name="dbszam" onchange="$('#termlistaform').submit();">
                    <option value="12" <?= ((int)$ci->session->userdata('termek_listalimit')==12 )?' selected ':''; ?> >12 / oldal</option>
                    <option value="24"  <?= ((int)$ci->session->userdata('termek_listalimit')==24 )?' selected ':''; ?> >24 / oldalt</option>
                    <option value="48"  <?= ((int)$ci->session->userdata('termek_listalimit')==48 )?' selected ':''; ?> >48 / oldalt</option>
                </select>
            </div>
            <?php if($termekdb>(int)$ci->session->userdata('termek_listalimit')):?>
            <ul>
				<?php $lap = 0; for($i = 0; $i < $termekdb;$i += $limit):$lap++;?>
                <li><a href="?start=<?= $i; ?>" title="" class="<?= ($start == $i)?' active ':'';?>"><?= $lap; ?></a></li>
                <?php endfor; ?>
            </ul>
            <?php endif; ?>
        </div>
        <?php endif; ?>





