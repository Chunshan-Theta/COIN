<?php
    /* it was removed in PHP 7.0.0. Instead, the MySQLi or PDO extension should be used.
    // 連線資料庫  
	$link = mysql_connect("localhost", "root", "root") or exit(mysql_error());
	mysql_select_db("coin", $link) or die("db連線失敗");
	mysql_query("set names utf8");
    
    */
    $link="removed";

/**
@file Name
    * @brief     connect to MySql with PDO
    * @author    gavin (106524018)
    * @date      2017/11/13 
	
	
	* import lib
        * @lib name      : error_text.php
        * @brief         : Print a debug text or waring text in console windows
        * @using         : debug_console('error text');

    * func
        * @func name     : CatchData
        * @brief         : Catch data from Mysql
        * @func func_in  : sql command (string)
        * @funcreturn    : responds of sql command (Array)

    * main var
        * @var name      : $_link
        * @type          : PDO
        * @brief         : connect to MySql with PDO
        * @Defined by    : none


*/
//
include("error_text.php");
//debug_console('db connect');

define('DB_PATH', '127.0.0.1'); //設定資料庫路徑
define('DB_NAME', 'coin'); //設定資料庫名稱
define('DB_USER', 'root'); //設定資料庫帳號
define('DB_PASSWORD', 'root'); //設定資料庫密碼
///
//建立PDO連線
$_link = new PDO('mysql:host='.DB_PATH.';charset=UTF8;dbname='.DB_NAME, DB_USER, DB_PASSWORD);
//設定編碼
$_link->query('SET NAMES UTF8')->execute();


function CatchData( $sql ){    
    global $_link;
    $query = $_link->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    return $result;

}





/*

extented for php's old version


*/
function mysql_query($sql, $link){
// mysql_query() removed in PHP 7.0.0. Instead, replaced with PDO.
    return CatchData($sql);

}
function mysql_real_escape_string($text){
// mysql_real_escape_string() removed in PHP 7   
    return quotemeta($text);

}
function mysql_num_rows($array){
// mysql_num_rows() removed in PHP 7   
    return count($array);

}
function mysql_fetch_array($array){
// mysql_fetch_array() removed in PHP 7  
    return $array[0];
}
function mysql_error(){
// mysql_error() removed in PHP 7  
    return ' mysql_error';
}

?>
