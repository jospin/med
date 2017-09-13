<div id="content" class="full_85">
			<h2 class="underline">Todos os imoveis</h2>
			<ul class="four_column_properties">
					{foreach item=i from=$imoveis}
					<li><a href="imovel.php?id_imovel={$i->imovel->id_imovel}">
					  <img src="images/imoveis/{$i->imovel->id_imovel}/{$i->imovel->praiaLiteral}_img_featured_{$i->imovelFotos.0->foto}" alt="" />
					  <h6><a href="imovel.php?id_imovel={$i->imovel->id_imovel}">{$i->imovel->praia}</a></h6>
					  <ul class="box_text">
					  	<a style="color:#171717" href="imovel.php?id_imovel={$i->imovel->id_imovel}">
						<li><span class="left">Quartos:</span> {if empty($i->imovelDetalhes.quartos.valor)}-{else}{$i->imovelDetalhes.quartos.valor}{/if}</li>
						<li><span class="left">Suites:</span> {if empty($i->imovelDetalhes.suites.valor)}-{else}{$i->imovelDetalhes.suites.valor}{/if} </li>
						<li><span class="left">Piscina:</span> {if empty($i->imovelDetalhes.piscina.valor)}-{else}{$i->imovelDetalhes.piscina.valor}{/if}</li>
						<li><span class="left">Capacidade:</span> {if empty($f->imovel->capacidade_pessoas)}-{else}{$f->imovel->capacidade_pessoas pessoas}{/if}</li>
						</a>
					  </ul>
					  </a>				
					</li>
					{/foreach}	
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
									{foreach item=filtro from=$imoveisFiltro}
									<li class='li_140'><a href="imoveisTodos.php?id_praia={$filtro->id_praia}">{$filtro->praia} ({$filtro->filtro})</a></li>
									{/foreach}
								</ul>
							</li>
						</ul>
		            </div><!-- end #sidebar -->				
			</div><!-- end #sidebar_right -->				
			<div class="clear"></div>