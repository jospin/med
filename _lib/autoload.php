<?php
#	error_reporting('E_ALL');
	$baseDir = dirname(__FILE__);
	$searchPaths = explode(PATH_SEPARATOR, get_include_path());
	$searchPaths[] = $baseDir;
	$searchPaths[] = "$baseDir/smarty/";
	$searchPaths[] = "$baseDir/business/";

	$includePath = implode(PATH_SEPARATOR, $searchPaths);
	set_include_path($includePath);
	
	session_start();
	
	function __autoload($class_name) {
	    require_once $class_name . '.class.php';
	}
