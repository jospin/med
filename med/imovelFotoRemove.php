<?php

  require_once("../_lib/autoload.php");

  $imoveisFotosDao = new imoveisFotosDao();
  $foto_id = $_REQUEST['id'];
  $imoveisFotosDao->deleteById($foto_id);
