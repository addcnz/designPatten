<?php

/**
 * 
 */
class MediumCup extends CondimentDecorate{
	/**
	 * 饮料价格
	 */
	public $cost = 9;
	public $description = "中杯";

	function __construct(Beverage $beverage){
		$this->beverage = $beverage;
	}

	function getDescription(){
		return $this->beverage->getDescription()."+".$this->description;
	}

	function cost(){
		return $this->cost+$this->beverage->cost();
	}

}