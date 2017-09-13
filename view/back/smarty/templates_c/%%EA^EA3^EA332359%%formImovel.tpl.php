<?php /* Smarty version 2.6.26, created on 2017-07-02 20:37:43
         compiled from formImovel.tpl */ ?>
<form method="post" name="formImovel" action="formImovelAction.php" enctype="multipart/form-data">
<input type="hidden" name="mi_imoveis[id_imovel]" value="<?php echo $this->_tpl_vars['imovel']->id_imovel; ?>
" />
	<fieldset>
		<legend>Incluir Novo Imóvel</legend>
		<ol>
		<li><label>Praia:</label>
		<select name="mi_imoveis[id_praia]">
			<?php $_from = $this->_tpl_vars['praias']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['praia']):
?>
				<option value="<?php echo $this->_tpl_vars['praia']->id_praia; ?>
" <?php if ($this->_tpl_vars['imovel']->id_praia == $this->_tpl_vars['praia']->id_praia): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['praia']->praia; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select><br />
		<li><label>Página do caderno</label><input type="text" name="mi_imoveis[pagina_caderno]" value="<?php echo $this->_tpl_vars['imovel']->pagina_caderno; ?>
" /></li>
		<li><label>Tipo</label>Casa 
		<?php if ($this->_tpl_vars['imovel']->tipo == 'C'): ?>
			<input type="radio" name="mi_imoveis[tipo]" value='C' checked /> 
		<?php else: ?>
			<input type="radio" name="mi_imoveis[tipo]" value='C' /> 
		<?php endif; ?>
		Terreno 
		<?php if ($this->_tpl_vars['imovel']->tipo == 'T'): ?>
			<input type="radio" name="mi_imoveis[tipo]" value='T' checked /> 
		<?php else: ?>
			<input type="radio" name="mi_imoveis[tipo]" value='T' /> 
		<?php endif; ?>

		</li>
		<li><label>Endereço</label><input type="text" name="mi_imoveis[endereco]" value="<?php echo $this->_tpl_vars['imovel']->endereco; ?>
" /></li>
		<li><label>Proprietário</label><input type="text" name="mi_imoveis[proprietario]" value="<?php echo $this->_tpl_vars['imovel']->proprietario; ?>
" /></li>
		<li><label>Telefone</label><input type="text" name="mi_imoveis[ddd]" value="<?php echo $this->_tpl_vars['imovel']->ddd; ?>
" /> - <input type="text" name="mi_imoveis[telefone]" value="<?php echo $this->_tpl_vars['imovel']->telefone; ?>
" /></li>
		<li><label>Capacidade de pessoas</label><input type="text" name="mi_imoveis[capacidade_pessoas]" value="<?php echo $this->_tpl_vars['imovel']->capacidade_pessoas; ?>
" /></li>
		<li><label>Vagas para carro</label><input type="text" name="mi_imoveis[vagas_carro]" value="<?php echo $this->_tpl_vars['imovel']->vagas_carro; ?>
" /></li>
		<li><label>Area Terreno</label><input type="text" name="mi_imoveis[area_terreno]" value="<?php echo $this->_tpl_vars['imovel']->area_terreno; ?>
" /></li>
		<li><label>Area Construída</label><input type="text" name="mi_imoveis[area_construida]" value="<?php echo $this->_tpl_vars['imovel']->area_construida; ?>
" /></li>
		<li><label>Valor</label><input type="text" name="mi_imoveis[valor]" value="<?php echo $this->_tpl_vars['imovel']->valor; ?>
" /></li>
		<li><label>Exibir valor</label>
		Sim <input type="radio" name="mi_imoveis[exibir_valor]" value="S" <?php if ($this->_tpl_vars['imovel']->exibir_valor == 'S'): ?>checked<?php endif; ?>> 
		Não <input type="radio" name="mi_imoveis[exibir_valor]" value="N" <?php if ($this->_tpl_vars['imovel']->exibir_valor == 'N'): ?>checked<?php endif; ?>/>
		</li>
		<li><label>Valor condomínio</label><input type="text" name="mi_imoveis[valor_condominio]" value="<?php echo $this->_tpl_vars['imovel']->valor_condominio; ?>
