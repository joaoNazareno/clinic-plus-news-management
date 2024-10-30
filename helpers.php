<?php 


function base_url() {
	
	if( $_SERVER['SERVER_NAME'] == 'micro-2' ) {
	    define('BASE2','http://micro-2:8080/donaqueijeira/');
	} else if($_SERVER['SERVER_NAME'] == 'micro-2') {
	    define('BASE','http://micro-2:8081/donaqueijeira/');
	} else if( $_SERVER['SERVER_NAME'] == '' ) {
	    define('BASE','http://localhost/prima/');
	} else if($_SERVER['SERVER_NAME'] == 'www.demo.redevip.com.br') {
	    define('BASE2','https://www.demo.redevip.com.br/demo/donaqueijeira2/');
	} else if($_SERVER['SERVER_NAME'] == 'www.donaqueijeira.com.br') {
	    define('BASE2','https://shoppingoutlet.com.br/demo/donaqueijeira/');
	} else {
	    define('BASE2','https://shoppingoutlet.com.br/demo/donaqueijeira/');
	}
	

	return BASE;
}

function redirect_www() {
	
	if ($_SERVER['SERVER_NAME']!="micro-2" && $_SERVER['SERVER_NAME']!="localhost")  {
		if (substr($_SERVER['HTTP_HOST'], 0, 4) !== 'www.') {
			$protocol = "https://";
		    header('Location: '.$protocol.'www.'.$_SERVER['HTTP_HOST'].'/'.$_SERVER['REQUEST_URI']);
		    exit;
		}
	}
	

}



?>