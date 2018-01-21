<?php
include "Beverage.php";
/**
 * 蒸馏咖啡（让蒸汽或开水通过磨碎的咖啡豆制成的浓咖啡）
 */
class Espresso extends Beverage{
	/**
	 * 饮料价格
	 */
	public $cost = 13;

	function __construct(){
		$this->description = "蒸馏咖啡";
	}
	
}