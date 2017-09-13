<?php /* Smarty version 2.6.26, created on 2017-07-02 15:50:06
         compiled from imoveisCasasCompra.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'imoveisCasasCompra.tpl', 14, false),)), $this); ?>
<div id="content" class="full_85">
			<h2 class="underline">Casas à venda</h2>
			<ul class="four_column_properties">
					<?php $_from = $this->_tpl_vars['imoveis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>

					<div class="colun_content">
						<div class="image_list">
							<a href="imovel.php?id_imovel=<?php echo $this->_tpl_vars['i']->imovel->id_imovel; ?>
">
						  	<img src="images/imoveis/<?php echo $this->_tpl_vars['i']->imovel->id_imovel; ?>
/<?php echo $this->_tpl_vars['i']->imovel->praiaLiteral; ?>
_img_inside_<?php echo $this->_tpl_vars['i']->imovelFotos['0']->foto; ?>
" alt="" width="250"/>
						  	
					  	</div>
					  	<div style="float:left">
						  	<h3 class="list_value box_price box_square">
						  		R$ <?php if (empty ( $this->_tpl_vars['i']->imovel->valor ) || $this->_tpl_vars['i']->imovel->valor <= 0): ?>-<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['i']->imovel->valor)) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ",", ".") : number_format($_tmp, 2, ",", ".")); ?>
<?php endif; ?>
					  		</h3>
							<h6>
								<a href="imovel.php?id_imovel=<?php echo $this->_tpl_vars['i']->imovel->id_imovel; ?>
"><?php echo $this->_tpl_vars['i']->imovel->praia; ?>
</a>
							</h6>
							<ul class="box_text">
								<li><span class="left fa fa-bed" alt="Dormitórios" title="Dormitórios"></span> <?php if (empty ( $this->_tpl_vars['i']->imovelDetalhes['quartos']['valor'] )): ?>-<?php else: ?><?php echo $this->_tpl_vars['i']->imovelDetalhes['quartos']['valor']; ?>
<?php endif; ?></li>
								<li><span class="left fa fa-shower" alt="Suites" title="Suites">&nbsp;</span><span class="left fa fa-bed" alt="Suites" title="Suites"></span>
								</span>
								 <?php if (empty ( $this->_tpl_vars['i']->imovelDetalhes['suites']['valor'] )): ?>-<?php else: ?><?php echo $this->_tpl_vars['i']->imovelDetalhes['suites']['valor']; ?>
<?php endif; ?> </li>
							</ul>
				  		</div>
					  	<ul class="box_text" style="float:left">
					  		<div class="button-list background-orange"><span class="fa fa-tty"></span>
					  		&nbsp;Contato</div>
					  		<div class="button-list background-green"><span class="fa fa-eye"></span>&nbsp;Visite</div>
						  	<a style="color:#171717" href="imovel.php?id_imovel=<?php echo $this->_tpl_vars['i']->imovel->id_imovel; ?>
">
							<li><span class="left" >Referência:</span> <?php echo $this->_tpl_vars['i']->imovel->pagina_caderno; ?>
</li>
							<li><span class="left">Piscina:</span> <?php if (empty ( $this->_tpl_vars['i']->imovelDetalhes['piscina']['valor'] )): ?>-<?php else: ?><?php echo $this->_tpl_vars['i']->imovelDetalhes['piscina']['valor']; ?>
<?php endif; ?></li>
							<li><span class="left">Capacidade:</span> <?php if (empty ( $this->_tpl_vars['i']->imovel->capacidade_pessoas )): ?>-<?php else: ?><?php echo $this->_tpl_vars['i']->imovel->capacidade_pessoas; ?>
<?php endif; ?></li>
							</a>
					  </ul>
					  </a>				
					</div>
					<?php endforeach; endif; unset($_from); ?>
				</ul><!-- end .pf-type4 -->
					<div class="clear"></div>
					<div id="pagenavi">
						<a href="#" class="current">1</a>&nbsp;|&nbsp;<a href="#">2</a>&nbsp;|&nbsp;<a href="#">Next &gt;</a>					
					</div><!-- #pagenavi -->
				</div><!-- end #content -->
				<div class="sidebar_right_140">
					<div class="sidebar">
						<ul>				
							<li class="widget-container widget_categories">
								<h2 class="widget-title">Praias</h2>
								<ul>
									<?php $_from = $this->_tpl_vars['imoveisFiltro']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['filtro']):
?>
									<li class='li_140'><i class="fa fa-angle-right"></i><a href="imoveisCasasCompra.php?id_praia=<?php echo $this->_tpl_vars['filtro']->id_praia; ?>
"><?php echo $this->_tpl_vars['filtro']->praia; ?>
 (<?php echo $this->_tpl_vars['filtro']->filtro; ?>
)</a></li>
									<?php endforeach; endif; unset($_from); ?>
								</ul>
							</li>
						</ul>
		            </div><!-- end #sidebar -->
			</div><!-- end #sidebar_right -->				
			<div class="clear"></div>