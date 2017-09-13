<?php

  require_once("_lib/autoload.php");
  
  $imoveisDao = new imoveisDao();
  
  $imoveisTodos = $imoveisDao->getAllCasas();
  foreach($imoveisTodos as $imoveisT){
    $imovel = new imovel($imoveisT->id_imovel);
    $imovelInner = $imovel->get();
    
    $praiaLiteralFeatured = Util::removeAcento($imovelInner->imovel->praia);
    $praiaLiteralFeatured = strtolower($praiaLiteralFeatured);
    $praiaLiteralFeatured = str_replace(" ", "_", $praiaLiteralFeatured);
    $imovelInner->imovel->praiaLiteral = $praiaLiteralFeatured;
    
    $imoveis[] = $imovelInner;
    
  }

  $smarty = new SmartyClass('front');
  $smarty->assign("imoveis",$imoveis);
  $smarty->fetcher($_SERVER['PHP_SELF']);