" /></li>
		<li><label>Informações adicionais</label><textarea name="mi_imoveis[descricao]" rows="8" cols="45"><?php echo $this->_tpl_vars['imovel']->descricao; ?>
</textarea></li>
		<li><label>Categoria</label>
		<input type="radio" name="mi_imoveis[categoria]" value="V" <?php if ($this->_tpl_vars['imovel']->categoria == 'V'): ?>checked<?php endif; ?> />Venda 
		<input type="radio" name="mi_imoveis[categoria]" value="A" <?php if ($this->_tpl_vars['imovel']->categoria == 'A'): ?>checked<?php endif; ?> />Aluguel</li> 
		<input type="radio" name="mi_imoveis[categoria]" value="T" <?php if ($this->_tpl_vars['imovel']->categoria == 'T'): ?>checked<?php endif; ?> />Temporada</li> 
		<li><li><label>Condomínio</label>
		<input type="radio" name="mi_imoveis[condominio]" value="S" <?php if ($this->_tpl_vars['imovel']->condominio == 'S'): ?>checked<?php endif; ?> />Sim 
		<input type="radio" name="mi_imoveis[condominio]" value="N" <?php if ($this->_tpl_vars['imovel']->condominio == 'N'): ?>checked<?php endif; ?> />Não</li>
		<li><label>Publicar</label>
		<input type="radio" name="mi_imoveis[publicar]" value="S" <?php if ($this->_tpl_vars['imovel']->publicar == 'S'): ?>checked<?php endif; ?> />Sim 
		<input type="radio" name="mi_imoveis[publicar]" value="N" <?php if ($this->_tpl_vars['imovel']->publicar == 'N'): ?>checked<?php endif; ?> />Não</li>
		<li><label>Destaque</label>
		<input type="radio" name="mi_imoveis[destaque]" value="S" <?php if ($this->_tpl_vars['imovel']->destaque == 'S'): ?>checked<?php endif; ?> />Sim 
		<input type="radio" name="mi_imoveis[destaque]" value="N" <?php if ($this->_tpl_vars['imovel']->destaque == 'N'): ?>checked<?php endif; ?> />Não</li>
		<li><label>Exibir na home</label>
		<input type="radio" name="mi_imoveis[exibir_home]" value="S" <?php if ($this->_tpl_vars['imovel']->exibir_home == 'S'): ?>checked<?php endif; ?> />Sim 
		<input type="radio" name="mi_imoveis[exibir_home]" value="N" <?php if ($this->_tpl_vars['imovel']->exibir_home == 'N'): ?>checked<?php endif; ?> />Não</li>
		</ol>
	</fieldset>
	<fieldset>
		<legend>Detalhes</legend>
		<ol>
			<li><label>Quartos</label><input type="text" name="mi_detalhes[quartos]" value="<?php echo $this->_tpl_vars['imovelDetalhes']['quartos']['valor']; ?>
"></li>
			<li><label>Suites</label><input type="text" name="mi_detalhes[suites]" value="<?php echo $this->_tpl_vars['imovelDetalhes']['suites']['valor']; ?>
"></li>
			<li><label>Sala de estar</label><input type="text" name="mi_detalhes[sala_de_estar]" value="<?php echo $this->_tpl_vars['imovelDetalhes']['sala_estar']['valor']; ?>
"></li>
			<li><label>Sala de jantar</label><input type="text" name="mi_detalhes[sala_de_jantar]" value="<?php echo $this->_tpl_vars['imovelDetalhes']['sala_jantar']['valor']; ?>
