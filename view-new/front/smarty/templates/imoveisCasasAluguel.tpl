<div class="title_featured">
	<h2 class="feature-title">Casas para locação</h2>
</div>
<div class="row">
	<div class="col-md-9">
		<div class="row">
			{foreach item=i from=$imoveis}
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail-feature">
					<a href="imovel.php?id_imovel={$i->imovel->id_imovel}">
				  		<img class="img-rounded" src="images/imoveis/{$i->imovel->id_imovel}/{$i->imovel->praiaLiteral}_img_inside_{$i->imovelFotos.0->foto}" alt="" width="250"  />
			  		</a>
					<h3>
					  	<a href="imovel.php?id_imovel={$i->imovel->id_imovel}">
					  		{$i->imovel->praia}
				  		</a>
				  	</h3>
					<dl class="dl-horizontal">
						<dt>Referência:</dt>
						<dd>{$i->imovel->pagina_caderno}</dd>
						<dt>Quartos:</dt>
						<dd>{if empty($i->imovelDetalhes.quartos.valor)}-{else}{$i->imovelDetalhes.quartos.valor}{/if}</dd>
						<dt>Suites:</dt>
						<dd>{if empty($i->imovelDetalhes.suites.valor)}-{else}{$i->imovelDetalhes.suites.valor}{/if} </dd>
						<dt>Piscina:</dt>
						<dd>{if empty($i->imovelDetalhes.piscina.valor)}-{else}{$i->imovelDetalhes.piscina.valor}{/if}</dd>
						<dt>Capacidade:</dt>
						<dd>{if empty($i->imovel->capacidade_pessoas)}-{else}{$i->imovel->capacidade_pessoas pessoas}{/if}</dd>
						<dt>Valor mensal:</dt>
						<dd>R$ {if empty($i->imovel->valor) || $i->imovel->valor <=0}-{else}{$i->imovel->valor|number_format:2:",":"."}{/if}</dd>
					</dl>
	  				<a class="btn btn-primary" href="imovel.php?id_imovel={$i->imovel->id_imovel}">
						+ informações
					</a>
				</div>
			</div>
			{/foreach}
		</div>
	</div>
	<div class="col-md-3">
		<h2 class="widget-title">Praias</h2>
		<ul class="list-group">
			{foreach item=filtro from=$imoveisFiltro}
				<li class="list-group-item">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<a href="imoveisCasasAluguel.php?id_praia={$filtro->id_praia}">
						{$filtro->praia} <span class="badge">{$filtro->filtro}</span>
					</a>
				</li>
			{/foreach}
		</ul>
	</div>
</div>