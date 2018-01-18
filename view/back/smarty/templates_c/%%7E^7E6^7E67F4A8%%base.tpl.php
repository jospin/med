<?php /* Smarty version 2.6.26, created on 2018-01-17 15:27:22
         compiled from base.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<script type="text/javascript" src="../_lib/js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="../_lib/js/jquery-ui-1.8.16.custom.min.js"></script>
		
		<script type="text/javascript" src="/view/back/js/<?php echo $this->_tpl_vars['self']; ?>
.js"></script>


		<link type="text/css" href="/view/back/css/south-street/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
		<link type="text/css" href="/view/back/css/global.css" rel="stylesheet" />
		
		<link type="text/css" href="/view/back/css/<?php echo $this->_tpl_vars['self']; ?>
.css" rel="stylesheet" />
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	    <title>Template</title>
	</head>
	<body>
	   <div id="main">
	       <div id="header">
               <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	       </div>
		       <div id="<?php echo $this->_tpl_vars['self']; ?>
" title="<?php echo $this->_tpl_vars['self']; ?>
">
		               <?php echo $this->_tpl_vars['page']; ?>

        	   </div>
           <div id="footer">
               <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
           </div>
	       
	   </div>
	   <input type="hidden" name="tabSelect" id="tabSelect" value="<?php echo $this->_tpl_vars['tabSelect']; ?>
" />
	   <script type="text/javascript" src="/view/back/js/global.js"></script>
	</body>
</html>