"></li>
			<li><label>Banheiros</label><input type="text" name="mi_detalhes[banheiros]" value="<?php echo $this->_tpl_vars['imovelDetalhes']['banheiros']['valor']; ?>
"></li>
			<li><label>Ar condicionado</label><input type="checkbox" name="mi_detalhes[ar_condicionado]" value="1" <?php if ($this->_tpl_vars['imovelDetalhes']['ar_condicionado']['valor'] == 1): ?>checked<?php endif; ?>></li>
			<li><label>Hidromassagem</label><input type="checkbox" name="mi_detalhes[hidromassagem]" value="1" <?php if ($this->_tpl_vars['imovelDetalhes']['hidromassagem']['valor'] == 1): ?>checked<?php endif; ?>></li>
			<li><label>Churrasqueira</label><input type="checkbox" name="mi_detalhes[churrasqueira]" value="1" <?php if ($this->_tpl_vars['imovelDetalhes']['churrasqueira']['valor'] == 1): ?>checked<?php endif; ?>></li>
			<li><label>Piscina</label><input type="checkbox" name="mi_detalhes[piscina]" value="1" <?php if ($this->_tpl_vars['imovelDetalhes']['piscina']['valor'] == 1): ?>checked<?php endif; ?>></li>
			<li><label>Piscina natural</label><input type="checkbox" name="mi_detalhes[piscina_natural]" value="1" <?php if ($this->_tpl_vars['imovelDetalhes']['piscina_natural']['valor'] == 1): ?>checked<?php endif; ?>></li>
			<li><label>Sauna</label><input type="checkbox" name="mi_detalhes[sauna]" value="1" <?php if ($this->_tpl_vars['imovelDetalhes']['sauna']['valor'] == 1): ?>checked<?php endif; ?>></li>
			<li><label>Quadra</label><input type="checkbox" name="mi_detalhes[quadra]" value="1" <?php if ($this->_tpl_vars['imovelDetalhes']['quadra']['valor'] == 1): ?>checked<?php endif; ?>></li>
			<li><label>Rua calçada</label><input type="checkbox" name="mi_detalhes[rua_calcada]" value="1" <?php if ($this->_tpl_vars['imovelDetalhes']['rua_calcada']['valor'] == 1): ?>checked<?php endif; ?>></li>
			<li><label>Rua asfaltada</label><input type="checkbox" name="mi_detalhes[rua_asfaltada]" value="1" <?php if ($this->_tpl_vars['imovelDetalhes']['rua_asfaltada']['valor'] == 1): ?>checked<?php endif; ?>></li>
			<li><label>Pomar</label><input type="checkbox" name="mi_detalhes[pomar]" value="1" <?php if ($this->_tpl_vars['imovelDetalhes']['pomar']['valor'] == 1): ?>checked<?php endif; ?>></li>	
		</ol>
	</fieldset>
	<fieldset id="fotos">
		<legend>Fotos</legend>
		<table>

				<tr>
			<?php $_from = $this->_tpl_vars['imovelFotos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fotos']):
?>
					<td><img src="../images/imoveis/<?php echo $this->_tpl_vars['fotos']->id_imovel; ?>
/<?php echo $this->_tpl_vars['praiaLiteral']; ?>
_img_thumb_<?php echo $this->_tpl_vars['fotos']->foto; ?>
" /> <br> <a href="#" id="<?php echo $this->_tpl_vars['fotos']->id_foto; ?>
" class="removePhoto">apagar </a></td>
			<?php endforeach; endif; unset($_from); ?>
				</tr>

		</table>
			
		<ol>
			<li><button type="button" id="addFieldFoto">[+]</button> Incluir mais campos</li>
			<li  class="fieldFoto"><span>Foto: </span><input type="file" name="mi_fotos[]" /></li>
		</ol>
	</fieldset>
	<fieldset id="salvar">
		<legend>Salvar</legend>
		<ol>
			<li><button>Salvar</button></li>
		</ol>
	</fieldset>
</form>