<?php
	//require_once (__DIR__ . DIRECTORY_SEPARATOR . '.lib' . DIRECTORY_SEPARATOR . 'usr.php');
	//require_once (__DIR__ . DIRECTORY_SEPARATOR . '.cfg' . DIRECTORY_SEPARATOR . 'db.php');
	//require_once ($_SERVER ['REQUEST_SCHEME'] . '://' . $_SERVER ['HTTP_HOST'] . '/lib/aaa.noware.php/www.usr.php');
	require_once ($_SERVER ['REQUEST_SCHEME'] . '://' . $_SERVER ['HTTP_HOST'] . '/lib/tree.noware.php/www.ntt.php');
	//require_once ($db_src);
	
	session_start ();
	
	$ntt = new noware\ntt ();
	
	if (isset ($_SESSION ['usr']))
		$ntt -> usr = $_SESSION ['usr'];
	
	if (isset ($_GET ['root']))
		$ntt -> root = $_GET ['root'];
	
	if (isset ($_GET ['path']))
		$ntt -> path = $_GET ['path'];
