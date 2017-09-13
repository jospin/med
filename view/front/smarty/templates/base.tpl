<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link rel="shortcut icon" href="images/imoveis//content/favicon.ico" />
<meta http-equiv="Content-Script-Type" content="text/javascript" /> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="" />
<meta name="title" content="" />
<meta name="description" content="" />
<title>Imoveis no Litoral Norte - Medeiros Imoveis</title>
<link rel="shortcut icon" href="images/imoveis/content/favicon.ico" />
<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="/medeirosimoveis/view/front/css/style.css" rel="stylesheet" type="text/css" />
<link href="/medeirosimoveis/view/front/css/{$self}.css" rel="stylesheet" type="text/css" />
<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<!-- ////////////////////////////////// -->
<!-- ///////// FONT AWESOME /////////// -->
<!-- ////////////////////////////////// -->
<link href="/medeirosimoveis/_lib/js/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/medeirosimoveis/view/front/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/medeirosimoveis/view/front/js/jquery.form.js"></script>  

<script type="text/javascript" src="/medeirosimoveis/view/front/js/cufon-yui.js"></script>
<script type="text/javascript" src="/medeirosimoveis/view/front/js/PT_Sans_400.font.js"></script>
<!--<script type="text/javascript" src="/view/front/js/custom/{$self}.js"></script> -->
<script type="text/javascript" src="/medeirosimoveis/view/front/js/fade.js"></script>
<script type="text/javascript" src="/medeirosimoveis/view/front/js/contact.js"></script>

<script type="text/javascript" src="/medeirosimoveis/view/front/js/jquery.prettyPhoto.js"></script>

{literal}

<script type="text/javascript">
	 Cufon.replace('h1') ('h2') ('h3') ('h4') ('h5') ('h6') ('.slider-button a') ('.slider-price') ('.button') ('#nav li a', {hover: true});
</script>
{/literal}

<script type="text/javascript" src="/medeirosimoveis/view/front/js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="/medeirosimoveis/view/front/js/hoverIntent.js"></script> 
<script type="text/javascript" src="/medeirosimoveis/view/front/js/superfish.js"></script> 
<script type="text/javascript" src="/medeirosimoveis/view/front/js/supersubs.js"></script>


{literal}
<script type="text/javascript"> 
 var $jts = jQuery.noConflict();
    $jts(document).ready(function(){ 
        $jts("ul.sf-menu").supersubs({ 
		minWidth		: 9,		// requires em unit.
		maxWidth		: 25,		// requires em unit.
		extraWidth		: 0			// extra width can ensure lines don't sometimes turn over due to slight browser differences in how they round-off values
                               // due to slight rounding differences and font-family 
        }).superfish();  // call supersubs first, then superfish, so that subs are 
                         // not display:none when measuring. Call before initialising 
                         // containing tabs for same reason. 
                         
		$jts(".pf-type4 a[rel^='prettyPhoto']").prettyPhoto({theme:'facebook'});
                         
    }); 
 
</script>
{/literal}
<script type="text/javascript" src="/medeirosimoveis/view/front/js/jquery.cycle.all.min.js"></script>

<!--[if IE 6]>
<script src="/view/front/js/DD_belatedPNG.js"></script>
{literal}
<script>
  DD_belatedPNG.fix('img');
</script>
{/literal}
<![endif]-->

</head>
<body>

	<div id="top-container">
		<div class="centercolumn">
		<div id="header">
	           {include file="includes/header.tpl"}
	       </div>
		</div><!-- end #centercolumn -->
	</div><!-- end #top-container -->

	<div class="centercolumn">
			<!-- BEGIN SLIDE -->
			<div id="slider_container">
			<div id="slideshow_navigation">
			<div id="pager"></div>
			</div><!-- end slideshow navigation -->
				<div id="slideshow">
				
					{foreach item=ii from=$imoveisSlider}
				
					<div class="cycle">
						<img src="images/imoveis/{$ii->imovel->id_imovel}/{$ii->imovel->praiaLiteral}_img_home_{$ii->imovelFotos.0->foto}" alt="" />
						<div class="farme-slide-text">
							<ul class="slide-text">
								<li><span class="left">Praia:</span>	{$ii->imovel->praia}</li>
								<li><span class="left">Propriedade:</span>	{if $ii->imovel->tipo == "C"} Casa {else} Terreno {/if}</li>
								<li><span class="left">Área construída:</span>	{if empty($ii->imovel->area_construida)} - {else} {$ii->imovel->area_construida} {/if}</li>
								<li><span class="left">Área do terreno:</span>	{if empty($ii->imovel->area_terreno)} - {else} {$ii->imovel->area_terreno} {/if}</li>
								<li><span class="left">Quartos:</span>{if empty($ii->imovelDetalhes.suites.valor)} - {else} {$ii->imovelDetalhes.suites.valor} {/if}</li>
								<li><span class="left">Suites:</span>{if empty($ii->imovelDetalhes.piscina.valor)} - {else} {$ii->imovelDetalhes.suites.valor} {/if}</li>
							</ul>
							<div class="frame-price">
								<div class="slider-button"><a href="imovel.php?id_imovel={$ii->imovel->id_imovel}">Detalhes</a></div>
								<div class="slider-price">{if $ii->imovel->exibir_valor == "S" && $ii->imovel->valor > 0}R$ {$ii->imovel->valor|number_format:2:",":"."}{else}{/if}</div>
							</div>
						</div>
					</div>
					<!-- end cycle -->
					{/foreach}
					
				</div><!-- end #slideshow -->
			</div><!-- end #slide -->
			<!-- END OF SLIDE -->
			
		<div id="maincontent">
			
			{$page}
			
		</div><!-- end #maincontent -->
	</div><!-- end #centercolumn -->
	               
	<div id="bottom-container">
		<div class="centercolumn">
		
			<div id="footer">
               {include file="includes/footer.tpl"}
            </div>
	       
		</div><!-- end #centercolumn -->
	
	</div><!-- end #bottom-container -->
	{literal}
	<script type="text/javascript"> Cufon.now(); </script> <!-- to fix cufon problems in IE browser -->
	{/literal}
	
</body>
</html>
