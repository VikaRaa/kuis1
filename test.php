<?php
include_once(__DIR__. "/lib/buku.php");
include_once(__DIR__. "/lib/DataFormat.php");
header("Access-Control-Allow-Origin:*");
$buku = new buku();
$data = $buku->getAll();

$format = new DataFormat();
error_reporting(E_ALL ^ E_NOTICE);
if ($_GET['view']=='xml')
{	
	header('Content-Type: application/xml; charset=utf-8');
	echo $format->asXML($data, 'buku');
} else if ($_GET['view']=='json'){
	header("Content-Type: application/json");
	echo $format->asJSON($data);
} else {
	echo $format->asHTML($data);
}