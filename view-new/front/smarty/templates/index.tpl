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
					<span class="left">Propriedade:</span>	{if $imovel->imovel->tipo == "C"} Casa {else} Terreno {/if}
				</p>
				<p>
					<span class="left">Quartos:</span>{if empty($imovel->imovelDetalhes.suites.valor)} - {else} {$imovel->imovelDetalhes.suites.valor} {/if}
				</p>
				<p>
					<span class="left">Suites:</span>{if empty($imovel->imovelDetalhes.piscina.valor)} - {else} {$imovel->imovelDetalhes.suites.valor} {/if}
				</p>
				<p>
					<a href="imovel.php?id_imovel={$imovel->imovel->id_imovel}" class="btn btn-primary btn-lg" role="button">+ informações</a>
				</p>
			</div>
		</div>	
	</div>
	<!-- end cycle -->
	{/foreach}

	<div class="col-md-2">
	</div>
	<div class="col-md-2 result-feature-right">
	</div>
</div>