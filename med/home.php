<?php
  require_once("../_lib/autoload.php");

  $imoveisDao = new imoveisDao();
  $imoveis = $imoveisDao->getImovelList();

  $smarty = new SmartyClass("back");
  $smarty->assign('tabSelect',0);
  $smarty->assign('imoveis',$imoveis);
  $smarty->fetcher($_SERVER["PHP_SELF"]);
