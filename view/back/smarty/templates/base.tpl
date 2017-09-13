<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<script type="text/javascript" src="../_lib/js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="../_lib/js/jquery-ui-1.8.16.custom.min.js"></script>
		
		<script type="text/javascript" src="/view/back/js/{$self}.js"></script>


		<link type="text/css" href="/view/back/css/south-street/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
		<link type="text/css" href="/view/back/css/global.css" rel="stylesheet" />
		
		<link type="text/css" href="/view/back/css/{$self}.css" rel="stylesheet" />
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	    <title>Template</title>
	</head>
	<body>
	   <div id="main">
	       <div id="header">
               {include file="includes/header.tpl"}
	       </div>
		       <div id="{$self}" title="{$self}">
		               {$page}
        	   </div>
           <div id="footer">
               {include file="includes/footer.tpl"}
           </div>
	       
	   </div>
	   <input type="hidden" name="tabSelect" id="tabSelect" value="{$tabSelect}" />
	   <script type="text/javascript" src="/view/back/js/global.js"></script>
	</body>
</html>
