<!-- start: prod list -->

<div class="product-list ">
    
    <div class="wrap">

        <div class="main-heading">
            <h1><?= (isset($listacim))?$listacim:'Termékek'; ?></h1>
        </div>
        <!-- product-list-container -->
        <div class="product-list-container">

            <!-- filters -->
            <div class="filters">
                <?= widget('kategoria/kategoria/szurowidget_termeklista');?>

            </div><!-- comment -->
            
            <div class="products-container">

		
		<?php $ci = getCI();?>
        
		<form id="termlistaform" >
		

		<?= widget('termek/termeklista', array('view' => 'termeklistaoldal_fejlec'));?>
				

        
		<?= widget('termek/termeklista', array('view' => 'termeklistaoldal_lista.php'));?>
		
		</form>
		

            </div>

        </div>
    </div>
</div>


<!-- end: prod list -->

