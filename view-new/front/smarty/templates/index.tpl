<h1 class="feature-title">Imóveis em destaque</h1>
<div class="row">
	{foreach item=imovel from=$imoveisSlider}
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail thumbnail-feature">
			<h3>
				{if $imovel->imovel->exibir_valor == "S" && $imovel->imovel->valor > 0}
					Imóvel {$imovel->imovel->categoria} valor: 
					<span class="medimoveis-value">
						R$ {$imovel->imovel->valor|number_format:2:",":"."}
					</span>
				{else}
					 Imóvel {$imovel->imovel->categoria} em {$imovel->imovel->praia}
				{/if}
			</h3>
			<img src="images/imoveis/{$imovel->imovel->id_imovel}/{$imovel->imovel->praiaLiteral}_img_home_{$imovel->imovelFotos.0->foto}" alt="" />
			<dl class="dl-horizontal">
				<dt>Propriedade:</dt>
				<dd>{if $imovel->imovel->tipo == "C"} Casa {else} Terreno {/if}</dd>
				<dt>Quartos:</dt>
				<dd>{if empty($imovel->imovelDetalhes.suites.valor)} - {else} {$imovel->imovelDetalhes.suites.valor} {/if}
				</dd>
				<dt>Suites:</dt>
				<dd>{if empty($imovel->imovelDetalhes.piscina.valor)} - {else} {$imovel->imovelDetalhes.suites.valor} {/if}
				</dd>
				<dt>Capacidade:</dt>
				<dd>{if $if->imovel->capacidade_pessoas == "" && $if->imovel->capacidade_pessoas  == 0} - {else} {$if->imovel->capacidade_pessoas} pessoas {/if}
				</dd>
				<p><a href="imovel.php?id_imovel={$imovel->imovel->id_imovel}" class="btn btn-primary btn-lg" role="button">+ informações</a></p>
			</dl>
		</div>
	</div>
	<!-- end cycle -->
	{/foreach}
</div>
