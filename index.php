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

		$imovelSliderInner->imovel->praiaLiteral = $praiaLiteralSlider;
		$imoveisSlider[] = $imovelSliderInner;
	}
	
	
	$imoveisFeatured = $imoveisDao->getHomeFeatured();
	foreach($imoveisFeatured as $imoveisF){
		$imovel = new imovel($imoveisF->id_imovel);

		$imovelInner = $imovel->get();
		
		$praiaLiteralFeatured = Util::removeAcento($imovelInner->imovel->praia);
		$praiaLiteralFeatured = strtolower($praiaLiteralFeatured);
		$praiaLiteralFeatured = str_replace(" ", "_", $praiaLiteralFeatured);
		$imovelInner->imovel->praiaLiteral = $praiaLiteralFeatured;
		
		$imoveisHomeFeatured[] = $imovelInner; 

	}

	$smarty = new SmartyClass('front');
$smarty->assign("imoveisSlider",$imoveisSlider);
	$smarty->assign("imoveisFeatured",$imoveisHomeFeatured);
	$smarty->fetcher($_SERVER['PHP_SELF']);
