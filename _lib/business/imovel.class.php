<?php

	class imovel {
		
		private $id_imovel;
		
		private $fotos;
		private $detalhes;
		
		private $imovelDao;
		private $imovelFotosDao;
		private $imovelDetalhesDao;
		
		public function __construct($id_imovel){
			$this->id_imovel = $id_imovel;

			$this->imovelDao = new imoveisDao();
			$this->imovelFotosDao = new imoveisFotosDao();
			$this->imovelDetalhesDao = new imoveisDetalhesDao();
		}
		
		private function loadImovel(){
			$retorno = $this->imovelDao->getImovel($this->id_imovel);
			return $retorno;
		}
		
		private function loadImovelFotos(){
			return $this->imovelFotosDao->getAllByIdImovel($this->id_imovel);
		}
		
		private function loadImovelDetalhes(){
			$imovelDetalhe = $this->imovelDetalhesDao->getImovelDetalhe($this->id_imovel);
			$imovelDetalheArr = array();
			
			foreach($imovelDetalhe as $id){
				$imovelDetalheArr[$id->detalhe_vetor]['descricao'] = $id->detalhe;
				$imovelDetalheArr[$id->detalhe_vetor]['valor'] = $id->complemento;
			}

			return $imovelDetalheArr;
		}
		
		public function get(){
			$retorno = new stdClass();
			
			$retorno->imovel = $this->loadImovel();
			$retorno->imovelFotos = $this->loadImovelFotos();
			$retorno->imovelDetalhes = $this->loadImovelDetalhes();
			
			return $retorno;
		}

		public function getDetalhes(){
			return $this->loadImovelDetalhes();;
		}		
		
	}
