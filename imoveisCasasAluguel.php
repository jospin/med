<?php

  require_once("_lib/autoload.php");
  
  $imoveisDao = new imoveisDao();

  $id_praia = (!empty($_REQUEST['id_praia']) ? $_REQUEST['id_praia'] : null);

  $imoveisTodos = $imoveisDao->getAllCasasAluguel($id_praia);
  foreach($imoveisTodos as $imoveisT){
    $imovel = new imovel($imoveisT->id_imovel);
    $imovelInner = $imovel->get();
    
    $praiaLiteralFeatured = Util::removeAcento($imovelInner->imovel->praia);
    $praiaLiteralFeatured = strtolower($praiaLiteralFeatured);
    $praiaLiteralFeatured = str_replace(" ", "_", $praiaLiteralFeatured);
    $imovelInner->imovel->praiaLiteral = $praiaLiteralFeatured;
    
    $imoveis[] = $imovelInner;
    
  }
  $imoveisFiltro = $imoveisDao->getAllCasasAluguelFiltro();

  $smarty = new SmartyClass('front');
  $smarty->assign("imoveis",$imoveis);
  $smarty->assign("imoveisFiltro",$imoveisFiltro);
  $smarty->fetcher($_SERVER['PHP_SELF']);
