<?php

  require_once("_lib/autoload.php");

  $smarty = new SmartyClass('front');
  $smarty->fetcher($_SERVER['PHP_SELF']);