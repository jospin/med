<?php /* Smarty version 2.6.26, created on 2017-07-09 23:08:55
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'index.tpl', 10, false),)), $this); ?>
<h1 class="feature-title">Imóveis em destaque</h1>
<div class="row">
	<?php $_from = $this->_tpl_vars['imoveisSlider']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['imovel']):
?>
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail thumbnail-feature">
			<h3>
				<?php if ($this->_tpl_vars['imovel']->imovel->exibir_valor == 'S' && $this->_tpl_vars['imovel']->imovel->valor > 0): ?>
					Imóvel <?php echo $this->_tpl_vars['imovel']->imovel->categoria; ?>
 valor: 
					<span class="medimoveis-value">
						R$ <?php echo ((is_array($_tmp=$this->_tpl_vars['imovel']->imovel->valor)) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ",", ".") : number_format($_tmp, 2, ",", ".")); ?>

					</span>
				<?php else: ?>
					 Imóvel <?php echo $this->_tpl_vars['imovel']->imovel->categoria; ?>
 em <?php echo $this->_tpl_vars['imovel']->imovel->praia; ?>

				<?php endif; ?>
			</h3>
			<img src="images/imoveis/<?php echo $this->_tpl_vars['imovel']->imovel->id_imovel; ?>
/<?php echo $this->_tpl_vars['imovel']->imovel->praiaLiteral; ?>
_img_home_<?php echo $this->_tpl_vars['imovel']->imovelFotos['0']->foto; ?>
" alt="" />
			<div class="caption">
//Destaque
// Valor em vermelho
// Piscina
// Churasqueira (olhar admin)
// Forno (olhar admin)
// Dormitório e suítes
// Ar condicionado (olhar admin)
// Distancia da praia (olhar admin)
// Area se terreno (olhar admin)
// Capacidade se Temporada
// Sala de jantar (olhar admin)
// Sala de estar (olhar admin)
// Sala de visita (olhar admin)
// Cozinha gourmet ou americana; (olhar admin)
// Dispensa (olhar admin)
// Dependencia de empregada (olhar admin)

				<p>
					<span class="left">Propriedade:</span>	<?php if ($this->_tpl_vars['imovel']->imovel->tipo == 'C'): ?> Casa <?php else: ?> Terreno <?php endif; ?>
				</p>
				<p>
					<span class="left">Quartos:</span><?php if (empty ( $this->_tpl_vars['imovel']->imovelDetalhes['suites']['valor'] )): ?> - <?php else: ?> <?php echo $this->_tpl_vars['imovel']->imovelDetalhes['suites']['valor']; ?>
 <?php endif; ?>
				</p>
				<p>
					<span class="left">Suites:</span><?php if (empty ( $this->_tpl_vars['imovel']->imovelDetalhes['piscina']['valor'] )): ?> - <?php else: ?> <?php echo $this->_tpl_vars['imovel']->imovelDetalhes['suites']['valor']; ?>
 <?php endif; ?>
				</p>
				<p>
					<a href="imovel.php?id_imovel=<?php echo $this->_tpl_vars['imovel']->imovel->id_imovel; ?>
" class="btn btn-primary btn-lg" role="button">+ informações</a>
				</p>
			</div>
		</div>	
	</div>
	<!-- end cycle -->
	<?php endforeach; endif; unset($_from); ?>

	<div class="col-md-2">
	</div>
	<div class="col-md-2 result-feature-right">
	</div>
</div>