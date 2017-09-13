<div id="content" class="full">

				<div class="title_featured">
				<h2>Imoveis em <span class="blue">Destaque</span></h2><a href="imoveisTodos.php" class="featured">Todos os imoveis</a>
				</div>
				
				<ul class="four_column_properties">
					{foreach item=if from=$imoveisFeatured}
					<li><a href="imovel.php?id_imovel={$if->imovel->id_imovel}">
					  <img src="images/imoveis/{$if->imovel->id_imovel}/{$if->imovel->praiaLiteral}_img_featured_{$if->imovelFotos.0->foto}" alt="" />
					  <h6><a href="imovel.php?id_imovel={$if->imovel->id_imovel}">{$if->imovel->praia}</a></h6>
					  <ul class="box_text">
					  	<a style="color:#171717" href="imovel.php?id_imovel={$if->imovel->id_imovel}">
						<li><span class="left">Quartos:</span> {if $if->imovelDetalhes.quartos.valor == ""} - {else} {$if->imovelDetalhes.quartos.valor} {/if}</li>
						<li><span class="left">Suites:</span> {if $if->imovelDetalhes.suites.valor == ""} - {else} {$if->imovelDetalhes.suites.valor} {/if}</li>
						<li><span class="left">Piscina:</span> {if $if->imovelDetalhes.piscina.valor == ""} - {else} {$if->imovelDetalhes.piscina.valor} {/if}</li>
						<li><span class="left">Capacidade:</span> {if $if->imovel->capacidade_pessoas == "" && $if->imovel->capacidade_pessoas  == 0} - {else} {$if->imovel->capacidade_pessoas} pessoas {/if}</li>
						</a>
					  </ul>
					  </a>				
					</li>
					{/foreach}
					<!--
					<li>
					  <img src="images/imoveis//content/pp-img2.jpg" alt="" />
					  <h6><a href="#">8311 Paseo Vista Dr<br />
Las Vegas, NV 89312</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Quartos:</span> 7 bed</li>
						<li><span class="left">Suites:</span> 5 bath</li>
						<li><span class="left">Piscina:</span> 2,700 Sq Ft</li>
						<li><span class="left">Capacidade:</span> 0.19 pessoas</li>
					  </ul>				
					</li>
					<li>
					  <img src="images/imoveis//content/pp-img3.jpg" alt="" />
					  <h6><a href="#">2357 Golden Aster St<br />
Clermont, FL 3475</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds:</span> 7 bed</li>
						<li><span class="left">Baths:</span> 5 bath</li>
						<li><span class="left">House size:</span> 2,700 Sq Ft</li>
						<li><span class="left">Lot size:</span> 0.19 Acres</li>
					  </ul>				
					</li>
					<li class="nomargin">
					  <img src="images/imoveis//content/pp-img4.jpg" alt="" />
					  <h6><a href="#">1427 Stadium Ave<br />
Bronx, NY 10567</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds:</span> 7 bed</li>
						<li><span class="left">Baths:</span> 5 bath</li>
						<li><span class="left">House size:</span> 2,700 Sq Ft</li>
						<li><span class="left">Lot size:</span> 0.19 Acres</li>
					  </ul>		
					</li>-->
				</ul>
				
			</div><!-- end #content -->
			<div class="clear"></div>
			
{literal}
<script type="text/javascript">
 var $jts = jQuery.noConflict();
    $jts(document).ready(function(){ 
		
		//Slider  
         $jts('#slideshow').cycle({
            timeout: 5000,  // milliseconds between slide transitions (0 to disable auto advance)
            fx:      'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...            
            pager:   '#pager',  // selector for element to use as pager container
            pause:   0,	  // true to enable "pause on hover"
            pauseOnPagerHover: 0 // true to pause when hovering over pager link
        });
     });
</script>
{/literal}			