<?php

  require_once("../_lib/autoload.php");

  $imoveisDao = new imoveisDao();

  $imoveisDao->deleteById($_REQUEST['id_imovel']);

  header("location:home.php");