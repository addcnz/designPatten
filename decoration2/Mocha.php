<?php
include "CondimentDecorate.php";
/**
 * 
 */
class Mocha extends CondimentDecorate{
	/**
	 * 饮料价格
	 */
	public $cost = 5.6;
	public $description = "摩卡";

	function __construct(Beverage $beverage){
		$this->beverage = $beverage;
	}

	function getDescription(){
		return $this->$beverage->getDescription()." ".$this->description;
	}

	function cost(){
		return $this->cost+$this->beverage->cost();
	}

}