<?php
require_once("AutoRestHandler.php");
		
$view = "";
if(isset($_GET["view"]))
	$view = $_GET["view"];

switch($view){

	case "all":
		//  /auto/list/
		$AutoRestHandler = new AutoRestHandler();
		$AutoRestHandler->sviAutomobili();
		break;
		
	case "single":
		// /auto/list/<id>/
		$AutoRestHandler = new AutoRestHandler();
		$AutoRestHandler->jedanAuto($_GET["id"]);
		break;
		
	case "delete":
		// /auto/delete/<id>/
		$AutoRestHandler = new AutoRestHandler();
		$AutoRestHandler->izbrisiAuto($_GET["id"]);
		break;
	case "" :
		//404 - not found;
		break;
}
?>
