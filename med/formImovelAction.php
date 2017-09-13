<?php

	require_once("../_lib/autoload.php");

	$imoveisDao = new imoveisDao();
	$imoveisBean = new imoveisBean();
	
	$imoveisFotosDao = new imoveisFotosDao();
	$imoveisFotosBean = new imoveisFotosBean();


	$imoveisBean->arrToBean($_REQUEST['mi_imoveis']);
	$imoveisPraiasDao = new praiasDao();
	$praia_nome = $imoveisPraiasDao->getById($imoveisBean->id_praia);
	
	$imoveisBean->data = Util::now();

	if(!empty($imoveisBean->id_imovel)){
		$imoveisDao->updateBind($imoveisBean);
		$id_imovel = $imoveisBean->id_imovel;
	}else{
		$id_imovel = $imoveisDao->insertBind($imoveisBean);
	}
	
	
	$imoveisDetalhesArr['quartos'] = 1;
	$imoveisDetalhesArr['suites'] = 2;
	$imoveisDetalhesArr['sala_estar'] = 3;
	$imoveisDetalhesArr['sala_jantar'] = 4;
	$imoveisDetalhesArr['banheiros'] = 5;
	$imoveisDetalhesArr['ar_condicionado'] = 6;
	$imoveisDetalhesArr['hidromassagem'] = 7;
	$imoveisDetalhesArr['churrasqueira'] = 8;
	$imoveisDetalhesArr['piscina'] = 9;
	$imoveisDetalhesArr['piscina_natural'] = 10;
	$imoveisDetalhesArr['sauna'] = 11;
	$imoveisDetalhesArr['quadra'] = 12;
	$imoveisDetalhesArr['rua_calcada'] = 13;
	$imoveisDetalhesArr['rua_asfaltada'] = 14;
	$imoveisDetalhesArr['pomar'] = 15;
	
	$imoveisDetalhesDao = new imoveisDetalhesDao();
	$imoveisDetalhesBean = new imoveisDetalhesBean();

	foreach($_REQUEST['mi_detalhes'] as $key=>$detalhe){

		if(!empty($detalhe)){
			$imoveisDetalhesBean->id_imovel = $id_imovel;
			$imoveisDetalhesBean->id_detalhe = $imoveisDetalhesArr[$key];
			$imoveisDetalhesBean->complemento = $detalhe;
			$imoveisDetalhesDao->insertBind($imoveisDetalhesBean);
		}
		
	}

	/**
	 * fotos
	 */
    if(!empty($_FILES['mi_fotos']['name'][0])){
    	
	Util::upFotos($_FILES['mi_fotos'],$id_imovel,$praia_nome->praia);

        for($i = 0; $i < count($_FILES['mi_fotos']['name']); $i++){
			$imoveisFotosBean->id_imovel = $id_imovel;
			$imoveisFotosBean->foto = $_FILES['mi_fotos']['name'][$i];
			$imoveisFotosDao->insertBind($imoveisFotosBean);
		}
	}
	

	header("location:formImovel.php?msg=1");
