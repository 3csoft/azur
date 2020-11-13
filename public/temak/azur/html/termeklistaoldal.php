<!-- start: prod list -->
<?php $ci= getCI();?>
<div class="product-list ">
    <form id="termlistaform" >
    <div class="wrap">

        <div class="main-heading">
            <h1><?= __f((isset($listacim))?$listacim:'Termékek','base'); ?></h1>
        </div>
        <!-- product-list-container -->
        <div class="product-list-container">
            
            <!-- filters -->
            <div class="filters">
                <?= widget('kategoria/kategoria/szurowidget_termeklista');?>

            </div><!-- comment -->
            
            <div class="products-container">

		<div class="product-list-title">
            <div class="counter">123 termék</div>
            <div class="select">
                
                     <select onchange="$('#termlistaform').submit();" name="ord" dir="rtl">
                    
                    <option  value="" <?= ($ci->session->userdata('termek_rendezes')=="")?' selected ':''; ?> >Tri par défaut</option>
                    <option value="prixc"<?= ($ci->session->userdata('termek_rendezes')=="prixc")?' selected ':''; ?> >Prix croissant</option>
                    <option value="prixd"<?= ($ci->session->userdata('termek_rendezes')=="prixd")?' selected ':''; ?> >Prix décroissant</option>
                    <option value="nom" <?= ($ci->session->userdata('termek_rendezes')=="nom")?' selected ':''; ?>  >De nom</option>
                    <option value="nouve" <?= ($ci->session->userdata('termek_rendezes')=="nouve")?' selected ':''; ?> >Nouveauté</option>
                
                    
                </select>
            </div>
        </div>

        <div class="selected-filters" style="display:none;">
            <a href="" title="" class="tag">Turmalin</a>
            <a href="" title="" class="tag">Akvamarin</a>
        </div>
		<?php $ci = getCI();?>
        
		
		

				

        
		<?= widget('termek/termeklista', array('view' => 'termeklistaoldal_lista.php'));?>
		
		
		

            </div>
            
        </div>
    </div>
        </form>
</div>


<!-- end: prod list -->

