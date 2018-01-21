<?php
/**
 * 脱咖啡因咖啡，无咖啡因咖啡;
 */
class Decaf extends Beverage{
	/**
	 * 饮料价格
	 */
	public $cost = 10;

	function __construct(){
		$this->description = "脱咖啡因咖啡";
	}

	function cost(){
		return $this->cost;
	}
}