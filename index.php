<?php
	require_once("_lib/autoload.php");
	
	$imoveisDao = new imoveisDao();
	$imoveisDestaque = $imoveisDao->getHomeDestaque();
	foreach($imoveisDestaque as $imoveisD){
		$imovel = new imovel($imoveisD->id_imovel);
		$imovelSliderInner = $imovel->get();

		$praiaLiteralSlider = Util::removeAcento($imovelSliderInner->imovel->praia);
		$praiaLiteralSlider = strtolower($praiaLiteralSlider);
		$praiaLiteralSlider = str_replace(" ", "_", $praiaLiteralSlider);
		
		switch ($imovelSliderInner->imovel->categoria) {
			case 'V':
				$imovelSliderInner->imovel->categoria = "à venda";
				break;
			case 'T':
				$imovelSliderInner->imovel->categoria = "para temporada";
				break;
			case 'A':
				$imovelSliderInner->imovel->categoria = "de aluguel";
				break;
			default:
				$imovelSliderInner->imovel->categoria = "";
				break;
		}

		$imovelSliderInner->imovel->praiaLiteral = $praiaLiteralSlider;
		$imoveisSlider[] = $imovelSliderInner;
	}

	$smarty = new SmartyClass('front');
	$smarty->assign("imoveisSlider", $imoveisSlider);

	$smarty->fetcher($_SERVER['PHP_SELF']);
