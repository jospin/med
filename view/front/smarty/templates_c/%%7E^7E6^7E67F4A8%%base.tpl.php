<?php /* Smarty version 2.6.26, created on 2017-07-02 20:33:14
         compiled from base.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'base.tpl', 113, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link rel="shortcut icon" href="images/imoveis//content/favicon.ico" />
<meta http-equiv="Content-Script-Type" content="text/javascript" /> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="" />
<meta name="title" content="" />
<meta name="description" content="" />
<title>Imoveis no Litoral Norte - Medeiros Imoveis</title>
<link rel="shortcut icon" href="images/imoveis/content/favicon.ico" />
<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="/medeirosimoveis/view/front/css/style.css" rel="stylesheet" type="text/css" />
<link href="/medeirosimoveis/view/front/css/<?php echo $this->_tpl_vars['self']; ?>
.css" rel="stylesheet" type="text/css" />
<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<!-- ////////////////////////////////// -->
<!-- ///////// FONT AWESOME /////////// -->
<!-- ////////////////////////////////// -->
<link href="/medeirosimoveis/_lib/js/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/medeirosimoveis/view/front/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/medeirosimoveis/view/front/js/jquery.form.js"></script>  

<script type="text/javascript" src="/medeirosimoveis/view/front/js/cufon-yui.js"></script>
<script type="text/javascript" src="/medeirosimoveis/view/front/js/PT_Sans_400.font.js"></script>
<!--<script type="text/javascript" src="/view/front/js/custom/<?php echo $this->_tpl_vars['self']; ?>
.js"></script> -->
<script type="text/javascript" src="/medeirosimoveis/view/front/js/fade.js"></script>
<script type="text/javascript" src="/medeirosimoveis/view/front/js/contact.js"></script>

<script type="text/javascript" src="/medeirosimoveis/view/front/js/jquery.prettyPhoto.js"></script>

<?php echo '

<script type="text/javascript">
	 Cufon.replace(\'h1\') (\'h2\') (\'h3\') (\'h4\') (\'h5\') (\'h6\') (\'.slider-button a\') (\'.slider-price\') (\'.button\') (\'#nav li a\', {hover: true});
</script>
'; ?>


<script type="text/javascript" src="/medeirosimoveis/view/front/js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="/medeirosimoveis/view/front/js/hoverIntent.js"></script> 
<script type="text/javascript" src="/medeirosimoveis/view/front/js/superfish.js"></script> 
<script type="text/javascript" src="/medeirosimoveis/view/front/js/supersubs.js"></script>


<?php echo '
<script type="text/javascript"> 
 var $jts = jQuery.noConflict();
    $jts(document).ready(function(){ 
        $jts("ul.sf-menu").supersubs({ 
		minWidth		: 9,		// requires em unit.
		maxWidth		: 25,		// requires em unit.
		extraWidth		: 0			// extra width can ensure lines don\'t sometimes turn over due to slight browser differences in how they round-off values
                               // due to slight rounding differences and font-family 
        }).superfish();  // call supersubs first, then superfish, so that subs are 
                         // not display:none when measuring. Call before initialising 
                         // containing tabs for same reason. 
                         
		$jts(".pf-type4 a[rel^=\'prettyPhoto\']").prettyPhoto({theme:\'facebook\'});
                         
    }); 
 
</script>
'; ?>

<script type="text/javascript" src="/medeirosimoveis/view/front/js/jquery.cycle.all.min.js"></script>

<!--[if IE 6]>
<script src="/view/front/js/DD_belatedPNG.js"></script>
<?php echo '
<script>
  DD_belatedPNG.fix(\'img\');
</script>
'; ?>

<![endif]-->

</head>
<body>

	<div id="top-container">
		<div class="centercolumn">
		<div id="header">
	           <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	       </div>
		</div><!-- end #centercolumn -->
	</div><!-- end #top-container -->

	<div class="centercolumn">
			<!-- BEGIN SLIDE -->
			<div id="slider_container">
			<div id="slideshow_navigation">
			<div id="pager"></div>
			</div><!-- end slideshow navigation -->
				<div id="slideshow">
				
					<?php $_from = $this->_tpl_vars['imoveisSlider']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ii']):
?>
				
					<div class="cycle">
						<img src="images/imoveis/<?php echo $this->_tpl_vars['ii']->imovel->id_imovel; ?>
/<?php echo $this->_tpl_vars['ii']->imovel->praiaLiteral; ?>
_img_home_<?php echo $this->_tpl_vars['ii']->imovelFotos['0']->foto; ?>
" alt="" />
						<div class="farme-slide-text">
							<ul class="slide-text">
								<li><span class="left">Praia:</span>	<?php echo $this->_tpl_vars['ii']->imovel->praia; ?>
</li>
								<li><span class="left">Propriedade:</span>	<?php if ($this->_tpl_vars['ii']->imovel->tipo == 'C'): ?> Casa <?php else: ?> Terreno <?php endif; ?></li>
								<li><span class="left">Área construída:</span>	<?php if (empty ( $this->_tpl_vars['ii']->imovel->area_construida )): ?> - <?php else: ?> <?php echo $this->_tpl_vars['ii']->imovel->area_construida; ?>
 <?php endif; ?></li>
								<li><span class="left">Área do terreno:</span>	<?php if (empty ( $this->_tpl_vars['ii']->imovel->area_terreno )): ?> - <?php else: ?> <?php echo $this->_tpl_vars['ii']->imovel->area_terreno; ?>
 <?php endif; ?></li>
								<li><span class="left">Quartos:</span><?php if (empty ( $this->_tpl_vars['ii']->imovelDetalhes['suites']['valor'] )): ?> - <?php else: ?> <?php echo $this->_tpl_vars['ii']->imovelDetalhes['suites']['valor']; ?>
 <?php endif; ?></li>
								<li><span class="left">Suites:</span><?php if (empty ( $this->_tpl_vars['ii']->imovelDetalhes['piscina']['valor'] )): ?> - <?php else: ?> <?php echo $this->_tpl_vars['ii']->imovelDetalhes['suites']['valor']; ?>
 <?php endif; ?></li>
							</ul>
							<div class="frame-price">
								<div class="slider-button"><a href="imovel.php?id_imovel=<?php echo $this->_tpl_vars['ii']->imovel->id_imovel; ?>
">Detalhes</a></div>
								<div class="slider-price"><?php if ($this->_tpl_vars['ii']->imovel->exibir_valor == 'S' && $this->_tpl_vars['ii']->imovel->valor > 0): ?>R$ <?php echo ((is_array($_tmp=$this->_tpl_vars['ii']->imovel->valor)) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ",", ".") : number_format($_tmp, 2, ",", ".")); ?>
<?php else: ?><?php endif; ?></div>
							</div>
						</div>
					</div><!-- end cycle -->
					
					<?php endforeach; endif; unset($_from); ?>
					
				</div><!-- end #slideshow -->
			</div><!-- end #slide -->
			<!-- END OF SLIDE -->
			
		<div id="maincontent">
			
			<?php echo $this->_tpl_vars['page']; ?>

			
		</div><!-- end #maincontent -->
	</div><!-- end #centercolumn -->
	               
	<div id="bottom-container">
		<div class="centercolumn">
		
			<div id="footer">
               <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
	       
		</div><!-- end #centercolumn -->
	
	</div><!-- end #bottom-container -->
	<?php echo '
	<script type="text/javascript"> Cufon.now(); </script> <!-- to fix cufon problems in IE browser -->
	'; ?>

	
</body>
</html>