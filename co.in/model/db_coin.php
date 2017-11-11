<?php
    
    // 連線資料庫
	$link = mysql_connect("localhost", "root", "root") or exit(mysql_error());
	mysql_select_db("coin", $link) or die("db連線失敗");
	mysql_query("set names utf8");


    /** @file db_coin.php
      * @brief 淘汰mysql_connet套件,改用PDO()
      *  
      * @author 作者名稱 (電子郵件或員工編號)
      * @date 更新日期 


       

      * Note template for func
      * 
      * @brief 
      * @func func_out 輸出參數的描述
      * @func func_in  輸入參數的描述
      * @return 傳回值的意義. 

    */
	include("error_text.php");
    debug_console('db connect');

	define('DB_PATH', '127.0.0.1'); //設定資料庫路徑
	define('DB_NAME', 'coin'); //設定資料庫名稱
	define('DB_USER', 'root'); //設定資料庫帳號
	define('DB_PASSWORD', 'root'); //設定資料庫密碼
	///
	//建立PDO連線
	$_link = new PDO('mysql:host='.DB_PATH.';charset=UTF8;dbname='.DB_NAME, DB_USER, DB_PASSWORD);
	//設定編碼
	$_link->query('SET NAMES UTF8')->execute();
      
?>
