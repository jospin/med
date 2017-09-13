<?php /* Smarty version 2.6.26, created on 2017-07-02 20:30:42
         compiled from index.tpl */ ?>
<div id="content" class="full">

				<div class="title_featured">
				<h2>Imoveis em <span class="blue">Destaque</span></h2><a href="imoveisTodos.php" class="featured">Todos os imoveis</a>
				</div>
				
				<ul class="four_column_properties">
					<?php $_from = $this->_tpl_vars['imoveisFeatured']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['if']):
?>
					<li><a href="imovel.php?id_imovel=<?php echo $this->_tpl_vars['if']->imovel->id_imovel; ?>
">
					  <img src="images/imoveis/<?php echo $this->_tpl_vars['if']->imovel->id_imovel; ?>
/<?php echo $this->_tpl_vars['if']->imovel->praiaLiteral; ?>
_img_featured_<?php echo $this->_tpl_vars['if']->imovelFotos['0']->foto; ?>
" alt="" />
					  <h6><a href="imovel.php?id_imovel=<?php echo $this->_tpl_vars['if']->imovel->id_imovel; ?>
"><?php echo $this->_tpl_vars['if']->imovel->praia; ?>
</a></h6>
					  <ul class="box_text">
					  	<a style="color:#171717" href="imovel.php?id_imovel=<?php echo $this->_tpl_vars['if']->imovel->id_imovel; ?>
">
						<li><span class="left">Quartos:</span> <?php if ($this->_tpl_vars['if']->imovelDetalhes['quartos']['valor'] == ""): ?> - <?php else: ?> <?php echo $this->_tpl_vars['if']->imovelDetalhes['quartos']['valor']; ?>
 <?php endif; ?></li>
						<li><span class="left">Suites:</span> <?php if ($this->_tpl_vars['if']->imovelDetalhes['suites']['valor'] == ""): ?> - <?php else: ?> <?php echo $this->_tpl_vars['if']->imovelDetalhes['suites']['valor']; ?>
 <?php endif; ?></li>
						<li><span class="left">Piscina:</span> <?php if ($this->_tpl_vars['if']->imovelDetalhes['piscina']['valor'] == ""): ?> - <?php else: ?> <?php echo $this->_tpl_vars['if']->imovelDetalhes['piscina']['valor']; ?>
 <?php endif; ?></li>
						<li><span class="left">Capacidade:</span> <?php if ($this->_tpl_vars['if']->imovel->capacidade_pessoas == "" && $this->_tpl_vars['if']->imovel->capacidade_pessoas == 0): ?> - <?php else: ?> <?php echo $this->_tpl_vars['if']->imovel->capacidade_pessoas; ?>
 pessoas <?php endif; ?></li>
						</a>
					  </ul>
					  </a>				
					</li>
					<?php endforeach; endif; unset($_from); ?>
					<!--
					<li>
					  <img src="images/imoveis//content/pp-img2.jpg" alt="" />
					  <h6><a href="#">8311 Paseo Vista Dr<br />
Las Vegas, NV 89312</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Quartos:</span> 7 bed</li>
						<li><span class="left">Suites:</span> 5 bath</li>
						<li><span class="left">Piscina:</span> 2,700 Sq Ft</li>
						<li><span class="left">Capacidade:</span> 0.19 pessoas</li>
					  </ul>				
					</li>
					<li>
					  <img src="images/imoveis//content/pp-img3.jpg" alt="" />
					  <h6><a href="#">2357 Golden Aster St<br />
Clermont, FL 3475</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds:</span> 7 bed</li>
						<li><span class="left">Baths:</span> 5 bath</li>
						<li><span class="left">House size:</span> 2,700 Sq Ft</li>
						<li><span class="left">Lot size:</span> 0.19 Acres</li>
					  </ul>				
					</li>
					<li class="nomargin">
					  <img src="images/imoveis//content/pp-img4.jpg" alt="" />
					  <h6><a href="#">1427 Stadium Ave<br />
Bronx, NY 10567</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds:</span> 7 bed</li>
						<li><span class="left">Baths:</span> 5 bath</li>
						<li><span class="left">House size:</span> 2,700 Sq Ft</li>
						<li><span class="left">Lot size:</span> 0.19 Acres</li>
					  </ul>		
					</li>-->
				</ul>
				
			</div><!-- end #content -->
			<div class="clear"></div>
			
<?php echo '
<script type="text/javascript">
 var $jts = jQuery.noConflict();
    $jts(document).ready(function(){ 
		
		//Slider  
         $jts(\'#slideshow\').cycle({
            timeout: 5000,  // milliseconds between slide transitions (0 to disable auto advance)
            fx:      \'fade\', // choose your transition type, ex: fade, scrollUp, shuffle, etc...            
            pager:   \'#pager\',  // selector for element to use as pager container
            pause:   0,	  // true to enable "pause on hover"
            pauseOnPagerHover: 0 // true to pause when hovering over pager link
        });
     });
</script>
'; ?>
			