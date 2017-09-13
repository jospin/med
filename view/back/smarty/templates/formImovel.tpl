<form method="post" name="formImovel" action="formImovelAction.php" enctype="multipart/form-data">
<input type="hidden" name="mi_imoveis[id_imovel]" value="{$imovel->id_imovel}" />
	<fieldset>
		<legend>Incluir Novo Imóvel</legend>
		<ol>
		<li><label>Praia:</label>
		<select name="mi_imoveis[id_praia]">
			{foreach item=praia from=$praias}
				<option value="{$praia->id_praia}" {if $imovel->id_praia == $praia->id_praia}selected{/if}>{$praia->praia}</option>
			{/foreach}
		</select><br />
		<li><label>Página do caderno</label><input type="text" name="mi_imoveis[pagina_caderno]" value="{$imovel->pagina_caderno}" /></li>
		<li><label>Tipo</label>Casa 
		{if $imovel->tipo == 'C'}
			<input type="radio" name="mi_imoveis[tipo]" value='C' checked /> 
		{else}
			<input type="radio" name="mi_imoveis[tipo]" value='C' /> 
		{/if}
		Terreno 
		{if $imovel->tipo == 'T'}
			<input type="radio" name="mi_imoveis[tipo]" value='T' checked /> 
		{else}
			<input type="radio" name="mi_imoveis[tipo]" value='T' /> 
		{/if}

		</li>
		<li><label>Endereço</label><input type="text" name="mi_imoveis[endereco]" value="{$imovel->endereco}" /></li>
		<li><label>Proprietário</label><input type="text" name="mi_imoveis[proprietario]" value="{$imovel->proprietario}" /></li>
		<li><label>Telefone</label><input type="text" name="mi_imoveis[ddd]" value="{$imovel->ddd}" /> - <input type="text" name="mi_imoveis[telefone]" value="{$imovel->telefone}" /></li>
		<li><label>Capacidade de pessoas</label><input type="text" name="mi_imoveis[capacidade_pessoas]" value="{$imovel->capacidade_pessoas}" /></li>
		<li><label>Vagas para carro</label><input type="text" name="mi_imoveis[vagas_carro]" value="{$imovel->vagas_carro}" /></li>
		<li><label>Area Terreno</label><input type="text" name="mi_imoveis[area_terreno]" value="{$imovel->area_terreno}" /></li>
		<li><label>Area Construída</label><input type="text" name="mi_imoveis[area_construida]" value="{$imovel->area_construida}" /></li>
		<li><label>Valor</label><input type="text" name="mi_imoveis[valor]" value="{$imovel->valor}" /></li>
		<li><label>Exibir valor</label>
		Sim <input type="radio" name="mi_imoveis[exibir_valor]" value="S" {if $imovel->exibir_valor == "S"}checked{/if}> 
		Não <input type="radio" name="mi_imoveis[exibir_valor]" value="N" {if $imovel->exibir_valor == "N"}checked{/if}/>
		</li>
		<li><label>Valor condomínio</label><input type="text" name="mi_imoveis[valor_condominio]" value="{$imovel->valor_condominio}" /></li>
		<li><label>Informações adicionais</label><textarea name="mi_imoveis[descricao]" rows="8" cols="45">{$imovel->descricao}</textarea></li>
		<li><label>Categoria</label>
		<input type="radio" name="mi_imoveis[categoria]" value="V" {if $imovel->categoria == "V"}checked{/if} />Venda 
		<input type="radio" name="mi_imoveis[categoria]" value="A" {if $imovel->categoria == "A"}checked{/if} />Aluguel</li> 
		<input type="radio" name="mi_imoveis[categoria]" value="T" {if $imovel->categoria == "T"}checked{/if} />Temporada</li> 
		<li><li><label>Condomínio</label>
		<input type="radio" name="mi_imoveis[condominio]" value="S" {if $imovel->condominio == "S"}checked{/if} />Sim 
		<input type="radio" name="mi_imoveis[condominio]" value="N" {if $imovel->condominio == "N"}checked{/if} />Não</li>
		<li><label>Publicar</label>
		<input type="radio" name="mi_imoveis[publicar]" value="S" {if $imovel->publicar == "S"}checked{/if} />Sim 
		<input type="radio" name="mi_imoveis[publicar]" value="N" {if $imovel->publicar == "N"}checked{/if} />Não</li>
		<li><label>Destaque</label>
		<input type="radio" name="mi_imoveis[destaque]" value="S" {if $imovel->destaque == "S"}checked{/if} />Sim 
		<input type="radio" name="mi_imoveis[destaque]" value="N" {if $imovel->destaque == "N"}checked{/if} />Não</li>
		<li><label>Exibir na home</label>
		<input type="radio" name="mi_imoveis[exibir_home]" value="S" {if $imovel->exibir_home == "S"}checked{/if} />Sim 
		<input type="radio" name="mi_imoveis[exibir_home]" value="N" {if $imovel->exibir_home == "N"}checked{/if} />Não</li>
		</ol>
	</fieldset>
	<fieldset>
		<legend>Detalhes</legend>
		<ol>
			<li><label>Quartos</label><input type="text" name="mi_detalhes[quartos]" value="{$imovelDetalhes.quartos.valor}"></li>
			<li><label>Suites</label><input type="text" name="mi_detalhes[suites]" value="{$imovelDetalhes.suites.valor}"></li>
			<li><label>Sala de estar</label><input type="text" name="mi_detalhes[sala_de_estar]" value="{$imovelDetalhes.sala_estar.valor}"></li>
			<li><label>Sala de jantar</label><input type="text" name="mi_detalhes[sala_de_jantar]" value="{$imovelDetalhes.sala_jantar.valor}"></li>
			<li><label>Banheiros</label><input type="text" name="mi_detalhes[banheiros]" value="{$imovelDetalhes.banheiros.valor}"></li>
			<li><label>Ar condicionado</label><input type="checkbox" name="mi_detalhes[ar_condicionado]" value="1" {if $imovelDetalhes.ar_condicionado.valor == 1}checked{/if}></li>
			<li><label>Hidromassagem</label><input type="checkbox" name="mi_detalhes[hidromassagem]" value="1" {if $imovelDetalhes.hidromassagem.valor == 1}checked{/if}></li>
			<li><label>Churrasqueira</label><input type="checkbox" name="mi_detalhes[churrasqueira]" value="1" {if $imovelDetalhes.churrasqueira.valor == 1}checked{/if}></li>
			<li><label>Piscina</label><input type="checkbox" name="mi_detalhes[piscina]" value="1" {if $imovelDetalhes.piscina.valor == 1}checked{/if}></li>
			<li><label>Piscina natural</label><input type="checkbox" name="mi_detalhes[piscina_natural]" value="1" {if $imovelDetalhes.piscina_natural.valor == 1}checked{/if}></li>
			<li><label>Sauna</label><input type="checkbox" name="mi_detalhes[sauna]" value="1" {if $imovelDetalhes.sauna.valor == 1}checked{/if}></li>
			<li><label>Quadra</label><input type="checkbox" name="mi_detalhes[quadra]" value="1" {if $imovelDetalhes.quadra.valor == 1}checked{/if}></li>
			<li><label>Rua calçada</label><input type="checkbox" name="mi_detalhes[rua_calcada]" value="1" {if $imovelDetalhes.rua_calcada.valor == 1}checked{/if}></li>
			<li><label>Rua asfaltada</label><input type="checkbox" name="mi_detalhes[rua_asfaltada]" value="1" {if $imovelDetalhes.rua_asfaltada.valor == 1}checked{/if}></li>
			<li><label>Pomar</label><input type="checkbox" name="mi_detalhes[pomar]" value="1" {if $imovelDetalhes.pomar.valor == 1}checked{/if}></li>	
		</ol>
	</fieldset>
	<fieldset id="fotos">
		<legend>Fotos</legend>
		<table>

				<tr>
			{foreach from=$imovelFotos item=fotos}
					<td><img src="../images/imoveis/{$fotos->id_imovel}/{$praiaLiteral}_img_thumb_{$fotos->foto}" /> <br> <a href="#" id="{$fotos->id_foto}" class="removePhoto">apagar </a></td>
			{/foreach}
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