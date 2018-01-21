<?php
include "Beverage.php";
/**
 * 星巴克首选咖啡,一种饮料
 */
class HouseBlend extends Beverage{
	/**
	 * 饮料价格
	 */
	public $cost = 10;


	function __construct(){
		$this->description = "星巴克首选咖啡";
	}
}