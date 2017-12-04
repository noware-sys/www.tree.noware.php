<?php
	/*
	echo 'PHP';
	echo PHP_EOL;
	echo $_GET ['q'];
	
	if (isset ($_GET ['action'], $_GET ['target']))
		if (isset ($_GET ['usr'])
			$success = file_get_contents ($_SERVER ['REQUEST_SCHEME'] . '//' . $_SERVER ['HTTP_HOST'] . '/Projects/NoWare/aaa.noware.php/src/authrn/txt/?usr='.$_GET['usr'].';action='.$_GET['action'].';target='.$_GET['target']) != 0;
		else
			$success = file_get_contents ($_SERVER ['REQUEST_SCHEME'] . '//' . $_SERVER ['HTTP_HOST'] . '/Projects/NoWare/aaa.noware.php/src/authrn/txt/?action='.$_GET['action'].';target='.$_GET['target']) != 0;
	else if (isset ($_POST ['action'], $_POST ['target']))
		if (isset ($_POST ['usr'])
			$success = file_get_contents ($_SERVER ['REQUEST_SCHEME'] . '//' . $_SERVER ['HTTP_HOST'] . '/Projects/NoWare/aaa.noware.php/src/authrn/txt/?usr='.$_POST['usr'].';action='.$_POST['action'].';target='.$_POST['target']) != 0;
		else
			$success = file_get_contents ($_SERVER ['REQUEST_SCHEME'] . '//' . $_SERVER ['HTTP_HOST'] . '/Projects/NoWare/aaa.noware.php/src/authrn/txt/?action='.$_POST['action'].';target='.$_POST['target']) != 0;
	
	if ($success)
		include (__DIR__ . DIRECTORY_SEPARATOR . 'true.txt');
	else
		include (__DIR__ . DIRECTORY_SEPARATOR . 'false.txt');
	*/
	
	//require_once ($_SERVER ['REQUEST_SCHEME'] . '://' . $_SERVER ['HTTP_HOST'] . '/lib/tree.noware.php/www.ntt.php');
	//require_once ($_SERVER ['REQUEST_SCHEME'] . '://' . $_SERVER ['HTTP_HOST'] . '/aaa.noware.php/www.usr.init.php');
	require_once (__DIR__ . DIRECTORY_SEPARATOR . 'ntt.init.php');
	
	//var_dump (
	//session_start ()
	//)
	;
	
	//echo '<pre>' . PHP_EOL;
	
	$view = 'list';
	////$path = 0;
	//$ntt = new noware\ntt ();
	//$ntt -> usr = $_SESSION ['usr'];
	
	//var_dump ($_GET);
	//var_dump ($_GET ['path'])
	//var_dump (urldecode ($_GET ['path']));
	//var_dump ($_SESSION ['usr']);
	
	if (isset ($_GET ['view']))
	{
		$view = $_GET ['view'];
		//$view = urldecode ($_GET ['view']);
	}
	
	/*
	if (isset ($_GET ['root']))
	{
		$ntt -> root = $_GET ['root'];
		//$_SESSION ['ntt'] -> root = urldecode ($_GET ['root']);
	}
	if (isset ($_GET ['path']))
	{
		//$path = $_GET ['path'];
		//var_dump ($ntt -> nav ($_GET ['path']));
		$ntt -> path = $_GET ['path'];
		//$_SESSION ['ntt'] -> path = urldecode ($_GET ['path']);
		
		//if ($_SESSION ['ntt'] -> path != $_GET ['path'])
		//	$_SESSION ['ntt'] -> path = noware\ntt::path_dft;
	}
	else
	{
			$ntt -> path = noware\ntt::path_dft;
	}
	*/
	
	//var_dump ($ntt);
	
	//if (isset ($_GET ['path']))
	//	$ntt -> path = $_GET ['path'];
	
	//var_dump ($ntt -> root, $ntt -> path);
	//if ($ntt -> nav ($path))
	//$ntt -> nav ($path);
	//{
		switch ($view)
		{
			//case 'list':
			default:
				include (__DIR__ . DIRECTORY_SEPARATOR . '.lay' . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR . 'list.php');
		}
	//}
	
	//echo '</pre>' . PHP_EOL;
