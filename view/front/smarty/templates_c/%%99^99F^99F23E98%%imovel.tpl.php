<?php /* Smarty version 2.6.26, created on 2018-01-17 19:52:08
         compiled from imovel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'imovel.tpl', 70, false),)), $this); ?>
			<div id="content">
				<h2 class="underline"><?php if ($this->_tpl_vars['imovel']->imovel->tipo == 'C'): ?>Casa<?php else: ?>Terreno<?php endif; ?> em <?php echo $this->_tpl_vars['imovel']->imovel->praia; ?>
</h2>
				<div id="container-slider">
				<ul id="slideshow_detail">
				<?php $_from = $this->_tpl_vars['imovelFotos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['slide']):
?>
				
					<li>
						<h3>Title1</h3>
						<span>/images/imoveis/<?php echo $this->_tpl_vars['id_imovel']; ?>
/<?php echo $this->_tpl_vars['praiaLiteral']; ?>
_img_inside_<?php echo $this->_tpl_vars['slide']->foto; ?>
</span>
						<p></p>
						<img src="/images/imoveis/<?php echo $this->_tpl_vars['id_imovel']; ?>
/<?php echo $this->_tpl_vars['praiaLiteral']; ?>
_img_thumb_<?php echo $this->_tpl_vars['slide']->foto; ?>
" alt="thumb" />
					</li>
					
				<?php endforeach; endif; unset($_from); ?>
					
				</ul>
				<div id="wrapper">
					<div id="fullsize">
						<div id="imgprev" class="imgnav" title="Previous Image"></div>
						<div id="imglink"></div>
						<div id="imgnext" class="imgnav" title="Next Image"></div>
						<div id="image"></div>
						<div id="information">
							<h3></h3>
							<p></p>
						</div>
					</div>
					<div id="thumbnails">
						<div id="slideleft" title="Slide Left"></div>
						<div id="slidearea">
							<div id="slider"></div>
						</div>
						<div id="slideright" title="Slide Right"></div>
					</div>
				</div>
				<?php echo '
			<script type="text/javascript" src="/view/front/js/compressed.js"></script>
			<script type="text/javascript" src="/view/front/js/script.js"></script>
			<script type="text/javascript">
			<!-- 
			
				$(\'slideshow_detail\').style.display=\'none\';
				$(\'wrapper\').style.display=\'block\';
				var slideshow_detail=new TINY.slideshow_detail("slideshow_detail");
				window.onload=function(){
					slideshow_detail.auto=true;
					slideshow_detail.speed=5;
					slideshow_detail.link="linkhover";
					slideshow_detail.info="information";
					slideshow_detail.thumbs="slider";
					slideshow_detail.left="slideleft";
					slideshow_detail.right="slideright";
					slideshow_detail.scrollSpeed=4;
					slideshow_detail.spacing=25;
					slideshow_detail.active="#fff";
					slideshow_detail.init("slideshow_detail","image","imgprev","imgnext","imglink");
				}
			//-->  
			</script>
			'; ?>

			</div><!-- end content-slider -->
			
			<div class="clear"><br /><br /></div>
			
			<h2 class="underline">Detalhes do imóvel</h2>
			<div id="property-detail">
			<div class="one_half">
				<ul class="box_text">
					<li><span class="left">Referência</span><?php echo $this->_tpl_vars['imovel']->imovel->pagina_caderno; ?>
&nbsp;</li>
					<li><span class="left">Valor</span>R$ <?php echo ((is_array($_tmp=$this->_tpl_vars['imovel']->imovel->valor)) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ",", ".") : number_format($_tmp, 2, ",", ".")); ?>
&nbsp;</li>
					<li><span class="left">Valor IPTU</span>R$ <?php echo ((is_array($_tmp=$this->_tpl_vars['imovel']->imovel->valor_iptu)) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ",", ".") : number_format($_tmp, 2, ",", ".")); ?>
&nbsp;</li>
					<li><span class="left">Condomínio Fechado</span><?php if ($this->_tpl_vars['imovel']->imovel->condominio == 'S'): ?>Sim<?php else: ?>Não<?php endif; ?>&nbsp;</li>
					<li><span class="left">Área do Terreno	</span><?php if (empty ( $this->_tpl_vars['imovel']->imovel->area_terreno )): ?>-<?php else: ?><?php echo $this->_tpl_vars['imovel']->imovel->area_terreno; ?>
<?php endif; ?></li>
					<li><span class="left">Área Construída	</span><?php if (empty ( $this->_tpl_vars['imovel']->imovel->area_construida )): ?>-<?php else: ?><?php echo $this->_tpl_vars['imovel']->imovel->area_construida; ?>
<?php endif; ?></li>
					<li><span class="left">Capacidade		</span><?php if (empty ( $this->_tpl_vars['imovel']->imovel->capacidade_pessoas )): ?>-<?php else: ?><?php echo $this->_tpl_vars['imovel']->imovel->capacidade_pessoas; ?>
<?php endif; ?></li>
					<li><span class="left">Vagas		</span><?php if (empty ( $this->_tpl_vars['imovel']->imovel->vagas_carro )): ?>-<?php else: ?><?php echo $this->_tpl_vars['imovel']->imovel->vagas_carro; ?>
 <?php endif; ?></li>
					<li><span class="left">Quartos			</span><?php if (empty ( $this->_tpl_vars['imovel']->imovelDetalhes['quartos']['valor'] )): ?>-<?php else: ?><?php echo $this->_tpl_vars['imovel']->imovelDetalhes['quartos']['valor']; ?>
<?php endif; ?></li>
					<li><span class="left">Suites			</span><?php if (empty ( $this->_tpl_vars['imovel']->imovelDetalhes['suites']['valor'] )): ?>-<?php else: ?><?php echo $this->_tpl_vars['imovel']->imovelDetalhes['suites']['valor']; ?>
<?php endif; ?></li>

				</ul>	
			</div>
			<div class="one_half last">
				<ul class="box_text">
					<li><span class="left">Hidromassagem	</span><?php if (! empty ( $this->_tpl_vars['imovel']->imovelDetalhes['hidromassagem']['valor'] ) && $this->_tpl_vars['imovel']->imovelDetalhes['hidromassagem']['valor'] == 1): ?>Sim<?php else: ?>Não<?php endif; ?>&nbsp;</li>
					<li><span class="left">Banheiros		</span><?php if (empty ( $this->_tpl_vars['imovel']->imovelDetalhes['banheiros']['valor'] )): ?>-<?php else: ?><?php echo $this->_tpl_vars['imovel']->imovelDetalhes['banheiros']['valor']; ?>
<?php endif; ?></li>				
					<li><span class="left">Ar Condicionado	</span><?php if (! empty ( $this->_tpl_vars['imovel']->imovelDetalhes['ar_condicionado']['valor'] ) && $this->_tpl_vars['imovel']->imovelDetalhes['ar_condicionado']['valor'] == 1): ?>Sim<?php else: ?>Não<?php endif; ?>&nbsp;</li>
					<li><span class="left">Churrasqueira	</span><?php if (! empty ( $this->_tpl_vars['imovel']->imovelDetalhes['churrasqueira']['valor'] ) && $this->_tpl_vars['imovel']->imovelDetalhes['churrasqueira']['valor'] == 1): ?>Sim<?php else: ?>Não<?php endif; ?>&nbsp;</li>
					<li><span class="left">Piscina			</span><?php if (! empty ( $this->_tpl_vars['imovel']->imovelDetalhes['piscina']['valor'] ) && $this->_tpl_vars['imovel']->imovelDetalhes['piscina']['valor'] == 1): ?>Sim<?php else: ?>Não<?php endif; ?>&nbsp;</li>
					<li><span class="left">Piscina Natural	</span><?php if (! empty ( $this->_tpl_vars['imovel']->imovelDetalhes['piscina_natural']['valor'] ) && $this->_tpl_vars['imovel']->imovelDetalhes['piscina_natural']['valor'] == 1): ?>Sim<?php else: ?>Não<?php endif; ?>&nbsp;</li>
					<li><span class="left">Sauna			</span><?php if (! empty ( $this->_tpl_vars['imovel']->imovelDetalhes['sauna']['valor'] ) && $this->_tpl_vars['imovel']->imovelDetalhes['sauna']['valor'] == 1): ?>Sim<?php else: ?>Não<?php endif; ?>&nbsp;</li>
					<li><span class="left">Quadra			</span><?php if (! empty ( $this->_tpl_vars['imovel']->imovelDetalhes['quadra']['valor'] ) && $this->_tpl_vars['imovel']->imovelDetalhes['quadra']['valor'] == 1): ?>Sim<?php else: ?>Não<?php endif; ?>&nbsp;</li>
					<li><span class="left">Rua Asfaltada	</span><?php if (! empty ( $this->_tpl_vars['imovel']->imovelDetalhes['rua_asfaltada']['valor'] ) && $this->_tpl_vars['imovel']->imovelDetalhes['rua_asfaltada']['valor'] == 1): ?>Sim<?php else: ?>Não<?php endif; ?>&nbsp;</li>
				</ul>	
			</div>
				<ul class="box_text">
					<li><span class="left">Informações adicionais</span>	
						<span class="right">
							<?php if (empty ( $this->_tpl_vars['imovel']->imovel->descricao )): ?>Em breve<?php else: ?><?php echo $this->_tpl_vars['imovel']->imovel->descricao; ?>
<?php endif; ?>
						</span>
					</li>
				</ul>	
				</div>
				
			<div class="clear"><br /><br /></div>
			
						
						
			</div><!-- end #content -->
			
			<div class="sidebar_right">
			<div class="sidebar">
				<ul>
					<li class="widget-container widget_search">
							<h2 class="widget-title">Mais informações</h2>
							<form method="post" action="_lib/PHPMailer/mail.php" id="contact" class="imovelContato">
								<div id="contactform">
									<fieldset>
										<input type="hidden" name="id_imovel"  id="id_imovel" value='<?php echo $this->_tpl_vars['imovel']->imovel->id_imovel; ?>
'>
										<input type="hidden" name="ref" id="ref" value="<?php echo $this->_tpl_vars['imovel']->imovel->pagina_caderno; ?>
">
										<label>Nome</label><br />
										<input name="nome" id="name" type="text" size="37"/><br />
										<label>Telefone</label><br />
										<input name="telefone" id="phone" type="text" size="37"/><br />
										<label>Email</label><br />
										<input type="text" name="email" id="email" size="37"/><br />
										<label>Mensagem</label><br />
										<textarea cols="37" rows="3" name="mensagem" id="msg"> </textarea><br />
										  <span class="error" id="name_error">Preencha um nome por favor</span>
										  <span class="error" id="email_error">Preencha um e-mail por favor</span>
										  <span class="error" id="email_error2">Preencha um e-mail válido por favor</span>
										  <span class="error" id="phone_error">Preencha um telefone por favor</span>
										 <input type="submit" name="submit" class="button" id="submit_btn" value="Enviar"/>								
										<!--<input type="button" name="button" id="enviar-contato" class="button" value="Enviar"/>-->
									</fieldset>
								</div>
							</form>
						
					</li>
				
					<li class="widget-container widget_text">
						<h2 class="widget-title">Mais imóveis nesta praia</h2>
						<div class="property-list">
						<?php $_from = $this->_tpl_vars['imoveisInner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['innerImoveis']):
?>
						
						<p>
							<a href="imovel.php?id_imovel=<?php echo $this->_tpl_vars['innerImoveis']->imovel->id_imovel; ?>
">
							<img src="/images/imoveis/<?php echo $this->_tpl_vars['innerImoveis']->imovel->id_imovel; ?>
/<?php echo $this->_tpl_vars['innerImoveis']->imovel->praiaLiteral; ?>
_img_other_<?php echo $this->_tpl_vars['innerImoveis']->imovelFotos['0']->foto; ?>
" alt="" /><br>
							<span class="title"><?php if (! empty ( $this->_tpl_vars['innerImoveis']->imovel->tipo ) && $this->_tpl_vars['innerImoveis']->imovel->tipo == 'C'): ?>Casa<?php else: ?>Terreno<?php endif; ?> em <?php echo $this->_tpl_vars['innerImoveis']->imovel->praia; ?>
</span><br />
							<span class="black">Área construída: <?php if (empty ( $this->_tpl_vars['innerImoveis']->imovel->area_construida )): ?>-<?php else: ?><?php echo $this->_tpl_vars['innerImoveis']->imovel->area_construida; ?>
 m²<?php endif; ?></span><br />
							<small><?php if (empty ( $this->_tpl_vars['innerImoveis']->imovelDetalhes['quartos']['valor'] )): ?>-<?php else: ?><?php echo $this->_tpl_vars['innerImoveis']->imovelDetalhes['quartos']['valor']; ?>
<?php endif; ?> quartos<?php if (! empty ( $this->_tpl_vars['innerImoveis']->imovelDetalhes['churrasqueira']['valor'] ) && $this->_tpl_vars['innerImoveis']->imovelDetalhes['churrasqueira']['valor'] == 1): ?>, churrasqueira<?php endif; ?><?php if (! empty ( $this->_tpl_vars['innerImoveis']->imovelDetalhes['piscina']['valor'] ) && $this->_tpl_vars['innerImoveis']->imovelDetalhes['piscina']['valor'] == 1): ?>, piscina<?php endif; ?><?php if (! empty ( $this->_tpl_vars['innerImoveis']->imovelDetalhes['ar_condicionado']['valor'] ) && $this->_tpl_vars['innerImoveis']->imovelDetalhes['ar_condicionado']['valor'] == 1): ?>, ar condicionado <?php endif; ?></small>
							</a>
						</p>
						
						<?php endforeach; endif; unset($_from); ?>
					  </div>
					</li>
					
					<!--
					<li class="widget-container widget_text">
						<h2 class="widget-title">Real Estate Resources</h2>
						<ul>
							<li><a href="#">Get your 3 Credi Scores before getting a mortgage</a></li>
							<li><a href="#">Get FREE quote from a local contractor</a></li>
							<li><a href="#">Find Rental Insurance In your Area</a></li>
							<li><a href="#">Free Storage Quotes</a></li>
						</ul>
					</li>
					-->
				</ul>
            </div><!-- end #sidebar -->
			</div><!-- end #sidebar_right -->
			
			<div class="clear"></div>
