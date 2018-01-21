<?php

$order = intval($_GET['order']);

if(!$order){
	echo "what do you need?";die;
}

$addition = $_GET['add'] ? explode(",", $_GET['add']) : "";

switch ($order) {
	case '1':
		include "DarkRoast.php";
		$drink = new DarkRoast();
		break;
	case '2':
	    include "Decaf.php";
		$drink = new Decaf();
		break;
	case '3':
		include "Espresso.php";
		$drink = new Espresso();
		break;
	case '4':
		include "HouseBlend.php";
		$drink = new HouseBlend();
		break;		
	default:
		# code...
		break;
}


if($addition && is_array($addition)){
	foreach($addition as $val){
		$method = "set".ucfirst($val);
		if(method_exists($drink, $method)){
			$drink->$method();
			$accessories .= " ".$val;
		}else{
			echo "Cannot with ".$val;
		}
	}
}

echo "<br/> Your Order is :";
echo "<br/> Name:";
echo $drink->description;
echo "<br/> Accessories:";
echo $accessories ? $accessories : "no accessories";
echo "<br/> Cost:";
$drink->cost();
echo $drink->pay();