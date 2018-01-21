<?php
include "Beverage.php";
/**
 * 深度烘培咖啡：照美式分级,咖啡豆的烘焙由浅至深可分为八个阶段
 */
class DarkRoast extends Beverage{
	/**
	 * 饮料价格
	 */
	public $cost = 11;

	function __construct(){
		$this->description = "深度烘培咖啡";
	}

	function cost(){
		return $this->cost();
	}

}