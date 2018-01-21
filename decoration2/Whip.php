<?php

/**
 * 
 */
class Whip extends CondimentDecorate{
	/**
	 * 饮料价格
	 */
	public $cost = 9;
	public $description = "奶泡";

	function __construct(Beverage $beverage){
		$this->beverage = $beverage;
	}

	function getDescription(){
		echo "z";
		return $this->beverage->getDescription()."+".$this->description;
	}

	function cost(){
		return $this->cost+$this->beverage->cost();
	}

}