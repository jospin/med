<?php
	set_time_limit(0);
	require_once("_lib/autoload.php");
	$imoveisDao = new imoveisDao();

	//imoveis a serem migrados
	$imoveis = $imoveisDao->getAll2();

	//Fotos a serem "upadas"
	$imoveisFotosDao = new imoveisFotosDao();
	//Nome da praia
	$praiasDao = new praiasDao();

	foreach($imoveis as $i){
		
		$praia = $praiasDao->getById($i->id_praia);

		$praiaLiteral = UtilMig::removeAcento($praia->praia);
		$praiaLiteral = strtolower($praiaLiteral);
		$praiaLiteral = str_replace(" ", "_", $praiaLiteral);

		$imoveisFotos = $imoveisFotosDao->getAllByIdImovel($i->id_imovel);

		foreach($imoveisFotos as $if){
			UtilMig::upFotos($if->foto, $i->id_imovel, $praiaLiteral);
		}
		
	}
