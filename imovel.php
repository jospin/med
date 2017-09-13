<?php

	require_once("_lib/autoload.php");
	
	$imoveisDao = new imoveisDao();
	
	$imovel = new imovel($_REQUEST['id_imovel']);
	$output = $imovel->get();
//	$outputDetalhes = $imovel->getDetalhes();
	$imoveisInner = $imoveisDao->getInnerImoveisPraia($output->imovel->id_praia);

	foreach($imoveisInner as $ii){
		$imovelInnerObj = new imovel($ii->id_imovel);
		$imovelInner = $imovelInnerObj->get();
		
		$praiaLiteralInner = Util::removeAcento($imovelInner->imovel->praia);
		$praiaLiteralInner = strtolower($praiaLiteralInner);
		$praiaLiteralInner = str_replace(" ", "_", $praiaLiteralInner);
		$imovelInner->imovel->praiaLiteral = $praiaLiteralInner;
		
		$imoveisInnerArr[] = $imovelInner; 
	}
	
	$praiaLiteral = Util::removeAcento($output->imovel->praia);
	$praiaLiteral = strtolower($praiaLiteral);
	$praiaLiteral = str_replace(" ", "_", $praiaLiteral);


	$smarty = new SmartyClass('front');
	$smarty->assign("imovel",$output);
	$smarty->assign("imoveisInner",$imoveisInnerArr);
	$smarty->assign("imovelFotos",$output->imovelFotos);
	$smarty->assign("praiaLiteral",$praiaLiteral);
	$smarty->assign("id_imovel",$_REQUEST['id_imovel']);
	$smarty->fetcher($_SERVER['PHP_SELF']);
