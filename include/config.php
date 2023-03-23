<?php
// for localhost
defined('server') ? null : define("server", "localhost");
defined('user') ? null : define ("user", "root") ;
defined('pass') ? null : define("pass","");
defined('database_name') ? null : define("database_name", "db_oees") ;
// for website
// defined('server') ? null : define("server", "localhost");
// defined('user') ? null : define ("user", "id19885120_root") ;
// defined('pass') ? null : define("pass","Janobe@sourcecode1");
// defined('database_name') ? null : define("database_name", "id19885120_db_oees") ;

$this_file = str_replace('\\', '/', __File__) ;
$doc_root = $_SERVER['DOCUMENT_ROOT'];

$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('config/config.php' ,'', $this_file);


define ('web_root' , $web_root);
define('server_root' , $server_root);
?>