<?php

      error_reporting(0);
      
	require_once("../_lib/autoload.php");
	
	$praiasDao = new praiasDao();
	$praias = $praiasDao->getAllOrdered(null,null,'praia');

	$smarty = new SmartyClass("back");

      $id_imovel = $_REQUEST['id_imovel'];

      $imovel = null;
      $imovelDetalheArr = null;
      $imovelFotos = null;

      if(!empty($id_imovel)){
        $imoveisDao = new imoveisDao();
        $imoveisDetalhesDao = new imoveisDetalhesDao();
        $imoveisFotosDao = new imoveisFotosDao();
        $imovelFotos = $imoveisFotosDao->getAllByIdImovel($id_imovel);

        $imovel = $imoveisDao->getImovel($id_imovel);

        $praiaLiteralInner = Util::removeAcento($imovel->praia);
        $praiaLiteralInner = strtolower($praiaLiteralInner);
        $praiaLiteralInner = str_replace(" ", "_", $praiaLiteralInner);

        $imovelDetalhes = $imoveisDetalhesDao->getImovelDetalhe($id_imovel);

        $imovelDetalheArr = array();
        
        foreach($imovelDetalhes as $id){
          $imovelDetalheArr[$id->detalhe_vetor]['descricao'] = $id->detalhe;
          $imovelDetalheArr[$id->detalhe_vetor]['valor'] = $id->complemento;
        }

      }

      $smarty->assign("imovel", $imovel);
      $smarty->assign("imovelDetalhes", $imovelDetalheArr);
      $smarty->assign("imovelFotos", $imovelFotos);

      $smarty->assign("praiaLiteral",$praiaLiteralInner);
      $smarty->assign("praias",$praias);
      $smarty->assign('tabSelect',2);
      $smarty->fetcher($_SERVER["PHP_SELF"]);
