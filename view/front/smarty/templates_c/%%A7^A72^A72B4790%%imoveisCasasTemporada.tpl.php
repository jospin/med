<?php /* Smarty version 2.6.26, created on 2017-06-23 03:47:15
         compiled from imoveisCasasTemporada.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'imoveisCasasTemporada.tpl', 15, false),)), $this); ?>
<div id="content" class="full_85">
			<h2 class="underline">Casas para temporada</h2>
			<ul class="four_column_properties">
					<?php $_from = $this->_tpl_vars['imoveis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
					<li><a href="imovel.php?id_imovel=<?php echo $this->_tpl_vars['i']->imovel->id_imovel; ?>
">
					  <img src="images/imoveis/<?php echo $this->_tpl_vars['i']->imovel->id_imovel; ?>
/<?php echo $this->_tpl_vars['i']->imovel->praiaLiteral; ?>
_img_featured_<?php echo $this->_tpl_vars['i']->imovelFotos['0']->foto; ?>
" alt="" />
					  <h6><a href="imovel.php?id_imovel=<?php echo $this->_tpl_vars['i']->imovel->id_imovel; ?>
"><?php echo $this->_tpl_vars['i']->imovel->praia; ?>
</a></h6>
					  <ul class="box_text">
					  	<a style="color:#171717" href="imovel.php?id_imovel=<?php echo $this->_tpl_vars['i']->imovel->id_imovel; ?>
">
						<li><span class="left">Referência:</span> <?php echo $this->_tpl_vars['i']->imovel->pagina_caderno; ?>
</li>
						<li><span class="left">Quartos:</span> <?php if (empty ( $this->_tpl_vars['i']->imovelDetalhes['quartos']['valor'] )): ?>-<?php else: ?><?php echo $this->_tpl_vars['i']->imovelDetalhes['quartos']['valor']; ?>
<?php endif; ?></li>
						<li><span class="left">Suites:</span> <?php if (empty ( $this->_tpl_vars['i']->imovelDetalhes['suites']['valor'] )): ?>-<?php else: ?><?php echo $this->_tpl_vars['i']->imovelDetalhes['suites']['valor']; ?>
<?php endif; ?> </li>
						<li><span class="left">Piscina:</span> <?php if (empty ( $this->_tpl_vars['i']->imovelDetalhes['piscina']['valor'] )): ?>-<?php else: ?><?php echo $this->_tpl_vars['i']->imovelDetalhes['piscina']['valor']; ?>
<?php endif; ?></li>
						<li><span class="left">Capacidade:</span> <?php if (empty ( $this->_tpl_vars['i']->imovel->capacidade_pessoas )): ?>-<?php else: ?><?php echo $this->_tpl_vars['i']->imovel->capacidade_pessoas; ?>
<?php endif; ?></li>
						<li><span class="left">Valor diária:</span> R$ <?php if (empty ( $this->_tpl_vars['i']->imovel->valor ) || $this->_tpl_vars['i']->imovel->valor <= 0): ?>-<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['i']->imovel->valor)) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ",", ".") : number_format($_tmp, 2, ",", ".")); ?>
<?php endif; ?></li>
						</a>
					  </ul>
					  </a>				
					</li>
					<?php endforeach; endif; unset($_from); ?>s
					
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
									<li class='li_140'><a href="imoveisCasasTemporada.php?id_praia=<?php echo $this->_tpl_vars['filtro']->id_praia; ?>
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