<?php

class SmartyClass extends Smarty {
    function __construct($path){
		// Construtor da classe.
		// Este e chamado a cada nova instancia.
        $innerPath = substr(realpath(__FILE__),0,strpos(realpath(__FILE__),"_lib"));
		$this->Smarty();

		$this->template_dir = $innerPath.'view-new/'.$path.'/smarty/templates/';
		$this->compile_dir  = $innerPath.'view-new/'.$path.'/smarty/templates_c/';
		$this->config_dir   = $innerPath.'view-new/'.$path.'/smarty/configs/';
		$this->cache_dir    = $innerPath.'view-new/'.$path.'/smarty/cache/';

		$this->caching = false;
    }
	
	function fetcher($pageParam, $templateDefine=NULL){
		$server = explode("/",$pageParam);
		$file = $server[count($server) - 1];
		$self = (!empty($templateDefine) ? $templateDefine : substr($file,0,strpos($file,".")));

		$page = $this->fetch("$self.tpl");
		$this->assign("page",$page);
		$this->assign("self",$self);
		$this->display("base.tpl");	
	}
}

?>
