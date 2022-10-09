<?php 
	session_start();
	 if ( !isset( $_SESSION['global_token']) ) {
        $_SESSION['global_token'] = md5( uniqid( mt_rand(), true ) );
    }
    // CONFIGURACIÓN DEL DOMINIO 
  $route = "http://localhost/ProgramacionAvanzadaWeb/";
    
  if (!defined('BASE_PATH')) define('BASE_PATH',$route);
?>