<h1 class="feature-title">
	{if $imovel->imovel->tipo == 'C'}Casa{else}Terreno{/if} em {$imovel->imovel->praia}
</h1>
<div class="row">
	<div class="col-md-8">
		<div id="carousel-imovel-detail" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
	  	{foreach from=$imovelFotos key=myKey item=slide}
	    	<li data-target="#carousel-imovel-detail" data-slide-to="{$myKey}" class="{if $myKey == 0} active {/if}"></li>
	    {/foreach}
	  	</ol>
	  	<div class="carousel-inner" role="listbox">
			{foreach from=$imovelFotos key=myKey item=slide}
				<div class="item {if $myKey == 0} active {/if}" >
					<img style="width: 100%" src="images/imoveis/{$id_imovel}/{$praiaLiteral}_img_inside_{$slide->foto}" 
					alt="{$myKey}"/>
				</div>
			{/foreach}
		</div>
		<a class="carousel-control left" href="#carousel-imovel-detail" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="carousel-control right" href="#carousel-imovel-detail" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		</a>
			{literal}
			<script type="text/javascript">
			<!-- 
			$(document).ready(function(){
				$("#carousel-imovel-detail").carousel({
					interval : 3000
				});
			});
			//-->  
			</script>
			{/literal}
		</div><!-- end content-slider -->
	</div>
	<div class="col-md-4">
		<h1>Detalhes do imóvel</h1>
	</div>
	<dl class="dl-horizontal col-md-4">
		<dt>Referência</dt>
		<dd>{$imovel->imovel->pagina_caderno}&nbsp;</dd>
		<dt>Valor</dt>
		<dd>R$ {$imovel->imovel->valor|number_format:2:",":"."}&nbsp;</dd>
		<dt>Valor condomínio</dt>
		<dd>R$ {$imovel->imovel->valor_condominio|number_format:2:",":"."}&nbsp;</dd>
		<dt>Valor IPTU</dt>
		<dd>R$ {$imovel->imovel->valor_iptu|number_format:2:",":"."}&nbsp;</dd>
		<dt>Condomínio Fechado</dt>
		<dd>{if $imovel->imovel->condominio == "S"}Sim{else}Não{/if}&nbsp;</dd>
		<dt>Área do Terreno</dt>
		<dd>
			{if empty($imovel->imovel->area_terreno)}-{else}{$imovel->imovel->area_terreno}{/if}
		</dd>
		<dt>Área Construída</dt>
		<dd>
			{if empty($imovel->imovel->area_construida)}-{else}{$imovel->imovel->area_construida}{/if}
		</dd>
		<dt>Capacidade</dt>
		<dd>
			{if empty($imovel->imovel->capacidade_pessoas)}-{else}{$imovel->imovel->capacidade_pessoas pessoas}{/if}
		</dd>
		<dt>Vagas</dt>
		<dd>{if empty($imovel->imovel->vagas_carro)}-{else}{$imovel->imovel->vagas_carro} {/if}</dd>
		<dt>Quartos</dt>
		<dd>{if empty($imovel->imovelDetalhes.quartos.valor)}-{else}{$imovel->imovelDetalhes.quartos.valor}{/if}</dd>
		<dt>Suites</dt>
		<dd>{if empty($imovel->imovelDetalhes.suites.valor)}-{else}{$imovel->imovelDetalhes.suites.valor}{/if}</dd>
	</dl>
	<dl class="dl-horizontal col-md-4">
		<dt>Hidromassagem</dt>
		<dd>{if !empty($imovel->imovelDetalhes.hidromassagem.valor) && $imovel->imovelDetalhes.hidromassagem.valor == 1}Sim{else}Não{/if}&nbsp;</dd>
		<dt>Banheiros</dt>
		<dd>{if empty($imovel->imovelDetalhes.banheiros.valor)}-{else}{$imovel->imovelDetalhes.banheiros.valor}{/if}</dd>
		<dt>Ar Condicionado</dt>
		<dd>{if !empty($imovel->imovelDetalhes.ar_condicionado.valor) && $imovel->imovelDetalhes.ar_condicionado.valor == 1}Sim{else}Não{/if}&nbsp;</dd>
		<dt>Churrasqueira</dt>
		<dd>{if !empty($imovel->imovelDetalhes.churrasqueira.valor ) && $imovel->imovelDetalhes.churrasqueira.valor == 1}Sim{else}Não{/if}&nbsp;</dd>
		<dt>Piscina</dt>
		<dd>{if !empty($imovel->imovelDetalhes.piscina.valor) && $imovel->imovelDetalhes.piscina.valor == 1}Sim{else}Não{/if}&nbsp;</dd>
		<dt>Piscina Natural</dt>
		<dd>{if !empty($imovel->imovelDetalhes.piscina_natural.valor) && $imovel->imovelDetalhes.piscina_natural.valor == 1}Sim{else}Não{/if}&nbsp;</dd>
		<dt>Sauna</dt>
		<dd>{if !empty($imovel->imovelDetalhes.sauna.valor) && $imovel->imovelDetalhes.sauna.valor == 1}Sim{else}Não{/if}&nbsp;</dd>
		<dt>Quadra</dt>
		<dd>{if !empty($imovel->imovelDetalhes.quadra.valor) && $imovel->imovelDetalhes.quadra.valor == 1}Sim{else}Não{/if}&nbsp;</dd>
		<dt>Rua Asfaltada</dt>
		<dd>{if !empty($imovel->imovelDetalhes.rua_asfaltada.valor) && $imovel->imovelDetalhes.rua_asfaltada.valor == 1}Sim{else}Não{/if}&nbsp;</dd>
	</dl>
	<div class="col-md-6">
		<h2>Mais informações do imóvel</h2>
		<p class="alert alert-danger error" id="name_error">Por favor, prencha seu nome!</p>
		<p class="alert alert-danger error" id="email_error">Por favor, preencha um email válido!</p>
		<p class="alert alert-danger error" id="fone_error">Por favor, preehcha seu telefone!</p>
		<p class="alert alert-danger error" id="msg_error">Por favor, entre com a mensagem!</p>		
		<form method="post" action="_lib/PHPMailer/mail.php" id="contact" class="form-horizontal">
		<input type="hidden" name="id_imovel"  id="id_imovel" value='{$imovel->imovel->id_imovel}'>
			<div class="form-group">
				<input type="hidden" name="ref" id="ref" value="{$imovel->imovel->pagina_caderno}">
				<label class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-10">
					<input class="form-control" placeholder="Nome" name="name" id="name" type="text" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Telefone</label>
				<div class="col-sm-10">
					<input class="form-control" placeholder="Telefone" name="fone" id="phone" type="text" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input class="form-control" placeholder="Email" type="text" name="email" id="email"/>
				</div>
			</div>	
			<div class="form-group">
				<label class="col-sm-2 control-label">Mensagem</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="msg" id="msg"> </textarea><br />
			  	</div>
		  	</div>
		  	<div class="form-group">
			  	<div class="col-sm-2">
			  	</div>
			  	<div class="col-sm-10">
		 			<input type="submit" name="submit" class="btn btn-primary" id="submit_btn" value="Enviar"/>
				</div>
			</div>
		</form>			
	</div>
	<div class="col-md-6">
		<h2>Informações adicionais</h2>	
			<blockquote class="right">
				{if empty($imovel->imovel->descricao)}Em breve{else}{$imovel->imovel->descricao}{/if}
			</blockquote		>
	</div>
	<div class="col-md-12 featured">
			<h2 class="widget-title">Mais imóveis nesta praia</h2>
			{foreach item=innerImoveis from=$imoveisInner}
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<a href="imovel.php?id_imovel={$innerImoveis->imovel->id_imovel}">
					<img src="images/imoveis/{$innerImoveis->imovel->id_imovel}/{$innerImoveis->imovel->praiaLiteral}_img_other_{$innerImoveis->imovelFotos.0->foto}" alt="" />
					</a>
				</div>
				<h3>
					{if !empty($innerImoveis->imovel->tipo) && $innerImoveis->imovel->tipo == 'C'}Casa{else}Terreno{/if} em {$innerImoveis->imovel->praia}
				</h3>
				<dl class="dl-horizontal">
					<dt>Área construída</dt>
					<dd>{if empty($innerImoveis->imovel->area_construida)}-{else}{$innerImoveis->imovel->area_construida} m²{/if}</dd>
					<small>Quartos
					{if empty($innerImoveis->imovelDetalhes.quartos.valor)}-{else}{$innerImoveis->imovelDetalhes.quartos.valor}{/if} quartos{if !empty($innerImoveis->imovelDetalhes.churrasqueira.valor) && $innerImoveis->imovelDetalhes.churrasqueira.valor == 1}, churrasqueira{/if}{if !empty($innerImoveis->imovelDetalhes.piscina.valor) && $innerImoveis->imovelDetalhes.piscina.valor == 1}, piscina{/if}{if !empty($innerImoveis->imovelDetalhes.ar_condicionado.valor) && $innerImoveis->imovelDetalhes.ar_condicionado.valor == 1}, ar condicionado {/if}</small>
				</dl>
				<p>
					<a href="imovel.php?id_imovel={$innerImoveis->imovel->id_imovel}" class="btn btn-primary" role="button">+ informações</a>
				</p>
			</div>
			{/foreach}
	</div>
</div>