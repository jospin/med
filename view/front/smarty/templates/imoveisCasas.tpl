<div id="content" class="full">
			<h2 class="underline">Casas</h2>
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
					<!--
					<li>
					  <img src="images/imoveis/content/pp-img1.jpg" alt="" />
					  <h6><a href="property-details.html">4545 Sabadell St<br />
					  Las Vegas, NV 89212</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds: </span>7 bed</li>
						<li><span class="left">Baths: </span>5 bath</li>
						<li><span class="left">House size: </span>2,700 Sq Ft</li>
						<li><span class="left">Lot size: </span>0.19 Acres</li>
					  </ul>				
					</li>
					<li>
					  <img src="images/imoveis/content/pp-img2.jpg" alt="" />
					  <h6><a href="property-details.html">8311 Paseo Vista Dr<br />
Las Vegas, NV 89312</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds: </span>4 bed</li>
						<li><span class="left">Baths: </span>5 bath</li>
						<li><span class="left">House size: </span>3,390 Sq Ft</li>
						<li><span class="left">Lot size: </span>0.21 Acres</li>
					  </ul>				
					</li>
					<li>
					  <img src="images/imoveis/content/pp-img3.jpg" alt="" />
					  <h6><a href="property-details.html">2357 Golden Aster St<br />
Clermont, FL 3475</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds: </span>5 bed</li>
						<li><span class="left">Baths: </span>3 bath</li>
						<li><span class="left">House size: </span>3,532 Sq Ft</li>
						<li><span class="left">Lot size: </span>0.40 Acres</li>
					  </ul>				
					</li>
					<li class="nomargin">
					  <img src="images/imoveis/content/pp-img4.jpg" alt="" />
					  <h6><a href="property-details.html">1427 Stadium Ave<br />
Bronx, NY 10567</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds: </span>4 bed</li>
						<li><span class="left">Baths: </span>3 bath</li>
						<li><span class="left">House size: </span>3,200 Sq Ft</li>
						<li><span class="left">Lot size: </span>0.50 Acres</li>
					  </ul>		
					</li>
					
					<li>
					  <img src="images/imoveis/content/pp-img5.jpg" alt="" />
					  <h6><a href="property-details.html">4545 Sabadell St<br />
					  Las Vegas, NV 89212</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds: </span>7 bed</li>
						<li><span class="left">Baths: </span>5 bath</li>
						<li><span class="left">House size: </span>2,700 Sq Ft</li>
						<li><span class="left">Lot size: </span>0.19 Acres</li>
					  </ul>				
					</li>
					<li>
					  <img src="images/imoveis/content/pp-img6.jpg" alt="" />
					  <h6><a href="property-details.html">8311 Paseo Vista Dr<br />
Las Vegas, NV 89312</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds: </span>4 bed</li>
						<li><span class="left">Baths: </span>5 bath</li>
						<li><span class="left">House size: </span>3,390 Sq Ft</li>
						<li><span class="left">Lot size: </span>0.21 Acres</li>
					  </ul>				
					</li>
					<li>
					  <img src="images/imoveis/content/pp-img7.jpg" alt="" />
					  <h6><a href="property-details.html">2357 Golden Aster St<br />
Clermont, FL 3475</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds: </span>5 bed</li>
						<li><span class="left">Baths: </span>3 bath</li>
						<li><span class="left">House size: </span>3,532 Sq Ft</li>
						<li><span class="left">Lot size: </span>0.40 Acres</li>
					  </ul>				
					</li>
					<li class="nomargin">
					  <img src="images/imoveis/content/pp-img8.jpg" alt="" />
					  <h6><a href="property-details.html">1427 Stadium Ave<br />
Bronx, NY 10567</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds: </span>4 bed</li>
						<li><span class="left">Baths: </span>3 bath</li>
						<li><span class="left">House size: </span>3,200 Sq Ft</li>
						<li><span class="left">Lot size: </span>0.50 Acres</li>
					  </ul>		
					</li>
					<li>
					  <img src="images/imoveis/content/pp-img1.jpg" alt="" />
					  <h6><a href="property-details.html">4545 Sabadell St<br />
					  Las Vegas, NV 89212</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds: </span>7 bed</li>
						<li><span class="left">Baths: </span>5 bath</li>
						<li><span class="left">House size: </span>2,700 Sq Ft</li>
						<li><span class="left">Lot size: </span>0.19 Acres</li>
					  </ul>				
					</li>
					<li>
					  <img src="images/imoveis/content/pp-img2.jpg" alt="" />
					  <h6><a href="property-details.html">8311 Paseo Vista Dr<br />
Las Vegas, NV 89312</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds: </span>4 bed</li>
						<li><span class="left">Baths: </span>5 bath</li>
						<li><span class="left">House size: </span>3,390 Sq Ft</li>
						<li><span class="left">Lot size: </span>0.21 Acres</li>
					  </ul>				
					</li>
					<li>
					  <img src="images/imoveis/content/pp-img3.jpg" alt="" />
					  <h6><a href="property-details.html">2357 Golden Aster St<br />
Clermont, FL 3475</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds: </span>5 bed</li>
						<li><span class="left">Baths: </span>3 bath</li>
						<li><span class="left">House size: </span>3,532 Sq Ft</li>
						<li><span class="left">Lot size: </span>0.40 Acres</li>
					  </ul>				
					</li>
					<li class="nomargin">
					  <img src="images/imoveis/content/pp-img4.jpg" alt="" />
					  <h6><a href="property-details.html">1427 Stadium Ave<br />
Bronx, NY 10567</a></h6>
					  <ul class="box_text">
					  	<li><span class="left">Beds: </span>4 bed</li>
						<li><span class="left">Baths: </span>3 bath</li>
						<li><span class="left">House size: </span>3,200 Sq Ft</li>
						<li><span class="left">Lot size: </span>0.50 Acres</li>
					  </ul>		
					</li>	-->				
				</ul><!-- end .pf-type4 -->
					<div class="clear"></div>
					<div id="pagenavi">
						<a href="#" class="current">1</a>&nbsp;|&nbsp;<a href="#">2</a>&nbsp;|&nbsp;<a href="#">Next &gt;</a>					
					</div><!-- #pagenavi -->
				</div><!-- end #content -->
			<div class="clear"></div>